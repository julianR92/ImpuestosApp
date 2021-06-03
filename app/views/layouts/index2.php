<?php

use Core\Session;
use App\Models\Users;
use Core\FH;
?>

<!DOCTYPE html>
<html>

<head>
		   <!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-5DLEE4F5ZC"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		  gtag('event', 'login', {'method': 'Google'});
    

		  gtag('config', 'G-5DLEE4F5ZC');
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
   <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
   <link href="<?= PROOT ?>css/plugins/sweetalert/sweetalert.css" rel="stylesheet">

   <!-- Estilos personalizados -->
   <link href="<?= PROOT ?>css/alertMsg.css" rel="stylesheet">


</head>

<style type="text/css">
   .searchbar{
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
    -webkit-box-shadow: 0 1px 3px rgba(0,0,0,.4);
    -moz-box-shadow: 0 1px 3px rgba(0,0,0,.4);
    box-shadow: 0 1px 3px rgba(0,0,0,.4);
    position: relative;
    z-index: 2;

   }
   .search-input{
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
      text-indent:20px;
      font-size: large;
      padding-top: 20px;
   }

   .caja-border{
      border-bottom-style: dotted;
      border-bottom-width: 1px;
      border-bottom-color: #FFF;

   }
   .caja-border-section{
      border-bottom-style: dotted;
      border-bottom-width: 1px;
      border-bottom-color: #004884;

   }
   #div_img{
      background-image: url("<?= PROOT ?>img/banner_6.png");
      
 
   }

   .ui-menu-item .ui-menu-item-wrapper.ui-state-active {
    background: #FFAB00 !important;
    background-color: #FFAB00!important; 
    color:#3366CC!important;
    border-color: #FFF!important;
    border-radius: 10px!important;
 
    
   } 
 
   .ui-autocomplete {    
    border-radius: 10px;

   }

    @media (max-width: 500px) {
     
    .breadcrumb-item .breadcrumb-text{
         font-size: 0.7rem!important;

         }

      .search-input{
          font-size: 0.8rem;
      }
      .titulo_uno{
         line-height: 1!important;

      }
      .subtitulo{
         padding-left: 0rem!important;
      }
      .titulo_section{
         font-size: 1.5rem!important;
      }
      


    }

 
</style>

<body id="body" class="">


<nav class="navbar navbar-expand-lg fixed-top navbar-govco navbar-expanded" id="nav-header">
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

 <?= $this->content('footer'); ?>

 <!-- js bootstrap -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous">
</script> 
<!-- js jquery -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
       <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 
    <script type="text/javascript">
      $(document).ready(function(){       
       var links = [
            {value: 'https://usodesuelo.bucaramanga.gov.co/',
            label: 'Concepto de uso de suelo'},
            {value: 'https://www.bucaramanga.gov.co/Inicio/',
            label: 'Impuesto predial'}
       
                    ];

       $("#buscador").autocomplete({
                  source: links,
                  select: function(event, ui) { 

            window.open(ui.item.value,'_blank');
            $('#buscador').value('');  
        }, response: function(event, ui) {
            if (ui.content.length === 0) {
                $("#empty-message").text("No se encontraron coincidencias");
            } else {
                $("#empty-message").empty();
            }
        }        

               });


       // barra accesibilidad
          $(".min-fontsize").click(function() {

            var fuente = $("#body").css("font-size");
            console.log(fuente);
            var fuente_suma = parseInt(fuente) - 2;
            var fuente_px = fuente_suma + 'px';
            if (fuente_suma <= 12) {
               $("*").css("font-size", '12px');
            } else {
               console.log(fuente_suma);
               $("*").css("font-size", fuente_px);
            }


         });
         $(".max-fontsize").click(function() {

            var fuente = $("#body").css("font-size");
            console.log(fuente);
            var fuente_suma = parseInt(fuente) + 2;
            var fuente_px = fuente_suma + 'px';
            if (fuente_suma >= 22) {
               $("*").css("font-size", '22px');
            } else {
               console.log(fuente_suma);
               $("*").css("font-size", fuente_px);
            }


         });

         $(".contrast-ref").click(function() {

            var clase = $('#body').attr("class");
            var color = '#3366CC';
            var color2 = 'white';

            if (clase == 'all') {
               $('#body').removeClass("all");
               $('#myForm').css('background-color', 'white');
               $('#nav-header').css('background-color', color);
               $('#nav-secondary').css('background-color', color2);
               $('.card-cabecera').attr('style', 'background-color: #3366CC!important;');
               $('.div_principal').attr('id','div_img');



            } else {
               $('#body').addClass("all");
               $('#myForm').css('background-color', 'black');
               $('#nav-header').css('background-color', 'black');
               $('#nav-secondary').css('background-color','black');
               $('.card-cabecera').attr('style', 'background-color: black!important;');
               $('.div_principal').attr('id','');        

            }

         })


      })

    </script> 
</body>
</html>