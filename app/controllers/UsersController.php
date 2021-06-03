<?php

namespace App\Controllers;

use Core\Controller;
use Core\Router;
use App\Models\Users;
use App\Models\Login;
use Core\H;
use Core\Session;

class UsersController extends Controller
{

   public function onConstruct()
   {
      $this->view->setLayout('index');
   }

   public function loginAction()
   {
      $loginModel = new Login();
      if ($this->request->isPost()) {
         $loginModel->assign($this->request->get());
         $loginModel->validator();

         if ($loginModel->validationPassed()) {
            $user = Users::findByUsername($this->request->get('usuario'));
            if ($user && password_verify($this->request->get('password'), $user->password)) {
               $remember = $loginModel->getRememberMeChecked();
               $user->login($remember);
               $resp = ['success' => true];
               $this->jsonResponse($resp);
            } else {
               $resp = ['success' => false, 'mensaje' => 'Usuario o contraseña incorrectos.'];
               $this->jsonResponse($resp);
            }
         }
      } else {
         $this->view->datos = $loginModel;
         $this->view->displayErrors = $loginModel->getErrorMessages();
         $this->view->setLayout('index');
         $this->view->render('users/login');
      }
   }

   public function logoutAction()
   {
      if (Users::currentUser()) {
         Users::currentUser()->logout();
      }
      Router::redirect('users/login');
   }

   public function indexAction()
   {
      $datos = Users::find(['order' => 'fecha_reg desc']);
      $this->view->datos = $datos;
      $this->view->setLayout('index_admin');
      $this->view->render('users/index');
   }

   public function registroAction()
   {
      $usuario = new Users();

      if ($this->request->isPost()) {
         $usuario = new Users();
         $usuario->assign($this->request->get(), Users::blackList);
         $usuario->rol_id = 2;
         $usuario->acl = '["CLIENTE"]';
         $usuario->estado = 1;
         $usuario->fecha_reg = date('Y-m-d H:m:s');
         $usuario->confirm = $this->request->get('confirm');

         $usuario->validator();

         if ($usuario->validationPassed()) {
            if ($usuario->save()) {
               $resp = ['success' => true];
            } else {
               $error = $usuario->getErrorMessages();
               $resp = ['success' => false, 'error' => $error];
            }
         } else {
            $error = $usuario->getErrorMessages();
            $resp = ['success' => false, 'error' => $error];
         }
         $this->jsonResponse($resp);
      } else {

         $this->view->datos = $usuario;
         $this->view->postAction = PROOT . 'users' . DS . 'registro';
         $this->view->displayErrors = $usuario->getErrorMessages();
         $this->view->setLayout('registro');
         $this->view->render('users/registro');
      }
   }

   public function actualizarClaveAction($UserName = '')
   {
      if ($UserName == '')
         $usuario = Users::findById('UserName', Users::currentUser()->UserName);
      else {
         $usuario = Users::findById('UserName', $UserName);
      }
      if ($this->request->isPost()) {
         $respuesta = $usuario->actualizarClave($this->request->get('UserName'), $this->request->get('Password'));
         if ($respuesta)
            $resp = ['success' => true, 'errors' => $usuario->getErrorMessages()];
         else
            $resp = ['success' => false, 'errors' => $usuario->getErrorMessages()];

         $this->jsonResponse($resp);
      } else {
         $this->view->usuario = $usuario;
         $this->view->setLayout('index_admin');
         $this->view->renderModal('users/actualizar_clave');
      }
   }

   public function editarAction()
   {
      $id = $this->request->get('id');
      $datos = Users::findById((int) $id);
      if (!$datos) Router::redirect('users');

      if ($this->request->isPost()) {

         $datos->assign($this->request->get());
         $datos->password = '';
         if ($datos->save())
            $resp = ['success' => true, 'errors' => $datos->getErrorMessages()];
         else
            $resp = ['success' => false, 'errors' => $datos->getErrorMessages()];

         $this->jsonResponse($resp);
      }
      $this->view->displayErrors = $datos->getErrorMessages();
      $this->view->datos = $datos;
      $this->view->renderModal('users/editar');
   }

   public function eliminarAction()
   {
      $id = $this->request->get('id');
      $datos = Users::findById((int) $id);
      if ($datos->estado == 0)
         $datos->update(['estado' => 1]);
      else
         $datos->update(['estado' => 0]);

      $resp = ['success' => true];
      return $this->jsonResponse($resp);
   }
}
