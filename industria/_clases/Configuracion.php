<?php 
/**
Software:        Rastreo de vehiculos
Desarrollador:   Hugo Andres Pedroza Rodriguez
Versiòn:         1.0
Todos los derechos reservados 2020
@copyrigth
**/

#Clase para realizar el rastreo y segumiento de un vehiculo en tiempo real

$rolesUsu = "SELECT `IdTipoUsuario`,
                    `TipUsuNom`
                     FROM `_tipos_usuarios`
                         WHERE `IdTipoUsuario` LIKE '%'";

require_once("../Motordb/conexiondb.php");
$QueryrolesUsu = mysql_query($rolesUsu);

class Configuracion{

	protected $Parametro;
	protected $Parametro2;
	
	public function __construct($Parametros){
		
		$this->Parametro    = $Parametros["CN00"];
		$this->MetodoRowRol = $Parametros["RU01"];
		$this->MetodoRegRol = $Parametros["CR00"];

		$this->Rol   = $Parametros["RR01"];
		$this->RolDes= $Parametros["RR02"];
		$this->IdRMod= $Parametros["MO00"];
		$this->MOD1  = $Parametros["MOD1"];
		$this->MOD1I = $Parametros["MOD1I"];
		$this->MOD1U = $Parametros["MOD1U"];
		$this->MOD1D = $Parametros["MOD1D"];
		$this->MOD2  = $Parametros["MOD2"];
		$this->MOD2I = $Parametros["MOD2I"];
		$this->MOD2U = $Parametros["MOD2U"];
		$this->MOD2D = $Parametros["MOD2D"];
		$this->MOD3  = $Parametros["MOD3"];
		$this->MOD3I = $Parametros["MOD3I"];
		$this->MOD3U = $Parametros["MOD3U"];
		$this->MOD3D = $Parametros["MOD3D"];
		$this->MOD4  = $Parametros["MOD4"];
		$this->MOD4I = $Parametros["MOD4I"];
		$this->MOD4U = $Parametros["MOD4U"];
		$this->MOD4D = $Parametros["MOD4D"];
		$this->MOD5  = $Parametros["MOD5"];
		$this->MOD5I = $Parametros["MOD5I"];
		$this->MOD5U = $Parametros["MOD5U"];
		$this->MOD5D = $Parametros["MOD5D"];
		$this->MOD6  = $Parametros["MOD6"];
		$this->MOD6I = $Parametros["MOD6I"];
		$this->MOD6U = $Parametros["MOD6U"];
		$this->MOD6D = $Parametros["MOD6D"];
		$this->MOD7  = $Parametros["MOD7"];
		$this->MOD7I = $Parametros["MOD7I"];
		$this->MOD7U = $Parametros["MOD7U"];
		$this->MOD7D = $Parametros["MOD7D"];
		$this->MOD8  = $Parametros["MOD8"];
		$this->MOD8A = $Parametros["MOD8A"];
		$this->MOD8B = $Parametros["MOD8B"];
		$this->MOD8C = $Parametros["MOD8C"];
		$this->MOD8D = $Parametros["MOD8D"];
		$this->MOD8E = $Parametros["MOD8E"];
		$this->MOD8F = $Parametros["MOD8F"];
		$this->MOD8G = $Parametros["MOD8G"];
		$this->MOD9  = $Parametros["MOD9"];
		$this->MOD9A = $Parametros["MOD9A"];

		$this->Parametro2  = $_GET["Parametro2"];
		$this->MetodoRowPer= $_GET["MetodoRowPer"];

	}

	public function configuracion(){

		try {

			if ($this->Parametro==true){

					require_once("../Forms/Configuracion.php");
			}else{

				echo '<script>document.addEventListener("DOMContentLoaded", function(event){ swal({ type: "warning", title: "¡Vaya¡ Ocurrio un error al cargar configuraciones", showConfirmButton: true, confirmButtonColor: "#6300C8", confirmButtonText: "Aceptar" }).then(function(result){ if (result.value) { top.window.location = "../Forms/MenuPrincipal.php"; } }) })</script>';
			}
		} catch (Exception $e) {
			echo $e->getMessage();
			die();
		}
	}#Fin de la funcion Seguimiento

