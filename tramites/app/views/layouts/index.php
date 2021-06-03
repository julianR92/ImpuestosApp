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

   <link rel="stylesheet" href="<?= PROOT ?>css/bootstrap4/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
   <link href="<?= PROOT ?>css/gijgo.min.css" rel="stylesheet" type="text/css" />
   <link rel="stylesheet" href="<?= PROOT ?>css/fontawesome/css/all.min.css">
   <link rel="stylesheet" href="<?= PROOT ?>css/custom.css?v=<?= VERSION ?>" media="screen" title="no title" charset="utf-8">
   <link rel="stylesheet" href="<?= PROOT ?>css/alertMsgN.min.css?v=<?= VERSION ?>" media="screen" title="no title" charset="utf-8">
   <link rel="stylesheet" href="<?= PROOT ?>css/select2.css?v=<?= VERSION ?>" media="screen" title="no title" charset="utf-8">
   <link rel="stylesheet" href="<?= PROOT ?>css/style.css?v=<?= VERSION ?>" media="screen" title="no title" charset="utf-8">
   <link href="<?= PROOT ?>css/sweetalert/sweetalert.css" rel="stylesheet">
   <script src="<?= PROOT ?>js/jQuery-3.3.1.min.js"></script>
   <?= $this->content('head'); ?>

</head>

<body>
   <?php include 'main_menu.php' ?>

   <header class="text-center my-3">
      <img class="img-fluid w-25" src="<?= PROOT ?>img/logo_puntos_digitales.png" />
   </header>

   <div class="container pt-1 px-0 main ">
      <?= Session::displayMsg() ?>
      <?= $this->content('body'); ?>
   </div>
   
   <footer class="text-center footer col-12 col-sm-12">
      <div class="container">
         <div class="row">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
               © <?= date('Y'); ?> <a href="www.bucaramanga.gov.co" target="_blank">Alcaldía de Bucaramanga</a>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
               <a href="https://www.bucaramanga.gov.co/Inicio/wp-content/uploads/2018/12/Resolucion-340-Dic-26-2018-y-Politica.pdf" target="_blank">Política de Tratamiento de Datos Personales</a>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
               <a href="https://www.facebook.com/BucaramangaTIC/?__tn__=%2Cd%2CP-R&amp;eid=ARB5cshlmwrynNyFwhbjTmWIFbxIHFRL1S9XDqf4MmD42YFpFm3Ct7AwRVWa4l_HD4sBhVG3WXkMr0Fc" target="_blank">Oficina asesora TIC</a>
            </div>
         </div>
      </div>
   </footer>

   <script src="<?= PROOT ?>js/bootstrap4/bootstrap.min.js"></script>
   <script src="<?= PROOT ?>js/gijgo.min.js" type="text/javascript"></script>
   <script src="<?= PROOT ?>js/messages/messages.es-es.js" type="text/javascript"></script>
   <script src="<?= PROOT ?>js/holder.min.js"></script>
   <script src="<?= PROOT ?>js/alertMsgN.js?v=<?= VERSION ?>"></script>
   <script src="<?= PROOT ?>js/moment/moment.min.js"></script>
   <script src="<?= PROOT ?>js/moment/config.js"></script>
   <script src="<?= PROOT ?>js/select2.js"></script>
   <script src="<?= PROOT ?>js/sweetalert/sweetalert.min.js"></script>
   <script src="<?= PROOT ?>js/validate/jquery.validate.min.js"></script>
   <?= $this->content('footer'); ?>
</body>

</html>