<?php

namespace App\Controllers;

use Core\Controller;
use Core\Router;
use App\Models\UsuariosRica;
use App\Models\Login;
use Core\H;
use Core\Session;

class UsuariosRicaController extends Controller
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
            $user = UsuariosRica::findByUsername($this->request->get('usuario'));
            if ($user && password_verify($this->request->get('password'), $user->UsuRicPassword)) {
               $user->login();
               $resp = ['success' => true];
               $this->jsonResponse($resp);
            } else {
               $resp = ['success' => false, 'mensaje' => 'Usuario o contraseña incorrectos.'];
               $this->jsonResponse($resp);
            }
         }
      } else {
         $this->view->datos = $loginModel;
         $this->view->render('usuarios_rica/login');
      }
   }

   public function logoutAction()
   {
      if (UsuariosRica::currentUser()) {
         UsuariosRica::currentUser()->logout();
      }
      Router::redirect('usuariosRica/login');
   }

   public function indexAction()
   {
      $datos = UsuariosRica::find(['order' => 'fecha_reg desc']);
      $this->view->datos = $datos;
      $this->view->setLayout('index_admin');
      $this->view->render('usuarios_rica/index');
   }

   public function registroAction()
   {
      $usuario = new UsuariosRica();

      if ($this->request->isPost()) {
         $usuario = new UsuariosRica();
         $usuario->assign($this->request->get(), UsuariosRica::blackList);
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
         $this->view->postAction = PROOT . 'UsuariosRica' . DS . 'registro';
         $this->view->displayErrors = $usuario->getErrorMessages();
         $this->view->setLayout('registro');
         $this->view->render('UsuariosRica/registro');
      }
   }

   public function actualizarClaveAction($UserName = '')
   {
      if ($UserName == '')
         $usuario = UsuariosRica::findById('UserName', UsuariosRica::currentUser()->UserName);
      else {
         $usuario = UsuariosRica::findById('UserName', $UserName);
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
         $this->view->renderModal('UsuariosRica/actualizar_clave');
      }
   }

   public function editarAction()
   {
      $id = $this->request->get('id');
      $datos = UsuariosRica::findById((int) $id);
      if (!$datos) Router::redirect('UsuariosRica');

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
      $this->view->renderModal('UsuariosRica/editar');
   }

   public function eliminarAction()
   {
      $id = $this->request->get('id');
      $datos = UsuariosRica::findById((int) $id);
      if ($datos->estado == 0)
         $datos->update(['estado' => 1]);
      else
         $datos->update(['estado' => 0]);

      $resp = ['success' => true];
      return $this->jsonResponse($resp);
   }
}
