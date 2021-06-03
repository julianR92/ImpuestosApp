<?php $this->start('body'); ?>
<div class="container mt-3 mb-4 m-xs-x-3">
   <div class="row">
      <div class="px-0 col-md-9">
         <nav aria-label="Miga de pan" style="max-height: 20px;">
            <ol class="breadcrumb" style="background-color: #FFFFFF;">
               <li class="breadcrumb-item ml-3 ml-md-0">
                  <a style="color: #004fbf;" class="breadcrumb-text" href="https://www.gov.co/home/">Inicio</a>
               </li>
               <li class="breadcrumb-item ">
                  <div class="image-icon">
                     <span class="d-none d-md-inline breadcrumb govco-icon govco-icon-shortr-arrow" style="height: 22px;"></span>
                     <p class="ml-3 ml-md-0 "><b style="color: #004fbf;text-transform: none;">Actualización datos contribuyente</b></p>
                  </div>
               </li>
            </ol>
         </nav>
      </div>
   </div>
</div>
<div class="mx-3 mx-md-0 card govco-card border-0 shadow-none mt-5 mt-md-0" style="border-radius: 0px;">
   <h1 class="headline-xl-govco">Actualización datos contribuyente</h1>
   <!-- <p class="h4 mt-2">
      La Alcaldía de Bucaramanga le informa que una vez la vigencia 2021 esté disponible, usted recibirá la información necesaria para realizar sus consultas y pagos a través de canales electrónicos.
   </p> -->
</div>

