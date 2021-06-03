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
                     <a style="color: #004fbf;" class="breadcrumb-text" href="#">Modulo Administrador</a>
                  </div>
               </li>
            </ol>
         </nav>
      </div>
      <!-- fin parte superior -->
      <div class="col-md-12 pt-4">
         <h1 class="headline-xl-govco">Modulo de Administración de Retención de ICA</h1>
         <div class="row pt-4">
            <div class="col-md-12 justify-content-center">
               <div class="card govco-card">
                  <div class="card-header govco-card-header">
                     <span class="govco-icon govco-icon-key"> </span>
                     Digite la identificación del contribuyente
                  </div>
                  <form action="" method="POST" id="frm">
                     <div class="card-body text-center">
                        <h5>Para actualizar la información del contribuyente por favor oprima la opción que desea editar</h5><br>
                        <div class="row jsuti">
                           <div class="col-md-3">
                              <label class="text-left" for="txtNit" style="float: right;">Nit/Identificación*</label>
                           </div>
                           <div class="col-md-4">
                              <input class="form-control" minlength="5" maxlength="15" type="text" name="txtNit" id="txtNit" required="required" onkeypress="return Numeros(event)" title="Digite el nit o identificación">
                           </div>
                           <div class="col-md-2">
                              <button type="button" class="btn btn-link btn-sm" id="btnIntentos">Reiniciar Intentos</button>
                           </div>
                           <div class="col-md-2">
                             <button type="button" class="btn btn-link btn-sm" id="btnTrazabilidad">Trazabilidad</button>
                           </div>

                        </div>
                     </div>
                     <hr>
                     <div class="card-footer govco-card-footer govco-center">
                        <div class="col-md-12">
                           <button type="button" class="btn btn-round btn-middle" id="btnDatosContri" style="float: right;">Datos Contribuyente</button>

                            <button type="button" class="btn btn-round btn-middle" id="btnDatosRepre" style="float: right;">Datos Representante Legal</button>

                            <button type="button" class="btn btn-round btn-middle" id="btnTipoAge" style="float: right;">Tipo de Clasificación</button>

                            <button type="button" class="btn btn-round btn-middle" id="btnPeriodicidad" style="float: right;">Periodicidad</button>

                           
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

   let btnDatosContri = document.getElementById('btnDatosContri');

   btnDatosContri.addEventListener('click', event => {
      var documento = document.getElementById('txtNit').value.trim();
      if (documento.length < 5) {
         alertMsg('Documento invalido!', 'Debe digitar un número de documento valido', 'info', 3000);
         $('#txtNit').val('');         
         return;
      }
      var form = jQuery('#frm').serialize();
      jQuery.ajax({
         url: '<?= PROOT ?>admin/consultaContri',
         method: "POST",
         data: form,
         success: function(resp) {
            if (resp.success) {
               window.location.href = '<?= PROOT ?>admin/actualizaContri';
            } else {
               
            alertMsg('Atención!', resp.mensaje, 'warning', 6000);
            return;

            }
         }
      });
   });

   let btnDatosRepre = document.getElementById('btnDatosRepre');

   btnDatosRepre.addEventListener('click', event => {
      var documento = document.getElementById('txtNit').value.trim();
      if (documento.length < 5) {
         alertMsg('Documento invalido!', 'Debe digitar un número de documento valido', 'info', 3000);
         $('#txtNit').val('');         
         return;
      }
      var form = jQuery('#frm').serialize();
      jQuery.ajax({
         url: '<?= PROOT ?>admin/consultaRepre',
         method: "POST",
         data: form,
         success: function(resp) {
            if (resp.success) {
               window.location.href = '<?= PROOT ?>admin/actualizaRepre';
            } else {
               
            alertMsg('Atención!', resp.mensaje, 'warning', 6000);
            return;

            }
         }
      });
   });

    let btnTipoAge = document.getElementById('btnTipoAge');

   btnTipoAge.addEventListener('click', event => {
      var documento = document.getElementById('txtNit').value.trim();
      if (documento.length < 5) {
         alertMsg('Documento invalido!', 'Debe digitar un número de documento valido', 'info', 3000);
         $('#txtNit').val('');         
         return;
      }
      var form = jQuery('#frm').serialize();
      jQuery.ajax({
         url: '<?= PROOT ?>admin/consultaTipoAgente',
         method: "POST",
         data: form,
         success: function(resp) {
            if (resp.success) {
               window.location.href = '<?= PROOT ?>admin/actualizaTipoAgente';
            } else {
               
            alertMsg('Atención!', resp.mensaje, 'warning', 6000);
            return;

            }
         }
      });
   });

   let btnPeriodicidad = document.getElementById('btnPeriodicidad');

   btnPeriodicidad.addEventListener('click', event => {
      var documento = document.getElementById('txtNit').value.trim();
      if (documento.length < 5) {
         alertMsg('Documento invalido!', 'Debe digitar un número de documento valido', 'info', 3000);
         $('#txtNit').val('');         
         return;
      }
      var form = jQuery('#frm').serialize();
      jQuery.ajax({
         url: '<?= PROOT ?>admin/consultaPeriodicidad',
         method: "POST",
         data: form,
         success: function(resp) {
            if (resp.success) {
               window.location.href = '<?= PROOT ?>admin/actualizaPeriodicidad';
            } else {
               
            alertMsg('Atención!', resp.mensaje, 'warning', 6000);
            return;

            }
         }
      });
   });

   let btnTrazabilidad = document.getElementById('btnTrazabilidad');

   btnTrazabilidad.addEventListener('click', event => {
      var documento = document.getElementById('txtNit').value.trim();
      if (documento.length < 5) {
         alertMsg('Documento invalido!', 'Debe digitar un número de documento valido', 'info', 3000);
         $('#txtNit').val(''); 
         $('#txtNit').focus();          
         return;

      }
      var form = jQuery('#frm').serialize();
      jQuery.ajax({
         url: '<?= PROOT ?>admin/consultaTraza',
         method: "POST",
         data: form,
         success: function(resp) {
            if (resp.success) {
               window.location.href = '<?= PROOT ?>admin/consultaTraza';
            } else {
               
            alertMsg('Atención!', resp.mensaje, 'warning', 6000);
            $('#txtNit').val('');            
            return;
            $('#txtNit').focus(); 

            }
         }
      });
   });

   let btnIntentos = document.getElementById('btnIntentos');

      btnIntentos.addEventListener('click', event => {   //id=btnIntentos (Id con el que siempre trabaja JavaScript)
      var documento = document.getElementById('txtNit').value.trim();   //declaracion de variable "documento" y obtiene los datos de la caja de texto 'txtNit'(imput) y trim (elimina espacios a la derecha)
      //Inicio de la validacion de longitud de caracteres.
      if (documento.length < 5) {
                  //titulo del alertMsg     contenido del alertMsg                      
         alertMsg('Documento invalido!', 'Debe digitar un número de documento valido', 'info', 6000);
         $('#txtNit').val(''); 
         $('#txtNit').focus();          
         return;

      }
      //Validacion contraria al If
      //cuando se captura un id en jQuery simepre es #+id y si se va a capturar por medio del id es con #+id. 
      //declar variable = se toma lo que esta dentro del id(frm) y con el serialize se capturan los datos de los imput dentro del frm
      var form = jQuery('#frm').serialize();

      //console.log(form);   //con el consolelog se valida por consola lo que se esta haciendo.

      //ajax es un lanzador de peticiones al SERVER en segundo plano sin recargar la pagina.
      
      jQuery.ajax({ //PETICION
         //Donde yo voy a ir a hacer la peticion PROOT(raiz del proyecto).
         url: '<?= PROOT ?>admin/reiniciaIntentos',
         //metodo post (tipo de peticion).
         method: "POST",
         //Datos que yo envio en la Peticion y se captura en la variable "form".
         data: form,
         //si fue exitoso el envio(post) el me trae la respuesta del server.
         
         success: function(resp) {  //RESPUESTA
            if (resp.success) {
            alertMsg('Atención!', resp.mensaje, 'success', 6000);
            $('#txtNit').val('');
            return;
            $('#txtNit').focus(); 
            
            } else {
               
            alertMsg('Atención!', resp.mensaje, 'warning', 6000);
            $('#txtNit').val('');            
            return;
            $('#txtNit').focus(); 

            }
         }
      });
   });

</script>

<?php $this->end(); ?>