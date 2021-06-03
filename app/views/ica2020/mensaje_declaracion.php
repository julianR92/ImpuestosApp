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
                     <span class="govco-icon govco-icon-key"> </span>
                     Validación de Identidad
                  </div>
                  <form action="<?= PROOT ?>ica/validarNit" method="POST">
                     <div class="card-body text-center">
                        <h5>Apreciado ciudadano, usted no se encuentra registrado como agente retenedor, en un momento sera re-dirigido al formulario de registro. <h4> ES IMPORTANTE QUE DILIGENCIE DE MANERA CORRECTA SUS DATOS </h4>
                     </h5>
                  </div>
                     <div class="card-footer govco-card-footer govco-center">
                        <div class="col-md-12 text-center">
                           <a class="btn btn-round btn-high" href="<?= PROOT ?>ica/index">Volver</a>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>


<?php $this->end(); ?>
<?php $this->start('footer'); ?>

<script type="text/javascript">
   setTimeout(function() {
      window.location.href = '<?= PROOT ?>ica/nuevo';
   }, 8000);
</script>

<?php $this->end(); ?>