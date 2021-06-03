<?php
/*
Autor:   Hugo Andres Pedroza Rodriguez
Software: 
Versión: 1.0:
Tipo de proyecto: 
Todos los derechos reservados 2020
Institución: 
*/
#Archivo: Clase usuarios donde se realizan las instrucciones DML para la tabla

require_once("../Motordb/conexiondb.php");
$EstadoRolUsuario = "ACTIVO";

$stmt = Conexion::conexiondb()->prepare("SELECT IdRolUsuario,
	                                            RolUsuNom,
	                                            EstadoRolUsuario
	                                            FROM _roles_usuarios
	                                                WHERE EstadoRolUsuario=:EstadoRolUsuario");
$stmt->bindParam(":EstadoRolUsuario",$EstadoRolUsuario,PDO::PARAM_STR);
$stmt->execute();
?>