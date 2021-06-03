<?php
/**
Autor:
Software:
Versión: 1.0:
Tipo de proyecto:
Todos los derechos reservados 2020
Institución:
**/
#Archivo: Clase

class Permisos{

    protected $IdRolUsuario;
    protected $UserModulos;
    protected $MOD1;
    protected $MOD1I;
    protected $MOD1U;
    protected $MOD1D;
    protected $MOD1S;
    protected $MOD2;
    protected $MOD2I;
    protected $MOD2U;
    protected $MOD2D;
    protected $MOD2S;
    protected $MOD3;
    protected $MOD3I;
    protected $MOD3U;
    protected $MOD3D;
    protected $MOD3S;
    protected $MOD4;
    protected $MOD4I;
    protected $MOD4U;
    protected $MOD4D;
    protected $MOD4S;
    protected $RolFecReg;
    protected $RolHorReg;

    protected $Parametro;
	  protected $MetodoRowPer;
    protected $MetodoPerUsu;

	function __construct($Parametros){

        $this->IdRolUsuario= $Parametros["MO00"];
        $this->UserModulos= $Parametros["MO01"];
        $this->MOD1 = $Parametros["MO02"];
        $this->MOD1I = $Parametros["MO03"];
        $this->MOD1U = $Parametros["MO04"];
        $this->MOD1D = $Parametros["MO05"];
        $this->MOD1S = $Parametros["MO06"];
        $this->MOD2 = $Parametros["MO07"];
        $this->MOD2I = $Parametros["MO08"];
        $this->MOD2U = $Parametros["MO09"];
        $this->MOD2D = $Parametros["MO10"];
        $this->MOD2S = $Parametros["MO11"];
        $this->MOD3 = $Parametros["MO12"];
        $this->MOD3I = $Parametros["MO13"];
        $this->MOD3U = $Parametros["MO14"];
        $this->MOD3D = $Parametros["MO15"];
        $this->MOD3S = $Parametros["MO16"];
        $this->MOD4 = $Parametros["MO17"];
        $this->MOD4I = $Parametros["MO18"];
        $this->MOD4U = $Parametros["MO19"];
        $this->MOD4D = $Parametros["MO20"];
        $this->MOD4S = $Parametros["MO21"];
        $this->RolFecReg = $Parametros["MO22"];
        $this->MetodoPerUsu = $Parametros["MO23"];

        $this->Parametro    = $_GET["Parametro"];
        $this->MetodoRowPer = $_GET["MetodoRowPer"];
        $this->MetodoPerUsu = $_GET["MetodoPerUsu"];

	}

	public function verPermisos(){
    require_once("../Motordb/conexiondb.php");

    if($this->RolUsuario=='SUPER-ADMIN'){
      $this->IdEntidad="%";
    }else{
      $this->IdEntidad=$this->IdEntidad;
    }

    $stmt_per=  Conexion::conexiondb()->prepare("SELECT U.UsuNom,
                                                        U.UsuApe,
                                                        U.User,
                                                        US.IdRolUsuario,
                                                        US.UserModulos,
                                                        US.MOD1,
                                                        US.MOD1I,
                                                        US.MOD1U,
                                                        US.MOD1D,
                                                        US.MOD2,
                                                        US.MOD2I,
                                                        US.MOD2U,
                                                        US.MOD2D,
                                                        US.MOD3,
                                                        US.MOD3I,
                                                        US.MOD3U,
                                                        US.MOD3D,
                                                        US.MOD4,
                                                        US.MOD4I,
                                                        US.MOD4U,
                                                        US.MOD4D,
                                                        US.MOD4S,
                                                        US.RolFecReg,
                                                        US.RolHorReg
                                                        FROM usuarios AS U
  																											INNER JOIN _usuarios_modulos AS US
                                                        ON US.UserModulos=U.User");                                                     ;

    $stmt_per->bindParam(":IdRolUsuario",$this->IdRolUsuario,PDO::PARAM_STR);
    $stmt_per->execute();
      try{
	        	if ($stmt_per->rowCount()>0){
              include_once("../Forms/permisosUsuarios.php");
		        	while ($rowUsu = $stmt_per->fetch()){
		        		return;
		        	}
	        	}else{
	        		echo '<script>
                      document.addEventListener("DOMContentLoaded",
                      function(event){ swal({
                        type: "warning", title: "Error al cargar los Permisos",
                        showConfirmButton: true,
                        confirmButtonColor: "#6300C8",
                        confirmButtonText: "Aceptar"
                      }).then(function(result){
                          if (result.value) { top.window.location = "../Forms/MenuPrincipal.php?GDB=Retroceso"; } }) })
                    </script>';
	        	}
        	} catch (Exception $e) {
        		echo $e->getMessage();
        		die();
          }#Fin del cath
	}#Fin de la funcion para listar los permisos

    public function updatePermisos(){

        $stmt = Conexion::conexiondb()->prepare('UPDATE  _usuarios_modulos  SET
                                         MOD1 = :MOD1,
                                         MOD2 = :MOD2,
                                         MOD3 = :MOD3,
                                         MOD4 = :MOD4,
                                         WHERE UserModulos = :UserModulos');
        $stmt->bindParam(":MOD1",$this->MOD1,PDO::PARAM_STR);
        $stmt->bindParam(":MOD2",$this->MOD2,PDO::PARAM_STR);
        $stmt->bindParam(":MOD3",$this->MOD3,PDO::PARAM_STR);
        $stmt->bindParam(":MOD4",$this->MOD4,PDO::PARAM_STR);
        $stmt->execute();

        $CamposUpdate = "UPDATE `_usuarios_modulos` SET `MOD1`='$this->MOD1',
                                                        `MOD2`='$this->MOD2',
                                                        `MOD3`='$this->MOD3',
                                                        `MOD4`='$this->MOD4',
                                                         WHERE `IdMOD`=$this->IdMOD";

        require_once("../Motordb/conexiondb.php");
        $QueryCamposUpdate = mysql_query($CamposUpdate);

        try{
            if ($QueryCamposUpdate==true){
                    echo '<script>
                            document.addEventListener("DOMContentLoaded",
                            function(event){
                              swal({ type: "success", title: "Se han actualizado los permisos de usuario, para tomar los cambios debe iniciar sesion nuevamente",
                              showConfirmButton: true,
                              confirmButtonColor: "#6300C8",
                              confirmButtonText: "Aceptar"
                            }).then(function(result) {
                                if (result.value) { top.window.location = "../Forms/MenuPrincipal.php?CUS=Retroceso"; } }) })
                          </script>';
                }else{
                    echo '<script>
                            document.addEventListener("DOMContentLoaded",
                            function(event){
                              swal({ type: "warning", title: "Error al actualizar los permisos de usuario",
                              showConfirmButton: true,
                              confirmButtonColor: "#6300C8",
                              confirmButtonText: "Aceptar"}).then(function(result){
                                if (result.value) { top.window.location = "../Forms/MenuPrincipal.php?CUS=Retroceso"; } }) })
                          </script>';
                }
            } catch (Exception $e) {
                echo $e->getMessage();
                die();
            }#Fin del cath
    }#Fin de la funcion updatePermisos
}
