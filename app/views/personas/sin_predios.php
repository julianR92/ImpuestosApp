<?php

use Core\FH;
use App\Models\Users;
?>
<?php $this->start('body'); ?>
<!-- Definición de la sección -->
<section class="container">
   <nav class="pt-3" aria-label="Miga de pan, usted esta en:">
      <ol class="breadcrumb">
         <li class="breadcrumb-item">
            <a class="breadcrumb-text" href="#">Inicio</a>
         </li>
         <li class="breadcrumb-item">
            <div class="image-icon">
               <span class="breadcrumb govco-icon govco-icon-shortr-arrow"></span>
               <span class="breadcrumb-text">Registro de contribuyentes</span>
            </div>
         </li>
      </ol>
   </nav>
   <h2 class="headline-xl-govco">Registro de Contribuyentes</h2>
</section>
<div class="col-md-12 mt-4">
   <p class="h3 mb-5">
      Apreciado contribuyente:
   </p>
   <p class="h4 mb-5">
      Usted no tiene registrado algun predio en el municipio de Bucaramanga.
   </p>
   <!-- <a class="btn btn-primary mt-4 mb-5" href="<?= PROOT ?>personas/nuevo">Volver</a> -->
</div>
<?php $this->end(); ?>
<?php $this->start('footer'); ?>
<script>
   setTimeout(function() {
      location.href ="https://impuestos.bucaramanga.gov.co/personas/menu";
   }, 5000);
</script>
<?php $this->end(); ?>