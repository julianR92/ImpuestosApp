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
                     <a style="color: #004fbf;" class="breadcrumb-text" href="#">Actualizar Agente Retenedor</a>
                  </div>
               </li>

            </ol>
         </nav><br>
      </div><br>

      <div class="col-md-12 pt-5 box">
         <h1 class="headline-xl-govco">Actualizar Agente Retenedor</h1>
         <form action="" role="form" id="frm">

            <div class="row pt-5">

               <div class="col-md-12" id="divError"></div>

               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="form-group">
                           <label for="tipo_persona">Tipo de persona*</label>
                           <select class="form-control" name="tipo_persona" id="tipo_persona" required="required">
                              <option value="">Seleccionar*</option>
                              <option value="N">Natural</option>
                              <option value="J">Jurídica</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label for="tipo_agente">Agente Autoretenedor*</label>
                           <select class="form-control agente" name="cb_tipo_agente" id="cb_tipo_agente" required="required" data-toggle="popover" data-trigger="focus" data-placement="top" data-custom-class="popover-info" title="Valores de Referencia" data-content="PREFERENCIAL: ingresos <= 300UVT,  
                           REGIMEN COMUN: ingresos entre > 300UVT y <= 80000UVT, GRAN CONTRIBUYENTE: ingresos > 80000UVT">
                              <option value="">Seleccionar*</option>
                              <option <?php if ($this->calidadAgente == 'P') echo 'selected'; ?> value="P">No Aplica</option>
                              <option <?php if ($this->calidadAgente == 'C') echo 'selected'; ?> value="C">Régimen Común <small>(ingresos entre > 300UVT y <= 80000UVT)</small></option>
                              <option <?php if ($this->calidadAgente == 'G') echo 'selected'; ?> value="G">Gran Contribuyente <small>(ingresos > 80000UVT)</small></option>
                           </select>
                           <input type="hidden" name="tipo_agente" id="tipo_agente" value="<?= $this->calidadAgente ?>">
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label for="periodo">Periodicidad Declaración*</label>
                           <select class="form-control" name="cb_periodo" id="cb_periodo" required="required">
                              <option value="">Seleccionar*</option>
                              <option <?php if ($this->presentacion == 'Mensual') echo 'selected'; ?> value="Mensual">MENSUAL <small>(ingresos entre >= 5000UVT)</small></option>
                              <option <?php if ($this->presentacion == 'Trimestral') echo 'selected'; ?> value="Trimestral">TRIMESTRAL<small>(ingresos < 5000UVT)</small></option>
                           </select>
                           <input type="hidden" name="periodo" id="periodo" value="<?= $this->presentacion ?>">
                        </div>
                     </div>

                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="nit">Nit/Cedula*</label>
                     <input type="text" class="form-control" name="nit" id="nit" onkeypress="return Numeros(event)" maxlength="20" minlength="5" readonly value="<?= $_SESSION['nit'] ?>" required>
                  </div>
               </div>

               <div class="col-md-8 box_juridica">
                  <div class="form-group">
                     <label for="razon_social">Razón Social*</label>
                     <input type="text" value="<?= $this->datos->RetIRazS ?>" class="form-control" name="razon_social" id="razon_social" onkeypress="return Razon(event)" required maxlength="60" onchange="aMayusculas(this.value,this.id)">
                  </div>
               </div>

               <div class="col-md-4 box_natural" style="display: none">
                  <div class="form-group">
                     <label for="primer_nombre">Primer Nombre*</label>
                     <input type="text" value="<?= $this->datos->RetIPNom ?>" class="form-control" name="primer_nombre" id="primer_nombre" onkeypress="return Letras(event)" maxlength="15" onchange="aMayusculas(this.value,this.id)">
                  </div>
               </div>

               <div class="col-md-4 box_natural" style="display: none">
                  <div class="form-group">
                     <label for="segundo_nombre">Segundo Nombre</label>
                     <input type="text" value="<?= $this->datos->RetISNom ?>" class="form-control" name="segundo_nombre" id="segundo_nombre" onkeypress="return Letras(event)" maxlength="15" onchange="aMayusculas(this.value,this.id)">
                  </div>
               </div>
               <div class="col-md-4 box_natural" style="display: none">
                  <div class="form-group">
                     <label for="primer_apellido">Primer Apellido*</label>
                     <input type="text" value="<?= $this->datos->RetIPApe ?>" class="form-control" name="primer_apellido" id="primer_apellido" onkeypress="return Letras(event)" maxlength="15" onchange="aMayusculas(this.value,this.id)">
                  </div>
               </div>
               <div class="col-md-4 box_natural" style="display: none">
                  <div class="form-group">
                     <label for="segundo_apellido">Segundo Apellido</label>
                     <input type="text" value="<?= $this->datos->RetISApe ?>" class="form-control" name="segundo_apellido" id="segundo_apellido" onkeypress="return Letras(event)" maxlength="60" onchange="aMayusculas(this.value,this.id)">
                  </div>
               </div>
               <div class="col-md-8">
                  <div class="form-group">
                     <label for="direccion_pri">Dirección Sede Principal*</label>
                     <input type="text" value="<?= $this->datos->RetIDir ?>" class="form-control" name="direccion_pri" id="direccion_pri" onkeypress="return Direccion(event)" required maxlength="120" onchange="aMayusculas(this.value,this.id)">
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
                     <label for="direccion_notificacion">Dirección de Notificación*</label>
                     <input type="text" value="<?= $this->datos->RetDirNot ?>" class="form-control" name="direccion_notificacion" id="direccion_notificacion" onkeypress="return Direccion(event)" required maxlength="120" onchange="aMayusculas(this.value,this.id)">
                  </div>
               </div>

               <div class="col-md-4">
                  <div class="form-group">
                     <label for="razon_social">Ciudad Dirección Notificación*</label>
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
                     <input type="email" value="<?= $this->datos->RetIMail ?>" name="email" id="email" class="form-control" required>

                  </div>
               </div>

               <div class="col-md-4">
                  <div class="form-group">
                     <label for="telefono_agente">Teléfono Agente Retenedor*</label>
                     <input type="text" value="<?= $this->datos->RetITelPri ?>" name="telefono_agente" id="telefono_agente" class="form-control" onkeypress="return Numeros(event)" minlength="7" maxlength="10" required>

                  </div>
               </div>

               <div class="col-md-4">
                  <div class="form-group">
                     <label for="tipo_contribuyente">Calidad de Agente Retenedor*</label>
                     <select class="form-control" name="tipo_contribuyente" id="tipo_contribuyente" required>
                        <option value="">Seleccione</option>
                        <option <?php if ($this->datos->RetITip == "1") echo 'selected'; ?> value="1">Gran Contribuyente</option>
                        <option <?php if ($this->datos->RetITip == "2") echo 'selected'; ?> value="2">Sist. Tarj. Crédito - Débito</option>
                        <option <?php if ($this->datos->RetITip == "3") echo 'selected'; ?> value="3">Entidad Pública</option>
                        <option <?php if ($this->datos->RetITip == "4") echo 'selected'; ?> value="4">Ent. Transportadores</option>
                        <option <?php if ($this->datos->RetITip == "5") echo 'selected'; ?> value="5">Unión Temporal</option>
                        <option <?php if ($this->datos->RetITip == "6") echo 'selected'; ?> value="6">Consorcio</option>
                        <option <?php if ($this->datos->RetITip == "7") echo 'selected'; ?> value="7">Intermediarios</option>
                        <option <?php if ($this->datos->RetITip == "8") echo 'selected'; ?> value="8">Autoretenedor</option>
                        <option <?php if ($this->datos->RetITip == "9") echo 'selected'; ?> value="9">Designados</option>
                        <option <?php if ($this->datos->RetITip == "10") echo 'selected'; ?> value="10">Régimen común</option>
                        <option <?php if ($this->datos->RetITip == "11") echo 'selected'; ?> value="11">No Aplica</option>
                     </select>
                  </div>
               </div>

               <hr>
               <div class="col-md-12">
                  <p class="description-govco">Datos Representante Legal</p><br>
               </div>
               <div class="col-md-3">
                  <div class="form-group">
                     <label for="razon_social">NIT Representante Legal*</label>
                     <input type="text" value="<?php if (empty($this->repre->RetNitRepL)) echo '';
                                                else echo $this->repre->RetNitRepL; ?>" name="nit_representante" id="nit_representante" class="form-control" onkeypress="return Numeros(event)" maxlength="20" minlength="5" required>
                  </div>
               </div>

               <div class="col-md-3">
                  <div class="form-group">
                     <label for="razon_social">Tipo de documento*</label>
                     <select name="tipo_documento_representante" id="tipo_documento_representante" class="form-control" required>
                        <option value="">Seleccione*</option>
                        <option <?php if (empty($this->repre->RetITipIde)) echo '';
                                 else if ($this->repre->RetITipIde == "1") echo 'selected'; ?> value="1">Cedula de ciudadanía</option>
                        <option <?php if (empty($this->repre->RetITipIde)) echo '';
                                 else if ($this->repre->RetITipIde == "2") echo 'selected'; ?> value="2">Cedula de extranjería</option>
                     </select>
                  </div>
               </div>

               <div class="col-md-3">
                  <div class="form-group">
                     <label for="nombre_representante" id="nombre_representante_label">Primer Nombre* </label>
                     <input type="text" value="<?php if (empty($this->repre->RetIPNomRep)) echo '';
                     else  $this->repre->RetIPNomRep ?>" name="nombre_representante" id="nombre_representante" class="form-control" onkeypress="return Letras(event)" maxlength="60" required onchange="aMayusculas(this.value,this.id)">

                  </div>
               </div>

               <div class="col-md-3">
                  <div class="form-group">
                     <label for="nombre2_representante" id="nombre2_representante_label">Segundo Nombre </label>
                     <input type="text" value="<?php if (empty($this->repre->RetISNomRep)) echo '';
                     else $this->repre->RetISNomRep ?>" name="nombre2_representante" id="nombre2_representante" class="form-control" onkeypress="return Letras(event)" maxlength="60" onchange="aMayusculas(this.value,this.id)">

                  </div>
               </div>

               <div class="col-md-3">
                  <div class="form-group">
                     <label for="apellido_representante" id="apellido_representante_label">Primer Apellido* </label>
                     <input type="text" value="<?php if (empty($this->repre->RetIPApeRep)) echo '';
                     else $this->repre->RetIPApeRep ?>" name="apellido_representante" id="apellido_representante" class="form-control" onkeypress="return Letras(event)" maxlength="60" required onchange="aMayusculas(this.value,this.id)">

                  </div>
               </div>

               <div class="col-md-3">
                  <div class="form-group">
                     <label for="apellido2_representante" id="apellido2_representante_label">Segundo Apellido</label>
                     <input type="text" value="<?php if (empty($this->repre->RetISApeRep)) echo '';
                     else $this->repre->RetISApeRep ?>" name="apellido2_representante" id="apellido2_representante" class="form-control" onkeypress="return Letras(event)" maxlength="60" onchange="aMayusculas(this.value,this.id)">
                  </div>
               </div>

               <div class="col-md-3">
                  <div class="form-group">
                     <label for="telefono_representante">Teléfono Representante Legal*</label>
                     <input type="text" value="<?php if (empty($this->repre->RetITelRep)) echo '';
                                                else echo $this->repre->RetITelRep; ?>" name="telefono_representante" id="telefono_representante" class="form-control" onkeypress="return Numeros(event)" minlength="7" maxlength="10" required>
                  </div>
               </div>

               <input type="hidden" name="uReg" value="<?= $this->uReg ?>">
               <input type="hidden" name="placa" value="<?= $this->placa ?>">
               <input type="hidden" name="DepNum" value="<?= $this->DepNum ?>">

               <div class="col-md-12">
                  <button type="submit" class="btn btn-round btn-middle" style="float: right;">Actualizar datos</button>
                  <a class="btn btn-round btn-high" href="<?= PROOT ?>ica/index" style="float: right;">Cancelar</a>
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

   $('#ciudad_principal').val(<?= $this->datos->RetIDirCiu ?>);
   $('#ciudad_principal').trigger('change');

   $('#ciudad_notificacion').val(<?= $this->datos->RetIDirNot ?>);
   $('#ciudad_notificacion').trigger('change');

   $('#tipo_persona').change(function() {

      var input0 = document.getElementById('tipo_persona').value;

      if (input0 == 'N') {

         $('#nit_representante').attr('disabled', true);
         $('#nit_representante').attr('required', false);
         $('#nit_representante').val('');
         $('#nit_representante_label').text('NIT Representante Legal');

         $('#tipo_documento_representante').attr('disabled', true);
         $('#tipo_documento_representante').attr('required', false);
         $('#tipo_documento_representante').val('');
         $('#tipo_documento_representante_label').text('Tipo de documento');

         $('#nombre_representante').attr('disabled', true);
         $('#nombre_representante').attr('required', false);
         $('#nombre_representante').val('');
         $('#nombre_representante_label').text('Primer Nombre');

         $('#nombre2_representante').attr('disabled', true);
         $('#nombre2_representante').attr('required', false);
         $('#nombre2_representante').val('');

         $('#apellido_representante').attr('disabled', true);
         $('#apellido_representante').attr('required', false);
         $('#apellido_representante').val('');
         $('#apellido_representante_label').text('Apellido Representante');

         $('#apellido2_representante').attr('disabled', true);
         $('#apellido2_representante').attr('required', false);
         $('#apellido2_representante').val('');

         $('#telefono_representante').attr('disabled', true);
         $('#telefono_representante').attr('required', false);
         $('#telefono_representante').val('');
         $('#telefono_representante_label').text('Teléfono Representante Legal');

         $('.box_natural').css('display', 'block');
         $('.box_juridica').css('display', 'none');

         $('#razon_social').attr('required', false);
         $('#razon_social').val('');
         $('#primer_nombre').attr('required', true);
         $('#primer_apellido').attr('required', true);


      } else {

         $('#nit_representante').attr('disabled', false);
         $('#nit_representante').attr('required', true);
         $('#nit_representante').val('');
         $('#nit_representante_label').text('NIT Representante Legal*');

         $('#tipo_documento_representante').attr('disabled', false);
         $('#tipo_documento_representante').attr('required', true);
         $('#tipo_documento_representante').val('');
         $('#tipo_documento_representante_label').text('Tipo de documento*');

         $('#nombre_representante').attr('disabled', false);
         $('#nombre_representante').attr('required', true);
         $('#nombre_representante').val('');
         $('#nombre_representante_label').text('Nombre Representante Legal*');

         $('#nombre2_representante').attr('disabled', false);
         $('#nombre2_representante').attr('required', false);
         $('#nombre2_representante').val('');

         $('#apellido_representante').attr('disabled', false);
         $('#apellido_representante').attr('required', true);
         $('#apellido_representante').val('');
         $('#apellido_representante').text('Apellido Representante*');

         $('#apellido2_representante').attr('disabled', false);
         $('#apellido2_representante').attr('required', false);
         $('#apellido2_representante').val('');

         $('#telefono_representante').attr('disabled', false);
         $('#telefono_representante').attr('required', true);
         $('#telefono_representante').val('');
         $('#telefono_representante_label').text('Teléfono Representante Legal');

         $('.box_natural').css('display', 'none');
         $('.box_juridica').css('display', 'block');

         $('#razon_social').attr('required', true);
         $('#primer_nombre').attr('required', false);
         $('#primer_apellido').attr('required', false);
         $('#primer_nombre').val('');
         $('#segundo_nombre').val('');
         $('#primer_apellido').val('');
         $('#segundo_apellido').val('');

      }
   });

    $('.body').ready(function() {

       if('<?= $this->existeICA ?>' == 'SI' ){

         if('<?= $this->calidadAgente ?>' == 'P' && ('<?= $this->tipo_persona ?>' =='C' || '<?= $this->tipo_persona ?>' =='NO'|| '<?= $this->tipo_persona ?>' =='')){


            var mensaje = '<strong>No es posible actualizar el registro como agente retenedor, ya que sus ingresos declarados en el 2019 son menores a 300UVT, si esta en desacuerdo por favor comunicarse a Secretaria de Hacienda a los números 6337000 EXT 251</strong>';
            alertMsg('ATENCION CONTRIBUYENTE!', mensaje, 'warning', 20000);
               setTimeout(function() {
                  window.location.href = '<?= PROOT ?>ica';
               }, 18000);

         }


       }

      if ('<?= $this->calidadAgente ?>' != '') {
         $('#cb_tipo_agente').attr('disabled', true);
      } else {
         $('#cb_tipo_agente').attr('readonly', false);
      }

      if ('<?= $this->presentacion ?>' != '') {
         $('#cb_periodo').attr('disabled', true);
      } else {
         $('#cb_periodo').attr('readonly', false);
      }



   });

   $('#cb_periodo').change(function() {

      var input0 = document.getElementById('cb_periodo').value;

      $('#periodo').val(input0);

   });

    $('#cb_tipo_agente').change(function() {

      var input1 = document.getElementById('cb_tipo_agente').value;

      $('#tipo_agente').val(input1);

      if(input1 == 'P' || input1 == 'G' ){
         $('#cb_periodo').val('Mensual');
         $('#cb_periodo').prop('selected', true);
         $('#periodo').val('Mensual');
         $('#cb_periodo').attr('disabled', true);    

      }else if(input1 == 'C'){

         $('#cb_periodo').attr('disabled', false);
         $('#periodo').val('');
         $('#cb_periodo').val('');    


      }

   });

   //$('.agente').popover();


   const frm = document.getElementById('frm');
   frm.onsubmit = (e) => {
      e.preventDefault();
      var formData = jQuery('#frm').serialize();
      jQuery.ajax({
         url: '<?= PROOT ?>ica/actualizar',
         method: "POST",
         data: formData,
         success: function(resp) {
            if (resp.success) {
               alertMsg('Proceso exitoso!', resp.mensaje, 'success', 6000);
               setTimeout(function() {
                  window.location.href = '<?= PROOT ?>ica/year';
               }, 2000);
            } else {
               alertMsg('Ha ocurrido un error!', resp.mensaje, 'error', 6000);
               var errors = Object.values(resp.mensaje);

               $('#divError').html('<div>');

               for (var error of errors) {
                  $('#divError').append('<div class="alert alert-danger alert-dismissible" id="alert" role="alert">' + error + ' <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </div>');
               }
               $('#divError').append('</div>');
               setTimeout(function() {
                  $('.alert').alert('close');
               }, 10000);

               return;
            }
         }
      });
   }
</script>

<?php $this->end(); ?>