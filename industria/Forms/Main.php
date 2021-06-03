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

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <div class="info-box mb-3" style="padding: 4px 4px 4px 4px !important; width: 200px !important;">
            <span class="info-box-icon bg-danger elevation-0"><i style="width:50px !important;" class="fas fa-table"></i></span>
            <div class="info-box-content">
              <button type="submit" name="modalConsultaEstablecimiento" id="reporteExcel" value="modalConsultaEstablecimiento" data-toggle="modal" data-target="#modalConsultaEstablecimiento" class="FuenteExtra">
                <span class="info-box-text">Consultar</span>
                <span class="info-box-number">Establecimiento</span>
              </button>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info-box mb-3" style="padding: 4px 4px 4px 4px !important; width: 200px !important;">
            <span class="info-box-icon bg-success elevation-0"><i style="width:50px !important;" class="fas fa-table"></i></span>
            <div class="info-box-content">
              <a href="../controller/controlador.php?Parametro=true&A=Establecimientos&C=Establecimientos&F=nuevoEstablecimiento">
              <button type="button" id="reporteExcel" class="FuenteExtra">
              <span class="info-box-text">Registrar</span>
              <span class="info-box-number">Establecimiento</span>
              </button></a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="info-box mb-3" style="padding: 4px 4px 4px 4px !important; width: 200px !important;">
            <span class="info-box-icon bg-dark elevation-0"><i style="width:50px !important;" class="fas fa-table"></i></span>
            <div class="info-box-content">
              <a href="../controller/controlador.php?Parametro2=true&A=Establecimientos&C=Establecimientos&F=establecimientosRegistrados&MetodoRegistrado=true">
              <button type="button" id="reporteExcel" class="FuenteExtra">
              <span class="info-box-text">Establecimientos</span>
              <span class="info-box-number">Registrados</span>
              </button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


<!--Ventana modal para consultar establecimientos comerciales-->
<div class="modal fade" id="modalConsultaEstablecimiento" tabindex="3" aria-labelledby="exampleModalLabel" aria-hidden="true" style="border-radius: 10px;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #3366CC; color: #FFFFFF">
        <h5 class="modal-title" id="exampleModalLabel"><b>Consutar establecimientos de comercio</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span style="color: #FFFFFF;" aria-hidden="true">&times;</span>
        </button>
      </div>
      <form role="form" action="../controller/controlador.php" method="post" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label class="input-control" for="EC01">Tipo de identificaci√≥n *</label>
              <select class="form-control" name="EC01" id="EC01" required="required" title="Elija el tipo de documento de identificacion">
                <option value="">Elija una opci√≥n</option>
                <option value="Placa">Placa</option>
                <option value="NIT">NIT</option>
              </select>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label class="input-control" for="EC002">Identificac√≥n *</label>
              <input type="number" id="EC02" name="" class="form-control" title="Tipo de identificacion" onkeypress="return Numeros(event)">
            </div>
          </div>
          <input type="hidden" name="Archivo" value="Establecimientos">
          <input type="hidden" name="Clase" value="Establecimientos">
          <input type="hidden" name="Funcion" value="consultaEstablecimiento">
          <input type="hidden" name="EC04" value="true">
        </div><br>

        <div class="modal-footer">
          <button type="submit" name="Boton" value="Boton" id="Boton" class="btn btn-success">Consultar</button>
          <button type="button" class="btn btn-dark" data-dismiss="modal">Cancelar</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!--Fin de la ventana modal para consultar establecimientos-->
<?php
require_once '../Frame/Footer.htm';
?>
<script type="text/javascript">
 $('#EC01').change(function(){

  var input0 = document.getElementById('EC01').value;
  if(input0 == 'Placa'){

    $('#EC02').attr('required', true);
    $('#EC02').attr('maxlength', '6');
    $('#EC02').attr('name', 'EC02');
    
  }else if(input0 == 'NIT'){

    $('#EC02').attr('required', true);
    $('#EC02').attr('name', 'EC03');
    $('#EC02').attr('maxlength', '9');
    
  }

});

</script>