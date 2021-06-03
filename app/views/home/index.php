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
         <!-- <li class="breadcrumb-item active aria-current=" page">
            <div class="image-icon">
               <span class="breadcrumb govco-icon govco-icon-shortr-arrow"></span>
               <span class="breadcrumb-text">Información</span>
            </div>
         </li> -->
      </ol>
   </nav>
   <h2 class="headline-xl-govco">Registro de Contribuyentes</h2>
</section>
<div class="col-md-12">
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim odit maxime aspernatur, reprehenderit deserunt sapiente commodi doloremque pariatur, esse itaque voluptatem mollitia dolore. Odio totam quas perferendis animi tempora numquam.
   </p>
   <!--
   <a class="btn btn-low" href="#" style="text-decoration: none!important;">
      <p class="subtitle-govco">Alcaldía de Bucaramanga</p>
   </a>
   <div class="tabs-govco">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
         <li class="nav-item">
            <a class="nav-link active" id="ciudadano-tab" data-toggle="tab" href="#ciudadano" role="tab" aria-controls="ciudadano" aria-selected="true">Ciudadano</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" id="extranjeros-tab" data-toggle="tab" href="#extranjeros" role="tab" aria-controls="extranjeros" aria-selected="false">Extranjeros</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" id="instituciones-tab" data-toggle="tab" href="#instituciones" role="tab" aria-controls="instituciones" aria-selected="false">Instituciones o depependencias públicas</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" id="organizaciones-tab" data-toggle="tab" href="#organizaciones" role="tab" aria-controls="organizaciones" aria-selected="false">Organizaciones</a>
         </li>
      </ul>

      <div class="tab-content">
         --><!-- Tab ciudadanos --><!--
         <div class="tab-pane active" id="ciudadano" role="tabpanel" aria-labelledby="ciudadano-tab">
            <div class="text-center">
               <h3 class="headline-l-govco">Información General del Trámite</h3>
               <p class="description-govco font-weight-normal">Para realizar el trámite debes seguir <strong style="color:#004884;"> los siguientes pasos:</strong></p>
            </div>
            <div class="accordion accordion-govco" id="accCiudadano">
               <div class="card">
                  <div class="card-header row no-gutters" id="headCiudadano">
                     <button class="btn-link row no-gutters collapsed" type="button" data-toggle="collapse" data-target="#collCiudadano" aria-expanded="false" aria-controls="collCiudadano">
                        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                           <span class="title">1. Consultar viabilidad</span>
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                           <div class="btn-icon-close">
                              <span class="label-icon">menos</span>
                              <span class="govco-icon govco-icon-minus"></span>
                              <span class="govco-icon govco-icon-plus"></span>
                           </div>
                        </div>
                     </button>
                  </div>
                  <div id="collCiudadano" class="collapse" aria-labelledby="headCiudadano" data-parent="#accCiudadano">
                     <div class="card-body bg-color-selago">
                        <div class="govco-table govco-table-basic">
                           <table class="table table-striped">
                              <thead>
                                 <tr>
                                    <th scope="col">Medio</th>
                                    <th scope="col">Detalle</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr">
                                    <td>WEB</td>
                                    <td><a href="<?= PROOT ?>home/consultar">Consultar viabilidad</a></td>
                                    </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         --><!-- Tab extranjeros --><!--
         <div class="tab-pane" id="extranjeros" role="tabpanel" aria-labelledby="extranjeros-tab">
            <div class="text-center">
               <h3 class="headline-l-govco">Información General del Trámite</h3>
               <p class="description-govco font-weight-normal">Para realizar el trámite debes seguir <strong style="color:#004884;"> los siguientes pasos:</strong></p>
            </div>
            <div class="accordion accordion-govco" id="accExtranjeros">
               <div class="card">
                  <div class="card-header row no-gutters" id="headExtranjeros">
                     <button class="btn-link row no-gutters collapsed" type="button" data-toggle="collapse" data-target="#collExtranjeros" aria-expanded="false" aria-controls="collExtranjeros">
                        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                           <span class="title">1. Consultar viabilidad</span>
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                           <div class="btn-icon-close">
                              <span class="label-icon">menos</span>
                              <span class="govco-icon govco-icon-minus"></span>
                              <span class="govco-icon govco-icon-plus"></span>
                           </div>
                        </div>
                     </button>
                  </div>
                  <div id="collExtranjeros" class="collapse" aria-labelledby="headExtranjeros" data-parent="#accExtranjeros">
                     <div class="card-body bg-color-selago">
                        <div class="govco-table govco-table-basic">
                           <table class="table table-striped">
                              <thead>
                                 <tr>
                                    <th scope="col">Medio</th>
                                    <th scope="col">Detalle</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr">
                                    <td>WEB</td>
                                    <td><a href="#">Consultar viabilidad</a></td>
                                    </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>-->
</div>
<?php $this->end(); ?>
<?php $this->start('footer'); ?>
<?php $this->end(); ?>