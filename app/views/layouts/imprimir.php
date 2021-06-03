<?php

use Core\Session;
use App\Models\Users;
use App\Controllers;
use App\Models\Modulos;
use App\Controllers\PermisosController;
use App\Controllers\RolesController;
?>
<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width">

   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title><?= $this->siteTitle(); ?></title>
   <!-- Favicons -->
   <link href="<?= PROOT ?>img/icono.ico" rel="icon">
   <link href="<?= PROOT ?>img/icono.ico" rel="apple-touch-icon">
   <!-- Google Font: Source Sans Pro -->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

   <link href="<?= PROOT ?>css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link href="<?= PROOT ?>css/plugins/icofont/icofont.min.css" rel="stylesheet">
   <link href="<?= PROOT ?>css/plugins/animate-css/animate.min.css" rel="stylesheet">
   <link href="<?= PROOT ?>css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
   <link href="<?= PROOT ?>css/style.css" rel="stylesheet">
   <link href="<?= PROOT ?>css/alertMsg.css" rel="stylesheet">

   <?= $this->content('head'); ?>
   <style>
      /* Style the body */
      body:before {
         background-image:none;
      }

   </style>
</head>

<body>
   <div class="container animated fadeInLeft">
      <!-- Contenido, render de los php -->
      <section class="content">
         <?= Session::displayMsg() ?>
         <?= $this->content('body'); ?>
      </section>
      <!-- fin contenido -->
      <footer class="main-footer">
         <!-- <strong>Copyright &copy; <?= date('Y'); ?> <a id="2" href="<?= PROOT ?>home/admin">Votacion Uts</a></strong> -->
      </footer>
   </div>

   <script src="<?= PROOT ?>js/plugins/jquery/jquery.min.js"></script>

   <script src="<?= PROOT ?>js/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="<?= PROOT ?>js/plugins/sweetalert/sweetalert.min.js"></script>
   <script src="<?= PROOT ?>js/plugins/validate/jquery.validate.min.js"></script>
   <script src="<?= PROOT ?>js/alertMsg.js"></script>

   <?= $this->content('footer'); ?>
</body>

</html>