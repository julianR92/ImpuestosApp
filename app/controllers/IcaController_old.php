<?php

namespace App\Controllers;

use Core\Controller;
use Core\Router;
use Core\H;
use App\Models\Ica;

class IcaController extends Controller
{

   public function onConstruct()
   {

      $this->view->setLayout('index3');
   }

   public function indexAction()
   {

      $this->view->render('ica2020/index');
   }

   public function validarNitAction()
   {
      if ($this->request->isPost()) {
         $nit = $this->request->get('identificacion_contribuyente');
         $resultado = Ica::validarNit($nit);
         if ($resultado) {
            $preguntas = Ica::preguntas($nit);
            $razon_social = [];
            $direccion = [];
            $telefono = [];
            foreach ($preguntas as $value) {
               $razon_social[$value->RetIRazS] = $value->RetIRazS;
               if (trim($resultado->Direccion) != '')
                  $direccion[$value->Direccion] = $value->Direccion;
               if (trim($resultado->Telefono) != '')
                  $telefono[$value->Telefono] = $value->Telefono;
            }

            $this->view->nit = $resultado->RetINit;
            $this->view->razon_social = $razon_social;
            $this->view->direccion = $direccion;
            $this->view->telefono = $telefono;
            $this->view->render('ica2020/preguntas');
         } else {

            echo "<script> alert('Apreciado Ciudanano usted no se encentra registrado como agente retenedor, ahora sera direccionado al formulario de registro'); </script>";
            // $ciudades= Ica::cargarCiudades();
            // $this->view->ciudades=$ciudades;
            // $this->view->nit = $nit;
            Router::redirect('ica/nuevo/' . $nit);
            //$this->view->render('ica2020/crear_agente');
         }
      } else {
         $this->view->render('ica2020/index');
      }
   }

   public function validarPreguntasAction()
   {
      if ($this->request->isPost()) {
         $nit = $this->request->get('nit');
         $razon_social = $this->request->get('optRazon');
         $direccion = "";
         $telefono = "";
         if (isset($_POST['optDireccion']))
            $direccion = $this->request->get('optDireccion');
         if (isset($_POST['optDireccion']))
            $telefono = $this->request->get('optTelefono');

         $resultado = Ica::validarRespuestas($nit, $razon_social, $direccion, $telefono);
         if ($resultado) {
            echo 'form julian';
         } else {
            $this->view->render('ica2020/mensaje');
         }
      }
   }

   public function validaAction()
   {

      $this->view->render('ica2020/elaboracion');
   }

   public function nuevoAction($nit="")
   {

      if ($this->request->isPost()) {

         $validaDuplicado =  Ica::validarDuplicado($this->request->get('nit'));
         if($validaDuplicado){
             $resp = ['success' => false,'mensaje' => 'El Nit ya se encuentra registrado como agente retenedor'];

         }else{
            echo "Voy aqui ya se valido la cedula ahora validaremos los campos";
         }
              

      }
      
      $ciudades = Ica::cargarCiudades();
      $this->view->nit = $nit;
      $this->view->ciudades = $ciudades;
      $this->view->render('ica2020/crear_agente');
   }
}
