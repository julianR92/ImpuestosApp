<?php
/*
Autor:   Hugo Andres Pedroza Rodriguez
Software: 
Versi�n: 1.0:
Tipo de proyecto: 
Todos los derechos reservados 2020
Instituci�n:
*/

class Establecimientos{


	
	function __construct($Parametros){
		
		#$this->EstTipDoc    = $Parametros["EC01"];
		$this->Placa        = $Parametros["EC02"];
		$this->NIT          = $Parametros["EC03"];
		$this->MetodoBuscar = $Parametros["EC04"];

		$this->MetodoDPlaca     = $Parametros["MetodoDPlaca"];
		$this->Parametro        = $Parametros["Parametro"];
		$this->MetodoRegistrado = $_GET["MetodoRegistrado"];

		$this->EstRazSoc   = $Parametros["RE01"];
		$this->EstTipIde   = $Parametros["RE02"];
		$this->EstNIT      = $Parametros["RE03"];
		$this->EstPlaca    = $Parametros["RE04"];
		$this->PlacaEstado = $Parametros["RE05"];
		$this->EstTipDom   = $Parametros["RE06"];
		$this->EstDesActEco= $Parametros["RE07"];
		$this->SectorId    = $Parametros["RE09"];
		$this->EstCodCiiu  = $Parametros["RE10"];
		$this->EstDir      = $Parametros["Direccion"];
		$this->EstBarrio   = $Parametros["DD10"];
		$this->EstCor      = $Parametros["RE11"];
		$this->EstNumTel   = $Parametros["RE12"];
		$this->EstReg      = $Parametros["RE13"];
		$this->EstPatEst   = $Parametros["RE14"];
		$this->EstIngApr   = $Parametros["RE15"];
		$this->EstCanEmp   = $Parametros["RE16"];
		$this->EstArea     = $Parametros["RE17"];
	}

