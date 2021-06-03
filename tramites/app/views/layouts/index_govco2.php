<?php

use Core\Session;
use Core\FH;
?>
<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title><?= $this->siteTitle(); ?></title>
   <link rel="shortcut icon" type="image/x-icon" href="<?= PROOT ?>img/icono_alcaldia.jpg">
   <link rel="stylesheet" href="<?= PROOT ?>css/bootstrap4/bootstrap.css" media="screen" title="no title" charset="utf-8">
   <!-- <link rel="stylesheet" href="<?= PROOT ?>css/fontawesome/css/all.min.css"> -->
   <link href="<?= PROOT ?>css/fontawesome_5.15/css/all.css" rel="stylesheet"> 

   <link rel="stylesheet" href="<?= PROOT ?>css/custom.css?v=<?= VERSION ?>" media="screen" title="no title" charset="utf-8">
   <link rel="stylesheet" href="<?= PROOT ?>css/login.css?v=<?= VERSION ?>" media="screen" title="no title" charset="utf-8">
   <link rel="stylesheet" href="<?= PROOT ?>css/select2.css?v=<?= VERSION ?>" media="screen" title="no title" charset="utf-8">

   <link rel="stylesheet" href="<?= PROOT ?>css/style.css?v=<?= VERSION ?>" media="screen" title="no title" charset="utf-8">
   <link rel="stylesheet" href="<?= PROOT ?>css/alertMsgN.css?v=<?= VERSION ?>" media="screen" title="no title" charset="utf-8">
   <link href="<?= PROOT ?>css/sweetalert/sweetalert.css" rel="stylesheet">
   <?= $this->content('head'); ?>

</head>

