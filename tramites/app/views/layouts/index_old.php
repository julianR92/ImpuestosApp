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
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?=$this->siteTitle(); ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?=PROOT?>img/icono_alcaldia.ico">
    <link rel="stylesheet" href="<?=PROOT?>css/bootstrap4/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="<?=PROOT?>css/custom.css?v=<?=VERSION?>" media="screen" title="no title" charset="utf-8">
    <link href="<?=PROOT?>css/sweetalert/sweetalert.css" rel="stylesheet">
    <?= $this->content('head'); ?>

  </head>
  <body>

    <header class="text-center">
      <img class="img-fluid" src="<?=PROOT?>img/header.jpg"/>
    </header>

    <?= $this->content('body'); ?>

     <footer class="text-center footer col-12 col-sm-12">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-4 col-lg-4">
            © <?=date('Y');?> <a href="www.bucaramanga.gov.co" target="_blank">Alcaldía de Bucaramanga</a>
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
  </body>
</html>