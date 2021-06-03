<?php

use Core\Session;
use App\Models\Users;
use Core\FH;
?>

<!DOCTYPE html>
<html>

<head>

   <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-Q6FST1NGT4"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-Q6FST1NGT4');
      </script>


   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta content="width=device-width, initial-scale=1" name="viewport">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Tramites y servicios</title>

   <!-- Icono -->
   <link href="<?= PROOT ?>img/icono.png" rel="icon">
   <link href="<?= PROOT ?>img/icono.png" rel="apple-touch-icon">
   <!-- Librerias de gov co -->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">
   <link href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

   <link href="https://cdn.www.gov.co/v2/assets/cdn.min.css" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
   <link href="<?= PROOT ?>css/plugins/sweetalert/sweetalert.css" rel="stylesheet">

   <!--<link rel="stylesheet" href="<?= PROOT ?>css/plugins/datatables.net-bs/css/dataTables.bootstrap.min.css">
   <link rel="stylesheet" href="<?= PROOT ?>css/plugins/datatables.net-bs/css/dataTables.bootstrap.css">
   <link rel="stylesheet" href="<?= PROOT ?>css/plugins/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">-->

   <!-- css jquery datatable -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" />

   <!-- Estilos personalizados -->
   <link href="<?= PROOT ?>css/alertMsg.css" rel="stylesheet">


</head>

<style type="text/css">
   .searchbar {
      margin-bottom: auto;
      margin-top: auto;
      height: 50px;
      width: 100%;
      background-color: #fff;
      border-radius: 30px;
      border: unset;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-align: center;
      align-items: center;
      box-sizing: content-box;
      -webkit-box-sizing: content-box;
      -moz-box-sizing: content-box;
      -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, .4);
      -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, .4);
      box-shadow: 0 1px 3px rgba(0, 0, 0, .4);
      position: relative;
      z-index: 2;

   }

   .search-input {
      border-radius: 5px;
      width: 100%;
      height: 40px;
      border-radius: 30px;
      border: 0;
      outline: 0;
      line-height: 31px;
      font-size: 1em;
      background: none;
      color: #63717f;
      transition: width .4s linear;
      text-indent: 20px;
      font-size: large;
      padding-top: 20px;
   }

   .caja-border {
      border-bottom-style: dotted;
      border-bottom-width: 1px;
      border-bottom-color: #FFF;

   }

   .caja-border-section {
      border-bottom-style: dotted;
      border-bottom-width: 1px;
      border-bottom-color: #004884;

   }

   #div_img {
      background-image: url("<?= PROOT ?>img/banner_6.png");


   }

   .ui-menu-item .ui-menu-item-wrapper.ui-state-active {
      background: #FFAB00 !important;
      background-color: #FFAB00 !important;
      color: #3366CC !important;
      border-color: #FFF !important;
      border-radius: 10px !important;


   }

   .ui-autocomplete {
      border-radius: 10px;

   }

   @media (max-width: 500px) {

      .breadcrumb-item .breadcrumb-text {
         font-size: 0.7rem !important;

      }

      .search-input {
         font-size: 0.8rem;
      }

      .titulo_uno {
         line-height: 1 !important;

      }

      .subtitulo {
         padding-left: 0rem !important;
      }

      .titulo_section {
         font-size: 1.5rem !important;
      }



   }
</style>