	public function consultaEstablecimiento(){

		$campos = "SELECT M.MaeNum,
		                  M.MaeProCod,
		                  M.ProTipCod,
		                  M.MaeProNom,
		                  M.MaeDir,
		                  M.MaeTel,
		                  M.MaeLocEst,
		                  M.MaeBarCod,
		                  M.MaeZonCod,
		                  M.MaeLar,
		                  M.MaeAnc,
		                  M.MaeAlt,
		                  M.MaeLarCor,
		                  M.MaeAncCor,
		                  M.MaeAltCor,
		                  M.MaeCapIni,
		                  M.MaeFecRen,
		                  M.MaeNroResC,
		                  M.MaeFecResC,
		                  M.MaeObs,
		                  M.MaeFecUltP,
		                  M.MaeValUltP,
		                  M.MaeRecUltP,
		                  M.MaeNegPub,
		                  M.MaeSayEst,
		                  M.MaeFecIni,
		                  M.MaeEstAct,
		                  M.MaeDes,
		                  M.MaeOfiEst,
		                  M.MaeHor,
		                  M.MaeExeEst,
		                  M.MaeEjeEst,
		                  M.MaeFecCam,
		                  M.MaeMatMer,
		                  M.MaeAcuPag,
		                  M.MaeEstChe,
		                  M.MaePerDes,
		                  M.MaeSubDes,
		                  M.MAePerHas,
		                  M.MaeSubHas,
		                  M.MaeActBaz,
		                  M.MaeComCod,
		                  M.MaePazSal,
		                  M.MaeDirNot,
		                  M.MaeTipPro,
		                  M.MaeClaAct,
		                  M.MaePreNum,
		                  M.MaeExped,
		                  M.MaeMult,
		                  M.MaeCos,
		                  M.MaeEstCen,
		                  M.MaeEstFis,
		                  M.MaeEstDian,
		                  M.MaeDclVal,
		                  M.MaeSwiTra,
		                  M.MaeSwiCor,
		                  M.MaeFecIn2,
		                  M.MaeReqE,
		                  M.MaeLiqR,
		                  M.MaeTel2,
		                  M.MaeEspc,
		                  M.MaeApl2,
		                  M.MaeApl1,
		                  M.MaeNom2,
		                  M.MaeNom1,
		                  M.MaeFecOfi,
		                  M.MaeSwiRaz,
		                  M.MaeSwiAutT,
		                  M.MaeEstLey,
		                  M.MaeSwiReu,
		                  M.MaeEstAlt,
		                  M.MaeFecCamE,
		                  M.MaeFecFicT,
		                  M.MaeNomAux,
		                  M.MaeEstCru,
		                  M.MaeSwiCoa,
		                  M.MaeEstr,
		                  M.MaeStra,
		                  M.MaeSwiAct,
		                  M.MaeFecAct,
		                  M.MaeNomJur,
		                  M.MaeCorEle,
		                  M.MaeSwiPri,
		                  M.MaeCodCiu,
		                  M.MaeCodVer,
		                  M.MaeClaCon,
		                  M.MaeDigVer,
		                  M.MaeTipPer,
		                  M.MaeOtrPer,
		                  M.MaeOtrDoc,
		                  M.MaeNroEst,
		                  M.MaeNroResO,
		                  M.MaeFecResO,
		                  M.MaeSwiDEc
					      FROM IMPPRUEBAS.dbo.MAEIC M WHERE M.MaeNum LIKE '$this->Placa'";

		$campos2= "SELECT M.MaeNum,
		                  M.MaeProCod,
		                  M.ProTipCod,
		                  M.MaeProNom,
		                  M.MaeDir,
		                  M.MaeTel,
		                  M.MaeLocEst,
		                  M.MaeBarCod,
		                  M.MaeZonCod,
		                  M.MaeLar,
		                  M.MaeAnc,
		                  M.MaeAlt,
		                  M.MaeLarCor,
		                  M.MaeAncCor,
		                  M.MaeAltCor,
		                  M.MaeCapIni,
		                  M.MaeFecRen,
		                  M.MaeNroResC,
		                  M.MaeFecResC,
		                  M.MaeObs,
		                  M.MaeFecUltP,
		                  M.MaeValUltP,
		                  M.MaeRecUltP,
		                  M.MaeNegPub,
		                  M.MaeSayEst,
		                  M.MaeFecIni,
		                  M.MaeEstAct,
		                  M.MaeDes,
		                  M.MaeOfiEst,
		                  M.MaeHor,
		                  M.MaeExeEst,
		                  M.MaeEjeEst,
		                  M.MaeFecCam,
		                  M.MaeMatMer,
		                  M.MaeAcuPag,
		                  M.MaeEstChe,
		                  M.MaePerDes,
		                  M.MaeSubDes,
		                  M.MAePerHas,
		                  M.MaeSubHas,
		                  M.MaeActBaz,
		                  M.MaeComCod,
		                  M.MaePazSal,
		                  M.MaeDirNot,
		                  M.MaeTipPro,
		                  M.MaeClaAct,
		                  M.MaePreNum,
		                  M.MaeExped,
		                  M.MaeMult,
		                  M.MaeCos,
		                  M.MaeEstCen,
		                  M.MaeEstFis,
		                  M.MaeEstDian,
		                  M.MaeDclVal,
		                  M.MaeSwiTra,
		                  M.MaeSwiCor,
		                  M.MaeFecIn2,
		                  M.MaeReqE,
		                  M.MaeLiqR,
		                  M.MaeTel2,
		                  M.MaeEspc,
		                  M.MaeApl2,
		                  M.MaeApl1,
		                  M.MaeNom2,
		                  M.MaeNom1,
		                  M.MaeFecOfi,
		                  M.MaeSwiRaz,
		                  M.MaeSwiAutT,
		                  M.MaeEstLey,
		                  M.MaeSwiReu,
		                  M.MaeEstAlt,
		                  M.MaeFecCamE,
		                  M.MaeFecFicT,
		                  M.MaeNomAux,
		                  M.MaeEstCru,
		                  M.MaeSwiCoa,
		                  M.MaeEstr,
		                  M.MaeStra,
		                  M.MaeSwiAct,
		                  M.MaeFecAct,
		                  M.MaeNomJur,
		                  M.MaeCorEle,
		                  M.MaeSwiPri,
		                  M.MaeCodCiu,
		                  M.MaeCodVer,
		                  M.MaeClaCon,
		                  M.MaeDigVer,
		                  M.MaeTipPer,
		                  M.MaeOtrPer,
		                  M.MaeOtrDoc,
		                  M.MaeNroEst,
		                  M.MaeNroResO,
		                  M.MaeFecResO,
		                  M.MaeSwiDEc
					      FROM IMPPRUEBAS.dbo.MAEIC M WHERE M.MaeProCod LIKE '%$this->NIT'";

	    require_once("../Motordb/conexiondb_sql.php");

	    if ($this->Placa>=1) {

	    	$stmt = sqlsrv_query($conexion,$campos);
	    	$row_count = sqlsrv_has_rows($stmt);


	    }elseif ($this->NIT>=1){

	    	$stmt = sqlsrv_query($conexion,$campos2);
	    	$row_count = sqlsrv_has_rows($stmt);

	    }
		
		try {

            if ($row_count>0 || $row_count==0 && $this->MetodoBuscar=="true"){
                
                require_once("../Forms/AdminEstablecimientos.php");
                while ($rowDatos = sqlsrv_fetch_array($stmt,SQLSRV_FETCH_ASSOC)):

                endwhile;

            }else{

                 echo "<script>alert('Error al buscar el establecimento);</script>";
                 echo "<script>window.location.href='../Forms/MenuPrincipal.php';</script>";
            }
        }

        catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
		
	}#Fin de la funcion consultaEstablecimiento

	
	public function selectEstablecimiento(){

		$campos = "SELECT M.MaeNum,
		                  M.MaeProCod,
		                  M.ProTipCod,
		                  M.MaeProNom,
		                  M.MaeDir,
		                  M.MaeTel,
		                  M.MaeLocEst,
		                  M.MaeBarCod,
		                  M.MaeZonCod,
		                  M.MaeLar,
		                  M.MaeAnc,
		                  M.MaeAlt,
		                  M.MaeLarCor,
		                  M.MaeAncCor,
		                  M.MaeAltCor,
		                  M.MaeCapIni,
		                  M.MaeFecRen,
		                  M.MaeNroResC,
		                  M.MaeFecResC,
		                  M.MaeObs,
		                  M.MaeFecUltP,
		                  M.MaeValUltP,
		                  M.MaeRecUltP,
		                  M.MaeNegPub,
		                  M.MaeSayEst,
		                  M.MaeFecIni,
		                  M.MaeEstAct,
		                  M.MaeDes,
		                  M.MaeOfiEst,
		                  M.MaeHor,
		                  M.MaeExeEst,
		                  M.MaeEjeEst,
		                  M.MaeFecCam,
		                  M.MaeMatMer,
		                  M.MaeAcuPag,
		                  M.MaeEstChe,
		                  M.MaePerDes,
		                  M.MaeSubDes,
		                  M.MAePerHas,
		                  M.MaeSubHas,
		                  M.MaeActBaz,
		                  M.MaeComCod,
		                  M.MaePazSal,
		                  M.MaeDirNot,
		                  M.MaeTipPro,
		                  M.MaeClaAct,
		                  M.MaePreNum,
		                  M.MaeExped,
		                  M.MaeMult,
		                  M.MaeCos,
		                  M.MaeEstCen,
		                  M.MaeEstFis,
		                  M.MaeEstDian,
		                  M.MaeDclVal,
		                  M.MaeSwiTra,
		                  M.MaeSwiCor,
		                  M.MaeFecIn2,
		                  M.MaeReqE,
		                  M.MaeLiqR,
		                  M.MaeTel2,
		                  M.MaeEspc,
		                  M.MaeApl2,
		                  M.MaeApl1,
		                  M.MaeNom2,
		                  M.MaeNom1,
		                  M.MaeFecOfi,
		                  M.MaeSwiRaz,
		                  M.MaeSwiAutT,
		                  M.MaeEstLey,
		                  M.MaeSwiReu,
		                  M.MaeEstAlt,
		                  M.MaeFecCamE,
		                  M.MaeFecFicT,
		                  M.MaeNomAux,
		                  M.MaeEstCru,
		                  M.MaeSwiCoa,
		                  M.MaeEstr,
		                  M.MaeStra,
		                  M.MaeSwiAct,
		                  M.MaeFecAct,
		                  M.MaeNomJur,
		                  M.MaeCorEle,
		                  M.MaeSwiPri,
		                  M.MaeCodCiu,
		                  M.MaeCodVer,
		                  M.MaeClaCon,
		                  M.MaeDigVer,
		                  M.MaeTipPer,
		                  M.MaeOtrPer,
		                  M.MaeOtrDoc,
		                  M.MaeNroEst,
		                  M.MaeNroResO,
		                  M.MaeFecResO,
		                  M.MaeSwiDEc
					      FROM IMPPRUEBAS.dbo.MAEIC M WHERE M.MaeNum LIKE '$this->Parametro'";

	    require_once("../Motordb/conexiondb_sql.php");
	    $stmt = sqlsrv_query($conexion,$campos);
	    $row_count = sqlsrv_has_rows($stmt);

		try {

            if ($row_count>=0 && $this->MetodoDPlaca=="true"){
                
                
                while ($rowDatos = sqlsrv_fetch_array($stmt,SQLSRV_FETCH_ASSOC)):
                	require_once("../Forms/AdminEstablecimientos.php");
                endwhile;

            }else{

                 echo "<script>alert('Error al buscar el establecimento);</script>";
                 echo "<script>window.location.href='../Forms/MenuPrincipal.php';</script>";
            }
        }

        catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
	}#Fin de la funcion selectEstablecimiento

