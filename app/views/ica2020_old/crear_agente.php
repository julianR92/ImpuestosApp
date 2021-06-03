<?php $this->start('body'); ?>

<style>
.box{
   -webkit-box-shadow: 17px 10px 57px 2px rgba(112,106,112,0.71);
-moz-box-shadow: 17px 10px 57px 2px rgba(112,106,112,0.71);
box-shadow: 17px 10px 57px 2px rgba(112,106,112,0.71);
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
                     <a style="color: #004fbf;" class="breadcrumb-text" href="#">Crear Agente Retenedor</a>
                  </div>
               </li>


            </ol>
         </nav><br>
      </div><br>


      <div class="col-md-12 pt-5 box">
         <h1 class="headline-xl-govco">Crear Agente Retenedor</h1>
         <form method="POST" onsubmit="nuevoAgente()" role="form" id="form_nuevoage">
         
         <div class="row pt-5">

           
            <div class="col-md-4">
               <div class="form-group">
                  <label for="nit">Nit/Cedula*</label>
                  <input type="text" class="form-control" name="nit" id="nit" onkeypress="return Numeros(event)" maxlength="20" minlength="5" readonly value="<?= $this->nit ?>"  required>
               </div>
            </div>

            <div class="col-md-8">
               <div class="form-group">
                  <label for="razon_social">Razon Social*</label>
                  <input type="text" class="form-control" name="razon_social" id="razon_social" onkeypress="return Razon(event)" required maxlength="60" onchange="aMayusculas(this.value,this.id)">
               </div>
            </div>

            <div class="col-md-8">
               <div class="form-group">
                  <label for="direccion_pri">Direccion Sede Principal*</label>
                  <input type="text" class="form-control" name="direccion_pri" id="direccion_pri" onkeypress="return Direccion(event)" required maxlength="120" onchange="aMayusculas(this.value,this.id)">
               </div>
            </div>

            <div class="col-md-4">
               <div class="form-group">
                  <label for="razon_social">Ciudad de sede Principal*</label>
                  <select name="ciudad_principal" id="ciudad_principal" class="form-control" required>
                     <option value=""> Seleccione* </option>
                     <?php foreach ($this->ciudades as $ciudad) : ?>
                        <option value="<?= $ciudad->CiudCod ?>"> <?= $ciudad->CiudNom ?> </option>


                     <?php endforeach ?>


                  </select>
               </div>
            </div>
            <div class="col-md-8">
               <div class="form-group">
                  <label for="direccion_notificacion">Direccion de Notificacion*</label>
                  <input type="text" class="form-control" name="direccion_notificacion" id="direccion_notificacion" onkeypress="return Direccion(event)" required maxlength="120" onchange="aMayusculas(this.value,this.id)">
               </div>
            </div>

            <div class="col-md-4">
               <div class="form-group">
                  <label for="razon_social">Ciudad Direccion Notificacion*</label>
                  <select name="ciudad_notificacion" id="ciudad_notificacion" class="form-control" required>
                     <option value=""> Seleccione* </option>
                     <?php foreach ($this->ciudades as $ciudad) : ?>
                        <option value="<?= $ciudad->CiudCod ?>"> <?= $ciudad->CiudNom ?> </option>
                     <?php endforeach ?>
                  </select>
               </div>
            </div>

            <div class="col-md-4">
               <div class="form-group">
                  <label for="email">Email*</label>
                  <input type="email" name="email" id="email" class="form-control" required>

               </div>
            </div>

            <div class="col-md-4">
               <div class="form-group">
                  <label for="telefono_agente">Telefono Agente Retenedor*</label>
                  <input type="text" name="telefono_agente" id="telefono_agente" class="form-control" onkeypress="return Numeros(event)" minlength="7" maxlength="10" required>

               </div>
            </div>

            <div class="col-md-4">
               <div class="form-group">
                  <label for="tipo_contribuyente">Tipo de Contribuyente*</label>
                  <select class="form-control" name="tipo_contribuyente" id="tipo_contribuyente" required>
                     <option value="">Seleccione</option>
                     <option value="1">Tipo 1</option>
                  </select>

               </div>
            </div>

            <hr>
            <div class="col-md-12">
               <p class="description-govco">Datos Representante Legal</p><br>
            </div>



            <div class="col-md-3">
               <div class="form-group">
                  <label for="razon_social">Nit Representante Legal*</label>
                  <input type="text" name="nit_representante" id="nit_representante" class="form-control" onkeypress="return Numeros(event)" maxlength="20" minlength="5" required>

               </div>
            </div>

            <div class="col-md-3">
               <div class="form-group">
                  <label for="razon_social">Tipo de documento*</label>
                  <select name="tipo_documento_representante" id="tipo_documento_representante" class="form-control" required>
                     <option value="">Seleccione*</option>
                     <option value="1">CC</option>
                  </select>
               </div>
            </div>


            <div class="col-md-6">
               <div class="form-group">
                  <label for="razon_social">Nombre Representante Legal*</label>
                  <input type="text" name="nombre_representante" id="nombre_representante" class="form-control" onkeypress="return Letras(event)" maxlength="60" required onchange="aMayusculas(this.value,this.id)">

               </div>
            </div>

            <div class="col-md-3">
               <div class="form-group">
                  <label for="telefono_representante">Telefono Represenante Legal*</label>
                  <input type="text" name="telefono_representante" id="telefono_representante" class="form-control" onkeypress="return Numeros(event)" minlength="7" maxlength="10" required>

               </div>
            </div>

            <div class="col-md-12">

               <button type="submit" class="btn btn-round btn-middle" style="float: right;">Crear Agente Retenedor</button>
               <a class="btn btn-round btn-high" href="<?= PROOT ?>home/index" style="float: right;">Cancelar</a>


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
      numeros = "ñ1234567890-Ñ#. ";
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

   function nuevoAgente() { 
      var formData = jQuery('#form_nuevoage').serialize(); 

      jQuery.ajax({
            url: '<?= PROOT ?>ica/nuevo',
            method: "POST",
            data: formData,
            success: function(resp) {
               if (resp.success) {
                  /*alertMsg('Proceso exitoso!', 'Bienvenido al sistema.', 'success', 2000);
                  setTimeout(function() {
                     window.location.href = '<?= PROOT ?>'+resp.enlace;
                  }, 2000);*/
               } else {
                  /*alertMsg('Inicio de sesión fallido!', 'El usuario o la contraseña no son incorrectos.', 'error', 2000);*/
               }
            }
         });

      







   }
</script>

<?php $this->end(); ?>