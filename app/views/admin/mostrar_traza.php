<?php $this->start('body'); ?>
<style type="text/css">
   th.sorting_desc::after, th.sorting_asc::after{
      right: -16px!important;
   }
</style>
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
                     <a style="color: #004fbf;" class="breadcrumb-text" href="#">Modulo Administrador</a>
                  </div>
               </li>


            </ol>
         </nav>
      </div>
      <div class="col-md-12 pt-4">
         <h1 class="headline-xl-govco">Modulo de Administración de Retención de ICA</h1>
         <div class="row pt-5">
            <div class="col-md-12 justify-content-center">

               <div class="card govco-card">
                  <div class="card-header govco-card-header">
                     <span class="govco-icon govco-icon-analytic size-3x pr-3"> </span>
                     Trazabilidad de actualizaciones
                  </div>

                  <div class="col-md-12 justify-content-center pt-4">
               <div id="container_table"  class="table-pagination-govco">

                  <table id="DataTables_Table_0" class="table display table-responsive-sm table-responsive-md tablas" width="100%" style="text-align: left!important;">
                     <thead>
                        <tr>
                           <th style="color: #004884;" class="">ID</th>
                           <th style="color: #004884;">NIT</th>
                           <th style="color: #004884;;">Usuario</th>
                           <th style="color: #004884;">Acción</th>
                           <th style="color: #004884;">Observación</th>
                           <th style="color: #004884;">Fecha</th>

                        </tr>
                     </thead>
                     <?php foreach ( $this->traza as $trazabilidad) : ?>
                        <tr>
                           <td> <?= $trazabilidad->AudRicId ?></td>
                           <td> <?= $trazabilidad->AudRicNit ?></td>
                           <td> <?= $trazabilidad->AudRicUser ?></td>
                           <td> <?= $trazabilidad->AudRicObservacion ?></td>
                           <td> <?= $trazabilidad->AudRicObsHacienda ?></td>
                           <td> <?= $trazabilidad->AudRicFecha ?></td>

                        </tr>


                        <?php endforeach ?>

                     </tbody>

                  </table>

               </div>
            </div>
            <div class="col-md-3">
               <a class="btn btn-round btn-high" href="<?= PROOT ?>admin/index" style="float: left;">Volver</a>
            </div>
                  
               </div>

            </div>
            
         </div>
      </div>
   </div>
</div>

<?php $this->end(); ?>

<?php $this->start('footer'); ?>

<script type="text/javascript">

      $(".tablas").DataTable({
   
"language": {

"sProcessing":     "Procesando...",
"sLengthMenu":     "Mostrar _MENU_ registros",
"sZeroRecords":    "No se encontraron resultados",
"sEmptyTable":     "Ningún dato disponible en esta tabla",
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
"sLast":     "Último",
"sNext":     "Siguiente",
"sPrevious": "Anterior"

},

"oAria": {
"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
"sSortDescending": ": Activar para ordenar la columna de manera descendente"

}
}
});

 


  
</script>

<?php $this->end(); ?>

