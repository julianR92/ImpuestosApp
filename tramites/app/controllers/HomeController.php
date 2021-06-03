<?php
namespace App\Controllers;

use Core\Controller;
use App\Models\Users;
use App\Models\Ofertas;
use Core\Session;
use Core\H;

class HomeController extends Controller {

   public function onConstruct(){
      $this->view->setLayout('index');
   }

   public function indexAction() {
      if (Users::currentUser())
      {
         $this->view->setLayout('default');
         $this->view->logueado=Session::exists(CURRENT_USER_SESSION_NAME);
         $this->view->render('home/index');
      }else{
         $this->view->setLayout('index_govco2');

         $this->view->render('tramites/index');
      }
   }

   public function pvdAction() {
      $this->view->setLayout('index');

      $this->view->render('home/pvd');
   }

   public function ofertasAction($programa_id){
      $datos = Ofertas::find(
         [
            'columns'=>'ofertas.id,ofertas.tipo_servicio,servicio,ofertas.horario as horario,requisitos,informacion,cupos,fecha_inicio ',
            'joins'=>
            [
               'joins'=>
               [
                  'servicios_programa','ofertas.servicio_id=servicios_programa.id','servicios_programa','INNER'
               ],
            ],
            'conditions'=>'ofertas.programa_id=? and activo',
            'bind'=>[$programa_id],
            'order'=>'servicio'
         ]);
      $this->view->datos=$datos;
      $this->view->setLayout('index');
      $this->view->render('home/ofertas');
   }
}