<body>
   <section class="pb-0">
      <nav class="navbar navbar-expand bg-govco fixed-top" id="nav-header">
         <div class="navbar-container container">
            <div class="navbar-logo float-left">
               <a class="navbar-brand" href="https://www.gov.co/">
                  <img src="<?= PROOT ?>img/logo.svg" height="30" width="140" alt="Logo Gov.co">
               </a>
            </div>
         </div>
      </nav>
      <nav class="container pl-1">
         <img class="img-fluid" width="169" height="62" src="<?= PROOT ?>img/logo_2021.jpg" />
         <nav class="navbar navbar-expand-md navbar-light bg-white mt-3 pb-0 pl-0">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mx-auto d-flex">
                  <li class="nav-item active col-auto">
                     <a class="nav-link px-0" style="color:#4B4B4B;" href="https://webnew.bucaramanga.gov.co/">Inicio <span class="sr-only">Inicio</span></a>
                  </li>
                  <li class="nav-item col-auto">
                   <a class="nav-link px-0" href="https://emergencia.bucaramanga.gov.co/"><i class="fas fa-exclamation-triangle text-danger"></i> Emergencia</a>
                  </li>
                  <li class="nav-item col-auto">
                     <a class="nav-link px-0" href="https://impuestos.bucaramanga.gov.co/personas/menu"><i class="far fa-edit text-primary"></i> Realiza tus trámites</a>
                  </li>
                  <li class="nav-item col-auto">
                     <a class="nav-link px-0" href="https://pqr.bucaramanga.gov.co/"><i class="far fa-comment text-success"></i> Crea una PQRSD</a>
                  </li>
                  <li class="nav-item col-auto">
                     <a class="nav-link px-0" href="https://www.bucaramanga.gov.co/noticias/"><i class="fas fa-book text-naranja"></i> Noticias</a>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link px-0" href="https://www.bucaramanga.gov.co/el-atril/transparencia/">Transparencia y acceso a la información pública</a>

                     <!-- <a class="nav-link dropdown-toggle" href="https://www.bucaramanga.gov.co/el-atril/transparencia/" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Transparencia y acceso a la información pública
                     </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">sub-menu1</a>
                        <a class="dropdown-item" href="#">sub-menu2</a>
                     </div> -->
                  </li>
                  <li class="nav-item">
                     <a class="nav-link px-0" href="https://camevirtual.bucaramanga.gov.co/">Atención y servicios a la ciudadania</a>
                  </li>
                  <li class="nav-item col-auto">
                     <a class="nav-link px-0" href="#">Participa</a>
                  </li>
               </ul>
            </div>
         </nav>
      </nav>
      <hr class="border-bottom border-primary mt-1">
      <div class="container pl-2">
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white">
               <li class="breadcrumb-item"><a href="https://webnew.bucaramanga.gov.co/">Inicio</a></li>
               <li class="breadcrumb-item active" aria-current="page">Tramites</li>
            </ol>
         </nav>
      </div>
   </section>
   <?= $this->content('body'); ?>
   <section class="bg-govco pt-0 mt-3">
      <!-- <footer class="navbar-container container ">
         <div class="row">
            <div class="col-md-3">
               <div class="d-flex justify-content-center mt-3">
                  <a href="https://www.gov.co/">
                     <img src="<?= PROOT ?>img/logo.svg" height="30" width="140" alt="Logo Gov.co">
                  </a>
               </div>
               <div class="d-flex justify-content-center mt-3">
                  <img src="<?= PROOT ?>img/logo_colombia.png" height="100" alt="Logo Colombia">
               </div>
            </div>
            <div class="col-md-5">
               <div class="border-right border-left">
                  <ul class="px-3 text-white">
                     <p class="mb-2 font-weight-bold">Alcaldía de Bucaramanga</p>
                     <p class="mb-2">Nit:890 201 222-0</p>
                     <p class="mb-2">Dirección: Fase I: Calle 35 # 10-43.</p>
                     <p class="mb-2">Fase II: Carrera 11 # 34-52.</p>
                     <p class="mb-2">Código Postal: 680006. Código Dane: 68001.</p>
                     <p class="mb-2">Horario de Atención: Lunes a viernes de 6:00 a.m. a 02:00 p.m. jornada contínua</p>
                  </ul>
               </div>
            </div>
            <div class="col-md-4 px-0">
               <ul class="px-0 text-white">
                  <p class="mb-2 font-weight-bold">Contacto</p>
                  <p class="mb-2">Conmutador: (57+7) 633 70 00</p>
                  <p class="mb-2">Atención a la Ciudadanía: (57+7) 652 55 55</p>
                  <p class="mb-2">Fax: (57+7) 652 17 77</p>
                  <p class="mb-2">Centro Integral de la Mujer - Violencia Intrafamiliar: 6351897</p>
               </ul>
            </div>
         </div>
      </footer> -->
      <footer class="container bg-white" style="margin-top:-40px;">
         <div class="container-fluid mb-4">
            <div class="row">
               <div class="col">
                  <h4 class="font-weight-bold">Alcaldía de Bucaramanga</h4>
               </div>
            </div>
         </div>
         <div class="d-flex justify-content-end">
            <div class="container-fluid">
               <h5 class="font-weight-bold">Sede principal</h5>
               <div class="row">
                  <div class="col">
                     <div class="text-dark">
                        <ul class="px-0" style="list-style: none;">
                           <li><strong>Dirección:</strong> Fase I: Calle 35 # 10-43. Bucaramanga, Santander, Colombia. </li>
                           <li><strong>Código </strong>Postal: 680006. Código Dane: 68001.</li>
                           <li><strong>Horario </strong>de Atención: Lunes a viernes de 6:00 a.m. a 02:00 p.m. jornada contínua</li>
                           <li><strong>Teléfono </strong>Conmutador: (57+7) 633 70 00</li>
                           <li><strong>Línea </strong>gratuita: (57+7) 652 55 55</li>
                           <li><strong>Correo Institucional:</strong> contactenos@bucaramanga.gov.co</li>
                           <li><strong>Correo de notificaciones judiciales:</strong> notificaciones@bucaramanga.gov.co</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <img class="img" width="330" height="132" src="<?= PROOT ?>img/logo_2021.jpg" />
            <div class="col-md-1"></div>

         </div>
         <div class="container-fluid">
            <div class="row">
               <div class="col">
                  <a href="https://www.facebook.com/alcaldiadebucaramanga/" target="_blank" class="font-weight-bold"><i class="fa-1x fab fa-facebook-square"></i> Alcaldía de Bucaramanga</a>
                  <a href="https://twitter.com/AlcaldiaBGA" class="font-weight-bold"> | <i class="fab fa-twitter"></i> #AlcaldiaBGA </a>
                  <a href="https://www.youtube.com/user/PrensaBucaramanga" class="font-weight-bold"> | <i class="fab fa-youtube"></i> Prensa Alcaldía de Bucaramanga</a>
               </div>

            </div>
         </div>
         <div class="container-fluid mt-5">
            <div class="row">
               <div class="col">
                  <a href="https://www.bucaramanga.gov.co/Inicio/autorizacion-de-tratamiento-de-datos-personales/">Autorización de Tratamiento de Datos Personales</a>
               </div>
               <div class="col">
                  <a href="https://www.bucaramanga.gov.co/Inicio/wp-content/uploads/2018/12/Resolucion-340-Dic-26-2018-y-Politica.pdf">Política de Tratamiento de Datos Personales </a>
               </div>
               <div class="col">
                  <a href="https://www.bucaramanga.gov.co/Inicio/wp-content/uploads/2019/03/Resolucion-489-por-la-cual-se-ajusta-la-Politica-Institucional-de-Seguridad-de-la-Informacion-para-el-municipio-de-Bucaramanga.pdf">Política de Seguridad de la Información </a>
               </div>
            </div>
         </div>
         <div class="gov-co-footer-pie">
            <div class="gov-co-footer-auto">
               <img class="img-fluid gov-co-logo-pie-mesa" src="./assets/images/colombiaco_Mesa de trabajo 1.png" alt="" srcset="" />
               <img class="img-fluid gov-co-logo-pie-blanco" src="./assets/images/logo.svg" alt="" srcset="" />
            </div>
         </div>
      </footer>
   </section>
   <script src="<?= PROOT ?>js/jQuery-3.3.1.min.js"></script>
   <script src="<?= PROOT ?>js/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
   <script src="<?= PROOT ?>js/bootstrap4/bootstrap.min.js"></script>
   <script src="<?= PROOT ?>js/gijgo.min.js" type="text/javascript"></script>
   <script src="<?= PROOT ?>/js/holder.min.js"></script>
   <script src="<?= PROOT ?>js/alertMsgN.js?v=<?= VERSION ?>"></script>
   <script src="<?= PROOT ?>js/select2.js"></script>
   <script src="<?= PROOT ?>js/sweetalert/sweetalert.min.js"></script>
   <script src="<?= PROOT ?>js/validate/jquery.validate.min.js"></script>
   <?= $this->content('footer'); ?>

</body>

</html>