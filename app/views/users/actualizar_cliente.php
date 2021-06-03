<?php

use Core\FH;
?>

<?php $this->start('head'); ?>
<script src="https://www.gstatic.com/firebasejs/ui/4.5.0/firebase-ui-auth.js"></script>
<link type="text/css" rel="stylesheet" href="https://www.gstatic.com/firebasejs/ui/4.5.0/firebase-ui-auth.css" />
<?php $this->end(); ?>

<?php $this->setSiteTitle('Actualizar cliente'); ?>
<?php $this->start('body'); ?>
<div class="row mt-5">
   <div class="col-md-12">
      <div class="card">
         <div class="card-body">
            <h2 class="text-center">Actualizar Datos</h2>
            <hr />
            <form class="m-t" role="form" action="" method="post" onsubmit="event.preventDefault(); validar();" id="frmRegistro">
               <div class="row form-group">
                  <?= FH::inputBlock('text', 'Nombre completo <code>*</code>', 'nombres', $this->cliente->nombres, ['class' => 'form-control', 'placeholder' => 'Digite su nombre completo'], ['class' => 'col-md-3'], []) ?>

                  <?= FH::inputBlock('text', 'Apellidos <code>*</code>', 'apellidos', $this->cliente->nombres, ['class' => 'form-control', 'placeholder' => 'Digite sus apellidos'], ['class' => 'col-md-3'], []) ?>

                  <?= FH::selectBlock('Género', 'genero', $this->cliente->genero, ['FEMENINO' => 'FEMENINO', 'MASCULINO' => 'MASCULINO'], ['class' => 'form-control', 'placeHolder' => 'seleccione'], ['class' => ' col-md-3'], []) ?>

                  <?= FH::selectBlock('Ciudad', 'ciudad', $this->cliente->ciudad, ['BUCARAMANGA' => 'BUCARAMANGA', 'FLORIDABLANCA' => 'FLORIDABLANCA', 'GIRÓN' => 'GIRÓN', 'PIEDECUESTA' => 'PIEDECUESTA'], ['class' => 'form-control', 'placeHolder' => 'seleccione'], ['class' => 'col-md-3'], []) ?>
               </div>
               <div class="row form-group">
                  <?= FH::inputBlock('date', 'Fecha de nacimiento', 'fecha_nacimiento', $this->cliente->fecha_nacimiento, ['class' => 'form-control', 'placeholder' => 'Digite fecha de nacimeinto'], ['class' => 'col-md-3'], []) ?>

                  <?= FH::inputBlock('text', 'Barrio', 'barrio', $this->cliente->barrio, ['class' => 'form-control', 'placeholder' => 'Digite su barrio'], ['class' => 'col-md-3'], []) ?>

                  <?= FH::inputBlock('text', 'Dirección <code>*</code>', 'direccion', $this->cliente->direccion, ['class' => 'form-control', 'placeholder' => 'Digite su dirección'], ['class' => 'col-md-4'], []) ?>

                  <?= FH::inputBlock('text', 'Celular <code>*</code>', 'celular', $this->cliente->celular, ['class' => 'form-control', 'placeholder' => 'Digite su número de celular'], ['class' => 'col-md-2'], []) ?>
               </div>
               <div class="row form-group">
                  <?= FH::inputBlock('text', 'Correo electrónico <code>*</code>', 'correo', $this->cliente->correo, ['class' => 'form-control', 'placeholder' => 'Digite su correo electrónico'], ['class' => 'col-md-4'], []) ?>

                  <?= FH::inputBlock('text', 'Usuario <code>*</code>', 'usuario', $this->cliente->usuario, ['readonly'=>'true', 'class' => 'form-control', 'placeholder' => 'Digite su usuario'], ['class' => 'col-md-4'], []) ?>

                  <?= FH::inputBlock('password', 'Contraseña', 'password', '', ['class' => 'form-control', 'placeholder' => 'Digite contraseña'], ['class' => 'col-md-2'], []) ?>

                  <?= FH::inputBlock('password', 'Repita su contraseña', 'confirm', '', ['class' => 'form-control', 'placeholder' => 'Repita contraseña'], ['class' => 'col-md-2'], []) ?>
               </div>
               <p class="font-weight-bold text-success">Si dese actualizar su contraseña, solo debe digitarla, confirmarla y dar click en el boton guardar, de lo contrario dejar el campo en blanco.</p>
               <div class="row">
                  <div class="col-md-12">
                     <?= FH::submitTag('Guardar', ['class' => 'btn btn-primary btn-block full-width']) ?>
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
      $("#frmRegistro").validate({
         lang: 'es',
         rules: {
            nombres: {
               required: true
            },
            apellidos: {
               required: true
            },
            direccion: {
               required: true
            },
            celular: {
               required: true
            },
            usuario: {
               required: true
            },
            correo: {
               required: true
            }
         },
         messages: {
            nombres: {
               required: "Este campo es requerido."
            },
            apellidos: {
               required: "Este campo es requerido."
            },
            direccion: {
               required: "Este campo es requerido."
            },
            celular: {
               required: "Este campo es requerido."
            },
            usuario: {
               required: "Este campo es requerido."
            },
            correo: {
               required: "Este campo es requerido."
            }
         }
      });
   });

   function validar() {
      if ($("#frmRegistro").valid()) {
         if ($("#password").val().length>1)
         {
            if( $.trim( $("#password").val())!=$.trim( $("#confirm").val())){
               alertMsg('Actualización de contraseña', 'Las contraseñas no coinciden.', 'warning', 2000);
               return;
            }
         }
         
         var formData = jQuery('#frmRegistro').serialize();
         jQuery.ajax({
            url: '<?= PROOT ?>users/actualizarDatosCliente',
            method: "POST",
            data: formData,
            success: function(resp) {
               if (resp.success) {
                  alertMsg('Actualializar Datos!', 'Sus datos han sido actualizados con exito.', 'success', 2500);
                  setTimeout(function() {
                     window.location.href = '<?= PROOT ?>users/actualizarDatosCliente';
                  }, 2000);
               } else {
                  alertMsg('Ha ocurrido un error con el registro!', 'Contactar con el administrador.', 'error', 2000);
                  return;
                  //jQuery('#frmEmpresa').modal('hide');
               }
            }
         });
      }else{alert('x');}
   }
</script>
<?php $this->end(); ?>