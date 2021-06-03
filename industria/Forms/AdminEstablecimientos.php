<?php
/*
Autor:   
Software: 
VersiÛn: 1.0:
Tipo de proyecto: 
Todos los derechos reservados 2020
InstituciÛn: CorporaciÛn universitaria de ciencia y desarrollo Uniciencia
*/

require_once '../Frame/Header.htm';
include_once("MenuPrincipal.php");
?>
<!DOCTYPE html>
<html>
<!-- Content Wrapper. Contains page content-->
<div class="content-wrapper" style="padding-top:50px !important; padding-left: 20px !important;">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6" style="align-self:flex-end;">
          <ol class="breadcrumb float-sm-left">
            <li class="breadcrumb-item"><a href="../Forms/MenuPrincipal.php">Home</a></li>
            <li class="breadcrumb-item active"><b>Admin Establecimientos</b></li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <?php if($this->MetodoBuscar=="true"):?>
  <section class="content">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header" style="background-color:#3366CC"><h6 style="color: #FFFFFF;">Registros encontrados</h6></div>
              <div class="card-body">
                <div class="row pb-4">
                  <div class="col-md-3 col-md-offset-9 ml-auto col-sm-12 col-12">
                    <a href="../controller/controlador.php?Parametro=true&A=Establecimientos&C=Establecimientos&F=nuevoEstablecimiento"><button type="button" class="btn" style="color: #FFF; background-color: #069169; float: right;"><i class="fas  fa-user-plus">&nbsp;</i>Nuevo Registro</button></a>
                  </div>
                  </div>
                  <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
                    <thead>
                      <tr>
                        <th>Placa</th>
                        <th>NIT</th>
                        <th>Raz√≥n Social</th>
                        <th>Direcci√≥n</th>
                        <th>Telefono</th>
                        <th id="thOption" style="width:130px;">Opciones</th>
                      </tr>
                      </thead>
                      <?php while ($rowDatos = sqlsrv_fetch_array($stmt,SQLSRV_FETCH_ASSOC)):?>
                        <tr style="font-size:0.9em">
                          <td><?php echo $rowDatos['MaeNum'];?></td>
                          <td><?php echo $rowDatos['MaeProCod'];?></td>
                          <td><?php echo $rowDatos['MaeProNom'];?></td>
                          <td><?php echo $rowDatos['MaeDir'];?></td>
                          <td><?php echo $rowDatos['MaeTel'];?></td>
                          <td align="center">
                            <a href="../controller/controlador.php?Parametro=<?php echo $rowDatos['MaeNum']?>&MetodoDPlaca=true&A=Establecimientos&C=Establecimientos&F=selectEstablecimiento"><img src="../Frame/img/Archivo.png" style="width:40px; border-radius:50px;"></a>
                          </td>
                        </tr>
                      <?php endwhile;?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
         </div>
  </section>
  <?php endif;?>

  <?php if($this->MetodoRegistrado=="true"):?>
  <section class="content">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header" style="background-color:#3366CC"><h6 style="color: #FFFFFF;">Registros encontrados</h6></div>
              <div class="card-body">
                <div class="row pb-4">
                  <div class="col-md-3 col-md-offset-9 ml-auto col-sm-12 col-12">
                    <a href="../controller/controlador.php?Parametro=true&A=Establecimientos&C=Establecimientos&F=nuevoEstablecimiento"><button type="button" class="btn" style="color: #FFF; background-color: #069169; float: right;"><i class="fas  fa-user-plus">&nbsp;</i>Nuevo Registro</button></a>
                  </div>
                  </div>
                  <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
                    <thead>
                      <tr>
                        <th>Placa</th>
                        <th>NIT</th>
                        <th>Raz√≥n Social</th>
                        <th>Direcci√≥n</th>
                        <th>Telefono</th>
                      </tr>
                      </thead>
                      <?php while ($rowDatos = $stmt->fetch()):?>
                        <tr style="font-size:0.9em">
                          <td><?php echo $rowDatos['4'];?></td>
                          <td><?php echo $rowDatos['3'];?></td>
                          <td><?php echo $rowDatos['1'];?></td>
                          <td><?php echo $rowDatos['10'];?></td>
                          <td><?php echo $rowDatos['15'];?></td>
                        </tr>
                      <?php endwhile;?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
         </div>
  </section>
  <?php endif;?>

  <?php if($_GET["MetodoDPlaca"]=="true" || $_GET["Parametro"]=="true"):?>
  <section>
    <div class="card card-dark" style="width: 96% !important;">
      <div class="card-header">
        <h3 class="card-title"><b>Informaci√≥n</b></h3>
        <a href="../Forms/Main.php"><button style="width:200px;float:right" class="form-control btn btn-warning" class="float-md-right"><i class="glyphicon glyphicon-plus"></i><b>Regresar</b></button></a>
      </div>
      <div class="card-body">
        <form role="form" action="../controller/controlador.php" method="post" enctype="multipart/form-data">
          <div class="row">

            <div class="col-md-12">
              <div class="form-group">
                <label class="input-control">Raz√≥n social *</label>
                <textarea type="tetx" class="form-control" name="RE01" id="RE01" title="Razon social del establecimiento"><?php echo $rowDatos['MaeProNom']?></textarea>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label class="input-control" for="RE02">Tipo de identificaci√≥n *</label>
                <select class="form-control" name="RE02" id="RE02" required="" title="Seleccione el tipo de documento de identificacion">
                  <option value="<?php echo $rowDatos['ProTipCod']?>"><?php echo $rowDatos['ProTipCod'];?></option>
                  <option value="">Elija una opcion</option>
                  <option value="N">NIT</option>
                  <option value="C">Cedula de ciudadania</option>
                </select>
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label class="input-control">NIT *</label>
                <input type="tetx" name="RE03" id="RE03" value="<?php echo $rowDatos['MaeProCod']?>" class="form-control" title="NIT">
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label class="input-control">Placa</label>
                <input type="tetx" readonly="readonly"  name="RE04" id="RE04" value="<?php echo $rowDatos['MaeNum']?>" class="form-control" title="Placa">
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label class="input-control">Estado Placa</label>
                <input type="tetx" readonly="readonly"  name="RE05" id="RE05" value="<?php echo $rowDatos['MaeEstAct']?>" class="form-control" title="Estado del establecimiento, si esta activo o inactivo">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label class="input-control" for="RE06">Tipo domicilio *</label>
                <select class="form-control" name="RE06" id="RE06" required="" title="Seleccione el tipo de domicilio al que pertenece el establecimiento">
                  <option value="<?php echo $rowDatos['MaeSwiPri']?>"><?php echo $rowDatos['MaeSwiPri'];?></option>
                  <option value="">Elija una opcion</option>
                  <option value="1">Principal</option>
                  <option value="0">Sucursal</option>
                </select>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label class="input-control">Descripci√≥n actividad economica *</label>
                <textarea type="tetx"  name="RE07" id="RE07" class="form-control" title="Razon social del establecimiento"><?php echo $rowDatos['MaeDes']?></textarea>
              </div>
            </div>

            <div class="col-md-6">
              <label style="color:#111111;" class="input" for="RE09" style="font-family: 'Barlow', sans-serif;">Sector econ√≥mico</label>
              <select class="form-control" name="RE09" id="RE09">
                <option value="">Elija una opcion</option>
                  <?php include("../_clases/Sectores.php"); 
                        while ($RowSec=$stmtSector->fetch()):?>
                        <option value="<?php echo $RowSec["0"]?>"><?php echo $RowSec["1"]?></option>
                  <?php endwhile; ?>
              </select>
            </div>
            <div class="col-md-6">
              <label style="color:#111111;" class="input" for="RE10" style="font-family: 'Barlow', sans-serif;">Nombre CIIU</label>
              <select class="form-control"  name="RE10" id="RE10">
                <option value="">Elija un opci√≥n</option>
              </select>
            </div>

            <!--Division de direccion-->
            <hr>
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"><br>
              <div class="form-group">
               <label style="color:#111111;" class="input" for="DD01" style="font-family: 'Barlow', sans-serif;"> Calle - Carrera *</label>
               <select name="DD01" id="DD01" type="text" class="form-control input-md" required="required" title="Selecciona el tipo de indicaciÛn inicial para la direcciÛn que desea ingresar">
                <option value="">Elija</option>
                <option value="C">Calle</option>
                <option value="K">Carrera</option>
                <option value="A">Avenida</option>
                <option value="ANILLO">Anillo</option>
                <option value="D">Diagonal</option>
                <option value="CIR">Circunvalar</option>
                <option value="T">Transversal</option>
                <option value="BL">Bulevar</option>
                <option value="CS">Casa</option>
                <option value="MZ">Manzana</option>
              </select>
            </div>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"><br>
            <div class="form-group">
             <label style="color:#111111;" class="input" for="DD02" style="font-family: 'Barlow', sans-serif;"># - Nombre * </label>
             <input id="DD02" name="DD02" type="text" class="form-control" maxlength="20" required="required" title="En este campo se deber· digitar n˙mero o nombre seg˙n corresponda a la selecciÛn en el campo anterior, te recomendamos observar el campo de visualizaciÛn que se encuentra al final de este mÛdulo para organizar tu direcciÛn correctamente." onkeypress="return NumDoc(event)" onchange="aMayusculas(this.value,this.id)">
           </div>
         </div>
         <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"><br>
          <div class="form-group">
           <label style="color:#111111;" class="input" for="DD03" style="font-family: 'Barlow', sans-serif;">Letra </label>
           <select id="DD03" name="DD03" type="text" class="form-control input-md" title="Selecciona una letra si tu indicaciÛn de direcciÛn en el campo anterior contiene esta opciÛn, si no la posee dÈjala en blanco">
            <option value=""></option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="E">E</option>
            <option value="F">F</option>
            <option value="G">G</option>
            <option value="H">H</option>
            <option value="I">H</option>
            <option value="J">J</option>
            <option value="L">L</option>
            <option value="M">M</option>
            <option value="N">N</option>
            <option value="O">O</option>
            <option value="P">P</option>
            <option value="Q">Q</option>
            <option value="R">R</option>
            <option value="S">S</option>
            <option value="T">T</option>
            <option value="W">W</option>
            <option value="X">X</option>
            <option value="Y">Y</option>
            <option value="Z">Z</option>
            <option value="AW">AW</option>
            <option value="BW">BW</option>
            <option value="BN">BN</option>
            <option value="CW">CW</option>
            <option value="DW">DW</option>
            <option value="AN">AN</option>
            <option value="NA">NA</option>
            <option value="NB">NB</option>
            <option value="BN">BN</option>
            <option value="NC">NC</option>
            <option value="CN">CN</option>
            <option value="BIS">BIS</option>
            <option value="A BIS">A BIS</option>
            <option value="B BIS">B BIS</option>
            <option value="C BIS">C BIS</option>
            <option value="D BIS">D BIS</option>
            <option value="N-BIS">N BIS</option>
            <option value="OCC">OCC</option>
            <option value="A OCC">B OCC</option>
            <option value="B OCC">B OCC</option>
            <option value="C OCC">C OCC</option>
            <option value="D OCC">D OCC</option>
            <option value="BQ">BLOQUE</option>
            <option value="MZ">MANZANA</option>
            <option value="CS">CASA</option>
            <option value="AP">APARTAMENTO</option>
            <option value="LT">LOTE</option>
            <option value="LO">LOCAL</option>
            <option value="PEAT">PEATONAL</option>
            <option value="N PEAT">N PEATONAL</option>
            <option value="NA PEAT">NB PEATONAL</option>
            <option value="NB PEAT">NA PEATONAL</option>
            <option value="A PEAT GUAY OCC CS">A PEATONAL GUAYACANES OCC</option>
            <option value="B PEAT GUAY OCC CS">B PEATONAL GUAYACANES OCC</option>
            <option value="C PEAT GUAY OCC CS">C PEATONAL GUAYACANES OCC</option>
            <option value="D PEAT GUAY OCC CS">D PEATONAL GUAYACANES OCC</option>
          </select>
        </div>
      </div>
      <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12"><br>
        <div class="form-group">
         <label style="color:#111111;" class="input" for="DD04" style="font-family: 'Barlow', sans-serif;"># * </label>
         <input id="DD04" name="DD04" type="text" class="form-control" maxlength="4" title="Digita en este campo el primer n˙mero de tu direcciÛn" onkeypress="return NumDoc(event)" required="required">
       </div>
     </div>
     <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"><br>
      <div class="form-group">
       <label style="color:#111111;" class="input" for="DD05" style="font-family: 'Barlow', sans-serif;">Letra </label>
       <select id="DD05" name="DD05" type="text" class="form-control input-md" title="Selecciona una letra si tu indicaciÛn de direcciÛn en el campo anterior contiene esta opciÛn, si no la posee dÈjala en blanco">
        <option value=""></option>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        <option value="D">D</option>
        <option value="E">E</option>
        <option value="F">F</option>
        <option value="G">G</option>
        <option value="H">H</option>
        <option value="I">H</option>
        <option value="J">J</option>
        <option value="L">L</option>
        <option value="M">M</option>
        <option value="N">N</option>
        <option value="O">O</option>
        <option value="P">P</option>
        <option value="Q">Q</option>
        <option value="R">R</option>
        <option value="S">S</option>
        <option value="T">T</option>
        <option value="W">W</option>
        <option value="X">X</option>
        <option value="Y">Y</option>
        <option value="Z">Z</option>
        <option value="AW">AW</option>
        <option value="BW">BW</option>
        <option value="BN">BN</option>
        <option value="CW">CW</option>
        <option value="DW">DW</option>
        <option value="AN">AN</option>
        <option value="NA">NA</option>
        <option value="NB">NB</option>
        <option value="BN">BN</option>
        <option value="NC">NC</option>
        <option value="CN">CN</option>
        <option value="BIS">BIS</option>
        <option value="A BIS">A BIS</option>
        <option value="B BIS">B BIS</option>
        <option value="C BIS">C BIS</option>
        <option value="D BIS">D BIS</option>
        <option value="N-BIS">N BIS</option>
        <option value="OCC">OCC</option>
        <option value="A OCC">B OCC</option>
        <option value="B OCC">B OCC</option>
        <option value="C OCC">C OCC</option>
        <option value="D OCC">D OCC</option>
        <option value="BQ">BLOQUE</option>
        <option value="MZ">MANZANA</option>
        <option value="CS">CASA</option>
        <option value="AP">APARTAMENTO</option>
        <option value="LT">LOTE</option>
        <option value="LO">LOCAL</option>
        <option value="PEAT">PEATONAL</option>
        <option value="N PEAT">N PEATONAL</option>
        <option value="NA PEAT">NB PEATONAL</option>
        <option value="NB PEAT">NA PEATONAL</option>
        <option value="A PEAT GUAY OCC CS">A PEATONAL GUAYACANES OCC</option>
        <option value="B PEAT GUAY OCC CS">B PEATONAL GUAYACANES OCC</option>
        <option value="C PEAT GUAY OCC CS">C PEATONAL GUAYACANES OCC</option>
        <option value="D PEAT GUAY OCC CS">D PEATONAL GUAYACANES OCC</option>
      </select>
    </div>
  </div>
  <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12"><br>
    <div class="form-group">
     <label style="color:#111111;" class="input" for="DD06" style="font-family: 'Barlow', sans-serif;"># * </label>
     <input id="DD06" name="DD06" type="text" class="form-control" maxlength="4" title="Digita en este campo el primer n˙mero de tu direcciÛn" onkeypress="return NumDoc(event)">
   </div>
   </div>
   <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"><br>
    <div class="form-group">
     <label style="color:#111111;" class="input" for="DD07" style="font-family: 'Barlow', sans-serif;">Letra </label>
     <select id="DD07" name="DD07" type="text" class="form-control input-md" title="Selecciona una letra si tu indicaciÛn de direcciÛn en el campo anterior contiene esta opciÛn, si no la posee dÈjala en blanco">
      <option value=""></option>
      <option value="A">A</option>
      <option value="B">B</option>
      <option value="C">C</option>
      <option value="D">D</option>
      <option value="E">E</option>
      <option value="F">F</option>
      <option value="G">G</option>
      <option value="H">H</option>
      <option value="I">H</option>
      <option value="J">J</option>
      <option value="L">L</option>
      <option value="M">M</option>
      <option value="N">N</option>
      <option value="O">O</option>
      <option value="P">P</option>
      <option value="Q">Q</option>
      <option value="R">R</option>
      <option value="S">S</option>
      <option value="T">T</option>
      <option value="W">W</option>
      <option value="X">X</option>
      <option value="Y">Y</option>
      <option value="Z">Z</option>
      <option value="AW">AW</option>
      <option value="BW">BW</option>
      <option value="BN">BN</option>
      <option value="CW">CW</option>
      <option value="DW">DW</option>
      <option value="AN">AN</option>
      <option value="NA">NA</option>
      <option value="NB">NB</option>
      <option value="BN">BN</option>
      <option value="NC">NC</option>
      <option value="CN">CN</option>
      <option value="BIS">BIS</option>
      <option value="A BIS">A BIS</option>
      <option value="B BIS">B BIS</option>
      <option value="C BIS">C BIS</option>
      <option value="D BIS">D BIS</option>
      <option value="N-BIS">N BIS</option>
      <option value="OCC">OCC</option>
      <option value="A OCC">B OCC</option>
      <option value="B OCC">B OCC</option>
      <option value="C OCC">C OCC</option>
      <option value="D OCC">D OCC</option>
      <option value="BQ">BLOQUE</option>
      <option value="MZ">MANZANA</option>
      <option value="CS">CASA</option>
      <option value="AP">APARTAMENTO</option>
      <option value="LT">LOTE</option>
      <option value="LO">LOCAL</option>
      <option value="PEAT">PEATONAL</option>
      <option value="N PEAT">N PEATONAL</option>
      <option value="NA PEAT">NB PEATONAL</option>
      <option value="NB PEAT">NA PEATONAL</option>
      <option value="A PEAT GUAY OCC CS">A PEATONAL GUAYACANES OCC</option>
      <option value="B PEAT GUAY OCC CS">B PEATONAL GUAYACANES OCC</option>
      <option value="C PEAT GUAY OCC CS">C PEATONAL GUAYACANES OCC</option>
      <option value="D PEAT GUAY OCC CS">D PEATONAL GUAYACANES OCC</option>
    </select>
  </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
     <label style="color:#111111;" class="input" for="DD08" style="font-family: 'Barlow', sans-serif;">Complemento </label>
     <input id="DD08" name="DD08" type="text" class="form-control" title="Complemento">
   </div>
  </div>

  <div class="col-lg-4 col-md-2 col-sm-12 col-xs-12">
    <div class="form-group">
      <label  style="color:#111111;" class="input" for="DD10" style="font-family: 'Barlow', sans-serif;">Barrio*</label>
      <select class="form-control" name="DD10" id="DD10" title="Selecciona en este campo el barrio de tu direcciÛn de correspondencia, si no registra tu barrio selecciona la opciÛn OTRO" required="required">
        <?php include("../_clases/Barrios.php");
              while ($RowBar=$stmt->fetch()):?>
              <option value="<?php echo $RowBar["1"]?>"><?php echo $RowBar["1"]?></option>
        <?php endwhile; ?>  
      </select>
    </div>
  </div>

  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><br>
    <div class="form-group">
     <input style="background-color: #004884; color: #FFFFFF; font-weight: bold; border-radius:8px;" name="Direccion" id="DD00" value="<?php echo $rowDatos['MaeDir']?>" type="text" class="form-control input-md" data-toggle="tooltip" title="Previsualizador de la direcciÛn introducida" data-delay='{"show":"30", "hide":"30"}' placeholder="Pre visualizador de direcciones" required="required">
   </div>
  </div><br><br>
  <!--Fin de la division de direcciones-->

  <div class="col-md-6">
    <div class="form-group">
      <label class="input-control">Correo *</label>
      <input type="email"  name="RE11" id="RE11" value="<?php echo $rowDatos['MaeCorEle']?>" class="form-control" title="Numero de identificaciÛn">
    </div>
  </div>
  <div class="col-md-3">
    <div class="form-group">
      <label class="input-control">Telefono *</label>
      <input type="tetx" maxlength="22" name="RE12" id="RE12" value="<?php echo $rowDatos['MaeTel']?>" class="form-control" title="Numero de identificaciÛn" onkeypress="return Numeros(event)">
    </div>
  </div>
  <div class="col-md-3">
    <div class="form-group">
      <label class="input-control" for="RE13">Regimen *</label>
      <select class="form-control" name="RE13" id="RE13" required="" title="Seleccione el tipo de documento de identificacion">
        <option value="">Elija una opcion</option>
        <option value="0">No Aplica</option>
        <option value="1">Preferencial</option>
        <option value="2">Comun</option>
        <option value="3">Gran contribuyente</option>
      </select>
    </div>
  </div>
  <div class="col-md-3">
    <div class="form-group">
      <label class="input-control">Patrimonio estimado *</label>
      <input type="number" min="0"  name="RE14" id="RE14" class="form-control" title="Patrimonio valor de los activos">
    </div>
  </div>
  <div class="col-md-3">
    <div class="form-group">
      <label class="input-control">Ingresos aproximados *</label>
      <input type="number" min="0"  name="RE15" id="RE15" class="form-control" title="Ingresos aproximados">
    </div>
  </div>
  <div class="col-md-3">
    <div class="form-group">
      <label class="input-control">Cantidad empleados *</label>
      <input type="number" min="0"  name="RE16" id="RE16" class="form-control" title="Numero de empleados">
    </div>
  </div>
  <div class="col-md-3">
    <div class="form-group">
      <label class="input-control">Area en Mts2 *</label>
      <input type="number" min="0"  name="RE17" id="RE17" class="form-control" title="Definir el aproximado del area del establecimiento en metros cuadrados">
    </div>
  </div>
  <input type="hidden" name="Archivo" value="Establecimientos">
  <input type="hidden" name="Clase" value="Establecimientos">
  <input type="hidden" name="Funcion" value="insertEstablecimiento">
  </div><br>
  <div class="modal-footer">
    <div class="col-md-3">
      <div class="form-group"><br><br>
        <button type="submit" name="Boton" value="Boton" class="form-control btn btn-success"><b>Guardar Cambios</b></button>
      </div>
    </div>
  </div>
  </form>
  </div>
  </div>
