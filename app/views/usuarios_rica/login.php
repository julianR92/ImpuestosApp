<?php
use Core\FH;
?>
<?php $this->setSiteTitle('Inicio de sesión'); ?>
<?php $this->start('body'); ?>
<div class="container" style="padding-top: 10px;padding-bottom: 20px;">
   <div class="row justify-content-center">
      <div class="col-12 col-sm-12 col-md-4">
         <div class="govco-form-signin">
            <form method="POST" role="form" id="frm">
               <div clas="text-center" align="center">
                  <span class=" bd-highlight govco-icon govco-icon-key-cn"></span>
               </div><br>
               <h3 align="center" class="govco-title-sign-form headline-l-govco">Inicio de sesión</h3>
               <div class="form-group"><br>
                  <label for="usuario">Usuario</label>
                  <input type="text" class="form-control input-govco" id="usuario" name="usuario" required>
               </div>
               <div class="form-group">
                  <label for="password">Contraseña</label>
                  <input type="password" class="form-control input-govco" id="password" name="password" required>
               </div>
               <div class="d-flex d-flex justify-content-between mb-4">
                  <div class="checkbox mb-3">
                     <label class="checkbox-govco">
                        <input type="checkbox" id="checkboxPassword-govco" class="check_pass" />
                        <label class="label_checkbox" for="checkboxPassword-govco"> Mostrar contraseña</label><br>
                     </label><br>
                  </div>
                  <div class="d-flex d-flex justify-content-between">
                     <button type="button" onclick="validar();return;" name="Boton" value="Boton" id="Boton" class="btn btn-round btn-high mr-0" style="height: fit-content; font-size: smaller;">Iniciar Sesión</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>

<?php $this->end(); ?>
<?php $this->start('footer'); ?>

<script>
   $(document).ready(function() {
      $("#frm").validate({
         lang: 'es',
         rules: {
            usuario: {
               required: true,
            },
            password: {
               required: true
            }
         },
         messages: {
            usuario: {
               required: "Este campo es requerido."
            },
            password: {
               required: "Este campo es requerido."
            }
         }
      });
   });

   function validar() {
      if ($("#frm").valid()) {
         var formData = jQuery('#frm').serialize();
         jQuery.ajax({
            url: '<?= PROOT ?>usuariosRica/login',
            method: "POST",
            data: formData,
            success: function(resp) {
               if (resp.success) {
                  alertMsg('Proceso exitoso!', 'Bienvenido al sistema.', 'success', 2000);
                  setTimeout(function() {
                     window.location.href = '<?= PROOT ?>admin/index';
                  }, 2000);
               } else {
                  alertMsg('Inicio de sesión fallido!', '<b>El usuario o la contraseña no son incorrectos</b>.', 'error', 2500);
               }
            }
         });
      }
   }

   $('input[type=checkbox]').click(function() {
      if (this.checked) {
         $('#password').attr('type', 'text');
      } else {
         $('#password').attr('type', 'password');
      }
   });
</script>
<?php $this->end(); ?>