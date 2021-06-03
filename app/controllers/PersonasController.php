<?php

namespace App\Controllers;

use Core\Controller;
use Core\Router;
use Core\H;
use App\Models\Personas;

class PersonasController extends Controller
{

   public function onConstruct()
   {
      $this->view->setLayout('index');
   }

   public function indexAction()
   {
      //Si es un tipo de usuario distribuidor
      if ($this->currentUser->Typeuser == 4)
         $datos = Clientes::listar($this->currentUser->UserName, $this->currentUser->SedeID, $this->currentUser->Ciudad);
      else {
         $datos = Clientes::listar();
      }
      $this->view->datos = $datos;
      $this->view->render('clientes/index');
   }

   public function nuevoAction()
   {
      $datos = new Personas();
      if ($this->request->isPost()) {
         $datos->assign($this->request->get(), Personas::blackList);
         $datos->PerDirResPro = $_POST['PerDirResPro_'];
         $datos->PerBarResPro = $_POST['PerBarResPro'];

         //H::dnd($_POST);
         $datos->PerOrigenDb = 'CIUDADANO';
         $datos->id = $this->request->get('IdPersonas');
         $datos->PerAceTerCon = 'SI';
         $datos->PerAceTraDat = 'SI';
         $datos->PerAceComInf = 'SI';
         $predio1 = $_POST['predio'];

         $url = "http://correomasivo.bucaramanga.gov.co/app/_clases/PruebaCorreoContribuyente.php?correo=" . $_POST['PerCorreo1'] . "&nombre=" . $_POST['PerPriNom'] . "%20" . $_POST['PerSegNom'] . "%20" . $_POST['PerPriApe'] . "%20" . $_POST['PerSegApe'] . "&predio=" . $predio1;
         if ($datos->save('IdPersonas')) {
            //Once again, we use file_get_contents to GET the URL in question.
            $contents = file_get_contents($url);
            //If $contents is not a boolean FALSE value.
            //H::dnd($url);
            if ($contents !== false) {
               //Print out the contents.
               echo $contents;
            }

            Router::redirect('personas/mensaje');
         } else {
            $error = $datos->getErrorMessages();
            Router::redirect('personas/error/' . $error);
         }
      }
      $deptos = Personas::cargarDeptos();
      $arr_deptos = [];
      foreach ($deptos as $deptos) {
         $arr_deptos[$deptos->DepartamentoId] = $deptos->DepNom;
      }

      $this->view->postAction = PROOT . 'personas' . DS . 'nuevo';
      $this->view->deptos = $arr_deptos;
      $this->view->datos = $datos;
      $this->view->render('personas/crear');
   }

   public function sinPrediosAction()
   {
      $this->view->render('personas/sin_predios');
   }

   // public function nuevo2Action()
   // {
   //    $datos = new Personas();
   //    if ($this->request->isPost()) {
   //       $datos->assign($this->request->get(), Personas::blackList);
   //       $datos->PerDirResPro = $_POST['PerDirResPro_'];
   //       $datos->PerBarResPro = $_POST['PerBarResPro_'];

   //       //H::dnd($datos);
   //       $datos->PerOrigenDb = 'CIUDADANO';
   //       $datos->id = $this->request->get('IdPersonas');
   //       $datos->PerAceTerCon = 'SI';
   //       $datos->PerAceTraDat = 'SI';
   //       $datos->PerAceComInf = 'SI';
   //       if ($datos->save('IdPersonas')) {
   //          Router::redirect('personas/mensaje');
   //       } else {
   //          $error = $datos->getErrorMessages();
   //          Router::redirect('personas/error/' . $error);
   //       }
   //    }
   //    $deptos = Personas::cargarDeptos();
   //    $arr_deptos = [];
   //    foreach ($deptos as $deptos) {
   //       $arr_deptos[$deptos->DepartamentoId] = $deptos->DepNom;
   //    }

   //    $this->view->postAction = PROOT . 'personas' . DS . 'nuevo';
   //    $this->view->deptos = $arr_deptos;
   //    $this->view->datos = $datos;
   //    $this->view->render('personas/crear2');
   // }

   public function validarAction($cedula)
   {
      if ($this->request->isGet()) {
         
         $validar = Personas::findFirst([
            'conditions' => 'PerNumDoc= ? ',
            'bind' => [$cedula]
         ]);
         
         if ($validar) {
            $resp = ['success' => true, 'datos' => $validar];
         } else {
            $resp = ['success' => false];
         }
         $this->jsonResponse($resp);
      }
   }

   public function buscarPrediosAction($cedula)
   {
      if ($this->request->isGet()) {
         $validar = Personas::buscarPredios(str_pad($cedula, 12, "0", STR_PAD_LEFT));
         $predios = "";
         if (count($validar) > 1) {
            foreach ($validar as $datos) {
               $predios = $datos->PreNum . ',' . $predios;
            }
            $predios = substr($predios, 0, -1);
         } else {
            $predios = $validar[0]->PreNum;
         }


         /* dejar comentado esto 
         
         $variable=explode(',',$predios);
         $nuevoArr=[];
         foreach ($variable as $datos) {
            array_push($nuevoArr,$datos);
         }

         H::dnd($nuevoArr);
         */
         if ($validar) {
            $resp = ['success' => true, 'datos' => $validar, 'predios' => $predios];
         } else {
            $resp = ['success' => false];
         }
         $this->jsonResponse($resp);
      }
   }

   public function cargarMuniAction($codigo_depto)
   {

      $municipio = Personas::cargarMuni($codigo_depto);

      $arr_municipio = [];
      foreach ($municipio as $municipio) {
         $arr_municipio[$municipio->MunCod] = $municipio->MunNom;
      }
      $resp = ['success' => true, 'municipio' => $arr_municipio];
      $this->jsonResponse($resp);
   }

   public function mensajeAction()
   {
      $this->view->render('personas/mensaje');
   }

   public function menuAction()
   {
      //set layou toma el archivo q esta en view/layout/index2.php por eso en layout esta index2
      $this->view->setLayout('index2');
      $this->view->render('personas/menu');
   }

   public function experienciaAction()
   {
      if ($this->request->isPost()) {
         $Experiencia = $_POST['experiencia'];
         $Sugerencia = $_POST['sugerencia'];
         $Consulta = Personas::insertExperiencia($Experiencia, $Sugerencia);
         if ($Consulta) {
            echo "1";
         } else {
            echo "0";
         }
      }
   }

   public function utilAction()
   {
      if ($this->request->isPost()) {
         $Encuesta   = $_POST['Parametro'];
         $Sugerencia = $_POST['sugerencia'];
         $Consulta = Personas::insertContenido($Encuesta, $Sugerencia);
         if ($Consulta) {
            echo "1";
         } else {
            echo "0";
         }
      }
   }



   public function errorAction($error)
   {
      $this->view->error = $error;
      $this->view->render('personas/error');
   }
}