	public function cargarRegistroRol(){

		try {

			if ($this->MetodoRegRol=="true"){

					require_once("../Forms/Configuracion.php");
			}else{

				echo '<script>document.addEventListener("DOMContentLoaded", function(event){ swal({ type: "warning", title: "¡Vaya¡ Ocurrio un error al cargar configuraciones", showConfirmButton: true, confirmButtonColor: "#6300C8", confirmButtonText: "Aceptar" }).then(function(result){ if (result.value) { top.window.location = "../Forms/MenuPrincipal.php"; } }) })</script>';
			}
		} catch (Exception $e) {
			echo $e->getMessage();
			die();
		}
	}#Fin de la funcion cargarRegistroRol

	public function listarRolUsuario(){

		$camposRoles = "SELECT `IdTipoUsuario`,
		                       `TipUsuNom`,
		                       `TipUsuDes`
		                        FROM `_tipos_usuarios`
		                            WHERE `IdTipoUsuario` like '%'";

		require_once("../Motordb/conexiondb.php");
		$QueryCamposRoles = mysql_query($camposRoles);

		try {

			if ($QueryCamposRoles==true && $this->MetodoRowRol=="true"){

					require_once("../Forms/Configuracion.php");
					while ($RowUsuRol = mysql_fetch_array($QueryCamposRoles)) {
						return;
					}
					
			}else{

				echo '<script>document.addEventListener("DOMContentLoaded", function(event){ swal({ type: "warning", title: "¡Vaya¡ Ocurrio un error al cargar configuraciones", showConfirmButton: true, confirmButtonColor: "#6300C8", confirmButtonText: "Aceptar" }).then(function(result){ if (result.value) { top.window.location = "../Forms/MenuPrincipal.php"; } }) })</script>';
			}
		} catch (Exception $e) {
			echo $e->getMessage();
			die();
		}
	}#Fun de la funcion listarRolUsuario

	public function insertRol(){

	    $insertRol="INSERT INTO `_tipos_usuarios`(`TipUsuNom`,`TipUsuDes`,`MOD1`,`MOD1I`,`MOD1U`,`MOD1D`,`MOD2`,`MOD2I`,`MOD2U`,`MOD2D`,`MOD3`,`MOD3I`,`MOD3U`,`MOD3D`,`MOD4`,`MOD4I`,`MOD4U`,`MOD4D`,`MOD5`,`MOD5I`,`MOD5U`,`MOD5D`,`MOD6`,`MOD6I`,`MOD6U`,`MOD6D`,`MOD7`,`MOD7I`,`MOD7U`,`MOD7D`,`MOD8`,`MOD8A`,`MOD8B`,`MOD8C`,`MOD8D`,`MOD8E`,`MOD8F`,`MOD8G`,`MOD9`,`MOD9A`,`RolFecReg`,`RolHorReg`) VALUES ('$this->Rol','$this->RolDes','$this->MOD1','$this->MOD1I','$this->MOD1U','$this->MOD1D','$this->MOD2','$this->MOD2I','$this->MOD2U','$this->MOD2D','$this->MOD3','$this->MOD3I','$this->MOD3U','$this->MOD3D','$this->MOD4','$this->MOD4I','$this->MOD4U','$this->MOD4D','$this->MOD5','$this->MOD5I','$this->MOD5U','$this->MOD5D','$this->MOD6','$this->MOD6I','$this->MOD6U','$this->MOD6D','$this->MOD7','$this->MOD7I','$this->MOD7U','$this->MOD7D','$this->MOD8','$this->MOD8A','$this->MOD8B','$this->MOD8C','$this->MOD8D','$this->MOD8E','$this->MOD8F','$this->MOD8G','$this->MOD9','$this->MOD9A', CURDATE(), CURTIME())";

		require_once("../Motordb/conexiondb.php");
		$QueryinsertRol = mysql_query($insertRol);

		try {

			if ($QueryinsertRol==true){

				echo '<script>document.addEventListener("DOMContentLoaded", function(event){ swal({ type: "success", title: "Se ha creado un nuevo rol exitosamente", showConfirmButton: true, confirmButtonColor: "#6300C8", confirmButtonText: "Aceptar" }).then(function(result){ if (result.value) { top.window.location = "../Forms/MenuPrincipal.php?CNF=Retroceso"; } }) })</script>';
					
			}else{

				echo '<script>document.addEventListener("DOMContentLoaded", function(event){ swal({ type: "warning", title: "¡Vaya¡ Ocurrio un error al crear nuevo rol", showConfirmButton: true, confirmButtonColor: "#6300C8", confirmButtonText: "Aceptar" }).then(function(result){ if (result.value) { top.window.location = "../Forms/MenuPrincipal.php"; } }) })</script>';
			}
		} catch (Exception $e) {
			echo $e->getMessage();
			die();
		}
	}#Fin de la funcion insertrol

