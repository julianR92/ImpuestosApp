<?php
namespace App\Controllers;

use Core\Controller;
use Core\Session;
use Core\Router;
use Core\H;

class TramitesController extends Controller {

  public function onConstruct(){
    $this->view->setLayout('index_govco2');
  }

  public function indexAction(){
    $this->view->render('tramites/index');
  }
}