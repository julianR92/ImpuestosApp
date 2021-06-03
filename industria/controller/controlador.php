<?php
/*
Autor:   
Software: S
Versión: 1.0:
Tipo de proyecto: T
Todos los derechos reservados 2020
Institución:
*/
/* Controlador que me permite realizar el llamado de clases y crear objetos de la misma segun las funciones que se requiera utilizar */

/**
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
**/

require_once("../Frame/Header.htm");
if(isset($_POST["Boton"])){
	
	$Archivo = $_POST["Archivo"];
	$Clase   = $_POST["Clase"];
	$Funcion = $_POST["Funcion"];

	include_once '../_clases/'.$Archivo.'.php';
	$Objeto = new $Clase($_POST);
	$Objeto->$Funcion();

}elseif(isset($_GET["Parametro"])){
	
	$Archivo = $_GET["A"];
	$Clase   = $_GET["C"];
	$Funcion = $_GET["F"];

	include_once '../_clases/'.$Archivo.'.php';
	$Objeto = new $Clase($_GET);
	$Objeto->$Funcion();

}elseif(isset($_GET["Parametro2"])){
	
	$Archivo = $_GET["A"];
	$Clase   = $_GET["C"];
	$Funcion = $_GET["F"];

	include_once '../_clases/'.$Archivo.'.php';
	$Objeto = new $Clase($_GET);
	$Objeto->$Funcion();
}
require_once("../Frame/Footer.htm");
?>