<?php
/**
Software:        
Dependencia:     Despacho alcalde
Desarrolladores: Hugo Andres Pedroza Rodriguez
Versiòn:         1.0
Todos los derechos reservados 2019
Oficina asesora de despacho TIC
**/

/**
Clase Barrios con la cual se realizan las funciones DML de la tabla "barrios"
**/

include_once("../Motordb/conexiondb.php");
$stmtSector = Conexion::conexiondb()->prepare("SELECT S.IdSector,
		                                              S.SecDes
		                                              FROM `_sectores_ciiu` as S
		                                              ORDER BY S.IdSector ASC");
$stmtSector->execute();