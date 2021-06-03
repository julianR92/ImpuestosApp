<?php $this->start('body'); ?>

<style>
   .box {
      -webkit-box-shadow: 17px 10px 57px 2px rgba(112, 106, 112, 0.71);
      -moz-box-shadow: 17px 10px 57px 2px rgba(112, 106, 112, 0.71);
      box-shadow: 17px 10px 57px 2px rgba(112, 106, 112, 0.71);
      border-radius: 5px;

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
                     <a style="color: #004fbf;" class="breadcrumb-text" href="#">Actualizar Contribuyente</a>
                  </div>
               </li>

            </ol>
         </nav><br>
      </div><br>

      <div class="col-md-12 pt-5 box">
         <h1 class="headline-xl-govco">Actualizar Periodicidad</h1>
         <form action="" role="form" id="frm">

            <div class="row pt-5">

               <div class="col-md-12" id="divError"></div>

               <div class="col-md-12">
                  <div class="row">
                                     
                   </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="nit">Nit/Cedula*</label>
                     <input type="text" class="form-control" name="nit" id="nit" onkeypress="return Numeros(event)" maxlength="20" minlength="5" readonly value="<?= $_SESSION['nit'] ?>" required>
                  </div>
               </div>

               <div class="col-md-6">
                        <div class="form-group">
                           <label for="periodo">Periodicidad Declaración*</label>
                           <select class="form-control" name="periodo" id="periodo" required="required">                            
                              <option <?php if ($this->presentacion == 'Mensual') echo 'selected'; ?> value="Mensual">MENSUAL <small>(ingresos entre >= 5000UVT)</small></option>
                              <option <?php if ($this->presentacion == 'Trimestral') echo 'selected'; ?> value="Trimestral">TRIMESTRAL<small>(ingresos < 5000UVT)</small></option>
                           </select>
                           
                        </div>
               </div> 
               <div class="col-md-12">
                  <div class="form-group">
                     <label for="observacion_hacienda">Observación de actualización*</label>
                         <textarea class="form-control" name="observacion_hacienda" id="observacion_hacienda" rows="2" required="required" minlength="20" maxlength="500"  onkeypress="return Direccion(event)"></textarea>                     

                  </div>
               </div>           
                <hr>                           
                            
               

               

               <div class="col-md-12">
                  <button type="submit" class="btn btn-round btn-middle" style="float: right;">Actualizar datos</button>
                  <a class="btn btn-round btn-high" href="<?= PROOT ?>admin/index" style="float: right;">Cancelar</a>
               </div>
            </div>
         </form>
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

   function Razon(n) {

      key = n.keyCode || n.which;
      tecla = String.fromCharCode(key).toLowerCase();
      numeros = "ñ1234567890-Ñ.";
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

   function Direccion(n) {

      key = n.keyCode || n.which;
      tecla = String.fromCharCode(key).toLowerCase();
      numeros = "ñ1234567890-Ñ#.,:() ";
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

  

   //$('.agente').popover();


   const frm = document.getElementById('frm');
   frm.onsubmit = (e) => {
      e.preventDefault();
      swal({
         title: "Atención!!",
         text: '¿Estas seguro de actualizar la periodicidad de la declaracion?',
         type: 'warning',
         showConfirmButton: true,
         confirmButtonText: 'ACEPTAR',
         showCancelButton: true,
         cancelButtonText: 'CANCELAR',
         confirmButtonColor: '#3366CC',
         html: true,


      }, function(isConfirm) {
         if (isConfirm) {
            var formData = jQuery('#frm').serialize();
            console.log(formData);
            jQuery.ajax({
               url: '<?= PROOT ?>admin/actualizaPeriodicidad',
               method: "POST",
               data: formData,
               success: function(resp) {
                  if (resp.success) {
                     alertMsg('Proceso exitoso!', resp.mensaje, 'success', 6000);
                     setTimeout(function() {
                        window.location.href = '<?= PROOT ?>admin/index';
                     }, 2000);
                  } else {
                     alertMsg('Ha ocurrido un error!', resp.mensaje, 'error', 10000);
                     return;
                  }
               }
            });

         }}

         )      
   }
</script>

<?php $this->end(); ?>