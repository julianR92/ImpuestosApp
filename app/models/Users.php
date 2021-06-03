<?php

namespace App\Models;

use App\Models\UserSessions;
use Core\Validators\RequiredValidator;
use Core\Validators\MatchesValidator;
use Core\Validators\UniqueValidator;
use Core\{Model, Session, Cookie, DB, H};

class Users extends Model
{
   protected static $_table = 'usuarios';
   public static $currentLoggedInUser = null;
   public $id, $usuario, $password, $documento, $nombre, $programa, $confirm, $acl;

   const blackList = ['id', 'usuario', 'documento', 'password'];

   public function validator()
   {
      $camposRequeridos = [
         'usuario' => 'Nombre de usuario',
         'Password' => 'Contraseña',
         'documento' => "Documento"
      ];

      foreach ($camposRequeridos as $campo => $msn) {
         $this->runValidation(new RequiredValidator($this, ['field' => $campo, 'msg' => $msn . " es requerido."]));
      }

      $this->runValidation(new UniqueValidator($this, ['field' => 'usuario', 'msg' => 'Este usuario ya se encuentra registrado.']));
      $this->runValidation(new UniqueValidator($this, ['field' => 'documento', 'msg' => 'Este docuento ya se encuentra registrado.']));

      if ($this->isNew()) {
         $this->runValidation(new MatchesValidator($this, ['field' => 'password', 'rule' => $this->confirm, 'msg' => "Las contraseñas no coinciden."]));
      }
   }

   public function beforeSave()
   {
      //if($this->isNew()){
      if ($this->password != "") {
         $this->password = password_hash($this->password, PASSWORD_DEFAULT);
         $this->confirm = password_hash($this->confirm, PASSWORD_DEFAULT);
      }
      //}
   }

   public static function findByUsername($UserName)
   {
      return self::findFirst(['conditions' => "usuario = ? ", 'bind' => [$UserName]]);
   }

   public static function currentUser()
   {
      if (!isset(self::$currentLoggedInUser) && Session::exists(CURRENT_USER_SESSION_NAME)) {
         self::$currentLoggedInUser = self::findFirst(
            [
               'conditions' => ['usuario = ?'],
               'bind' => [Session::get(CURRENT_USER_SESSION_NAME)]
            ]
         );
      }
      return self::$currentLoggedInUser;
   }

   public static function obtenerDatos($UserName)
   {
      $usuario = Users::findById($UserName);
      return $usuario;
   }

   public function login($rememberMe = false)
   {
      Session::set(CURRENT_USER_SESSION_NAME, $this->usuario);
      // if ($rememberMe) {
      //    $hash = md5(uniqid() + rand(0, 100));
      //    $user_agent = Session::uagent_no_version();
      //    Cookie::set(REMEMBER_ME_COOKIE_NAME, $hash, REMEMBER_ME_COOKIE_EXPIRY);
      //    $fields = ['session' => $hash, 'user_agent' => $user_agent, 'UserName' => $this->UserName];
      //    self::$_db->query("DELETE FROM user_sessions WHERE user_id = ? AND user_agent = ?", [$this->id, $user_agent]);
      //    $us = new UserSessions();

      //    $us->assign($fields);

      //    $us->save();

      // }

   }

   public function logout()
   {
      Session::delete(CURRENT_USER_SESSION_NAME);
      if (Cookie::exists(REMEMBER_ME_COOKIE_NAME)) {
         Cookie::delete(REMEMBER_ME_COOKIE_NAME);
      }
      self::$currentLoggedInUser = null;
      return true;
   }

   public function acls()
   {
      if (empty($this->acl)) return [];
      return json_decode($this->acl, true);
   }

   public static function addAcl($user_id, $acl)
   {
      $user = self::findById($user_id);
      if (!$user) return false;
      $acls = $user->acls();
      if (!in_array($acl, $acls)) {
         $acls[] = $acl;
         $user->acl = json_encode($acls);
         $user->save();
      }
      return true;
   }

   public static function removeAcl($user_id, $acl)
   {
      $user = self::findById($user_id);
      if (!$user) return false;
      $acls = $user->acls();
      if (in_array($acl, $acls)) {
         $key = array_search($acl, $acls);
         unset($acls[$key]);
         $user->acl = json_encode($acls);
         $user->save();
      }
      return true;
   }

   public static function validarUsuario($usuario)
   {
      $sql = "SELECT id,documento,nombre,programa,usuario 
      FROM usuarios AS usu
      WHERE usuario='{$usuario}'";
      $db = DB::getInstance();

      if ($db->query($sql)->count() > 0) {

         return $db->query($sql, [], 'App\Models\Users')->results()[0];
      } else

         return false;
   }
}
