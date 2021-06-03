<?php
/**
Software:        Tu talento es lo que vale
Dependencia:     Despacho alcalde
Desarrolladores: Hugo Andres Pedroza Rodriguez
Versiòn:         1.0
Todos los derechos reservados 2019
Oficina asesora de despacho TIC
**/

/**
Clase Departamentos con la cual se realizan las funciones DML de la tabla "departamentos"
**/

class Departamentos{
	
	/** Funcion para la instrucion Insert a la tabla Postulados **/
	public function InsertPos($Parametros){

	}

	public function UpDatePos($Parametros){
		
	}

	public function DeletePos($Parametros){
		
	}

	/** Funcion para la instrucion Select Departamentos **/
	public function SelectPos($Parametros){

	}
}


	include_once("../Motordb/conexiondb.php");
	$SelDep = mysql_query("SELECT D.DepartamentoId, D.DepNom FROM departamentos AS D ORDER BY DepNom ASC");


?>