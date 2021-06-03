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
                     <a style="color: #004fbf;" class="breadcrumb-text" href="#">RETENCION 2021</a>
                  </div>
               </li>


            </ol>
         </nav>
      </div>
      <div class="col-md-12 pt-4">
         <h1 class="headline-xl-govco">RETENCION 2021</h1>
         <div class="row pt-5">
            <div class="col-md-12 justify-content-center">

               <div class="card govco-card">
                  <div class="card-header govco-card-header">
                     <span class="govco-icon govco-icon-key"> </span>
                     Valida tu Identidad
                  </div>
                  <form id="frm" action="<?= PROOT ?>ica/validarPreguntas" method="POST">
                     <input type="hidden" class="form-control" value="<?= $this->nit ?>" name="nit">
                     <div class="card-body">
                        <h5>Por favor contesta las siguientes preguntas para validar que no eres un robot:</h5><br>
                        <div class="row jumbotron py-3">
                           <div class="col-md-12">
                              <p class="mb-2 font-weight-bold">Selecciona la razón social que conozca:</p>
                           </div>
                           <?php shuffle($this->razon_social);
                           foreach  ($this->razon_social as $value) : ?>
                              <div class="col">
                                 <div class="form-check">
                                    <label class="form-check-label">
                                       <input type="radio" class="form-check-input" required value="<?= $value ?>" name="optRazon"><?= $value ?>
                                    </label>
                                 </div>
                              </div>
                           <?php endforeach; ?>
                        </div>
                        <?php if ($this->direccion) : ?>
                           <div class="row jumbotron py-3">
                              <div class="col-md-12">
                                 <p class="mb-2 font-weight-bold">Selecciona la dirección que conozca:</p>
                              </div>
                              <?php shuffle($this->direccion); 
                              foreach ($this->direccion as $value) : ?>
                                 <div class="col">
                                    <div class="form-check">
                                       <label class="form-check-label">
                                          <input type="radio" class="form-check-input" required value="<?= $value ?>" name="optDireccion"><?= $value ?>
                                       </label>
                                    </div>
                                 </div>
                              <?php endforeach; ?>
                           </div>
                        <?php endif; ?>
                        <?php if ($this->telefono) : ?>
                           <div class="row jumbotron py-3">
                              <div class="col-md-12">
                                 <p class="mb-2 font-weight-bold">Selecciona el teléfono que conozca:</p>
                              </div>
                              <?php shuffle($this->telefono); 
                              foreach ($this->telefono as $value) : ?>
                                 <div class="col">
                                    <div class="form-check">
                                       <label class="form-check-label">
                                          <input type="radio" class="form-check-input" required value="<?= $value ?>" name="optTelefono"><?= $value ?>
                                       </label>
                                    </div>
                                 </div>
                              <?php endforeach; ?>
                           </div>
                        <?php endif; ?>
                     </div>
                     <hr>
                     <div class="card-footer govco-card-footer govco-center">
                        <div class="col-md-12">
                           <button type="submit" id="btnValidar" class="btn btn-round btn-middle" style="float: right;">Validar</button>
                           <a class="btn btn-round btn-high" href="<?= PROOT ?>home/index" style="float: right;">Cancelar</a>
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
  
</script>

<?php $this->end(); ?>