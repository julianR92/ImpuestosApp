<?php $this->start('body'); ?>
<section class="container pt-5">
   <div class="row" style="padding-top: 6%;">
      <div class="col-md-4 col-sm-12 col-xs-12">
         <div class="container-fluid">
            <img src="<?= PROOT ?>img/logo.png" class="img-fluid float-left mt-2" width="80px" height="60px">

         </div>
      </div>
   </div>
</section>

<div class="container pt-2">
   <div class="row">
      <div style="padding-left:30px;" class="col-md-12">
         <nav aria-label="Miga de pan" style="max-height: 20px;">
            <ol class="breadcrumb">
               <li class="breadcrumb-item">
                  <a style="color: #004fbf;" class="breadcrumb-text" href="https://www.bucaramanga.gov.co/">Inicio</a>
               </li>

               <li class="breadcrumb-item">
                  <div class="image-icon">
                     <span class="breadcrumb govco-icon govco-icon-shortr-arrow"></span>
                     <a style="color: #004fbf;" class="breadcrumb-text" href="#">Tramites y servicios</a>
                  </div>
               </li>
               <li class="breadcrumb-item">
                  <div class="image-icon">
                     <span class="breadcrumb govco-icon govco-icon-shortr-arrow"></span>
                     <a style="color: #004fbf;" class="breadcrumb-text" href="#">Declaración de Retención de Industria y Comercio</a>
                  </div>
               </li>


            </ol>
         </nav>
      </div>
      <div class="col-md-12 pt-4">
         <h1 class="headline-xl-govco">Declaración de Retención de Industria y Comercio</h1>
         <div class="row pt-5">
            <div class="col-md-12 justify-content-center">

               <div class="card govco-card">
                  <div class="card-header govco-card-header">
                     <span class="govco-icon govco-icon-exclamation-cn pr-3"> </span>
                     Selecciona el año para el cual vas a elaborar la declaración
                  </div>
                  <form action="" method="POST" id="frm">
                     <div class="card-body">
                        <div class="row justify-content-center">
                           <div class="col-md-4">
                              <label for="anio_declaracion">Periodo Declaración*</label>
                              <select name="anio_declaracion" id="anio_declaracion" class="form-control" required>
                                 <option value="">Seleccione*</option>
                                 <option value="2021">2021</option>
                                 <option value="2020">2020</option>
                                 <option value="2019">2019</option>
                                 <option value="2018">2018</option>
                                 <option value="2017">2017</option>
                                 <option value="2016">2016</option>
                          <option value="2015">2015</option>
                                 <option value="2014">2014</option>
                                 <option value="2013">2013</option>
                                 <option value="2012">2012</option>
                                 <option value="2011">2011</option>
                                 <option value="2010">2010</option>
                              </select>
                           </div>
                           <div class="col-md-3">
                              <label for="nit">Nit*</label>
                              <input type="text" name="nit" id="nit" class="form-control" readOnly='true' value="<?= $this->nit ?>">
                           </div>
                        </div>
                     </div>
                     <hr>
                     <div class="card-footer govco-card-footer govco-center">
                        <div class="col-md-12 text-center">
                           <button type="Button" onclick="buscarDeclaraciones()" class="btn btn-round btn-high-mix-govco" style="float: right;">Buscar&nbsp;<span class="govco-icon govco-icon-search-cp text-white"></span></button>
                           <button type="submit" class="btn btn-round btn-middle" style="float: right;">Elaborar</button>
                           <a class="btn btn-round btn-high" style="float: right;" href="<?= PROOT ?>ica/index">Volver</a>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
            <div class="col-md-12 justify-content-center pt-4">
               <div id="container_table" style="display: none;" class="table-simple-headblue-govco">

                  <table id="DataTables_Table_0" class="table display table-responsive-sm table-responsive-md" width="100%" style="text-align: left!important;">
                     <thead>
                        <tr>
                           <th style="color: white;">Vigencia</th>
                           <th style="color: white;">Periodo</th>
                           <th style="color: white;">Estado</th>
                           <th style="color: white;">Acciones</th>

                        </tr>
                     </thead>
                     <tbody id="body_table">

                     </tbody>

                  </table>

               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<?php $this->end(); ?>

<?php $this->start('footer'); ?>

<script type="text/javascript">
   function buscarDeclaraciones() {

      if ($('#anio_declaracion').val() == '' || $('#nit').val() == '') {
         alertMsg('Campos vacios!', '<strong> El periodo de la declaracion y el NIT son campos requeridos para la consulta</strong>', 'error', 4000);
         return;
      }
      var form = jQuery('#frm').serialize();

      jQuery.ajax({
         url: '<?= PROOT ?>ica/buscarDeclaracion',
         method: "POST",
         data: form,
         success: function(resp) {

            if (resp.datos) {
               
               var data = Object.values(resp);
               $('#container_table').css('display', 'block');
               $('#DataTables_Table_0').focus();
               var estado;

               $('#body_table').html('<div>');

               data[1].forEach(function(contribuyente, index) {
                  console.log(contribuyente);
                  //console.log("| Nit: " + contribuyente.RetINit + " Periodo: " + contribuyente.RetIDecSub);
                  if (contribuyente.RetDecIndP == 'N') {
                     estado = 'Elaborado';
                  } else if (contribuyente.RetDecIndP == 'S') {
                     estado = 'Presentado';
                  }
                  var declaracion=contribuyente.RetINit.trim()+contribuyente.RetDecVig+contribuyente.RetIDecSub+'0'+contribuyente.RetDecNro;
                  var ocultarBoton="";
                  if(contribuyente.RetDecIndP=='S')
                     ocultarBoton="d-none";
                  $('#body_table').append('<tr> <td>' + contribuyente.RetDecVig + '</td> <td>' + contribuyente.RetIDecSub + '</td> <td>' + estado + ' </td> <td><div class="'+ocultarBoton+'"> <button type="button"  onclick="imprimir('+"'"+declaracion.trim()+"'"+');" class="btn-symbolic-govco align-column-govco"><span class="govco-icon govco-icon-print-p"></span></button> <button type="button" onclick="editar('+contribuyente.RetDecVig+');" class="btn-symbolic-govco align-column-govco"><span class="govco-icon govco-icon-edit-n "></span></button> </div></td> </tr>');
               });
               $('#body_table').append('</div>');

            } else {
               alertMsg('Sin Resultados!', 'No se encontraron resultados para esta vigencia', 'info', 6000);
               $('#container_table').css('display', 'none');
               return;
            }
         }
      });

   }

   function imprimir(declaracion) {
      
      window.open("https://referencia.bucaramanga.gov.co/ForReteica.aspx?id="+declaracion,"_blank");
      //      RetINit+RetDecVig+RetIDecSub+RetDecNro
   }

   function editar(vigencia){
      $('#anio_declaracion').val(vigencia);
      $( "#frm" ).submit();
   }
</script>

<?php $this->end(); ?>