<div class="mx-3 mx-md-0 card govco-card border-0 shadow-none">
   <div class="row">
      <div class="col-md-8">
         <?php $this->partial('personas', 'form'); ?>
      </div>
      <div class="col-md-4">
         <div class="accordion accordion-govco" id="EjemploAccordion-2">
            <div class="card mb-0">
               <div class="card-header row no-gutters" id="headingUno">
                  <button class="btn-link row no-gutters collapsed" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                     <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                        <span class="title">¿Tienes dudas?</span>
                     </div>
                     <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <div class="btn-icon-close">
                           <span class="govco-icon govco-icon-minus"></span>
                           <span class="govco-icon govco-icon-simpled-arrow"></span>
                        </div>
                     </div>
                  </button>
               </div>
               <div id="collapse1" class="collapse" aria-labelledby="headingUno" data-parent="#EjemploAccordion-2">
                  <div class="card-body bg-color-selago">
                     <div class="container">
                        <p class="form-inline my-0"><span class="govco-icon govco-icon-email"></span> <a style="color: #3366CC;" href="mailto:contactenos@bucaramanga.gov.co" target="_blank"> contactenos@bucaramanga.gov.co</a></p>
                        <p class="form-inline"><span class="govco-icon govco-icon-call-center"></span><a style="color: #3366CC;" href="tel:0376337000"> (+57)7 633 70 00</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--<div class="accordion accordion-govco" id="acc2">
            <div class="card">
               <div class="card-header row no-gutters" id="c2">
                  <button class="btn-link row no-gutters collapsed" type="button" data-toggle="collapse" data-target="#coll2" aria-expanded="false" aria-controls="coll2">
                     <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                        <span class="title">¿No encuentras el código predial?</span>
                     </div>
                     <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <div class="btn-icon-close">
                           <span class="govco-icon govco-icon-minus"></span>
                           <span class="govco-icon govco-icon-simpled-arrow"></span>
                        </div>
                     </div>
                  </button>
               </div>
               <div id="coll2" class="collapse" aria-labelledby="c2" data-parent="#acc2">
                  <div class="card-body bg-color-selago">
                     <div class="container text-center">
                        <button style="font-size:15px;" type="button" id="boton_consulta_dos" class="btn btn-round btn-middle btn-outline-info" data-toggle="modal" data-target=".bd-example-modal-lg">BUSCAR POR POT-ONLINE</button>


                     </div>
                  </div>
               </div>
            </div>
         </div>-->
         <div class="accordion accordion-govco" id="acc3">
            <div class="card">

               <div id="coll3" class="collapse" aria-labelledby="c3" data-parent="#acc3">
                  <div class="card-body bg-color-selago">
                     <div class="container text-center">
                        <button style="font-size:15px;" data-toggle="modal" data-target="#ModalAutenticidad" type="button" class="btn btn-round btn-middle">VALIDE AQUÍ
                        </button>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!---- nuevo modulo------->

         <div class="accordion accordion-govco" id="acc4">
            <div class="card">
               <div class="card-header row no-gutters" id="c4">
                  <button class="btn-link row no-gutters collapsed" type="button" data-toggle="collapse" data-target="#coll4" aria-expanded="false" aria-controls="coll4">
                     <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                        <span class="title">¿Como fue tu experiencia durante el proceso?</span>
                     </div>
                     <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <div class="btn-icon-close">
                           <span class="govco-icon govco-icon-minus"></span>
                           <span class="govco-icon govco-icon-simpled-arrow"></span>
                        </div>
                     </div>
                  </button>
               </div>
               <div id="coll4" class="collapse" aria-labelledby="c4" data-parent="#acc4">
                  <div class="card-body bg-color-selago">
                     <div class="row justify-content-center spacer no-gutters">
                        <div class="col-3 pl-3 pt-2">
                           <button type="button" id="Facil" class="btn-symbolic-govco align-column-govco" value="FACIL">
                              <span class="govco-icon govco-icon-check-cn size-4x"></span>
                              <span class="btn-govco-text">Facil</span>
                           </button>
                        </div>

                        <div class="col-3 pl-3 pt-2">
                           <button type="button" id="Dificil" class="btn-symbolic-govco align-column-govco" value="DIFICIL">
                              <span class="govco-icon govco-icon-x-cn size-4x"></span>
                              <span class="btn-govco-text">Dificil</span>
                           </button>
                        </div>
                     </div>


                     <div class="container text-center">
                        <button type="button" class="btn btn-round btn-middle btn-blocks" id="btn-sugerencias" data-toggle="tooltip" data-placement="right" title="" data-original-title="Después de escribir tus sugerencias oprime FACIL o DIFICIL para enviarlas">Escribe tus sugerencias</button><br>
                        <div id="Texto_sugerencias" style="display: none;">
                           <p style="color:#3366CC;"> Gracias por compartir tu experiencia</p>
                        </div>

                        <div id="text-button" style="padding-bottom: 10px; display: none;">
                           <label class="text-left small">Escribe tus comentarios</label>
                           <textarea class="form-control pb-2" rows="5" placeholder="Queremos conocer tu experiencia, sugerencias y consejos" id="text-area" maxlength="300" onkeypress="return Direccion(event)" onkeyup="aMayusculas(this.value,this.id)">                               </textarea>
                        </div>

                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="accordion accordion-govco" id="EjemploAccordion-3">
            <div class="card mb-0">
               <div class="card-header row no-gutters" id="headingTres">
                  <button class="btn-link row no-gutters collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                     <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                        <span class="title">Normatividad</span>
                     </div>
                     <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <div class="btn-icon-close">
                           <span class="govco-icon govco-icon-minus"></span>
                           <span class="govco-icon govco-icon-simpled-arrow"></span>
                        </div>
                     </div>
                  </button>
               </div>
               <div id="collapse3" class="collapse" aria-labelledby="headingTres" data-parent="#EjemploAccordion-3">
                  <div class="card-body bg-color-selago">
                     <div class="container">
                        <p class="form-inline my-0"></span> <a style="color: #3366CC;" href="<?= PROOT ?>documentos/RES 0002 NOTIFICACION ELECTRONICA.pdf" target="_blank"> * Resolución Nº 002 DE 2021 Notificación Electrónica</a></p>
                        <p class="form-inline my-0"></span> <a style="color: #3366CC;" href="<?= PROOT ?>documentos/Res 3171 2020 CALENDARIO TRIBUTARIO 2021 (1).pdf" target="_blank"> * Resolución Nº 3171 de 2020 Calendario tributario</a></p>
                        <p class="form-inline my-0"></span> <a style="color: #3366CC;" href="<?= PROOT ?>documentos/Acuerdo_033_2020.pdf" target="_blank"> * Acuerdo Municipal Nº 033 de 2020</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<?php $this->end(); ?>

