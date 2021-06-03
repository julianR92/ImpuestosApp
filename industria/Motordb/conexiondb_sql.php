<?php
/**
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
**/

$serverName = "131.110.1.27\TESTMSSQL"; //serverName\instanceName
$connectionInfo = array("Database"=>"IMPPRUEBAS", "UID"=>"GscSqlPqr", "PWD"=>"2G8S1P4rT");
#$connectionInfo = array("Database"=>"IMPPRUEBAS", "UID"=>"User_MAEIC", "PWD"=>"THzg-DgHvM");
$conexion = sqlsrv_connect($serverName,$connectionInfo);

if($conexion) {
     #echo "Conexión establecida.<br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r(sqlsrv_errors(),true));
}
?>