<body id="body" class="">


   <nav class="navbar navbar-expand-lg fixed-top navbar-govco navbar-expanded">
      <div class="navbar-container container pl-2">
         <div class="navbar-logo float-left">
            <a class="navbar-brand" href="https://www.gov.co/">
               <img src="https://cdn.www.gov.co/assets/images/logo.png" height="30" alt="Logo Gov.co" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapsible" aria-controls="navbarCollapsible" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
         </div>
         <div class="collapse navbar-collapse float-right">
            <div class="nav-primary mx-auto">
               <ul class="navbar-nav ml-auto nav-items nav-items-desktop">
               </ul>
            </div>
            <div class="nav-link ml-auto mr-2 text-white">
               <p class="content-link my-0">
                  <a class="btn-low" href="https://www.gov.co/">
                     Ir a Gov.co
                  </a>
               </p>
            </div>
         </div>
      </div>
      <div class='nav-secondary show-transition' id="nav-secondary" style="background: #FFF!important">
         <div class="container">
            <div class="collapse navbar-collapse navbar-first-menu">
               <ul class="navbar-nav w-100 d-flex nav-items nav-items-desktop">
                  <li class="nav-item">
                     <a href="https://www.bucaramanga.gov.co/Inicio/" target="_blank" class="nav-link">Pagina Principal</a>
                  </li>
                  <li class="nav-item active">
                     <a href="/ficha-tramites-y-servicios/" class="nav-link">Trámites y servicios</a>
                  </li>

               </ul>
            </div>
         </div>
      </div>
      <div class="navbar-nav navbar-notifications" id="notificationHeader"></div>
   </nav>

   <?= $this->content('body'); ?>

   <footer>
      <div class="footer page__footer footer-white footer-blue">
         <div class="container">
            <div class="footer-container" id="footer-container">

               <div class="nav-footer icon-white  nav-pills nav-pills-icons icon-white d-flex justify-content-center bd-highlight">
                  <div class="item-footer border-right col-md-2">
                     <div class="d-flex justify-content-center">
                        <a class="navbar-brand" href="https://www.gov.co/" style="padding:0!important;">
                           <img src="https://cdn.www.gov.co/assets/images/logo.png" height="40" alt="Logo Gov.co" />
                        </a>
                     </div>
                     <div class="d-flex justify-content-center mt-3">
                        <a class="navbar-brand" href="https://www.gov.co/" style="padding:0!important;">
                           <img src="<?= PROOT ?>img/logo_colombia.png" height="100px" alt="Logo Gov.co" />
                        </a>
                     </div>
                  </div>
                  <div class="item-footer col-md-5 border-right">
                     <div class="px-3">
                        <p class="font-weight-bold">Alcaldía de Bucaramanga</p>
                        <p>Nit:890 201 222-0</p>
                        <p>Dirección: Fase I: Calle 35 # 10-43.</p>
                        <p>Fase II: Carrera 11 # 34-52.</p>
                        <p>Código Postal: 680006. Código Dane: 68001.</p>
                        <p>Horario de Atención: Lunes a viernes de 6:00 a.m. a 02:00 p.m. jornada contínua</p>
                        <br>
                        <div class="row">
                           <div class="col-md-1">
                              <a href="https://www.facebook.com/alcaldiadebucaramanga/"><i class="fa fa-facebook fa-2x text-white"></i></a>
                           </div>
                           <div class="col-md-1">
                              <a href="https://twitter.com/AlcaldiaBGA"><i class="fa fa-twitter fa-2x text-white"></i></a>
                           </div>
                           <div class="col-md-1">
                              <a href="https://www.youtube.com/user/PrensaBucaramanga"><i class="  fa fa-youtube-play fa-2x text-white"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="item-footer col-md-3">
                     <div class="px-3">
                        <p class="font-weight-bold">Contacto</p>
                        <p>Conmutador: (57+7) 633 70 00</p>
                        <p>Atención a la Ciudadanía: (57+7) 652 55 55</p>
                        <p>Fax: (57+7) 652 17 77</p>
                        <p>Centro Integral de la Mujer - Violencia Intrafamiliar: 6351897.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>



   <!-- js jquery -->
   <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
   <!-- js jquery datatable -->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
   <!--<script src="<?= PROOT ?>css/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
   <script src="<?= PROOT ?>css/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
   <script src="<?= PROOT ?>css/plugins/datatables.net-bs/js/dataTables.responsive.min.js"></script>
   <script src="<?= PROOT ?>css/plugins/datatables.net-bs/js/responsive.bootstrap.min.js"></script>-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>


   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      
   <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

   <!-- js bootstrap -->
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
   </script>
   <script src="<?= PROOT ?>js/plugins/sweetalert/sweetalert.min.js"></script>
   <script src="<?= PROOT ?>js/alertMsg.js"></script>

   
   <?= $this->content('footer'); ?>

   <script type="text/javascript">
      setTimeout(function() {
         // Closing the alert 
         $('.alert').alert('close');
      }, 10000);

      $(document).ready(function() {


         // Inicio validaciones y scripts de crear_agente.php

         ///// actualizar ////////////////////////////////////////////////////////
         $('#ciudad_principal').select2();
         $('#ciudad_notificacion').select2();

         $('#nit').change(function() {

            var input8 = document.getElementById('nit').value;
            var ValInput8 = input8.match(/^[0-9]{5,20}$/);
            if (ValInput8 == null) {


               alert("Solo permiten números, no se permiten menos de cinco(5) dígitos o mas de veinte(20)");
               $('#nit').focus();
               $('#nit').val('');

            }
         });

         $('#razon_social').change(function() {

            var input4 = document.getElementById('razon_social').value;
            var ValInput4 = input4.match(/^[0-9a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_\s-. ]{5,60}$/);
            if (ValInput4 == null) {


               alert("Solo se permite los caracteres especial(-.), no se permiten menos de tres(3), o mas de sesenta(60)");
               $('#razon_social').focus();
               $('#razon_social').val('');

            }
         });

         $('#direccion_pri').change(function() {

            var input8 = document.getElementById('direccion_pri').value;
            var ValInput8 = input8.match(/^[0-9a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_\s-#.]{5,120}$/);
            if (ValInput8 == null) {
               if (input8.length < 5) {
                  alert("No se permiten menos de cinco(5) caracteres");
                  $('#direccion_pri').focus();
                  $('#direccion_pri').val('');
               }
            }
         });

         $('#direccion_notificacion').change(function() {

            var input8 = document.getElementById('direccion_notificacion').value;
            var ValInput8 = input8.match(/^[0-9a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_\s-#.]{5,120}$/);
            if (ValInput8 == null) {


               alert("No se permiten menos de cinco(5) caracteres");
               $('#direccion_notificacion').focus();
               $('#direccion_notificacion').val('');

            }
         });

         $('#telefono_agente').change(function() {

            var input8 = document.getElementById('telefono_agente').value;
            var ValInput8 = input8.match(/^[0-9]{7,10}$/);
            if (ValInput8 == null) {


               alert("Solo se permiten números, no se permiten menos de 7 digitos y un maximo de 10");
               $('#telefono_agente').focus();
               $('#telefono_agente').val('');

            }
         });



         $('#email').change(function() {

            var input10 = document.getElementById('email').value;
      var ValInput10 = input10.match(/^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/);
            if (ValInput10 == null) {
               alert("Correo no valido, por favor revise");
               $('#email').focus();
               $('#email').val('');

            }
         });

         $('#nit_representante').change(function() {

            var input8 = document.getElementById('nit_representante').value;
            var ValInput8 = input8.match(/^[0-9]{5,20}$/);
            if (ValInput8 == null) {


               alert("Solo permiten números, no se permiten menos de cinco(5) dígitos o mas de veinte(20)");
               $('#nit_representante').focus();
               $('#nit_representante').val('');

            }
         });


         $('#nombre_representante').change(function() {

            var input4 = document.getElementById('nombre_representante').value;
            var ValInput4 = input4.match(/^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ ]{2,15}$/);
            if (ValInput4 == null) {


               alert("No se permiten números, caracteres especiales, espacios o menos de dos(2) letras ni más de quince(15) letras");
               $('#nombre_representante').focus();
               $('#nombre_representante').val('');

            }
         });
         $('#nombre2_representante').change(function() {

            var input4 = document.getElementById('nombre2_representante').value;
            var ValInput4 = input4.match(/^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ ]{2,15}$/);
            if (ValInput4 == null) {


               alert("No se permiten números, caracteres especiales, espacios o menos de dos(2) letras ni más de quince(15) letras");
               $('#nombre2_representante').focus();
               $('#nombre2_representante').val('');

            }
         });
         $('#apellido2_representante').change(function() {

            var input4 = document.getElementById('apellido2_representante').value;
            var ValInput4 = input4.match(/^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ]{2,15}$/);
            if (ValInput4 == null) {


               alert("No se permiten números, caracteres especiales, espacios o menos de dos(2) letras ni más de quince(15) letras");
               $('#apellido2_representante').focus();
               $('#apellido2_representante').val('');

            }
         });
         $('#apellido_representante').change(function() {

            var input4 = document.getElementById('apellido_representante').value;
            var ValInput4 = input4.match(/^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ]{2,15}$/);
            if (ValInput4 == null) {


               alert("No se permiten números, caracteres especiales, espacios o menos de dos(2) letras ni más de quince(15) letras");
               $('#apellido_representante').focus();
               $('#apellido_representante').val('');

            }
         });

         $('#primer_nombre').change(function() {

            var input4 = document.getElementById('primer_nombre').value;
            var ValInput4 = input4.match(/^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ]{2,15}$/);
            if (ValInput4 == null) {


               alert("No se permiten números, caracteres especiales, espacios o menos de dos(2) letras ni más de quince(15) letras");
               $('#primer_nombre').focus();
               $('#primer_nombre').val('');

            }
         });

         $('#segundo_nombre').change(function() {

            var input4 = document.getElementById('segundo_nombre').value;
            var ValInput4 = input4.match(/^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ]{2,15}$/);
            if (ValInput4 == null) {


               alert("No se permiten números, caracteres especiales, espacios o menos de dos(2) letras ni más de quince(15) letras");
               $('#segundo_nombre').focus();
               $('#segundo_nombre').val('');

            }
         });
         $('#primer_apellido').change(function() {

            var input4 = document.getElementById('primer_apellido').value;
            var ValInput4 = input4.match(/^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ]{2,15}$/);
            if (ValInput4 == null) {


               alert("No se permiten números, caracteres especiales, espacios o menos de dos(2) letras ni más de quince(15) letras");
               $('#primer_apellido').focus();
               $('#primer_apellido').val('');

            }
         });
         $('#segundo_apellido').change(function() {

            var input4 = document.getElementById('segundo_apellido').value;
            var ValInput4 = input4.match(/^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ]{2,15}$/);
            if (ValInput4 == null) {


               alert("No se permiten números, caracteres especiales, espacios o menos de dos(2) letras ni más de quince(15) letras");
               $('#segundo_apellido').focus();
               $('#segundo_apellido').val('');

            }
         });

         $('#telefono_representante').change(function() {

            var input8 = document.getElementById('telefono_representante').value;
            var ValInput8 = input8.match(/^[0-9]{7,10}$/);
            if (ValInput8 == null) {


               alert("Solo se permiten números, no se permiten menos de 7 digitos y un maximo de 10");
               $('#telefono_representante').focus();
               $('#telefono_representante').val('');

            }
         });

         //fin de validaciones crea_agente.php
         ////////////////////////////////////////////////////////////////////////////////////////////



         //Inicio validaciones elaboracion.php
         ////////////////////////////////////////////////////////////////////////////////////////////

         $('#documento').change(function() {

            var input8 = document.getElementById('documento').value;
            var ValInput8 = input8.match(/^[0-9]{5,20}$/);
            if (ValInput8 == null) {


               alert("Solo permiten números, no se permiten menos de cinco(5) dígitos o mas de veinte(20)");
               $('#documento').focus();
               $('#documento').val('');

            }
         });

         $('#digito_verificacion').change(function() {

            var input8 = document.getElementById('digito_verificacion').value;
            var ValInput8 = input8.match(/^[0-9]{1,2}$/);
            if (ValInput8 == null) {


               alert("Solo permiten números, no se mas de dos(2) dígitos");
               $('#digito_verificacion').focus();
               $('#digito_verificacion').val('');

            }
         });

         $('#nombre_representanteee').change(function() {

            var input4 = document.getElementById('nombre_representanteee').value;
            var ValInput4 = input4.match(/^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ ]{2,50}$/);
            if (ValInput4 == null) {


               alert("No se permiten números, caracteres especiales, espacios o menos de seis(6) letras ni más de quince(50) letras");
               $('#nombre_representante').focus();
               $('#nombre_representante').val('');

            }
         });


         $('#numero_documento_representante').change(function() {

            var input8 = document.getElementById('numero_documento_representante').value;
            var ValInput8 = input8.match(/^[0-9]{5,20}$/);
            if (ValInput8 == null) {


               alert("Solo permiten números, no se permiten menos de cinco(5) dígitos o mas de veinte(20)");
               $('#numero_documento_representante').focus();
               $('#numero_documento_representante').val('');

            }
         });

         $('#input_tel').change(function() {

            var input8 = document.getElementById('input_tel').value;
            var ValInput8 = input8.match(/^[0-9]{7,10}$/);
            if (ValInput8 == null) {


               alert("Solo se permiten números, no se permiten menos de 7 digitos y un maximo de 10");
               $('#input_tel').focus();
               $('#input_tel').val('');

            }
         });

         $('#dir_representante').change(function() {

            var input8 = document.getElementById('dir_representante').value;
            var ValInput8 = input8.match(/^[0-9a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_\s-#]{5,80}$/);
            if (ValInput8 == null) {


               alert("No se permiten menos de cinco(5) caracteres");
               $('#dir_representante').focus();
               $('#dir_representante').val('');

            }
         });

         $('#ciudad_representante').change(function() {

            var input4 = document.getElementById('ciudad_representante').value;
            var ValInput4 = input4.match(/^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ ]{4,20}$/);
            if (ValInput4 == null) {


               alert("No se permiten números, caracteres especiales, espacios o menos de cuatro(4) letras ni más de veinte(20) letras");
               $('#ciudad_representante').focus();
               $('#ciudad_representante').val('');

            }
         });

         $('#tel_representante_dos').change(function() {

            var input8 = document.getElementById('tel_representante_dos').value;
            var ValInput8 = input8.match(/^[0-9]{7,10}$/);
            if (ValInput8 == null) {


               alert("Solo se permiten números, no se permiten menos de 7 digitos y un maximo de 10");
               $('#tel_representante_dos').focus();
               $('#tel_representante_dos').val('');

            }
         });

         $('#correo_representante').change(function() {

            var input10 = document.getElementById('correo_representante').value;
            var ValInput10 = input10.match(/^[a-zA-Z0-9\._-]+@[a-zA-Z0-9-]{4,}[.][a-zA-Z0-9\.]{2,12}$/);
            if (ValInput10 == null) {


               alert("Correo no valido, por favor revise");
               $('#correo_representante').focus();
               $('#correo_representante').val('');

            }
         });

         $('#dir_sede').change(function() {

            var input8 = document.getElementById('dir_sede').value;
            var ValInput8 = input8.match(/^[0-9a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_\s-#]{5,80}$/);
            if (ValInput8 == null) {


               alert("No se permiten menos de cinco(5) caracteres");
               $('#dir_sede').focus();
               $('#dir_sede').val('');

            }
         });

         $('#ciudad_sede').change(function() {

            var input4 = document.getElementById('ciudad_sede').value;
            var ValInput4 = input4.match(/^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ ]{4,20}$/);
            if (ValInput4 == null) {


               alert("No se permiten números, caracteres especiales, espacios o menos de cuatro(4) letras ni más de veinte(20) letras");
               $('#ciudad_sede').focus();
               $('#ciudad_sede').val('');

            }
         });

         $('#tel_representante_tres').change(function() {

            var input8 = document.getElementById('tel_representante_tres').value;
            var ValInput8 = input8.match(/^[0-9]{7,10}$/);
            if (ValInput8 == null) {


               alert("Solo se permiten números, no se permiten menos de 7 digitos y un maximo de 10");
               $('#tel_representante_tres').focus();
               $('#tel_representante_tres').val('');

            }
         });

         $('#telefono_movil').change(function() {

            var input8 = document.getElementById('telefono_movil').value;
            var ValInput8 = input8.match(/^[0-9]{7,10}$/);
            if (ValInput8 == null) {


               alert("Solo se permiten números, no se permiten menos de 7 digitos y un maximo de 10");
               $('#telefono_movil').focus();
               $('#telefono_movil').val('');

            }
         });

         $('.group_check1').on('change', function() {
            $('.group_check1').not(this).prop('checked', false);
         });

         $('.group_check2').on('change', function() {
            $('.group_check2').not(this).prop('checked', false);
         });

      })

    $(".tablas").DataTable({
      

      "language": {

         "sProcessing":     "Procesando...",
         "sLengthMenu":     "Mostrar _MENU_ registros",
         "sZeroRecords":    "No se encontraron resultados",
         "sEmptyTable":     "Ningún dato disponible en esta tabla",
         "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
         "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
         "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
         "sInfoPostFix":    "",
         "sSearch":         "Buscar:",
         "sUrl":            "",
         "sInfoThousands":  ",",
         "sLoadingRecords": "Cargando...",
         "oPaginate": {
            "sFirst":    "Primero",
            "sLast":     "Último",
            "sNext":     "Siguiente",
            "sPrevious": "Anterior"

         },

         "oAria": {
            "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ": Activar para ordenar la columna de manera descendente"

         }
      }
   });



   </script>
</body>

</html>