<?php $this->start('footer'); ?>
<!--<script src="https://www.google.com/recaptcha/api.js" async defer></script>-->
<script>
   /*function validarCap() {
      var response = grecaptcha.getResponse();

      if (response.length == 0) {
         alert("Captcha no verificado");
         return;
      }
   }*/

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

   function NumDoc(n) {

      key = n.keyCode || n.which;
      tecla = String.fromCharCode(key).toLowerCase();
      numeros = "0123456789-ñÑ";
      especiales = [14, 15, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83,
         84, 85, 86, 87, 88, 89, 90, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109,
         110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 130, 160, 161, 162, 163, 164, 165,
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

   document.addEventListener("DOMContentLoaded", function(event) {
      $("#PerNumDoc").attr("readonly", false);

   });

   function validarCedula(cedula) {
      cedula = cedula.value;
      console.log(cedula);
      if (cedula.length > 4) {
         jQuery.ajax({
            url: '<?= PROOT ?>personas/validar/' + cedula,
            method: "GET",
            data: cedula.value,
            success: function(resp) {
               if (resp.success) {
                  document.getElementById('IdPersonas').value = resp.datos.IdPersonas;
                  document.getElementById('PerNumDoc').value = resp.datos.PerNumDoc;
                  document.getElementById('PerPriNom').value = resp.datos.PerPriNom;
                  document.getElementById('PerCorreo1').value = resp.datos.PerCorreo1;
                  document.getElementById('PerSegNom').value = resp.datos.PerSegNom;
                  document.getElementById('PerPriApe').value = resp.datos.PerPriApe;
                  document.getElementById('PerSegApe').value = resp.datos.PerSegApe;
                  document.getElementById('PerRazSoc').value = resp.datos.PerRazSoc;
                  document.getElementById('PerBarResPro').value = (resp.datos.PerBarResPro ? resp.datos.PerBarResPro : '');
                  document.getElementById('PerMunResPro').value = (resp.datos.PerMunResPro ? resp.datos.PerMunResPro : '');
                  document.getElementById('DD00').value = (resp.datos.PerDirResPro ? resp.datos.PerDirResPro : '');
                  document.getElementById('PerCorreo1').value = resp.datos.PerCorreo1;
                  document.getElementById('PerNumCel1').value = resp.datos.PerNumCel1;
                  document.getElementById('PerCorreo2').value = resp.datos.PerCorreo2;
               } else {
                  document.getElementById('IdPersonas').value = "";
                  //document.getElementById('PerTipDoc').value = "";
                  document.getElementById('PerPriNom').value = "";
                  document.getElementById('PerSegNom').value = "";
                  document.getElementById('PerPriApe').value = "";
                  document.getElementById('PerSegApe').value = "";
                  document.getElementById('PerRazSoc').value = "";
                  document.getElementById('DD00').value = "";
                  document.getElementById('PerBarResPro').value = "";
                  document.getElementById('PerMunResPro').value = "";
                  //document.getElementById('PerDirPre').value = "";
                  document.getElementById('PerBarPre').value = "";
                  document.getElementById('PerComPre').value = "";
                  document.getElementById('PerNumPre').value = "";
                  document.getElementById('PerMatInmPre').value = "";
                  document.getElementById('PerNumCel1').value = "";
                  document.getElementById('PerCorreo1').value = "";
                  document.getElementById('PerCorreo2').value = "";
               }
            }

         });
         jQuery.ajax({
            
            url: '<?= PROOT ?>personas/buscarPredios/' + cedula,
            method: "GET",
            data: cedula.value,
            success: function(resp) { 
               if (resp.success) {
                  //console.log(resp.predios);
                  document.getElementById('predio').value = resp.predios;
                  document.getElementById('PerNumPre').value = resp.datos[0].PreNum;
               }else{
                  return;
                 window.location.href = '<?= PROOT ?>personas/sinPredios';
               }
            }
         });
      }
   }

   $('#Depto').select2();
   $('#PerMunResPro').select2();
   $('#PerBarResPro').select2();

   $('#Depto').on('change', function() {

      if (this.value == 0) {
         var $PerMunResPro = $("#PerMunResPro").select2();
         $PerMunResPro.val('0').trigger('change');
      } else {
         $.ajax({
            type: "POST",
            url: '<?= PROOT ?>personas/cargarMuni/' + this.value,
            success: function(resp) {
               if (resp.success) {
                  var html = '';
                  html += '<option value="">Seleccionar</option>';
                  $.each(resp.municipio, function(idx, opt) {
                     html += '<option value="' + idx + '">' + opt + '</option>';
                  });
                  $('#PerMunResPro').html(html);
                  $('#PerMunResPro').prop('disabled', false);
               } else {

               }
            }
         });
      }
   });

   $('#txtDireccion').on('change', function() {
      //if (document.getElementById('DD01').value != '')
      var dd01 = document.getElementById('DD01').value;

      // if (document.getElementById('DD02').value != '')
      var dd02 = document.getElementById('DD02').value;
      // if (document.getElementById('DD03').value != '')
      var dd03 = document.getElementById('DD03').value;
      // if (document.getElementById('DD04').value != '')
      var dd04 = document.getElementById('DD04').value;
      // if (document.getElementById('DD05').value != '')
      var dd05 = document.getElementById('DD05').value;
      // if (document.getElementById('DD06').value != '')
      var dd06 = document.getElementById('DD06').value;
      // if (document.getElementById('DD07').value != '')
      var dd07 = document.getElementById('DD07').value;
      // if (document.getElementById('DD08').value != '')
      var dd08 = document.getElementById('DD08').value;


      document.getElementById('DD00').value = dd01 + " " + dd02 + dd03 + " " + dd04 + dd05 + " " + dd06 + " " + dd07 + " " + dd08;

      // var dd01 = document.getElementById('DD011').value;
      // var dd02 = document.getElementById('DD022').value;
      // var dd03 = document.getElementById('DD033').value;
      // var dd04 = document.getElementById('DD044').value;
      // var dd05 = document.getElementById('DD055').value;
      // var dd06 = document.getElementById('DD066').value;
      // var dd07 = document.getElementById('DD077').value;

      // document.getElementById('DD000').value = dd01 + " " + dd02 + dd03 + " " + dd04 + dd05 + " " + dd06 + dd07;

   });

   var availableTags = [
      "BOLIVAR",
      "SANTANDER",
      "FONTANA"
   ];
   var avenidas = [
      "PAN DE AZUCAR",
      "EL-JARDIN",
      "QUEBRADA-SECA",
      "LA ROSITA",
      "GONZALEZ-VALENCIA",
      "ALTOS-DEL-JARDIN",
      "EDUARDO-SANTOS",
      "LOS BUCAROS",
      "T ORIENTAL",
      "CIRCUNVALAR",
      "BOULEVARD SANTANDER"
   ];

   var anillo = [
      "BAL DEL TEJAR",

   ];

   var transversal = [
      "METROPOLITANA",
      "72 CIRCUN",
      "ORIENTAL",
      "C METROPOLITANA"

   ];

   $('#DD01').change(function() {

      $('#DD00').tooltip('show');

      var input8 = document.getElementById('DD01').value;

      if (input8 == 'BL') {

         $("#DD02").autocomplete({
            source: availableTags
         });


      } else if (input8 == 'A') {

         $("#DD02").autocomplete({
            source: avenidas
         });

      } else if (input8 == 'ANILLO') {

         $("#DD02").autocomplete({
            source: anillo
         });

      } else if (input8 == 'T') {
         $("#DD02").autocomplete({
            source: transversal
         });
      } else {

      }

   });

   $('#DD07').change(function() {

      var input10 = document.getElementById('DD07').value;

      if (input10 == 'CS' || input10 == 'AP' || input10 == 'LO' || input == 'LT') {

         $('.caja_ultima').css('display', 'block');

      } else {
         $('.caja_ultima').css('display', 'none');

      }



   })

   $('#VD00').change(function() {

      var input8 = document.getElementById('VD00').value;
      var ValInput8 = input8.match(/^[0-9]{1,20}$/);
      if (ValInput8 == null) {


         alert("Solo se permiten números");
         $('#VD00').focus();
         $('#VD00').val('');

      }
   });

   $('#DD011').change(function() {

      $('#DD000').tooltip('show');

      var input8 = document.getElementById('DD011').value;

      if (input8 == 'BL') {

         $("#DD022").autocomplete({
            source: availableTags
         });


      } else if (input8 == 'A') {

         $("#DD022").autocomplete({
            source: avenidas
         });

      } else if (input8 == 'ANILLO') {

         $("#DD022").autocomplete({
            source: anillo
         });

      } else if (input8 == 'T') {
         $("#DD022").autocomplete({
            source: transversal
         });
      } else {

      }

   });

   $('#DD077').change(function() {

      var input10 = document.getElementById('DD077').value;

      if (input10 == 'CS' || input10 == 'AP' || input10 == 'LO' || input == 'LT') {

         $('.caja_ultima').css('display', 'block');

      } else {
         $('.caja_ultima').css('display', 'none');

      }
   })

   $('#PerNumDoc').change(function() {

      var input8 = document.getElementById('PerNumDoc').value;
      var ValInput8 = input8.match(/^[a-zA-Z0-9\-]{5,15}$/);
      if (ValInput8 == null) {


         alert("No se permiten espacios, solo se permite el carácter especial (-)");
         $('#PerNumDoc').focus();
         $('#PerNumDoc').val('');

      }
   });

   $('#PerNumCel1').change(function() {

      var input8 = document.getElementById('PerNumCel1').value;
      var ValInput8 = input8.match(/^[0-9]{7,10}$/);
      if (ValInput8 == null) {


         alert("Solo se permiten números, no se permiten menos de 7 digitos y un maximo de 10");
         $('#PerNumCel1').focus();
         $('#PerNumCel1').val('');

      }
   });
   $('#PerNumCel2').change(function() {

      var input8 = document.getElementById('PerNumCel2').value;
      var ValInput8 = input8.match(/^[0-9]{7,10}$/);
      if (ValInput8 == null) {


         alert("Solo se permiten números, no se permiten menos de 7 digitos y un maximo de 10");
         $('#PerNumCel2').focus();
         $('#PerNumCel2').val('');

      }
   });
   $('#PerPriNom').change(function() {

      var input4 = document.getElementById('PerPriNom').value;
      var ValInput4 = input4.match(/^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ]{3,15}$/);
      if (ValInput4 == null) {


         alert("No se permiten números, caracteres especiales, espacios o menos de tres(3) letras ni más de quince(15) letras");
         $('#PerPriNom').focus();
         $('#PerPriNom').val('');

      }
   });
   $('#PerSegNom').change(function() {

      var input4 = document.getElementById('PerSegNom').value;
      var ValInput4 = input4.match(/^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ]{3,15}$/);
      if (ValInput4 == null) {


         alert("No se permiten números, caracteres especiales, espacios o menos de tres(3) letras ni más de quince(15) letras");
         $('#PerSegNom').focus();
         $('#PerSegNom').val('');

      }
   });
   $('#PerPriApe').change(function() {

      var input4 = document.getElementById('PerPriApe').value;
      var ValInput4 = input4.match(/^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ]{3,15}$/);
      if (ValInput4 == null) {


         alert("No se permiten números, caracteres especiales, espacios o menos de tres(3) letras ni más de quince(15) letras");
         $('#PerPriApe').focus();
         $('#PerPriApe').val('');

      }
   });
   $('#PerSegApe').change(function() {

      var input4 = document.getElementById('PerSegApe').value;
      var ValInput4 = input4.match(/^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ]{3,15}$/);
      if (ValInput4 == null) {


         alert("No se permiten números, caracteres especiales, espacios o menos de tres(3) letras ni más de quince(15) letras");
         $('#PerSegApe').focus();
         $('#PerSegApe').val('');

      }
   });

   $('#PerCorreo1').change(function() {

      var input10 = document.getElementById('PerCorreo1').value;
      var ValInput10 = input10.match(/^[a-zA-Z0-9\._-]+@[a-zA-Z0-9-]{4,}[.][a-zA-Z0-9\.]{2,12}$/);
      if (ValInput10 == null) {


         alert("Correo no valido, por favor revise");
         $('#PerCorreo1').focus();
         $('#PerCorreo1').val('');

      }
   });
   $('#PerCorreo2').change(function() {

      var input10 = document.getElementById('PerCorreo2').value;
      var ValInput10 = input10.match(/^[a-zA-Z0-9\._-]+@[a-zA-Z0-9-]{4,}[.][a-zA-Z0-9\.]{2,12}$/);
      if (ValInput10 == null) {


         alert("Correo no valido, por favor revise");
         $('#PerCorreo2').focus();
         $('#PerCorreo2').val('');

      }
   });

   $('#Facil').click(function() {
      var facil = $("#Facil").val();
      var textArea = $("#text-area").val();
      //console.log(facil); 
      //console.log(textArea);       
      jQuery.ajax({
         url: '<?= PROOT ?>personas/experiencia',
         method: "POST",
         data: "experiencia=" + facil + "&sugerencia=" + textArea,
         success: function(resp) {
            console.log(resp);

            if (resp == '1') {

               $('#Texto_sugerencias').fadeToggle()

               setTimeout(function() {

                  $('#Texto_sugerencias').fadeToggle()

               }, 5000);

               $('#Facil').css('pointer-events', 'none');
               $('#Dificil').css('pointer-events', 'none');
               $('#facil').attr('disabled', true);
               $('#Dificil').attr('disabled', true);
               $('#btn-sugerencias').attr('disabled', true);
               $("#text-button").css('display', 'none');


            } else {
               alert("Ha ocurrido un error al realizar la encuesta");

            }
         }
      });
   })

   $('#Dificil').click(function() {
      var Dificil = $("#Dificil").val();
      var textArea = $("#text-area").val();
      //console.log(facil); 
      //console.log(textArea);       
      jQuery.ajax({
         url: '<?= PROOT ?>personas/experiencia',
         method: "POST",
         data: "experiencia=" + Dificil + "&sugerencia=" + textArea,
         success: function(resp) {
            console.log(resp);

            if (resp == '1') {

               $('#Texto_sugerencias').fadeToggle()

               setTimeout(function() {

                  $('#Texto_sugerencias').fadeToggle()

               }, 5000);

               $('#Facil').css('pointer-events', 'none');
               $('#Dificil').css('pointer-events', 'none');
               $('#facil').attr('disabled', true);
               $('#Dificil').attr('disabled', true);
               $('#btn-sugerencias').attr('disabled', true);
               $("#text-button").css('display', 'none');


            } else {
               alert("Ha ocurrido un error al realizar la encuesta");

            }
         }
      });
   })
</script>
<?php $this->end(); ?>