</section>
<?php endif;?>

</div>

<?php
require_once '../Frame/Footer.htm';
?>
</html>

<script type="text/javascript">
$(".tablas").DataTable({
  "language": {
  "sProcessing":     "Procesando...",
  "sLengthMenu":     "Mostrar _MENU_ registros",
  "sZeroRecords":    "No se encontraron resultados",
  "sEmptyTable":     "Ning˙n dato disponible en esta tabla",
  "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
  "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
  "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
  "sInfoPostFix":    "",
  "sSearch":         "Buscar:",
  "sUrl":            "",
  "sInfoThousands":  ",",
  "sLoadingRecords": "Cargando...",
  "oPaginate": {
  "sFirst":    "Primero",
  "sLast":     "⁄ltimo",
  "sNext":     "Siguiente",
  "sPrevious": "Anterior"
  },
  "oAria": {
  "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
  "sSortDescending": ": Activar para ordenar la columna de manera descendente"
  }
  }
});

 $(document).on('change', function() {
  var dd01 = document.getElementById('DD01').value;
  var dd02 = document.getElementById('DD02').value;
  var dd03 = document.getElementById('DD03').value;
  var dd04 = document.getElementById('DD04').value;
  var dd05 = document.getElementById('DD05').value;
  var dd06 = document.getElementById('DD06').value;
  var dd07 = document.getElementById('DD07').value;
  var dd08 = document.getElementById('DD08').value;
  var dd10 = document.getElementById('DD10').value;

  document.getElementById('DD00').value = dd01 + " " + dd02 + dd03 + " " + dd04 + dd05 + " " + dd06 + dd07 + " " + dd08 + " " + dd10 + " " + "Bucaramanga-Santander";

});


 var availableTags = [
 "BOLIVAR",
 "SANTANDER",
 "FONTANA"
 ];
 var avenidas = [
 "PAN DE AZUCAR",
 "EL-JARDIN",
 "QUEBRADA-SECA",
 "LA ROSITA",
 "GONZALEZ-VALENCIA",
 "ALTOS-DEL-JARDIN",
 "EDUARDO-SANTOS",
 "LOS BUCAROS",
 "T ORIENTAL",
 "CIRCUNVALAR",
 "BOULEVARD SANTANDER"
 ];

 var anillo = [
 "BAL DEL TEJAR",

 ];

 var transversal = [
 "METROPOLITANA",
 "72 CIRCUN",
 "ORIENTAL",
 "C METROPOLITANA"

 ];

