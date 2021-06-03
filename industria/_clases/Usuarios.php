<?php
/*
Autor:   Hugo Andres Pedroza Rodriguez
Software: Sistema de riego con técnicas de automatización y control
Versión: 1.0:
Tipo de proyecto: Tesis de grado
Todos los derechos reservados 2020
Institución: Corporación universitaria de ciencia y desarrollo Uniciencia
*/
#Archivo: Clase usuarios donde se realizan las instrucciones DML para la tabla
require_once("../Motordb/conexiondb.php");
require_once('../_clases/Password.php');

class Usuarios{

	protected $UsuNom;
	protected $UsuApe;
	protected $UsuTipDoc;
	protected $UsuNumDoc;
	protected $UsuDirRes;
	protected $UsuEmail;
	protected $UsuTelFij;
	protected $UsuTelMov;
	protected $UsuRol;
	protected $UsuFecReg;
	protected $UsuHorReg;
	protected $User;
	protected $Password;

		function __construct($Parametros){
				#parametros que me istancian objetos de la funcion
				$this->Nombre        = $Parametros["US00"];
				$this->Apellido      = $Parametros["US01"];
				$this->TipDocumento  = $Parametros["US02"];
				$this->NumDocumento  = $Parametros["US03"];
				$this->Direccion     = $Parametros["US04"];
				$this->Correo        = $Parametros["US05"];
				$this->TelefonoFijo  = $Parametros["US06"];
				$this->TelefonoMovil = $Parametros["US07"];
				$this->RolUsuario    = $Parametros["US08"];
				$this->User          = $Parametros["US09"];
				$this->Password      = $Parametros["US10"];
				$this->UsuarioEstado = $Parametros["US11"];
				$this->EntidadId     = $Parametros["US12"];
				$this->UpdMethod     = $Parametros["US13"];
				$this->PassConf      = $Parametros["US14"];
				$this->IdUsuario     = $Parametros["US15"];
				$this->CurrentUser   = $Parametros["US16"];

				$this->Parametro    = $_GET["Parametro"];
				$this->RolParam     = $_GET["Rol"];
				$this->Metodo       = $_GET["Metodo"];
				$this->UserDelete   = $_GET["User"];
		}#Fin del constructorin del constructor

