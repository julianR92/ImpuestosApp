<?php
namespace App\Models;
use Core\Model;
use Core\H;
use App\Models\Users;
use App\Models\UserSessions;
use Core\Cookie;
use Core\Session;
use Core\Validators\MinValidator;
use Core\Validators\MaxValidator;
use Core\Validators\RequiredValidator;
use Core\Validators\EmailValidator;
use Core\Validators\MatchesValidator;
use Core\Validators\UniqueValidator;

class Users extends Model {
  protected static $_table='usuarios', $_softDelete = true;
  public static $currentLoggedInUser = null;
  public $id,$user,$correo,$password,$documento,$nombres,$apellidos,$acl,$estado = 0,$confirm,$entidad_id;
  const blackListedFormKeys = ['id'];

 
  public function validator(){
    $camposRequeridos=[
        'user'=>"Nombre de usuario",
        'password'=>"Contraseña",
        'confirm'=>"Confirmar contraseña",
        'documento'=>"Número de documento",
        'nombres'=>"Nombres",
        'apellidos'=>"Apellidos",
        'correo'=>"Correo",
        'entidad_id'=>"Entidad"
    ];
    foreach($camposRequeridos as $campo => $msn){
      $this->runValidation(new RequiredValidator($this,['field'=>$campo,'msg'=>$msn." es requerido."]));
    }
    $this->runValidation(new EmailValidator($this, ['field'=>'correo','msg'=>'El correo electrónico es invalido.']));
    $this->runValidation(new UniqueValidator($this,['field'=>'user','msg'=>'El nombre de usuario ya se encuentra registrado.']));
    $this->runValidation(new UniqueValidator($this,['field'=>'documento','msg'=>'Este documeto ya se encuentra registrado.']));
    if($this->isNew()){
        $this->runValidation(new MatchesValidator($this,['field'=>'password','rule'=>$this->confirm,'msg'=>"Las contraseñas no coinciden."]));
    }
  }

  public function beforeSave(){
    $this->getDate();
    $this->getTime();
    
    if($this->isNew()){
      $this->estado=true;
      $this->acl='["OPERADOR"]';
      $this->rol='OPERADOR';
      $this->confirma_correo=1;
      $this->password = password_hash($this->password, PASSWORD_DEFAULT);
    }
  }

  public static function findByUsername($username) {
    return self::findFirst(['conditions'=> "user = ?", 'bind'=>[$username]]);
  }

  public static function currentUser() {
    if(!isset(self::$currentLoggedInUser) && Session::exists(CURRENT_USER_SESSION_NAME)) {
      self::$currentLoggedInUser = self::findFirst(
      [
        'columns'=>'usuarios.id,documento,nombres,apellidos,USER AS username,correo,acl,programa_id,programa,usuarios.entidad_id,entidad,rol ',
        'joins'=>
        [
          'joins'=>
          ['usuarios_programa','usuarios.id=usuarios_programa.usuario_id','usuarios_programa','LEFT'],
          ['programa','usuarios_programa.programa_id=programa.id','programa','LEFT'],
          ['entidad','usuarios.entidad_id=entidad.id','entidad','LEFT'],
        ],
        'conditions'=>['usuarios.id = ?'],
        'bind'=>[(int)Session::get(CURRENT_USER_SESSION_NAME)]
      ]);
    }
    return self::$currentLoggedInUser;
  }

  public function login($rememberMe=false) {
    Session::set(CURRENT_USER_SESSION_NAME, $this->id);
    if($rememberMe) {
      $hash = md5(uniqid() + rand(0, 100));
      $user_agent = Session::uagent_no_version();
      Cookie::set(REMEMBER_ME_COOKIE_NAME, $hash, REMEMBER_ME_COOKIE_EXPIRY);
      $fields = ['session'=>$hash, 'user_agent'=>$user_agent, 'user_id'=>$this->id];
      self::$_db->query("DELETE FROM user_sessions WHERE user_id = ? AND user_agent = ?", [$this->id, $user_agent]);
      $us = new UserSessions();
      $us->assign($fields);
      $us->save();
      // self::$_db->insert('user_sessions', $fields);
    }
  }

  public static function loginUserFromCookie() {
    $userSession = UserSessions::getFromCookie();
    if($userSession && $userSession->user_id != '') {
      $user = self::findById((int)$userSession->user_id);
      if($user) {
        $user->login();
      }
      return $user;
    }
    return;
  }

  public function logout() {
    $userSession = UserSessions::getFromCookie();
    if($userSession) $userSession->delete();
    Session::delete(CURRENT_USER_SESSION_NAME);
    if(Cookie::exists(REMEMBER_ME_COOKIE_NAME)) {
      Cookie::delete(REMEMBER_ME_COOKIE_NAME);
    }
    self::$currentLoggedInUser = null;
    return true;
  }

  public function acls() {
    
    if(empty($this->acl)) return [];
    return json_decode($this->acl, true);
  }

  public static function addAcl($user_id,$acl){
    $user = self::findById($user_id);
    if(!$user) return false;
    $acls = $user->acls();
    if(!in_array($acl,$acls)){
      $acls[] = $acl;
      $user->acl = json_encode($acls);
      $user->save();
    }
    return true;
  }

  public static function removeAcl($user_id, $acl){
    $user = self::findById($user_id);
    if(!$user) return false;
    $acls = $user->acls();
    if(in_array($acl,$acls)){
      $key = array_search($acl,$acls);
      unset($acls[$key]);
      $user->acl = json_encode($acls);
      $user->save();
    }
    return true;
  }

  public static function cargarUsuarios($filtro){
    $users = self::getdb();
    $users=$users->query(
      "SELECT id,documento,nombres,apellidos,user,correo,acl,programa_id,programa,entidad_id,entidad,estado,fecha_reg,hora_reg FROM usuarios_view WHERE estado = 1 and acl<>'[\"ADMIN\"]' ".$filtro." ORDER BY nombres,apellidos;"
    );
    return $users->results();
  }
}
