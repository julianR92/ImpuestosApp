<?php
/**
Autor:
Software:
Versi�n: 1.0:
Tipo de proyecto:
Todos los derechos reservados 2020
Instituci�n:
**/
#Archivo: conexiondb

date_default_timezone_set('America/Bogota');

$sysFecha = date('Y-m-d');
$segFecha = strtotime($sysFecha);
$sysHora  = date('H:i:s');
$segHora  = strtotime($sysHora);

#clase conexion para crear objetos e instanciar instrucciones DML
class Conexion{

    public function conexiondb(){

        $username   = "hugop";
        $password   = "sGmCmnmOQTbtRaJU";
        $bd         = "industria";
        $servidor   = "172.16.18.25";

        $link = new PDO("mysql:host=$servidor;dbname=$bd;charset=utf8",$username,$password);
        $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        try {
             if ($link==true){
                 $link->exec("set names utf8");
                 return $link;
                 echo "conectado";

             }else{

                 echo "<script>alert('! ERROR 002 - SELECCION DB � El sistema no pudo realizar la Seleccion de base de datos, por favor comuniquese con el administrador del sistema para restablecer la conexion con el servidor');</script>";
                 echo "<script>window.location.href='../index.php';</script>";
             }
        }

        catch (PDOException $e) {

            echo $e->getMessage();
            die();

        }
        $link = null;  // cerrar conexxion
    }
}
//Conexion = Conexion::conexiondb();
//echo $Conexion;
?>
