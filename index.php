<?php
use Core\Session;
use Core\Cookie;
use Core\Router;
use App\Models\Users;

//Defino el separador de directorio el encode y el timezone
define('DS', '/');
define('ROOT', dirname(__FILE__));

date_default_timezone_set('America/Bogota');
setlocale(LC_TIME, 'es_CO.UTF-8');
 
require_once(ROOT . DS . 'config' . DS . 'config.php');
require("vendor/autoload.php");

function autoload($className)
{
   $classAry = explode('\\', $className);
   $class = array_pop($classAry);
   $subPath = strtolower(implode(DS, $classAry));
   $path = ROOT . DS . $subPath . DS . $class . '.php';
   if (file_exists($path)) {
      require_once($path);
   }
}

spl_autoload_register('autoload');
session_start();

//si la version de php es diferente y no soporta PATH_INFO se cambia por la siguiente linea
//$url = isset($_SERVER['REQUEST_URI']) ? explode('/', ltrim($_SERVER['REQUEST_URI'], '/')) : [];
$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'], '/')) : [];

if (!Session::exists(CURRENT_USER_SESSION_NAME) && Cookie::exists(REMEMBER_ME_COOKIE_NAME)) {
   Users::loginUserFromCookie();
}

Router::route($url);
