<?php $this->setSiteTitle('Tramites') ?>

<?php $this->start('head'); ?>

<?php $this->end(); ?>

<?php $this->start('body'); ?>
<section class="pt-0">
   <div class="container pt-0">
      <h2 class="font-weight-bold">Trámites</h2>
      <P class="font-weight-bold">Escoge la categoría del trámite que buscas:</P>
      <div class="row mb-5">
         <div class="col-md-7">
            <button class="btn btn-govco" style="border-radius:16px;">Todas las categorías</button>
            <button class="btn btn-govco" style="border-radius:16px;">Impuestos (1)</button>
            <button class="btn btn-govco" style="border-radius:16px;">Secretaría de Planeación (1)</button>
         </div>
      </div>
      <div class="row">
         <div class="col-md-7">
            <div class="input-group">
               <input class="form-control py-2 border-right-0 border" type="search" id="txtBuscar" placeholder="Buscar trámites">
               <span class="input-group-append">
                  <button class="btn btn-buscar border-left-0 border" type="button">
                     <i class="fa fa-search"></i>
                  </button>
               </span>
            </div>
            <small class="form-text">Mostrando 1 de 2</small>
         </div>
      </div>
      <div class="row">
         <div class="col-7 col-md-7 mt-3 bg-div-govco">
            <a href="https://impuestos.bucaramanga.gov.co/personas/menu" target="_blank" role="button" class="btn btn-link px-0 font-weight-bold form-group"><u>Impuestos</u></a>
            <p class="text-dark">Secretaria: <strong class="text-primary">Hacienda</strong><br>
               Generar recibo de pago, pago en línea (Impuesto predial, Industria y Comercio y ReteICA), presentación de declaraciones, recibo de pago diferido, actualización datos ICA.
            <p>
         </div>
         <div class="col-5 col-md-5 mt-3 pt-2 bg-div-govco">
            <p><span class="fa fa-desktop"></span> Trámite en línea</p>
            <p><span class="fa fa-dollar-sign"></i></span> Trámite sin costo</p>
            <p><span class="fa fa-clock"></i></span> Duración proximada: 15 min</p>
         </div>
      </div>
      <div class="row">
         <div class="col-7 col-md-7 mt-3 bg-div-govco">
            <a href="https://usodesuelo.bucaramanga.gov.co/" target="_blank" role="button" class="btn btn-link px-0 font-weight-bold form-group"><u>Concepto uso de suelo</u></a>
            <p class="text-dark">Secretaria: <strong class="text-primary">Secretaría de Planeación</strong><br>
               Obtener el dictamen escrito sobre uso o usos permitidos en un predio o edificación, de conformidad con las normas urbanísticas del plan de ordenamiento territorial y los instrumentos que lo desarrollen.
            <p>
         </div>
         <div class="col-5 col-md-5 mt-3 pt-2 bg-div-govco">
            <p><span class="fa fa-desktop"></span> Trámite en línea</p>
            <p><span class="fa fa-dollar-sign"></i></span> Trámite sin costo</p>
            <p><span class="fa fa-clock"></i></span> Duración proximada: 15 dias hábiles</p>
         </div>
      </div>
   </div>
   <div class="container-fluid">
      <div class="row mt-5 bg-div-govco">
         <div class="container px-0">
            <div class="col-md-6 px-0">
               <div class="d-flex  align-items-center">
                  <div class="col-sm-6 col-md-6 col-lg-6 px-0">
                     <img class="img-responsive" style="width: 18rem;" src="https://beta.www.gov.co/uploads/c90a6f63-7834-46fd-b342-01949186980b.jpeg" alt="La información que producen las entidades públicas de su trabajo, todo a tu alcance">
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-6 px-0 ">
                     <p class="card-text d-flex justify-content-center">La información que producen las entidades públicas de su trabajo, todo a tu alcance</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<?php $this->end(); ?>
<?php $this->start('footer'); ?>

<?php $this->end(); ?>