	  public function insertUsuario(){

	    	$stmt = Conexion::conexiondb()->prepare("SELECT User, UsuNumDoc FROM usuarios WHERE User=:User OR UsuNumDoc=:UsuNumDoc");
	    	$stmt->bindParam(":User",$this->User,PDO::PARAM_STR);
	    	$stmt->bindParam(":UsuNumDoc",$this->NumDocumento,PDO::PARAM_STR);
	    	$stmt->execute();
	    	$row_user = $stmt->fetch();
	    	$stmt->closeCursor();
	    	try{
			    	if ($row_user[0]==$this->User || $row_user[1] === $this->NumDocumento) {
		                  	echo '<script>document.addEventListener("DOMContentLoaded", function(event){
				                		swal({ type: "warning",
				                		title: "Usuario '.$this->User.' ya se encuentra registrado",
				                		showConfirmButton: true,
				                		confirmButtonColor: "#004884",
				                		confirmButtonText: "Aceptar"
				                	    }).then(function(result){
				                	    	if (result.value) {
				                	    		top.window.location = "../Forms/MainPrincipal.php";
				                	    	} }) })</script>';
				        }else{
								     $PassHash = Password::hash($this->Password);
									   $stmt2 = Conexion::conexiondb()->prepare("INSERT INTO usuarios (EntidadId,

									   $stmt2->bindParam(":EntidadId",$this->EntidadId,PDO::PARAM_STR);
															$stmt2->bindParam(":UsuNom",$this->Nombre,PDO::PARAM_STR);
															$stmt2->bindParam(":UsuApe",$this->Apellido,PDO::PARAM_STR);
															$stmt2->bindParam(":UsuTipDoc",$this->TipDocumento,PDO::PARAM_STR);
															$stmt2->bindParam(":UsuNumDoc",$this->NumDocumento,PDO::PARAM_STR);
															$stmt2->bindParam(":UsuDirRes",$this->Direccion,PDO::PARAM_STR);
															$stmt2->bindParam(":UsuEmail",$this->Correo,PDO::PARAM_STR);
															$stmt2->bindParam(":UsuTelFij",$this->TelefonoFijo,PDO::PARAM_STR);
															$stmt2->bindParam(":UsuTelMov",$this->TelefonoMovil,PDO::PARAM_STR);
															$stmt2->bindParam(":UsuRol",$this->IdRolUsuario,PDO::PARAM_STR);
															$stmt2->bindParam(":User",$this->User,PDO::PARAM_STR);
															$stmt2->bindParam(":Password",$PassHash,PDO::PARAM_STR);
															$stmt2->bindParam(":UsuarioEstado",$this->UsuarioEstado,PDO::PARAM_STR);
															$stmt2->execute();
												#var_dump($stmt);
								if ($stmt2->rowCount()==1) {
										$stmt2->closeCursor();
						             	#asignar el rol del usuario
				   					$stmt_rol = Conexion::conexiondb()->prepare("SELECT RU.IdRolUsuario,

$stmt_rol->bindParam(":IdRolUsuario",$this->IdRolUsuario,PDO::PARAM_STR);
							  $stmt_rol->execute();
						    $row_rol = $stmt_rol->fetch();
						    if($stmt_rol->rowCount()==1){
		                  $stmt_rol->closeCursor();
		     							$stmt3 =Conexion::conexiondb()->prepare('INSERT INTO _usuarios_modulos
		     	                                             (UserModulos,
												                                 MOD1,
												                                 MOD1I,
												                                 MOD1U,
												                                 MOD1D,
												                                 MOD1S,
												                                 MOD2,
												                                 MOD2I,
												                                 MOD2U,
												                                 MOD2D,
												                                 MOD2S,
												                                 MOD3,
												                                 MOD3I,
												                                 MOD3U,
												                                 MOD3D,
												                                 MOD3S,
												                                 MOD4,
												                                 MOD4I,
												                                 MOD4U,
												                                 MOD4D,
												                                 MOD4S,
												                                 RolFecReg,
									                                 			 RolHorReg)
																												 VALUES (:UserModulos,
									                                                    :MOD1,
									                                                    :MOD1I,
									                                                    :MOD1U,
									                                                    :MOD1D,
									                                                    :MOD1S,
									                                                    :MOD2,
									                                                    :MOD2I,
									                                                    :MOD2U,
									                                                    :MOD2D,
									                                                    :MOD2S,
									                                                    :MOD3,
									                                                    :MOD3I,
									                                                    :MOD3U,
									                                                    :MOD3D,
									                                                    :MOD3S,
									                                                    :MOD4,
									                                                    :MOD4I,
									                                                    :MOD4U,
									                                                    :MOD4D,
									                                                    :MOD4S,
									                                                    CURDATE(),
									                                                    CURTIME())');
		                       $stmt3->bindParam(":UserModulos",$this->User,PDO::PARAM_STR);
										       $stmt3->bindParam(":MOD1",$row_rol[3],PDO::PARAM_STR);
										       $stmt3->bindParam(":MOD1I",$row_rol[4],PDO::PARAM_STR);
										       $stmt3->bindParam(":MOD1U",$row_rol[5],PDO::PARAM_STR);
										       $stmt3->bindParam(":MOD1D",$row_rol[6],PDO::PARAM_STR);
										       $stmt3->bindParam(":MOD1S",$row_rol[7],PDO::PARAM_STR);
										       $stmt3->bindParam(":MOD2",$row_rol[8],PDO::PARAM_STR);
										       $stmt3->bindParam(":MOD2I",$row_rol[9],PDO::PARAM_STR);
										       $stmt3->bindParam(":MOD2U",$row_rol[10],PDO::PARAM_STR);
										       $stmt3->bindParam(":MOD2D",$row_rol[11],PDO::PARAM_STR);
										       $stmt3->bindParam(":MOD2S",$row_rol[12],PDO::PARAM_STR);
										       $stmt3->bindParam(":MOD3",$row_rol[13],PDO::PARAM_STR);
										       $stmt3->bindParam(":MOD3I",$row_rol[14],PDO::PARAM_STR);
										       $stmt3->bindParam(":MOD3U",$row_rol[15],PDO::PARAM_STR);
										       $stmt3->bindParam(":MOD3D",$row_rol[16],PDO::PARAM_STR);
										       $stmt3->bindParam(":MOD3S",$row_rol[17],PDO::PARAM_STR);
										       $stmt3->bindParam(":MOD4",$row_rol[18],PDO::PARAM_STR);
										       $stmt3->bindParam(":MOD4I",$row_rol[19],PDO::PARAM_STR);
										       $stmt3->bindParam(":MOD4U",$row_rol[20],PDO::PARAM_STR);
										       $stmt3->bindParam(":MOD4D",$row_rol[21],PDO::PARAM_STR);
										       $stmt3->bindParam(":MOD4S",$row_rol[22],PDO::PARAM_STR);
										       $stmt3->execute();

							       if($stmt3->rowCount()==1){
							       		$stmt3->closeCursor();
			                        echo '<script>document.addEventListener("DOMContentLoaded", function(event){
					                		swal({ type: "success",
					                		title: "Usuario registrado con exito",
					                		showConfirmButton: true,
					                		confirmButtonColor: "#004884",
					                		confirmButtonText: "Aceptar",
					                		timer: 10000,
					                	    }).then(function(result){
					                	    	if (result.value) {
					                	    		top.window.location = "../Forms/MainPrincipal.php";
					                	    	}else{
					                	    		top.window.location = "../Forms/MainPrincipal.php";
					                	    	} }) })</script>';
							       }else{
							       			echo '<script>document.addEventListener("DOMContentLoaded", function(event){
						                		swal({ type: "error",
						                		title: "Ocurrio un problema al cargar los permisos del usuario: '.$this->User.' comunicate con el administrador",
						                		showConfirmButton: true,
						                		confirmButtonColor: "#004884",
						                		confirmButtonText: "Aceptar"
						                	  }).then(function(result){
						                	  if (result.value) {
						                	  top.window.location = "../Forms/MainPrincipal.php";
						                	  } }) })</script>';
						                }
						    }else{
						     				echo '<script>document.addEventListener("DOMContentLoaded", function(event){
					                		swal({ type: "error",
					                		title: "Ocurrio un problema al asignar permisos del usuario: '.$this->User.' comunicate con el administrador",
					                		showConfirmButton: true,
					                		confirmButtonColor: "#004884",
					                		confirmButtonText: "Aceptar"
					                	  }).then(function(result){
					                	  if (result.value) {
					                	  top.window.location = "../Forms/MainPrincipal.php";
					                	  } }) })</script>';
						   }
					   }else{
					       	echo '<script>document.addEventListener("DOMContentLoaded", function(event){
					              swal({ type: "error",
					              title: "Ocurrio un problema al crear Usuario: '.$this->User.' comunicate con el administrador",
					              showConfirmButton: true,
					              confirmButtonColor: "#004884",
					              confirmButtonText: "Aceptar"
					              }).then(function(result){
					              if (result.value) {
					              top.window.location = "../Forms/MainPrincipal.php";
					              } }) })</script>';
					 }
	     }#fin de la validacion  para crear usuarios
		}catch(Exception $e){
			echo $e->getMessage();
			die();
		}# fin del try para crear usuario
	}#fin de la funcion insertUsuario
	public function selectUsuario(){
			if($this->RolUsuario=='SUPER-ADMIN'){
				$this->IdEntidad="%";
			}else{
				$this->IdEntidad=$this->IdEntidad;
			}
			$stmt=  Conexion::conexiondb()->prepare("SELECT U.IdUsuario,
																										  U.EntidadId,
																										  U.UsuNom,
																										  U.UsuApe,
																										  U.UsuTipDoc,
																										  U.UsuNumDoc,
																										  U.UsuDirRes,
																										  U.UsuEmail,
																										  U.UsuTelFij,
																										  U.UsuTelMov,
																										  U.UsuRol,
																										  U.UsuFecReg,
																										  U.UsuHorReg,
																										  U.User,
																										  U.Password,
																										  U.UsuarioEstado,
																										  E.IdEntidad,
																										  E.EntNumDoc,
																										  E.EntRazSoc,
																										  E.EntTipDoc,
																										  E.EntDir,
																										  E.EntTelFij,
																										  E.EntTelMov,
																										  E.EntEmail,
																										  E.EntidadEstado
																										  FROM usuarios AS U
																												  INNER JOIN entidades as E
																													ON E.IdEntidad=U.EntidadId
																												  WHERE U.EntidadId LIKE :IdEntidad");

				$stmt->bindParam(":IdEntidad",$this->IdEntidad,PDO::PARAM_STR);
        $stmt->execute();
          if ($stmt->rowCount()>0) {
	          	include_once("../Forms/adminUsuarios.php");
		        	while ($rowUsu = $stmt->fetch()){
		        		return;
		        	}
					}else{

            	echo '<script>document.addEventListener("DOMContentLoaded", function(event){
			                		swal({ type: "error",
			                		title: "Ocurrio un error al cargar los usuarios comunicate con el administrador",
			                		showConfirmButton: true,
			                		confirmButtonColor: "#004884",
			                		confirmButtonText: "Aceptar"
			                	    }).then(function(result){
			                	    	if (result.value) {
			                	    		top.window.location = "../Forms/MenuPrincipal.php";
			                	    	} }) })</script>';
            }
	}#Fin de la funcion selectUsuarios
	public function selectUpdateUser(){
      $stmt = Conexion::conexiondb()->prepare("SELECT U.IdUsuario,
																								      U.EntidadId,
																								      U.UsuNom,
																								      U.UsuApe,
																								      U.UsuTipDoc,
																								      U.UsuNumDoc,
																								      U.UsuDirRes,
																								      U.UsuEmail,
																								      U.UsuTelFij,
																								      U.UsuTelMov,
																								      U.UsuRol,
																								      U.UsuFecReg,
																								      U.UsuHorReg,
																								      U.User,
																								      U.Password,
																								      U.UsuarioEstado
																											FROM usuarios AS U
																											    WHERE U.IdUsuario=:IdUsuario");

	    $stmt->bindParam(":IdUsuario",$this->Parametro,PDO::PARAM_STR);
	    $stmt->execute();
	    $UpdateUser = "true";

	    if($stmt->rowCount()==1 && $this->Metodo=="UpdateUser"){
				$rowUser = $stmt->fetch();
	      include_once("../Forms/templateUpdateUser.php");
			}else if($stmt->rowCount()==1 && $this->Metodo=="UpdateRol"){
				$rowUser=$stmt->fetch();
				include_once("../Forms/templateUpdateUser.php");
			}else{
		     echo '<script>document.addEventListener("DOMContentLoaded", function(event){
					                		swal({ type: "error",
					                		title: "Ocurrio un error al consultar el usuario comunicate con el administrador",
					                		showConfirmButton: true,
					                		confirmButtonColor: "#004884",
					                		confirmButtonText: "Aceptar"
					                	    }).then(function(result){
					                	    	if (result.value) {
					                	    		top.window.location = "../Forms/MainPrincipal.php";
					                	    	} }) })</script>';
    	}
	}#Fin de la funcion SelectUpdate
		public function UpdateUsuario(){
			//print_r(var_dump($_POST));
			if($this->UpdMethod == 'UpdateRegister'){
				if($this->Password == $this->PassConf){
                  $passCifrado = $this->Password;
				}else{
                 $passCifrado = Password::hash($this->Password);
				}
				try{
						$stmt = Conexion::conexiondb()->prepare('UPDATE  usuarios  SET
																   					 UsuNom = :usuNom,
											                       UsuApe = :usuApe,
											                       UsuTipDoc = :usuTipDoc,
											                       UsuNumDoc = :usuNumDoc,
											                       UsuDirRes = :usuDir,
											                       UsuEmail  = :usuEmail,
											                       UsuTelFij = :usuTelFij,
											                       UsuTelMov = :usuMovil,
											                       User      = :user,
											                       Password  = :password
											                       WHERE IdUsuario = :idUser');

						$stmt->bindParam(":usuNom",$this->Nombre,PDO::PARAM_STR);
						$stmt->bindParam(":usuApe",$this->Apellido,PDO::PARAM_STR);
						$stmt->bindParam(":usuTipDoc",$this->TipDocumento,PDO::PARAM_STR);
						$stmt->bindParam(":usuNumDoc",$this->NumDocumento,PDO::PARAM_STR);
						$stmt->bindParam(":usuDir",$this->Direccion,PDO::PARAM_STR);
						$stmt->bindParam(":usuEmail",$this->Correo,PDO::PARAM_STR);
						$stmt->bindParam(":usuTelFij",$this->TelefonoFijo,PDO::PARAM_STR);
						$stmt->bindParam(":usuMovil",$this->TelefonoMovil,PDO::PARAM_STR);
						$stmt->bindParam(":user",$this->User,PDO::PARAM_STR);
						$stmt->bindParam(":password",$passCifrado,PDO::PARAM_STR);
						$stmt->bindParam(":idUser",$this->IdUsuario,PDO::PARAM_STR);
		        $stmt->execute();

		        if($stmt->rowCount()>=0){
			          $stmt->closeCursor();
			          $accion = "ACTUALIZACION DATOS DE USUARIO: ".$this->User;

			          $stmt2 = Conexion::conexiondb()->prepare("INSERT INTO _auditoria_usuarios
																	            	                   		(UsuResp,
																	                                    UsuAcc,
																	                                    UsuAfec,
																	                                    FecRegAud,
																	                                    HorRegAud)
																																			VALUES
																	                                     			(:user,
																	                                      		:accion,
																	                                      		:userAfectado,
																	                                      		CURDATE(),
																	                                      		CURTIME()
																	                                       		)");
								$stmt2->bindParam(":user",$this->CurrentUser,PDO::PARAM_STR);
								$stmt2->bindParam(":accion",$accion,PDO::PARAM_STR);
								$stmt2->bindParam(":userAfectado",$this->IdUsuario,PDO::PARAM_STR);
								$stmt2->execute();
				    		if ($stmt2->rowCount()==1) {
		              	echo '<script>document.addEventListener("DOMContentLoaded", function(event){
					                		swal({ type: "success",
					                		title: "Usuario '.$this->User.' actualizado con exito",
					                		showConfirmButton: true,
					                		confirmButtonColor: "#004884",
					                		confirmButtonText: "Aceptar"
					                	  }).then(function(result){
					                	    	if (result.value) {
					                	    		top.window.location = "../Forms/MainPrincipal.php";
					                	    	} }) })</script>';
				    		}else{
				    				echo '<script>document.addEventListener("DOMContentLoaded", function(event){
					                		swal({ type: "error",
					                		title: "Ocurrio un error al realizar la auditoria del usuario comunicate con el administrador",
					                		showConfirmButton: true,
					                		confirmButtonColor: "#004884",
					                		confirmButtonText: "Aceptar"
					                	    }).then(function(result){
					                	    	if (result.value) {
					                	    		top.window.location = "../Forms/MainPrincipal.php";
					                	    	} }) })</script>';
				    					}
		        }else{
		            echo '<script>document.addEventListener("DOMContentLoaded", function(event){
					                		swal({ type: "error",
					                		title: "Ocurrio un error al editar el usuario comunicate con el administrador",
					                		showConfirmButton: true,
					                		confirmButtonColor: "#004884",
					                		confirmButtonText: "Aceptar"
					                	    }).then(function(result){
					                	    	if (result.value) {
					                	    		top.window.location = "../Forms/MainPrincipal.php";
					                	    	} }) })</script>';
		                }
				}catch(PDOException $e){
				   echo $e->getMessage();
				   die();
				}
		}else if($this->UpdMethod == 'UpdateRol'){
			try{
			$stmt = Conexion::conexiondb()->prepare('UPDATE  usuarios  SET
														   UsuRol = :usurol
									                       WHERE IdUsuario = :idUser');

			$stmt->bindParam(":usurol",$this->IdRolUsuario ,PDO::PARAM_STR);
			$stmt->bindParam(":idUser",$this->IdUsuario,PDO::PARAM_STR);
			$stmt->execute();

			if ($stmt->rowCount()>=0) {
				  $stmt->closeCursor();
			$accion = "ACTUALIZACION ROL DE USUARIO: ".$this->User;

		     $stmt2 = Conexion::conexiondb()->prepare("INSERT INTO _auditoria_usuarios
									            	                   (UsuResp,
									                                    UsuAcc,
									                                    UsuAfec,
									                                    FecRegAud,
									                                    HorRegAud) VALUES
									                                     (:user,
									                                      :accion,
									                                      :userAfectado,
									                                      CURDATE(),
									                                      CURTIME()
									                                       )");
          $stmt2->bindParam(":user",$this->CurrentUser,PDO::PARAM_STR);
					$stmt2->bindParam(":accion",$accion,PDO::PARAM_STR);
		    	$stmt2->bindParam(":userAfectado",$this->IdUsuario,PDO::PARAM_STR);
		    	$stmt2->execute();

		    if ($stmt2->rowCount()==1) {

              echo '<script>document.addEventListener("DOMContentLoaded", function(event){
			                		swal({ type: "success",
			                		title: "Usuario '.$this->User.' actualizado con exito",
			                		showConfirmButton: true,
			                		confirmButtonColor: "#004884",
			                		confirmButtonText: "Aceptar"
			                	    }).then(function(result){
			                	    	if (result.value) {
			                	    		top.window.location = "../Forms/MainPrincipal.php";
			                	    	} }) })</script>';
		    }else{
		    			echo '<script>document.addEventListener("DOMContentLoaded", function(event){
			                		swal({ type: "error",
			                		title: "Ocurrio un error al realizar la auditoria del usuario comunicate con el administrador",
			                		showConfirmButton: true,
			                		confirmButtonColor: "#004884",
			                		confirmButtonText: "Aceptar"
			                	    }).then(function(result){
			                	    	if (result.value) {
			                	    		top.window.location = "../Forms/MainPrincipal.php";
			                	    	} }) })</script>';
		    			}
			}else{
						echo '<script>document.addEventListener("DOMContentLoaded", function(event){
			                		swal({ type: "error",
			                		title: "Ocurrio un error al editar el usuario comunicate con el administrador",
			                		showConfirmButton: true,
			                		confirmButtonColor: "#004884",
			                		confirmButtonText: "Aceptar"
			                	    }).then(function(result){
			                	    	if (result.value) {
			                	    		top.window.location = "../Forms/MainPrincipal.php";
			                	    	} }) })</script>';
			}
		}catch(PDOException $e){
			   echo $e->getMessage();
			   die();
			}
		}
}#Fin de la funcion UpdateUsuario

	public function EstadoUsuario(){
		try{
       $stmt = Conexion::conexiondb()->prepare("SELECT U.User,
												       U.UsuarioEstado
												          FROM usuarios AS U
												             WHERE U.IdUsuario = :idUser");
       $stmt->bindParam(":idUser",$this->Parametro,PDO::PARAM_STR);
       $stmt->execute();
       if ($stmt->rowCount()== 1) {
       	   $rowUser = $stmt->fetch();
       	    if($rowUser[1] == 'ACTIVO'){
              $Estado = 'INACTIVO';
               $stmt2 = Conexion::conexiondb()->prepare("UPDATE usuarios
                                                           SET UsuarioEstado=:estado
                                                           WHERE IdUsuario = :idUser");
                $stmt2->bindParam(":estado",$Estado,PDO::PARAM_STR);
                $stmt2->bindParam(":idUser",$this->Parametro,PDO::PARAM_STR);
                $stmt2->execute();
                if($stmt2->rowCount()==1){
                   echo '<script>document.addEventListener("DOMContentLoaded", function(event){
			                		swal({ type: "info",
			                		title: "Se ha <strong>INACTIVADO</strong> el Usuario '.$rowUser[0].'",
			                		showConfirmButton: true,
			                		confirmButtonColor: "#004884",
			                		confirmButtonText: "Aceptar",
			                	    }).then(function(result){
			                	    	if (result.value) {
			                	    		top.window.location = "../Forms/MainPrincipal.php";
			                	    	} }) })</script>';

                   $stmt2->closeCursor();

                }else{

                   	echo '<script>document.addEventListener("DOMContentLoaded", function(event){
			                		swal({ type: "error",
			                		title: "Ocurrio un error al Editar estado de Usuario",
			                		showConfirmButton: true,
			                		confirmButtonColor: "#004884",
			                		confirmButtonText: "Aceptar"
			                	    }).then(function(result){
			                	    	if (result.value) {
			                	    		top.window.location = "../Forms/MainPrincipal.php";
			                	    	} }) })</script>';
                }
       	    }else{
       	       $Estado = 'ACTIVO';
               $stmt3 = Conexion::conexiondb()->prepare("UPDATE usuarios
                                                           SET UsuarioEstado=:estado
                                                           WHERE IdUsuario = :idUser");
                $stmt3->bindParam(":estado",$Estado,PDO::PARAM_STR);
                $stmt3->bindParam(":idUser",$this->Parametro,PDO::PARAM_STR);
                $stmt3->execute();
                 if($stmt3->rowCount()==1){
                 	echo '<script>document.addEventListener("DOMContentLoaded", function(event){
			                		swal({ type: "info",
			                		title: "Se ha <strong>ACTIVADO</strong> el Usuario '.$rowUser[0].'",
			                		showConfirmButton: true,
			                		confirmButtonColor: "#004884",
			                		confirmButtonText: "Aceptar",
			                	    }).then(function(result){
			                	    	if (result.value) {
			                	    		top.window.location = "../Forms/MainPrincipal.php";
			                	    	} }) })</script>';
                   $stmt3->closeCursor();
                   }else{
                   	echo '<script>document.addEventListener("DOMContentLoaded", function(event){
			                		swal({ type: "error",
			                		title: "Ocurrio un error al Editar estado de Usuario",
			                		showConfirmButton: true,
			                		confirmButtonColor: "#004884",
			                		confirmButtonText: "Aceptar"
			                	    }).then(function(result){
			                	    	if (result.value) {
			                	    		top.window.location = "../Forms/MainPrincipal.php";
			                	    	} }) })</script>';
                   }
       	    }
       }else{
       	echo '<script>document.addEventListener("DOMContentLoaded", function(event){
			                		swal({ type: "error",
			                		title: "Ocurrio un error al seleccionar el usuario comunicate con el administrador",
			                		showConfirmButton: true,
			                		confirmButtonColor: "#004884",
			                		confirmButtonText: "Aceptar"
			                	    }).then(function(result){
			                	    	if (result.value) {
			                	    		top.window.location = "../Forms/MainPrincipal.php";
			                	    	} }) })</script>';
       }
       $stmt->closeCursor();
      }catch(PDOException $e){
			   echo $e->getMessage();
			   die();
			}
	}#fin de funcion estado

	public function updatePermisoUsuario(){

        $CamposUpdate= "UPDATE `_usuarios_modulos` SET `MOD1` ='$this->MOD1',
						                               `MOD1I`='$this->MOD1I',
						                               `MOD1U`='$this->MOD1U',
						                               `MOD1D`='$this->MOD1D',
						                               `MOD2` ='$this->MOD2',
						                               `MOD2I`='$this->MOD2I',
						                               `MOD2U`='$this->MOD2U',
						                               `MOD2D`='$this->MOD2D',
						                               `MOD3` ='$this->MOD3',
						                               `MOD3I`='$this->MOD3I',
						                               `MOD3U`='$this->MOD3U',
						                               `MOD3D`='$this->MOD3D',
						                               `MOD4` ='$this->MOD4',
						                               `MOD4I`='$this->MOD4I',
						                               `MOD4U`='$this->MOD4U',
						                               `MOD4D`='$this->MOD4D',
						                               `MOD5` ='$this->MOD5',
						                               `MOD5I`='$this->MOD5I',
						                               `MOD5U`='$this->MOD5U',
						                               `MOD5D`='$this->MOD5D',
						                               `MOD6` ='$this->MOD6',
						                               `MOD6I`='$this->MOD6I',
						                               `MOD6U`='$this->MOD6U',
						                               `MOD6D`='$this->MOD6D',
						                               `MOD7` ='$this->MOD7',
						                               `MOD7I`='$this->MOD7I',
						                               `MOD7U`='$this->MOD7U',
						                               `MOD7D`='$this->MOD7D',
						                               `MOD8` ='$this->MOD8',
						                               `MOD8A`='$this->MOD8A',
						                               `MOD8B`='$this->MOD8B',
						                               `MOD8C`='$this->MOD8C',
						                               `MOD8D`='$this->MOD8D',
						                               `MOD8E`='$this->MOD8E',
						                               `MOD8F`='$this->MOD8F',
						                               `MOD8G`='$this->MOD8G',
						                               `MOD9` ='$this->MOD9',
						                               `MOD9A`='$this->MOD9A'
						                                WHERE `IdUsuarioModulos`=$this->IdUMod";

        require_once("../Motordb/conexiondb.php");
        $QueryCamposUpdate = mysql_query($CamposUpdate);

        try{

            if ($QueryCamposUpdate==true){

                    echo '<script>document.addEventListener("DOMContentLoaded", function(event){ swal({ type: "success", title: "Se han actualizado los permisos de usuario, para tomar los cambios debe iniciar sesion nuevamente", showConfirmButton: true, confirmButtonColor: "#6300C8", confirmButtonText: "Aceptar" }).then(function(result){ if (result.value) { top.window.location = "../Forms/MenuPrincipal.php?CUS=Retroceso"; } }) })</script>';
                    #echo " $CamposUpdate";

                }else{

                    echo '<script>document.addEventListener("DOMContentLoaded", function(event){ swal({ type: "warning", title: "Error al actualizar los permisos de usuario", showConfirmButton: true, confirmButtonColor: "#6300C8", confirmButtonText: "Aceptar" }).then(function(result){ if (result.value) { top.window.location = "../Forms/MenuPrincipal.php?CUS=Retroceso"; } }) })</script>';
                    #echo " $CamposUpdate";
                }

            } catch (Exception $e) {
                echo $e->getMessage();
                die();
            }#Fin del cath
    }#Fin de la funcion updatePermisos


   public function DeleteUser(){

    	try{

    		$stmt4 = Conexion::conexiondb()->prepare('DELETE FROM `usuarios`
    	                                            WHERE IdUsuario = :idUser');

    		$stmt4->bindParam(":idUser",$this->Parametro,PDO::PARAM_STR);
    	    $stmt4->execute();

    	    if ($stmt4) {

    	    	$accion = "ELIMINACION DE USUARIO: ".$this->UserDelete;

    	    	$stmt5 = Conexion::conexiondb()->prepare("INSERT INTO _auditoria_usuarios
								            	                   (UsuResp,
								                                    UsuAcc,
								                                    UsuAfec,
								                                    FecRegAud,
								                                    HorRegAud) VALUES
								                                     (:user,
								                                      :accion,
								                                      :userAfectado,
								                                      CURDATE(),
								                                      CURTIME()
								                                               )");

	            $stmt5->bindParam(":user",$this->RolParam,PDO::PARAM_STR);
				$stmt5->bindParam(":accion",$accion,PDO::PARAM_STR);
			    $stmt5->bindParam(":userAfectado",$this->Parametro,PDO::PARAM_STR);
			    $stmt5->execute();

			    if ($stmt5==true) {

	              echo '<script>document.addEventListener("DOMContentLoaded", function(event){
				                		swal({ type: "success",
				                		title: "Usuario '.$this->User.' eliminado con exito",
				                		showConfirmButton: true,
				                		confirmButtonColor: "#004884",
				                		confirmButtonText: "Aceptar"
				                	    }).then(function(result){
				                	    	if (result.value) {
				                	    		top.window.location = "../Forms/MainPrincipal.php";
				                	    	} }) })</script>';

			    }else{

			    	echo '<script>document.addEventListener("DOMContentLoaded", function(event){
				                		swal({ type: "error",
				                		title: "Ocurrio un error al realizar la auditoria del usuario comunicate con el administrador",
				                		showConfirmButton: true,
				                		confirmButtonColor: "#004884",
				                		confirmButtonText: "Aceptar"
				                	    }).then(function(result){
				                	    	if (result.value) {
				                	    		top.window.location = "../Forms/MainPrincipal.php";
				                	    	} }) })</script>';

			    }

    	    }else{

    	    	echo '<script>document.addEventListener("DOMContentLoaded", function(event){
				                		swal({ type: "error",
				                		title: "Ocurrio un error al eliminar el usuario comunicate con el administrador",
				                		showConfirmButton: true,
				                		confirmButtonColor: "#004884",
				                		confirmButtonText: "Aceptar"
				                	    }).then(function(result){
				                	    	if (result.value) {
				                	    		top.window.location = "../Forms/MainPrincipal.php";
				                	    	} }) })</script>';
    	    }# fin auditoria

    	}catch(PDOException $e){
			   echo $e->getMessage();
			   die();


			}



    } # fin clase delete usuarios


}#Fin de la clase
?>
