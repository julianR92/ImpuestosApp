<?php
/*
Autor:   Hugo Andres Pedroza Rodriguez-Julian Rincon
Software: SEM
Versión: 1.0:
Tipo de proyecto: SEM 123
Todos los derechos reservados 2020
OATIC
*/

/**
 * 
 */
require_once('../Motordb/conexiondb.php');

class RecuperarPassword
{

 function VerificarToken($id, $token){

  try{

 $request = "1";
 $stmt= Conexion::conexiondb()->prepare("SELECT U.IdUsuario,
                                                U.UsuarioEstado,
                                                U.UsuReqPass,
                                                U.UsuPasTok  FROM  usuarios AS U 
                                                WHERE U.IdUsuario = :idUser 
                                                AND U.UsuReqPass = :request 
                                                AND UsuPasTok = :token");

  $stmt->bindParam(":idUser",$id,PDO::PARAM_INT);
  $stmt->bindParam(":token",$token,PDO::PARAM_STR);
  $stmt->bindParam(":request",$request,PDO::PARAM_STR);
  $stmt->execute();
  $row = $stmt->fetch();

  if($stmt->rowCount()== 1){

    if($row[1] =='ACTIVO'){
    	return true;
    }else{
    	return false;
    } 
  }else{
  	return false;
  }
  $stmt->closeCursor();

 }catch (PDOException $e) {
                     
            echo $e->getMessage();
            die();

          }

 }#fin de funcion


    // FUNCION PARA TOKENS DE CONTRASEÑAS
  public function generateToken(){
    $gen = md5(uniqid(mt_rand(), false)); 
    return $gen;
  }	#fin de funcion
	
}#fin de clase









  ?>