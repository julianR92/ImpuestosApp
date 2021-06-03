<?php $this->start('body'); ?>
<section class="container pt-5">
   <div class="row" style="padding-top: 6%;">
      <div class="px-0 col-md-4 col-sm-12 col-xs-12">
         <div class="container-fluid">
            <img src="<?= PROOT ?>img/logo.png" class="img-fluid float-left mt-2" width="80px" height="60px">
         </div>
      </div>
   </div>
</section>

<div class="container pt-2">
   <div class="row">
      <!-- parte superior logo ymiga de pan -->
      <div class="col-md-12">
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
      <!-- fin parte superior -->
      <div class="col-md-12 pt-4">
         <h1 class="headline-xl-govco">Declaración de Retención de Industria y Comercio</h1>
         <div class="row pt-4">
            <div class="col-md-12 justify-content-center">
               <div class="card govco-card">
                  <div class="card-header govco-card-header">
                     <span class="govco-icon govco-icon-key"> </span>
                     Valida tu Identidad
                  </div>
                  <form action="" method="POST" id="frm">
                     <div class="card-body text-center">
                        <h5>Para elaborar la declaración de retención de industria y comercio, primero valida tu identidad</h5><br>
                        <div class="row jsuti">
                           <div class="col-md-3">
                              <label class="text-left" for="txtNit" style="float: right;">Nit/Identificación*</label>
                           </div>
                           <div class="col-md-4">
                              <input class="form-control" minlength="5" maxlength="15" type="text" name="txtNit" id="txtNit" required="required" onkeypress="return Numeros(event)" title="Digite el nit o identificación">
                           </div>
                        </div>
                     </div>
                     <hr>
                     <div class="card-footer govco-card-footer govco-center">
                        <div class="col-md-12">
                           <button type="button" class="btn btn-round btn-middle" id="btnConsultar" style="float: right;">Consultar</button>
                           <a class="btn btn-round btn-high" href="<?= PROOT ?>ica/index" style="float: right;">Cancelar</a>
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

   let btnConsultar = document.getElementById('btnConsultar');

   btnConsultar.addEventListener('click', event => {
      var documento = document.getElementById('txtNit').value.trim();
      if (documento.length < 5) {
         alertMsg('Documento invalido!', 'Debe digitar un número de documento valido', 'info', 3000);
         return;
      }
      var form = jQuery('#frm').serialize();
      console.log(form);
      jQuery.ajax({
         url: '<?= PROOT ?>ica/validarNit',
         method: "POST",
         data: form,
         success: function(resp) {

            if (resp.success) {
               window.location.href = '<?= PROOT ?>ica/preguntas';
            } else {
               if (resp.intentos) {
                  alertMsg('Intento de ingreso constante!', resp.mensaje, 'info', 4000);
                  return;
               }
               swal({
                     title: "Validacion de Registro",
                     text: resp.mensaje,
                     type: 'warning',
                     showConfirmButton: true,
                     confirmButtonText: 'ACEPTAR',
                     showCancelButton: true,
                     cancelButtonText: 'CORREGIR',
                     confirmButtonColor: '#3366CC',
                     html: true,

                  },
                  function(isConfirm) {
                     if (isConfirm) {
                        setTimeout(function() {
                           window.location.href = '<?= PROOT ?>ica/nuevo';
                        }, 1000);
                     }

                  });



            }
         }
      });
   });
</script>

<?php $this->end(); ?>