	public function nuevoEstablecimiento(){

		require_once("../Forms/AdminEstablecimientos.php");

	}#Fin de la funcion nuevoEstablecimiento

	public function insertEstablecimiento(){
       
		require_once("../Motordb/conexiondb.php");
		$stmt= Conexion::conexiondb()->prepare("INSERT INTO `establecimientos`(`EstRazSoc`,
												                               `EstTipIde`,
												                               `EstNIT`,
												                               `Placa`,
												                               `PlacaEstado`,
												                               `EstTipDom`,
												                               `EstDesActEco`,
												                               `SectorId`,
												                               `EstCodCiiu`,
												                               `EstDir`,
												                               `EstMun`,
												                               `Departamento`,
												                               `EstBarrio`,
												                               `EstCor`,
												                               `EstNumTel`,
												                               `EstReg`,
												                               `EstPatEst`,
												                               `EstIngApr`,
												                               `EstCanEmp`,
												                               `EstArea`,
												                               `Latitud`,
												                               `Longitud`,
												                               `EstFecReg`,
												                               `EstHorReg`)
												                                VALUES (:EstRazSoc,
									                                                    :EstTipIde,
									                                                    :EstNIT,
									                                                    :Placa,
									                                                    :PlacaEstado,
									                                                    :EstTipDom,
									                                                    :EstDesActEco,
									                                                    :SectorId,
									                                                    :EstCodCiiu,
									                                                    :EstDir,
									                                                    'Bucaramanga',
									                                                    'Santander',
									                                                    :EstBarrio,
									                                                    :EstCor,
									                                                    :EstNumTel,
									                                                    :EstReg,
									                                                    :EstPatEst,
									                                                    :EstIngApr,
									                                                    :EstCanEmp,
									                                                    :EstArea,
									                                                    '12345',
									                                                    '67890',
									                                                    CURDATE(),
									                                                    CURTIME())");
		$stmt->bindParam(":EstRazSoc",$this->EstRazSoc,PDO::PARAM_STR);
		$stmt->bindParam(":EstTipIde",$this->EstTipIde,PDO::PARAM_STR);
		$stmt->bindParam(":EstNIT",$this->EstNIT,PDO::PARAM_STR);
		$stmt->bindParam(":Placa",$this->EstPlaca,PDO::PARAM_STR);
		$stmt->bindParam(":PlacaEstado",$this->PlacaEstado,PDO::PARAM_STR);
		$stmt->bindParam(":EstTipDom",$this->EstTipDom,PDO::PARAM_STR);
		$stmt->bindParam(":EstDesActEco",$this->EstDesActEco,PDO::PARAM_STR);
		$stmt->bindParam(":SectorId",$this->SectorId,PDO::PARAM_STR);
		$stmt->bindParam(":EstCodCiiu",$this->EstCodCiiu,PDO::PARAM_STR);
		$stmt->bindParam(":EstDir",$this->EstDir,PDO::PARAM_STR);
		$stmt->bindParam(":EstBarrio",$this->EstBarrio,PDO::PARAM_STR);
		$stmt->bindParam(":EstCor",$this->EstCor,PDO::PARAM_STR);
		$stmt->bindParam(":EstNumTel",$this->EstNumTel,PDO::PARAM_STR);
		$stmt->bindParam(":EstReg",$this->EstReg,PDO::PARAM_STR);
		$stmt->bindParam(":EstPatEst",$this->EstPatEst,PDO::PARAM_STR);
		$stmt->bindParam(":EstIngApr",$this->EstIngApr,PDO::PARAM_STR);
		$stmt->bindParam(":EstCanEmp",$this->EstCanEmp,PDO::PARAM_STR);
		$stmt->bindParam(":EstArea",$this->EstArea,PDO::PARAM_STR);

        $stmt->execute();
        $row_count = $stmt->rowCount();

        try {

            if ($row_count>0){
                
                 echo "<script>alert('Establecimiento registrado con exito');</script>";
                 echo "<script>window.location.href='../Forms/Main.php';</script>";

            }else{

                 echo "<script>alert('Error al registrar el establecimiento');</script>";
                 echo "<script>window.location.href='../Forms/Main.php';</script>";
            }
        }

        catch (PDOException $e) {
            echo $e->getMessage();
            die();

        }#Fin del try catch

	}#Fin de la funcion insertEstablecimiento

	public function establecimientosRegistrados(){

		require_once("../Motordb/conexiondb.php");
		$stmt= Conexion::conexiondb()->prepare("SELECT `IdEstablecimiento`, `EstRazSoc`, `EstTipIde`, `EstNIT`, `Placa`, `PlacaEstado`, `EstTipDom`, `EstDesActEco`, `SectorId`, `EstCodCiiu`, `EstDir`, `EstMun`, `Departamento`, `EstBarrio`, `EstCor`, `EstNumTel`, `EstReg`, `EstPatEst`, `EstIngApr`, `EstCanEmp`, `EstArea`, `Latitud`, `Longitud`, `EstFecReg`, `EstHorReg` FROM `establecimientos`");

	    $stmt->execute();

        try {

            if ($this->MetodoRegistrado=="true"){
                
                 require_once("../Forms/AdminEstablecimientos.php");
                 while ($rowDatos = $stmt->fetch()):
                 	return;
                 endwhile;

            }else{

                 echo "<script>alert('Error al consultar establecimiento');</script>";
                 echo "<script>window.location.href='../Forms/Main.php';</script>";
            }
        }

        catch (PDOException $e) {
            echo $e->getMessage();
            die();

        }#Fin del try catch

	}
}
?>