	public function verPermisos(){

		$Permisos = "SELECT `TipUsuNom`, `TipUsuDes`, `MOD1`, `MOD1I`, `MOD1U`, `MOD1D`, `MOD2`, `MOD2I`, `MOD2U`, `MOD2D`, `MOD3`, `MOD3I`, `MOD3U`, `MOD3D`, `MOD4`, `MOD4I`, `MOD4U`, `MOD4D`, `MOD5`, `MOD5I`, `MOD5U`, `MOD5D`, `MOD6`, `MOD6I`, `MOD6U`, `MOD6D`, `MOD7`, `MOD7I`, `MOD7U`, `MOD7D`, `MOD8`, `MOD8A`, `MOD8B`, `MOD8C`, `MOD8D`, `MOD8E`, `MOD8F`, `MOD8G`, `MOD9`, `MOD9A`, `IdTipoUsuario` FROM `_tipos_usuarios` WHERE `IdTipoUsuario`='$this->Parametro2'";

       require_once("../Motordb/conexiondb.php");
       $QueryPermisos = mysql_query($Permisos);
       $countQueryPermisos = mysql_num_rows($QueryPermisos);

        try {

        	if ($countQueryPermisos===1 && $this->MetodoRowPer=="true"){
        	   
               while ($Row = mysql_fetch_array($QueryPermisos)) {
               	
               		require_once("../Forms/Configuracion.php");
               }

        	}else{

        		echo '<script>document.addEventListener("DOMContentLoaded", function(event){ swal({ type: "warning", title: "Error al cargar los Permisos", showConfirmButton: true, confirmButtonColor: "#6300C8", confirmButtonText: "Aceptar" }).then(function(result){ if (result.value) { top.window.location = "../Forms/MenuPrincipal.php?CNF=Retroceso"; } }) })</script>';
        	}

    	} catch (Exception $e) {
    		echo $e->getMessage();
    		die();
    	}#Fin del cath
	}#Fin de la funcion para listar los permisos

	public function updateRol(){

        $CamposUpdate = "UPDATE `_tipos_usuarios` SET `TipUsuDes`='$this->RolDes',
                                                       `MOD1` ='$this->MOD1',
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
						                                WHERE `IdTipoUsuario`=$this->IdRMod";

        require_once("../Motordb/conexiondb.php");
        $QueryCamposUpdate = mysql_query($CamposUpdate);

        try{

            if ($QueryCamposUpdate==true){

                    echo '<script>document.addEventListener("DOMContentLoaded", function(event){ swal({ type: "success", title: "Se han actualizado los privilegios para el Rol", showConfirmButton: true, confirmButtonColor: "#6300C8", confirmButtonText: "Aceptar" }).then(function(result){ if (result.value) { top.window.location = "../Forms/MenuPrincipal.php?CNF=Retroceso"; } }) })</script>';
                    #echo " $CamposUpdate";

                }else{
               
                    echo '<script>document.addEventListener("DOMContentLoaded", function(event){ swal({ type: "warning", title: "Error al actualizar los privilegios del rol", showConfirmButton: true, confirmButtonColor: "#6300C8", confirmButtonText: "Aceptar" }).then(function(result){ if (result.value) { top.window.location = "../Forms/MenuPrincipal.php?CNF=Retroceso"; } }) })</script>';

                }

            } catch (Exception $e) {
                echo $e->getMessage();
                die();
            }#Fin del cath
    }#Fin de la funcion updatePermisos 
}#Fin de la clase Configuracion
?>