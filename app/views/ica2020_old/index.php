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
                  <form action="<?=PROOT?>ica/validarNit" method="POST">
                     <div class="card-body">
                        <h5>Para elaborar la declaracion de retencion de industria y comercio, primero valida tu identidad</h5><br>
                        <div class="row">
                           <div class="col-md-3">
                              <label class="text-left" for="identificacion_contribuyente" style="float: right;">Nit/Identificacion*</label>
                           </div>
                           <div class="col-md-4">
                              <input class="form-control" minlength="5" maxlength="15" type="text" name="identificacion_contribuyente" id="identificacion_contribuyente" required="required" onkeypress="return Numeros(event)" title="Digite el nit o identificación">
                           </div>
                        </div>
                     </div>
                     <hr>
                     <div class="card-footer govco-card-footer govco-center">
                        <div class="col-md-12">
                           <button type="submit" class="btn btn-round btn-middle" style="float: right;">Consultar</button>
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
   function Numeros(e) {

      key = e.keyCode || e.which;
      tecla = String.fromCharCode(key).toLowerCase();
      letras = "0123456789";
      especiales = [8, 37];
      tecla_especial = false
      for (var i in especiales) {
         if (key == especiales[i]) {
            tecla_especial = true;
            break;
         }
      }

      if (letras.indexOf(tecla) == -1 && !tecla_especial)
         return false;
   }

   function Letras(n) {

      key = n.keyCode || n.which;
      tecla = String.fromCharCode(key).toLowerCase();
      numeros = "ñ";
      especiales = [14, 15, 32, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83,
         84, 85, 86, 87, 88, 89, 90, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109,
         110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 130, 160, 161, 162, 163, 164, 165, 239
      ];
      tecla_especial = false
      for (var i in especiales) {
         if (key == especiales[i]) {
            tecla_especial = true;
            break;
         }
      }

      if (numeros.indexOf(tecla) == -1 && !tecla_especial)
         return false;
   }

   function aMayusculas(obj, id) {

      obj = obj.toUpperCase();
      document.getElementById(id).value = obj;
   }


   var today = new Date();
   var dd = today.getDate();
   var mm = today.getMonth() + 1; //
   var yyyy = today.getFullYear();
   if (dd < 10) {
      dd = '0' + dd
   }
   if (mm < 10) {
      mm = '0' + mm
   }

   today = yyyy + '-' + mm + '-' + dd;
</script>

<?php $this->end(); ?>