$('#DD01').change(function(){
  $('#DD00').tooltip('show');

  var input8 = document.getElementById('DD01').value;
  if (input8 == 'BL') {
    $("#DD02").autocomplete({source: availableTags});


 } else if (input8 == 'A') {

   $("#DD02").autocomplete({
    source: avenidas
  });

 } else if (input8 == 'ANILLO') {

   $("#DD02").autocomplete({
    source: anillo
  });

 } else if (input8 == 'T') {
   $("#DD02").autocomplete({
    source: transversal
  });
 } else {

 }

});

 $('#DD07').change(function() {

  var input10 = document.getElementById('DD07').value;

  if (input10 == 'CS' || input10 == 'AP' || input10 == 'LO' || input == 'LT') {

   $('.caja_ultima').css('display', 'block');

 } else {
   $('.caja_ultima').css('display', 'none');

 }
});

$(document).ready(function() {
    
$("#RE10").select2({ width:'100%',placeholder: "Elija nombre CIIU",});
$("#RE09").select2({ width:'100%',placeholder: "Elija Sector",});
$("#DD10").select2({ width:'100%',placeholder: "Elija Barrio",});
});

$("#RE09").change(function(){
  $("#RE09 option:selected").each(function(){
    var SectorId = $(this).val();
      $.ajax({
        type: "POST",
        url : "../Forms/getCIIU.php",
        data: "SectorId="+SectorId,     
        success:function(data){
          $("#RE10").html(data);
        }
      });
  });
});

</script>