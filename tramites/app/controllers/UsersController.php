<?php
namespace App\Controllers;
use Core\Controller;
use Core\Router;
use App\Models\Users;
use App\Models\Login;
use Core\H;
use Core\Session;

class UsersController extends Controller {

  public function onConstruct(){
    $this->view->setLayout('default');
  }

  public function loginAction() {
    
    $loginModel = new Login();
    if($this->request->isPost()) {
      // form validation
      // valida el formulario con un token para el caso de hackeo
      $this->request->csrfCheck();
      $loginModel->assign($this->request->get());
      $loginModel->validator();
      if($loginModel->validationPassed()){
        $user = Users::findByUsername($_POST['username']);
        if($user && password_verify($this->request->get('password'), $user->password)) {
          $remember = $loginModel->getRememberMeChecked();
          $user->login($remember);
          Router::redirect('home');
        } else {
          $loginModel->addErrorMessage('username','Usuario o contraseña no coinciden.');
        }
      }
    }
    $this->view->login = $loginModel;
    $this->view->displayErrors = $loginModel->getErrorMessages();
    $this->view->setLayout('login');
    $this->view->render('users/login');
  }

  public function logoutAction() {
    if(Users::currentUser()) {
      Users::currentUser()->logout();
    }
    Router::redirect('home');
  }

  public function indexAction(){
    $filtro="";
    $users=Users::cargarUsuarios($filtro);
    if (Users::currentUser()->rol=='DIRECTOR'){
      $filtro=" and entidad_id = ".Users::currentUser()->entidad_id;
      $users=Users::cargarUsuarios($filtro);  
    }
    $this->view->currentUser=Users::currentUser();
    $this->view->users = $users;
    $this->view->render('users/index');
  }

  public function nuevoAction() {
    $newUser = new Users();
    if($this->request->isPost()) {
      $this->request->csrfCheck();
      $newUser->assign($this->request->get(),Users::blackListedFormKeys);
      $newUser->confirm =$this->request->get('confirm');
      $newUser->entidad_id=1;
      if($newUser->save()){
        Router::redirect('users');
      }
    }
    $this->view->newUser = $newUser;
    $this->view->postAction = PROOT . 'users' . DS . 'nuevo';
    $this->view->displayErrors = $newUser->getErrorMessages();
    $this->view->render('users/crear');
  }

  public function editarAction($id){
    $newUser = Users::findById((int)$id);
    if(!$newUser) Router::redirect('users');
    if($this->request->isPost()){
      $this->request->csrfCheck();
      $newUser->assign($this->request->get(),['password']);
      if($newUser->save()){
        Session::addMsg('success','Usuario actualizado correctamente.');
        Router::redirect('users');
      }
    }
    $newUser->confirm=$newUser->password;
    $this->view->displayErrors = $newUser->getErrorMessages();
    $this->view->newUser = $newUser;
    $this->view->postAction = PROOT . 'users' . DS . 'editar' . DS . $newUser->id;
    $this->view->render('users/editar');
  }

  public function eliminarAction($id){
    $user = Users::findById((int)$id);
    if($user){
      $user->estado=false;
      $user->save();
      //$user->delete();
      Session::addMsg('success','Usuario inactivado correctamente.');
    }
    Router::redirect('users');
  }
}
