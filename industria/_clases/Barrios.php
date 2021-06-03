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
Clase Barrios con la cual se realizan las funciones DML de la tabla "barrios"
**/

class Barrios{
	
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

	require_once("../Motordb/conexiondb.php");
	$stmt = Conexion::conexiondb()->prepare("SELECT B.IdBarrio,
		                                            B.BarNom FROM barrios AS B
		                                            WHERE BarrioEstado LIKE :BarrioEstado");

	$BarrioEstado="%";
	$stmt->bindParam(":BarrioEstado",$BarrioEstado,PDO::PARAM_STR);
    $stmt->execute();

?>