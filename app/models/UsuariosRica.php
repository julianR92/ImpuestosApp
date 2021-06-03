<?php

namespace App\Models;

use App\Models\UserSessions;
use Core\Validators\RequiredValidator;
use Core\Model;
use Core\Session;
use Core\Cookie;
use Core\DB;
use Core\H;


class UsuariosRica extends Model
{
   protected static $_table = 'USUARIOSRICA';
   public static $currentLoggedInUser = null;
   public $UsuRicId, $UsuRicNumDoc, $UsuRicNombre, $UsuRicUser, $UsuRicPassword, $UsuRicEstado, $acl;

   const blackList = ['UsuRicId', 'UsuRicNumDoc', 'UsuRicUser', 'UsuRicPassword'];

   public function validator()
   {
      $camposRequeridos = [
         'UsuRicNumDoc' => 'Documento',
         'UsuRicUser' => 'Usuario',
         'UsuRicPassword' => "Contraseña"
      ];

      foreach ($camposRequeridos as $campo => $msn) {
         $this->runValidation(new RequiredValidator($this, ['field' => $campo, 'msg' => $msn . " es requerido."]));
      }

      // $this->runValidation(new UniqueValidator($this, ['field' => 'usuario', 'msg' => 'Este usuario ya se encuentra registrado.']));
      // $this->runValidation(new UniqueValidator($this, ['field' => 'documento', 'msg' => 'Este docuento ya se encuentra registrado.']));

      // if ($this->isNew()) {
      //    $this->runValidation(new MatchesValidator($this, ['field' => 'password', 'rule' => $this->confirm, 'msg' => "Las contraseñas no coinciden."]));
      // }
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

   public static function findByUsername($Usuario)
   {
      return self::findFirst(['conditions' => "UsuRicUser = ? ", 'bind' => [$Usuario]]);
   }

   public static function currentUser()
   {
      if (!isset(self::$currentLoggedInUser) && Session::exists(CURRENT_USER_SESSION_NAME)) {
         self::$currentLoggedInUser = self::findFirst(
            [
               'conditions' => ['UsuRicUser = ?'],
               'bind' => [Session::get(CURRENT_USER_SESSION_NAME)]
            ]
         );
      }
      return self::$currentLoggedInUser;
   }

   public static function obtenerDatos($Usuario)
   {
      $usuario = UsuariosRica::findById($Usuario);
      return $usuario;
   }

   public function login()
   {
      Session::set(CURRENT_USER_SESSION_NAME, $this->UsuRicUser);
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

   public static function validarUsuario($usuario)
   {
      $sql = "SELECT id,documento,nombre,programa,usuario 
      FROM usuarios AS usu
      WHERE usuario='{$usuario}'";
      $db = DB::getInstance();

      if ($db->query($sql)->count() > 0) {

         return $db->query($sql, [], 'App\Models\UsuariosRica')->results()[0];
      } else

         return false;
   }
}
