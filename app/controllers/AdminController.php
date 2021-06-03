<?php

namespace App\Controllers;

use Core\Controller;
use Core\Router;
use Core\H;
use Core\Session;
use App\Models\Admin;
use App\Models\Ica;
use App\Models\UsuariosRica;

class AdminController extends Controller
{

   public function onConstruct()
   {
      $this->view->setLayout('index4');
      
      $this->currentUser = UsuariosRica::currentUser();
      
      if (empty($this->currentUser)) {
         Router::redirect('usuariosRica/login');
      }
   }

   public function indexAction()
   {
      $this->view->usuario = $this->currentUser->UsuRicNombre;
      $this->view->render('admin/index');
   }

   public function consultaContriAction()
   {

      if ($this->request->isPost()) {


         $_SESSION['nit'] = $this->request->get('txtNit');

         $datos = Admin::consultaRetindc($this->request->get('txtNit'));

         if ($datos) {

            if ($datos->RetIFecActVal == null || $datos->RetIFecActVal == '') {
               $resp = ['success' => false, 'mensaje' => 'El numero de NIT <strong>' . $this->request->get('txtNit') . ' </strong> no ha ingresado a actualizar los datos por favor solicítele al contribuyente que ingrese a la aplicación a actulizar los datos'];
               $this->jsonResponse($resp);
            }
            $resp = ['success' => true];
            $this->jsonResponse($resp);
         } else {

            $resp = ['success' => false, 'mensaje' => 'El numero de NIT <strong>' . $this->request->get('txtNit') . ' </strong> no se encuentra registrado en la base de datos.'];
            $this->jsonResponse($resp);
         }
      }
   }

   public function actualizaContriAction()
   {
      if ($this->request->isPost()) {
         $model = new Admin();
         $model->assign($this->request->get());
         $usuario=$this->currentUser;
         $update = $model->updateContribuyente($model,$usuario->UsuRicUser);

         if ($update) {
            $resp = ['success' => true, 'mensaje' => 'Tu registro se actualizó exitosamente'];
            $this->jsonResponse($resp);
         } else {
            $resp = ['success' => false, 'mensaje' => 'Ocurrió un problema al realizar la actualización'];
            $this->jsonResponse($resp);
         }
      }

      $ciudades = Ica::cargarCiudades();
      $nit = Session::get('nit');
      $datos = Ica::findById('RetINit', $nit);

      $this->view->ciudades = $ciudades;
      $this->view->datos = $datos;
      $this->view->render('admin/actualizar_contribuyente');
   }

   public function consultaRepreAction()
   {

      if ($this->request->isPost()) {

         $_SESSION['nit'] = $this->request->get('txtNit');

         $datos = Admin::consultaRepre($this->request->get('txtNit'));

         if ($datos) {
            $resp = ['success' => true];
            $this->jsonResponse($resp);
         } else {

            $resp = ['success' => false, 'mensaje' => 'El numero de NIT <strong>' . $this->request->get('txtNit') . ' </strong> no tiene asociados representante legal '];
            $this->jsonResponse($resp);
         }
      }
   }

   public function actualizaRepreAction()
   {


      if ($this->request->isPost()) {

         $model = new Admin();
         $model->assign($this->request->get());
         $usuario=$this->currentUser;
         $updateRepresentante = $model->updateRepresentante($model,$usuario->UsuRicUser);

         if ($updateRepresentante) {
            $resp = ['success' => true, 'mensaje' => 'Tu registro se actualizó exitosamente'];
            $this->jsonResponse($resp);
         } else {
            $resp = ['success' => false, 'mensaje' => 'Ocurrió un problema al realizar la actualización'];
            $this->jsonResponse($resp);
         }
      }


      $nit = Session::get('nit');
      $datos = Admin::consultaRepre($nit);
      $this->view->datos = $datos;
      $this->view->render('admin/actualizar_representante');
   }

