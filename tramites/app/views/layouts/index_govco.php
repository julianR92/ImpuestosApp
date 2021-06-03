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
   <link rel="shortcut icon" type="image/x-icon" href="<?= PROOT ?>img/icono_alcaldia.ico">
   <link rel="stylesheet" href="<?= PROOT ?>css/bootstrap4/bootstrap.css" media="screen" title="no title" charset="utf-8">
   <link rel="stylesheet" href="<?= PROOT ?>css/fontawesome/css/all.min.css">
   <link rel="stylesheet" href="<?= PROOT ?>css/custom.css?v=<?= VERSION ?>" media="screen" title="no title" charset="utf-8">
   <link rel="stylesheet" href="<?= PROOT ?>css/login.css?v=<?= VERSION ?>" media="screen" title="no title" charset="utf-8">
   <link rel="stylesheet" href="<?= PROOT ?>css/select2.css?v=<?= VERSION ?>" media="screen" title="no title" charset="utf-8">

   <link rel="stylesheet" href="<?= PROOT ?>css/style.css?v=<?= VERSION ?>" media="screen" title="no title" charset="utf-8">
   <link rel="stylesheet" href="<?= PROOT ?>css/alertMsgN.css?v=<?= VERSION ?>" media="screen" title="no title" charset="utf-8">
   <link href="<?= PROOT ?>css/sweetalert/sweetalert.css" rel="stylesheet">
   <?= $this->content('head'); ?>

</head>

<body>
   <section>
      <nav class="navbar navbar-expand bg-govco fixed-top" id="nav-header">
         <div class="navbar-container container">
            <div class="navbar-logo float-left">
               <a class="navbar-brand" href="https://www.gov.co/">
                  <img src="<?= PROOT ?>img/logo.svg" height="30" width="140" alt="Logo Gov.co">
               </a>
            </div>
            <?php include 'main_menu_aspi.php'; ?>
         </div>
      </nav>
      <nav class="container">
         <img class="img-fluid w-25" src="<?= PROOT ?>img/logo_puntos_digitales.png" />
      </nav>
   </section>
   <?= Session::displayMsg() ?>
   <?= $this->content('body'); ?>
   <section class="bg-govco">
      <footer class="navbar-container container ">
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
      </footer>
   </section>
   <script src="<?= PROOT ?>js/jQuery-3.3.1.min.js"></script>
   <script src="<?= PROOT ?>js/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
   <script src="<?= PROOT ?>js/bootstrap4/bootstrap.min.js"></script>
   <script src="<?= PROOT ?>js/gijgo.min.js" type="text/javascript"></script>
   <script src="<?= PROOT ?>/js/holder.min.js"></script>
   <script src="<?= PROOT ?>js/alertMsgN.js?v=<?= VERSION ?>"></script>
   <script src="<?= PROOT ?>js/moment/moment.min.js"></script>
   <script src="<?= PROOT ?>js/moment/config.js"></script>
   <script src="<?= PROOT ?>js/select2.js"></script>
   <script src="<?= PROOT ?>js/sweetalert/sweetalert.min.js"></script>
   <script src="<?= PROOT ?>js/validate/jquery.validate.min.js"></script>
   <?= $this->content('footer'); ?>

</body>

</html>