<?php
namespace App\Models;

use Core\Model;
use Core\Validators\RequiredValidator;

class Login extends Model
{
   public $usuario, $password;
   protected static $_table = 'tmp_fake';

   public function validator()
   {
      $this->runValidation(new RequiredValidator($this, ['field' => 'usuario', 'msg' => 'Usuario es requerido.']));
      $this->runValidation(new RequiredValidator($this, ['field' => 'password', 'msg' => 'Contraseña es requerido.']));
   }
}
