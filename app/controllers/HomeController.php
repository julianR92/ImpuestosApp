<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\Users;
use App\Models\Unidad;
use App\Models\PredioBucaramanga;
use Core\Router;
use Core\Session;
use Core\H;
use PHPMailer\PHPMailer\PHPMailer;
use Spipu\Html2Pdf\Html2Pdf;


class HomeController extends Controller
{
   public function onConstruct()
   {
      $this->view->setLayout('index');
   }

   public function indexAction()
   {
      Router::redirect('personas/menu');
   }

   public function consultarAction()
   {
      if ($this->request->isPost()) {
         $consulta = PredioBucaramanga::consultar($this->request->get('direccion'), $this->request->get('predio'));
         if ($consulta) {
            $resp = ['success' => true, 'datos' => $consulta];
         } else {
            $resp = ['success' => false, 'error' => 'Por favor vuelva a intentarlo o consulte su código predial en el POT-ONLINE'];
         }
         $this->jsonResponse($resp);
      } else {
         $unidad = Unidad::listar();
         $this->view->unidad = $unidad;
         $this->view->render('home/consultar');
      }
   }

   public function descargarAction()
   {
      $path = '/var/tmp/test.pdf';
      $html2pdf = new Html2Pdf('P', 'A4', 'fr');
      $html2pdf->setDefaultFont('Arial');
      $html2pdf->writeHTML($_POST["content"]);
      $html2pdf->output($path);
   }
}
