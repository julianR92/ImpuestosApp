<?php

namespace App\Controllers;

use Core\Controller;
use Core\Router;
use Core\Session;
use Core\H;
use App\Models\Ica;

use Dompdf\Dompdf;

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
         if (Session::exists('nit'))
            Session::delete('nit');

         $nit = $this->request->get('txtNit');
         $continuar = Ica::validarIntentos($nit);
         //si el nit existe y si ya cumplio con los intentos del dia no lo deja seguir
         if ($continuar) {
            if (8 - (int)$continuar->IntValEst <= 0) {
               $resp = ['success' => false,'intentos'=>true, 'mensaje' => '<p align="justify"><b style="font-size:18px;">Apreciado ciudadano, usted ya realizo los 5 intentos de seguridad permitidos en el día, por favor verificar los datos e intentar mañana de nuevo, gracias.</b></p>'];
               $this->jsonResponse($resp);
            }
         }
         //si el nit existe enviarlo a las preguntas, sino a crear el agente
         $resultado = Ica::validarNit($nit);

         if ($resultado) {
            Session::set('nit', $nit);
            $resp = ['success' => true,'intentos'=>true];
            $this->jsonResponse($resp);
         } else {
            Session::set('nit', $nit);
            $resp = ['success' => false,'intentos'=>false, 'mensaje' => '<p align="justify"><b style="font-size:18px;">Apreciado ciudadano acaba de digitar  el NIT:  <strong>' . $nit . ' </strong>, si es correcto pulse la opción <em>ACEPTAR</em> para continuar con el registro como agente retenedor, de lo contrario pulse la opción <em>CORREGIR</em> para modificarlo</b></p>'];
            $this->jsonResponse($resp);
         }
      } else {
         $this->view->render('ica2020/index');
      }
   }

   public function preguntasAction()
   {
      $nit = Session::get('nit');
      $resultado = Ica::validarNit($nit);
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
         if (isset($_POST['optTelefono']))
            $telefono = $this->request->get('optTelefono');

         $resultado = Ica::validarRespuestas($nit, $razon_social, $direccion, $telefono);
         if ($resultado) {
            $_SESSION['nit'] = $nit;
            $resp = ['success' => true];
            $this->jsonResponse($resp);
         } else {
            $nit = $this->request->get('nit');
            $resultado = Ica::respuestaMal($nit);
            $intentos = 5 - (int)$resultado;
            $resp = ['success' => false, 'intentos' => $intentos, 'mensaje' => 'Respuestas incorrectas, le quedan ' . $intentos . ' intentos para ingresar, de lo contrario el sistema bloqueara su acceso hasta el día de mañana por motivos de seguridad.'];
            $this->jsonResponse($resp);
         }
      }
   }

   public function validaAction()
   {
      $this->view->render('ica2020/elaboracion');
   }

   public function mensajeDeclaracionAction()
   {

      $this->view->render('ica2020/mensaje_declaracion');
   }

   public function nuevoAction($nit = "")
   {
      if ($this->request->isPost()) {
         $validaDuplicado =  Ica::validarDuplicado($this->request->get('nit'));
         if ($validaDuplicado) {
            $resp = ['success' => false, 'mensaje' => 'El NIT ya se encuentra registrado como agente retenedor'];
            $this->jsonResponse($resp);
         } else {
            $model = new Ica();
            $model->assign($this->request->get());
            $model->validator();

            if ($model->validationPassed()) {
               $validaIca = $model->validaExisteIca($this->request->get('nit'));
               if ($validaIca) {
                  $swiche = 8;
               } else {
                  $swiche = 0;
               }
               $insert = $model->insertAgente($model, $swiche);
               if ($insert) {
                  $resp = ['success' => true, 'mensaje' => 'Tu registro se realizado exitosamente'];
                  $this->jsonResponse($resp);
               } else {
                  $resp = ['success' => false, 'mensaje' => 'Ocurrió un problema al realizar tu registro'];
                  $this->jsonResponse($resp);
               }
            } else {
               $resp = ['success' => false, 'mensaje' => $model->getErrorMessages()];
               $this->jsonResponse($resp);
            }
         }
      }
      
      $ciudades = Ica::cargarCiudades();
      $nit = Session::get('nit');
      $NitCeros = str_pad($nit, 12, "0", STR_PAD_LEFT);

      $validarIca = Ica::validarIca($NitCeros);
      $validaTipoAgente = Ica::validarAgente($NitCeros);
      $calidadAgente = "P";
      $presentacion = "Mensual";
      $existeICA = 'NO';
      $tipo_persona = 'NO';

      if (empty($validarIca[1]->MaeNum)) {
         $placa = '0';
      } else {
         $placa = $validarIca[1]->MaeNum;
         $tipo_persona = $validarIca[1]->ProTipCod;;
         $calidadAgente = "";
         $presentacion = "";
      }

      $uReg = "MANUAL";
      //H::dnd($validaTipoAgente);

      if ($validarIca[0]) {
         $existeICA = 'SI';

         if ($validaTipoAgente) {
            $calidadAgente = $validaTipoAgente->CaretTAuto;
            $uReg = "MASIVO";
         } else {
            if ($validarIca[0]->ValidacionTrimestre <= 300) {
               $calidadAgente = 'P';
               $uReg = "AUTOMATICO";
            }
            if ($validarIca[0]->ValidacionTrimestre > 300 && $validarIca[0]->ValidacionTrimestre <= 80000) {
               $calidadAgente = 'C';
               $uReg = "AUTOMATICO";
            }
            if ($validarIca[0]->ValidacionTrimestre > 80000) {
               $calidadAgente = 'G';
               $uReg = "AUTOMATICO";
            }
         }
         if ($validarIca[0]->ValidacionTrimestre <= 5000)
            $presentacion = 'Trimestral';
         else
            $presentacion = 'Mensual';

         $placa = $validarIca[0]->DecMaeNum;
      }

      if (empty($validarIca[0]->DepNum)) {
         $this->view->DepNum = '';
      } else {
         $this->view->DepNum = $validarIca[0]->DepNum;
      }

      $this->view->uReg = $uReg;
      $this->view->nit = $nit;
      $this->view->tipo_persona = $tipo_persona;
      $this->view->placa = $placa;
      $this->view->calidadAgente = $calidadAgente;
      $this->view->presentacion = $presentacion;
      $this->view->ciudades = $ciudades;
      $this->view->existeICA = $existeICA;
      $this->view->render('ica2020/crear_agente');
   }

   public function actualizarAction($nit = "")
   {
      if ($this->request->isPost()) {
         $datos = Ica::findById('RetINit', $this->request->get('nit'));
         $repre = Ica::datosRepre($this->request->get('nit'));
         $datos->assign($this->request->get());

         $datos->validator();
         if ($datos->validationPassed()) {

            $update = $datos->updateAgente($datos);
            if ($update) {
               $resp = ['success' => true, 'mensaje' => 'Tu registro se actualizó exitosamente'];
               $this->jsonResponse($resp);
               $nit = $_SESSION['nit'];
            } else {
               $resp = ['success' => false, 'mensaje' => 'Ocurrió un problema al realizar tu registro'];
               $this->jsonResponse($resp);
            }
         }
      }

      $validarActualizar = Ica::validarActualizar($_SESSION['nit']);

      if (!empty($validarActualizar->Fecha)) {
         Router::redirect('ica/year');
      } else {
         $nit = Session::get('nit');
         $ciudades = Ica::cargarCiudades();
         $NitCeros = str_pad($nit, 12, "0", STR_PAD_LEFT);

         $validarIca = Ica::validarIca($NitCeros);
         $validaTipoAgente = Ica::validarAgente($NitCeros);
         $calidadAgente = "P";
         $presentacion = "Mensual";
         $existeICA = 'NO';
         $tipo_persona = 'NO';

         if (empty($validarIca[1]->MaeNum)) {
            $placa = '0';
         } else {
            $placa = $validarIca[1]->MaeNum;
            $tipo_persona = $validarIca[1]->ProTipCod;;
            $calidadAgente = "";
            $presentacion = "";
         }

         $uReg = "MANUAL";

         if ($validarIca[0]) {
            $existeICA = 'SI';
            if ($validaTipoAgente) {
               $calidadAgente = $validaTipoAgente->CaretTAuto;
               $uReg = "MASIVO";
            } else {
               if ($validarIca[0]->ValidacionTrimestre <= 300) {
                  $calidadAgente = 'P';
                  $uReg = "AUTOMATICO";
               }
               if ($validarIca[0]->ValidacionTrimestre > 300 && $validarIca[0]->ValidacionTrimestre <= 80000) {
                  $calidadAgente = 'C';
                  $uReg = "AUTOMATICO";
               }
               if ($validarIca[0]->ValidacionTrimestre > 80000) {
                  $calidadAgente = 'G';
                  $uReg = "AUTOMATICO";
               }
            }
            if ($validarIca[0]->ValidacionTrimestre <= 5000)
               $presentacion = 'Trimestral';
            else
               $presentacion = 'Mensual';

            $placa = $validarIca[0]->DecMaeNum;
         }

         //obtengo el numero de la ultima declaracion
         if (empty($validarIca[0]->DepNum)) {
            $this->view->DepNum = '';
         } else {
            $this->view->DepNum = $validarIca[0]->DepNum;
         }

         $datos = Ica::findById('RetINit', $nit);
         $repre = Ica::datosRepre($nit);

         $this->view->datos = $datos;
         $this->view->repre = $repre;

         $this->view->uReg = $uReg;
         $this->view->nit = $nit;
         $this->view->placa = $placa;
         $this->view->tipo_persona = $tipo_persona;
         $this->view->calidadAgente = $calidadAgente;
         $this->view->presentacion = $presentacion;
         $this->view->ciudades = $ciudades;
         $this->view->existeICA = $existeICA;
         $this->view->render('ica2020/actualizar_agente');
      }
   }

   public function yearAction()
   {
      if ($this->request->isPost()) {
         $año = $this->request->get('anio_declaracion');
         $nit = $this->request->get('nit');
         if ($año <> '2021') {
            $datos = Ica::consultarRetinDc($nit);
            $presentacion = 'Mensual';
            $this->view->datos = $datos;
            $this->view->presentacion = $presentacion;
            $this->view->clasi_agente = "";
            $this->view->año = $año;
            $this->view->render('ica2020/elaboracion');
         } else {
            $datos = Ica::consultarRetinDc($nit);
            $clasi_agente = Ica::consultarClaAgent($nit);
            $periocidad = Ica::consultarPeriocidad($nit);
            $presentacion = $periocidad->RperTPer;

            $this->view->datos = $datos;
            $this->view->clasi_agente = $clasi_agente->CaretTAuto;
            $this->view->presentacion = $presentacion;
            $this->view->año = $año;
            $this->view->render('ica2020/elaboracion');
         }
      } else {
         $this->view->nit = $_SESSION['nit'];
         $this->view->render('ica2020/year_declaracion');
      }
   }

   public function guardarDeclaracionAction()
   {
      if ($this->request->isPost()) {
         $RetDecNro = 0;
         $yaTieneDecla = Ica::yaTieneDecla($this->request->get('añoIca'), $this->request->get('meses'), $this->request->get('documento'));
         if ($yaTieneDecla) {
            $acc = 2;
            $RetDecNro = $yaTieneDecla;
         } else
            $acc = 1;

         $RetINit = $this->request->get('documento');
         $RetDecVig = $this->request->get('añoIca');
         $RetIDecSub = $this->request->get('meses');
         $RetDecTip = 0; //inicial
         $RetDecNro = $RetDecNro;
         $RetTipPer = $this->request->get('presentacion');
         $RetDecFecP = '01/01/1753';
         $RetDecNroC = 0;
         $RetDecRepL = $this->request->get('numero_documento_representante');
         $RetDecDirN = $this->request->get('dir_representante');
         $RetDecTotV = $this->request->get('total_declaracion_sin_aprox_cambio_milena_1'); //valor total declarado
         //$RetDecTotV = $this->request->get('total_declaracion'); //comentado para enviar el oculto
         $RetDecEst = 0; //estado declaracion 0 activo
         $RetDecUsr = 'web'; //usuario que realiza el registro
         $RetDecTer = 'web'; //Terminal o el mismo usuario
         $RetDecHor = date('h:i:s'); //hora elaboracion
         $RetDecNomC = $this->request->get('razon_social');
         $RetDecFecI = '01/01/1753';
         $RetDecIndP = 'N'; //estado declaracion N no presentada
         $RetDEcIndC = 'W';
         $RetDecCalA = 1;
         $RetDecDocR = 1;
         $RetDecNomR = $this->request->get('nombre_representante');
         $RetDecTelR = $this->request->get('tel_representante');
         $RetDecCiuN = $this->request->get('RetIDirNot');
         $RetDecTelN = $this->request->get('tel_representante_dos');
         $RetDecCorN = $this->request->get('correo_representante');
         $RetDecDirP = $this->request->get('dir_sede');
         $RetDecTelP = $this->request->get('tel_representante_tres');
         $RetDecCorP = $this->request->get('RetIMail');
         $RetDecCiuP = $this->request->get('RetIDirCiu');
         $RetDecFecG = date('d/m/Y h:i:s');
         $RetDecSwiE = 1;
         $RetDecId = '0';
         $RetBienIca = $this->request->get('retencionCompra_indcio');
         $RetBienAvT = $this->request->get('retencionCompra_avisos');
         $RetBienBom = $this->request->get('retencionCompra_bomberos');
         $RetSerIca = $this->request->get('retencionServicios_indcio');
         $RetSerAvT = $this->request->get('retencionServicios_avisos');
         $RetSerBom = $this->request->get('retencionServicios_bomberos');
         $RetOtrIca = $this->request->get('retencionOtras_indcio');
         $RetOtrAvT = $this->request->get('retencionOtras_avisos');
         $RetOtrBom = $this->request->get('retencionOtras_bomberos');

         $AutRBienIca = $this->request->get("autoBienes_indcio");
         $AutRBienAvT = $this->request->get("autoBienes_avisos");
         $AutRBienBom = $this->request->get("autoBienes_bomberos");
         $AutRSerIca = $this->request->get("autoServicios_indcio");
         $AutRSerAvT = $this->request->get("autoServicios_avisos");
         $AutRSerBom = $this->request->get("autoServicios_bomberos");
         $AutROtrIca = $this->request->get("otrasAuto_indcio");
         $AutROtrAvT = $this->request->get("otrasAuto_avisos");
         $AutROtrBom = $this->request->get("otrasAuto_bomberos");

         $PracRBienIca = $this->request->get("menosRetenBie_indcio");
         $PracRBienAvT = $this->request->get("menosRetenBie_avisos");
         $PracRBienBom = $this->request->get("menosRetenBie_bomberos");
         $PracRSerIca = $this->request->get("menosRetenSer_indcio");
         $PracRSerAvT = $this->request->get("menosRetenSer_avisos");
         $PracRSerBom = $this->request->get("menosRetenSer_bomberos");
         $PracROtrIca = $this->request->get("menosRetenOtras_indcio");
         $PracROtrAvT = $this->request->get("menosRetenOtras_avisos");
         $PracROtrBom = $this->request->get("menosRetenOtras_bomberos");
         $ValSancion = 0;

         $resultado = Ica::guardarDeclaracion(
            $acc,
            $RetINit,
            $RetDecVig,
            $RetIDecSub,
            $RetDecTip,
            $RetDecNro,
            $RetTipPer,
            $RetDecFecP,
            $RetDecNroC,
            $RetDecRepL,
            $RetDecDirN,
            $RetDecTotV,
            $RetDecEst,
            $RetDecUsr,
            $RetDecTer,
            $RetDecHor,
            $RetDecNomC,
            $RetDecFecI,
            $RetDecIndP,
            $RetDEcIndC,
            $RetDecCalA,
            $RetDecDocR,
            $RetDecNomR,
            $RetDecTelR,
            $RetDecCiuN,
            $RetDecTelN,
            $RetDecCorN,
            $RetDecDirP,
            $RetDecTelP,
            $RetDecCorP,
            $RetDecCiuP,
            $RetDecFecG,
            $RetDecSwiE,
            $RetDecId,
            $RetBienIca,
            $RetBienAvT,
            $RetBienBom,
            $RetSerIca,
            $RetSerAvT,
            $RetSerBom,
            $RetOtrIca,
            $RetOtrAvT,
            $RetOtrBom,
            $AutRBienIca,
            $AutRBienAvT,
            $AutRBienBom,
            $AutRSerIca,
            $AutRSerAvT,
            $AutRSerBom,
            $AutROtrIca,
            $AutROtrAvT,
            $AutROtrBom,
            $PracRBienIca,
            $PracRBienAvT,
            $PracRBienBom,
            $PracRSerIca,
            $PracRSerAvT,
            $PracRSerBom,
            $PracROtrIca,
            $PracROtrAvT,
            $PracROtrBom,
            $ValSancion
         );
         //H::dnd($resultado);
         if ($resultado) {
            $resp = ['success' => true, 'declaracion' => $resultado];
         } else {
            $resp = ['success' => false];
         }

         $this->jsonResponse($resp);
      }
   }

   public function buscarDeclaracionAction()
   {
      if ($this->request->isPost()) {
         $acc = 3;
         $RetINit = $this->request->get('nit');
         $RetDecVig = $this->request->get('anio_declaracion');
         $RetIDecSub = 0;
         $RetDecTip = 0; //inicial
         $RetDecNro = 0;
         $RetTipPer = '';
         $RetDecFecP = '01/01/1753';
         $RetDecNroC = 0;
         $RetDecRepL = '';
         $RetDecDirN = '';
         $RetDecTotV = 0; //valor total declarado
         $RetDecEst = 0; //estado declaracion 0 activo
         $RetDecUsr = 'web'; //usuario que realiza el registro
         $RetDecTer = 'web'; //Terminal o el mismo usuario
         $RetDecHor = date('H:i:s'); //hora elaboracion
         $RetDecNomC = '';
         $RetDecFecI = '01/01/1753';
         $RetDecIndP = 'N'; //estado declaracion N no presentada
         $RetDEcIndC = 'W';
         $RetDecCalA = 1;
         $RetDecDocR = 1;
         $RetDecNomR = '';
         $RetDecTelR = '';
         $RetDecCiuN = 0;
         $RetDecTelN = '';
         $RetDecCorN = '';
         $RetDecDirP = '';
         $RetDecTelP = '';
         $RetDecCorP = '';
         $RetDecCiuP = 0;
         $RetDecFecG = date('d/m/Y h:i:s');
         $RetDecSwiE = 1;
         $RetDecId = '0';
         $RetBienIca = 0;
         $RetBienAvT = 0;
         $RetBienBom = 0;
         $RetSerIca = 0;
         $RetSerAvT = 0;
         $RetSerBom = 0;
         $RetOtrIca = 0;
         $RetOtrAvT = 0;
         $RetOtrBom = 0;

         $AutRBienIca = 0;
         $AutRBienAvT = 0;
         $AutRBienBom = 0;
         $AutRSerIca = 0;
         $AutRSerAvT = 0;
         $AutRSerBom = 0;
         $AutROtrIca = 0;
         $AutROtrAvT = 0;
         $AutROtrBom = 0;

         $PracRBienIca = 0;
         $PracRBienAvT = 0;
         $PracRBienBom = 0;
         $PracRSerIca = 0;
         $PracRSerAvT = 0;
         $PracRSerBom = 0;
         $PracROtrIca = 0;
         $PracROtrAvT = 0;
         $PracROtrBom = 0;
         $ValSancion = 0;

         $resultado = Ica::buscarDeclaracion(
            $acc,
            $RetINit,
            $RetDecVig,
            $RetIDecSub,
            $RetDecTip,
            $RetDecNro,
            $RetTipPer,
            $RetDecFecP,
            $RetDecNroC,
            $RetDecRepL,
            $RetDecDirN,
            $RetDecTotV,
            $RetDecEst,
            $RetDecUsr,
            $RetDecTer,
            $RetDecHor,
            $RetDecNomC,
            $RetDecFecI,
            $RetDecIndP,
            $RetDEcIndC,
            $RetDecCalA,
            $RetDecDocR,
            $RetDecNomR,
            $RetDecTelR,
            $RetDecCiuN,
            $RetDecTelN,
            $RetDecCorN,
            $RetDecDirP,
            $RetDecTelP,
            $RetDecCorP,
            $RetDecCiuP,
            $RetDecFecG,
            $RetDecSwiE,
            $RetDecId,
            $RetBienIca,
            $RetBienAvT,
            $RetBienBom,
            $RetSerIca,
            $RetSerAvT,
            $RetSerBom,
            $RetOtrIca,
            $RetOtrAvT,
            $RetOtrBom,
            $AutRBienIca,
            $AutRBienAvT,
            $AutRBienBom,
            $AutRSerIca,
            $AutRSerAvT,
            $AutRSerBom,
            $AutROtrIca,
            $AutROtrAvT,
            $AutROtrBom,
            $PracRBienIca,
            $PracRBienAvT,
            $PracRBienBom,
            $PracRSerIca,
            $PracRSerAvT,
            $PracRSerBom,
            $PracROtrIca,
            $PracROtrAvT,
            $PracROtrBom,
            $ValSancion
         );

         if ($resultado)
            $resp = ['success' => true, 'datos' => $resultado];
         else
            $resp = ['success' => false];
         $this->jsonResponse($resp);
      }
   }


   //VALIDACIONES DEL FORMULARIO

   public function consultarDeclarCAction()
   {
      if ($this->request->get('vigencia') <= 2020 && date('Y-m-d') <= '2021-02-31') {
         $resp = ['success' => true, 'sancion' => 0];
         $this->jsonResponse($resp);
      }
      $resultado = Ica::consultarDeclarC($this->request->get('nit'), $this->request->get('vigencia'), $this->request->get('mes'));
      if ($resultado) {
         if ($resultado->fecha < date('Y-m-d')) {
            $resp = ['success' => true, 'sancion' => 1];
            $this->jsonResponse($resp);
         } else {
            $resp = ['success' => true, 'sancion' => 0];
            $this->jsonResponse($resp);
         }
      } else {
         $resp = ['success' => false, 'mensaje' => 'Usted ya tiene declaracion con la vigencia: ' . $this->request->get('vigencia') . ' para el mes: ' . $this->request->get('mes')];
         $this->jsonResponse($resp);
      }

      // if ($this->request->isPost()) {
      //    $nit = $this->request->get('nit');
      //    $razon_social = $this->request->get('optRazon');
      //    $direccion = "";
      //    $telefono = "";
      //    if (isset($_POST['optDireccion']))
      //       $direccion = $this->request->get('optDireccion');
      //    if (isset($_POST['optTelefono']))
      //       $telefono = $this->request->get('optTelefono');

      //    $resultado = Ica::validarRespuestas($nit, $razon_social, $direccion, $telefono);
      //    if ($resultado) {
      //       $_SESSION['nit'] = $nit;
      //       $resp = ['success' => true];
      //       $this->jsonResponse($resp);
      //    } else {
      //       $nit = $this->request->get('nit');
      //       $resultado = Ica::respuestaMal($nit);
      //       $intentos = 5 - (int)$resultado;
      //       $resp = ['success' => false, 'intentos' => $intentos, 'mensaje' => 'Respuestas incorrectas, le quedan ' . $intentos . ' intentos para ingresar, de lo contrario el sistema bloqueara su acceso hasta el día de mañana por motivos de seguridad.'];
      //       $this->jsonResponse($resp);
      //    }
      // }
   }

   public function calcularSancionAction($total, $vigencia, $mes)
   {
      $resultado = Ica::calcularSancion($total, $vigencia, $mes);
      $resp = ['success' => true, 'sancion' => $resultado->sancion];
      $this->jsonResponse($resp);
   }

   public function deleteDeclaracionAction()
   {

      if ($this->request->isPost()) {

         $consulta = Ica::deleteDeclaracion($this->request->get('vigencia'), $this->request->get('nit'), $this->request->get('mes'));

         if ($consulta) {
            $resp = ['success' => true];
            $this->jsonResponse($resp);
         } else {
            $resp = ['success' => false];
            $this->jsonResponse($resp);
         }
      }
   }
}