   public function consultaTipoAgenteAction()
   {

      if ($this->request->isPost()) {

         $_SESSION['nit'] = $this->request->get('txtNit');

         $datos = Admin::consultaTipoAge($this->request->get('txtNit'));

         if ($datos) {
            $resp = ['success' => true];
            $this->jsonResponse($resp);
         } else {

            $resp = ['success' => false, 'mensaje' => 'El numero de NIT <strong>' . $this->request->get('txtNit') . ' </strong> no se encuentra clasificado en la tabla de agente Autoretenedor'];
            $this->jsonResponse($resp);
         }
      }
   }

   public function actualizaTipoAgenteAction()
   {


      if ($this->request->isPost()) {

         $model = new Admin();
         $model->assign($this->request->get());
         $usuario=$this->currentUser;

         $updateAge = $model->updateTipoAgente($model,$usuario->UsuRicUser);

         if ($updateAge) {
            $resp = ['success' => true, 'mensaje' => 'Tu registro se actualizó exitosamente'];
            $this->jsonResponse($resp);
         } else {
            $resp = ['success' => false, 'mensaje' => 'Ocurrió un problema al realizar la actualización'];
            $this->jsonResponse($resp);
         }
      }

      $nit = Session::get('nit');
      $datos = Admin::consultaTipoAge($nit);
      $this->view->calidadAgente = $datos->CaretTAuto;
      $this->view->render('admin/actualizar_tipo');
   }

   public function consultaPeriodicidadAction()
   {

      if ($this->request->isPost()) {

         $_SESSION['nit'] = $this->request->get('txtNit');

         $datosPeriodo = Admin::consultaPeridocidad($this->request->get('txtNit'));

         if ($datosPeriodo) {
            $resp = ['success' => true];
            $this->jsonResponse($resp);
         } else {

            $resp = ['success' => false, 'mensaje' => 'El numero de NIT <strong>' . $this->request->get('txtNit') . ' </strong> no tiene asignado alguna periodicidad'];
            $this->jsonResponse($resp);
         }
      }
   }

   public function actualizaPeriodicidadAction()
   {


      if ($this->request->isPost()) {

         $model = new Admin();
         $usuario=$this->currentUser;

         $model->assign($this->request->get());
         $updatePer = $model->updatePeriodo($model,$usuario->UsuRicUser);

         if ($updatePer) {
            $resp = ['success' => true, 'mensaje' => 'Tu registro se actualizó exitosamente'];
            $this->jsonResponse($resp);
         } else {
            $resp = ['success' => false, 'mensaje' => 'Ocurrió un problema al realizar la actualización'];
            $this->jsonResponse($resp);
         }
      }




      $nit = Session::get('nit');
      $datos = Admin::consultaPeridocidad($nit);
      $this->view->presentacion = $datos->RperTPer;
      $this->view->render('admin/actualizar_periodo');
   }

   public function consultaTrazaAction(){

      if ($this->request->isPost()) {
          
          $_SESSION['nit'] = $this->request->get('txtNit');
          $datosTraza = Admin::consultaTraza($this->request->get('txtNit'));

          if ($datosTraza) {
            $resp = ['success' => true];
            $this->jsonResponse($resp);
         } else {

            $resp = ['success' => false, 'mensaje' => 'El numero de NIT <strong>' . $this->request->get('txtNit') . ' </strong> no tiene trazabilidad de actualizaciones'];
            $this->jsonResponse($resp);
         }

      }

      $nit = Session::get('nit');
      $datos = Admin::consultaTraza($nit);
      $this->view->traza = $datos;
      $this->view->render('admin/mostrar_traza');


   }

   public function reiniciaIntentosAction(){

      if ($this->request->isPost()) {
          
          $reiniciaIntentos = Admin::reiniciaIntentos($this->request->get('txtNit'));

          if ($reiniciaIntentos) {
            $resp = ['success' => true,'mensaje' => 'Se Reinicio correctamente el numero de intentos'];
            $this->jsonResponse($resp);
         } else {

            $resp = ['success' => false, 'mensaje' => 'El numero de NIT <strong>' . $this->request->get('txtNit') . ' </strong> no tiene intentos realizados'];
            $this->jsonResponse($resp);
         }

      }

      

   }
}
