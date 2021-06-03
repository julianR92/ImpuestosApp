<?php

use Core\Session;
use App\Models\Users;
use Core\FH;
?>

<!DOCTYPE html>
<html>

<head>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2ED38YW10C"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2ED38YW10C');
</script>

   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta content="width=device-width, initial-scale=1" name="viewport">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title><?= $this->siteTitle(); ?></title>

   <!-- Icono -->
   <link href="<?= PROOT ?>img/icono.png" rel="icon">
   <link href="<?= PROOT ?>img/icono.png" rel="apple-touch-icon">
   <!-- Librerias de gov co -->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">
   <link href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

   <link href="https://cdn.www.gov.co/v2/assets/cdn.min.css" rel="stylesheet">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

   <link rel="stylesheet" href="<?=PROOT?>css/select2.css?v=<?=VERSION?>" media="screen" title="no title" charset="utf-8">
   <link href="<?= PROOT ?>css/plugins/sweetalert/sweetalert.css" rel="stylesheet">

   <!-- Estilos personalizados -->
   <link href="<?= PROOT ?>css/alertMsg.css" rel="stylesheet">

   <?= $this->content('head'); ?>
</head>

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
   </nav>
   <section class="container">
      <div class="row" style="padding-top: 6%;">
         <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="container-fluid">
               <img src="<?= PROOT ?>img/logo.png" class="img-fluid float-left mt-2" width="80px" height="60px">

            </div>
         </div>
      </div>
   </section>




   <main class="container animated fadeInLeft">
      <!-- Contenido, render de los php -->
      <article class="row">
         <!-- <div class="logo">
            <img src="<?= PROOT ?>img/logojpg" alt="Logo">
         </div> -->
         <?= Session::displayMsg() ?>
         <?= $this->content('body'); ?>
      </article>

      <div class="block block--gov-accessibility">
         <div class="block-options navbar-expanded">
            <a class="contrast-ref">
               <span class="govco-icon govco-icon-contrast-n"></span>
               <label> Contraste </label>
            </a>
            <a class="min-fontsize">
               <span class="govco-icon govco-icon-less-size-n"></span>
               <label class="align-middle"> Reducir letra </label>
            </a>
            <a class="max-fontsize">
               <span class="govco-icon govco-icon-more-size-n"></span>
               <label class="align-middle"> Aumentar letra </label>
            </a>
            <a target="_blank" href="https://centroderelevo.gov.co/632/w3-channel.html">
               <span class="govco-icon govco-icon-relief-n"></span>
               <label class="align-middle"> Centro de relevo </label>
            </a>
         </div>
      </div>
   </main>
   <div class="container-fluid" style="background-color: #F5F5F5; padding-bottom: 1px;">
      <div class="row justify-content-center">
         <div class="col-md-6 col-xs-12 col-sm-12 border-right pt-4 text-center"  id="div-contenido">
            <div class="row">
               <div class="col-md-6 col-md-3 col-xs-12 col-sm-12">
                  <h4 class="headline-m-govco">¿Fué útil el contenido?</h4>
               </div>
               <div class="col-md-3 col-xs-12 col-sm-12 text-center pb-2">
                  <button type="button" id="util" class="btn-symbolic-govco align-column-govco" value="UTIL"> <span class="govco-icon govco-icon-happy-face size-2x"></span>
                     <span class="btn-govco-text">Útil</span>
                  </button>
               </div>
               <div class="col-md-3 col-xs-12 col-sm-12 text-center">
                  <button type="button" id="noUtil" class="btn-symbolic-govco align-column-govco pl-3" value="NO UTIL">
                     <span class="govco-icon govco-icon-sad-face size-2x" style="color:#A80521!important;"></span>
                     <span class="btn-govco-text">Nada Útil</span>
                  </button>
               </div>
            </div>

         </div>
         <div class="col-md-6 pt-4 text-center">

            <div class="container text-center">
               <button type="button" class="btn btn-round btn-middle btn-blocks" id="btn-util" data-toggle="tooltip" data-placement="top" title="" data-original-title="Después de escribir tus sugerencias oprime UTIL o NADA UTIL para enviarlas">Escribe tus sugerencias</button><br>
               <div id="Texto" style="display: none;">
                  <p style="color:#3366CC;"> Gracias por compartir tu experiencia</p>
               </div>

               <div id="div-area-util" style="padding-bottom: 10px; display: none;">
                  <label class="text-left small">Escribe tus comentarios</label>
                  <textarea class="form-control pb-2" rows="5" placeholder="Queremos conocer tu experiencia, sugerencias y consejos" id="text-area-util" maxlength="300" onkeypress="return Direccion(event)" onkeyup="aMayusculas(this.value,this.id)">                  </textarea>
               </div>

            </div>
         </div>
      </div>
   </div>
   <!-- fin contenido -->
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
                              <a href="https://www.youtube.com/user/PrensaBucaramanga"><i class="	fa fa-youtube-play fa-2x text-white"></i></a>
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

   <div class="modal inmodal fade font-weight-bold" id="frmModal" tabindex="-1" role="dialog" aria-labelledby="frmModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document" id="definirTamaño">
         <div class="modal-content">
            <div class="modal-header">
               <h3 class="modal-title text-decoration"><u id="modalTitulo"></u></h3>
               <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            </div>
            <div class="modal-body" id="bodyModal">
               ...
            </div>
         </div>
      </div>
   </div>
   <!-- Modal donde se muestra el pot online -->
   <div class="modal fade show alert-modal" id="modal-largo" role="dialog" aria-labelledby="modal-title-" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title">Instrucciones</h5>
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true" aria-label="Cerrar ventana" title="Cerrar ventana">x</button>
            </div>
            <div class="modal-body text-center modal-content-info">
               <div class="card-body card border-warning mb-3">
                  <div class="row text-left">
                     <ol>
                        <li>Ingrese la dirección en la casilla del Mapa (POT BUCARAMANGA 2014-2027)</li>
                        <li>Ubique su predio. </li>
                        <li>Oprima click sobre él y copie el código predial.</li>
                        <li>Cierre esta ventana y continúe diligenciando el formulario. </li>
                        <!-- <li> Mire el Video Tutorial <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalVideoTutorial">VideoAyuda</button></li> -->
                        <li>Asegúrese de Tener Una buena y estable Conexión de Internet</li>
                     </ol>
                  </div>
                  <div class="row">
                     <img src="<?= PROOT ?>img/captura.png" alt="Imagen de ejemplo" class="img-thumbnail w-75">
                  </div>
                  <hr>
                  <div class="row">
                     <iframe class="container-fluid" src="http://mbucaramanga.maps.arcgis.com/apps/webappviewer/index.html?id=5c32765bb4d544d1a20182ca13fc16b1" style="width:100%;" height="800" frameborder="0"></iframe>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Fin modal pot online -->
   <!-- Modal consultar por predial -->
   <div class="modal fade show alert-modal" id="modalPredial" role="dialog" aria-labelledby="modal-title-govco" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title">Ingresar predial</h5>
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true" aria-label="Cerrar ventana" title="Cerrar ventana">x</button>
            </div>
            <form method="post" action="">
               <div class="modal-body text-center modal-content-info">
                  <div class="card-body card border-warning mb-3">
                     <div class="row text-left">
                        <?= FH::inputBlock('text', 'Número predial', 'buscar_predial', '', ['class' => 'form-control input-govco text-uppercase'], ['class' => 'form-group col-md-6'], []) ?>
                     </div>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                     <button type="button" class="btn btn-high" onClick="buscarPredial();return;">Realizar Busqueda</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
   <!-- Fin modal buscar por predial -->
   <!-- Modal consultar por direccion -->
   <div class="modal fade show alert-modal" id="modalDireccion" role="dialog" aria-labelledby="modal-title-govco" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title">Ingresar dirección</h5>
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true" aria-label="Cerrar ventana" title="Cerrar ventana">x</button>
            </div>
            <form method="post" action="">
               <div class="modal-body text-center modal-content-info">
                  <div class="card-body card border-warning mb-3">
                     <div class="row text-left">
                        <?= FH::selectBlock(
                           'Calle - carrera',
                           'DD01',
                           '',
                           [
                              'C' => 'Calle',
                              'K' => 'Carrera',
                              'A' => 'Avenida',
                              'ANILLO' => 'Anillo',
                              'D' => 'Diagonal',
                              'CIR' => 'Circunvalar',
                              'T' => 'Transversal',
                              'BL' => 'Bulevar',
                              'CS' => 'Casa',
                              'MZ' => 'Manzana',
                           ],
                           ['class' => 'form-control conDir', 'placeHolder' => 'seleccione', 'data-live-search' => 'true', 'data-size' => 10],
                           ['class' => 'select-govco col-md-2'],
                           []
                        ) ?>

                        <?= FH::inputBlock('text', 'No. - nombre', 'DD02', '', ['class' => 'form-control input-govco text-uppercase conDir'], ['class' => 'form-group col-md-2'], []) ?>

                        <?= FH::selectBlock(
                           'Letra',
                           'DD03',
                           '',
                           [
                              'A' => 'A',
                              'B' => 'B',
                              'C' => 'C',
                              'D' => 'D',
                              'E' => 'E',
                              'F' => 'F',
                              'G' => 'G',
                              'H' => 'H',
                              'I' => 'I',
                              'J' => 'J',
                              'K' => 'K',
                              'L' => 'L',
                              'M' => 'M',
                              'N' => 'N',
                              'O' => 'O',
                              'P' => 'P',
                              'Q' => 'Q',
                              'R' => 'R',
                              'S' => 'S',
                              'T' => 'T',
                              'U' => 'U',
                              'V' => 'V',
                              'W' => 'W',
                              'X' => 'X',
                              'Y' => 'Y',
                              'Z' => 'Z',
                              'AW' => 'AW',
                              'BW' => 'BW',
                              'BN' => 'BN',
                              'CW' => 'CW',
                              'DW' => 'DW',
                              'AN' => 'AN',
                              'NA' => 'NA',
                              'NB' => 'NB',
                              'BN' => 'BN',
                              'NC' => 'NC',
                              'CN' => 'CN',
                              'BIS' => 'BIS',
                              'B BIS' => 'B BIS',
                              'C BIS' => 'C BIS',
                              'D BIS' => 'D BIS',
                              'N-BIS' => 'N-BIS',
                              'OCC' => 'OCC',
                              'A OCC' => 'A OCC',
                              'B OCC' => 'B OCC',
                              'C OCC' => 'C OCC',
                              'D OCC' => 'D OCC',
                              'BQ' => 'BLOQUE',
                              'MZ' => 'MANZANA',
                              'CS' => 'CASA',
                              'AP' => 'APARTAMENTO',
                              'LT' => 'LOTE',
                              'LO' => 'LOCAL',
                              'PEAT' => 'PEATONAL',
                              'N PEAT' => 'N PEATONAL',
                              'NA PEAT' => 'NA PEATONAL',
                              'NB PEAT' => 'NB PEATONAL',
                              'A PEAT GUAY OCC CS' => 'A PEATONAL GUAYACANES OCC',
                              'B PEAT GUAY OCC CS' => 'B PEATONAL GUAYACANES OCC',
                              'C PEAT GUAY OCC CS' => 'C PEATONAL GUAYACANES OCC',
                              'D PEAT GUAY OCC CS' => 'D PEATONAL GUAYACANES OCC',
                           ],
                           ['class' => 'form-control conDir', 'placeHolder' => 'seleccione', 'data-live-search' => 'true', 'data-size' => 10],
                           ['class' => 'select-govco col-md-2'],
                           []
                        ) ?>

                        <?= FH::inputBlock('text', 'Número', 'DD04', '', ['class' => 'form-control  text-uppercase input-govco conDir'], ['class' => 'form-group col-md-1'], []) ?>

                        <?= FH::selectBlock(
                           'Letra',
                           'DD05',
                           '',
                           [
                              'A' => 'A',
                              'B' => 'B',
                              'C' => 'C',
                              'D' => 'D',
                              'E' => 'E',
                              'F' => 'F',
                              'G' => 'G',
                              'H' => 'H',
                              'I' => 'I',
                              'J' => 'J',
                              'K' => 'K',
                              'L' => 'L',
                              'M' => 'M',
                              'N' => 'N',
                              'O' => 'O',
                              'P' => 'P',
                              'Q' => 'Q',
                              'R' => 'R',
                              'S' => 'S',
                              'T' => 'T',
                              'U' => 'U',
                              'V' => 'V',
                              'W' => 'W',
                              'X' => 'X',
                              'Y' => 'Y',
                              'Z' => 'Z',
                              'AW' => 'AW',
                              'BW' => 'BW',
                              'BN' => 'BN',
                              'CW' => 'CW',
                              'DW' => 'DW',
                              'AN' => 'AN',
                              'NA' => 'NA',
                              'NB' => 'NB',
                              'BN' => 'BN',
                              'NC' => 'NC',
                              'CN' => 'CN',
                              'BIS' => 'BIS',
                              'B BIS' => 'B BIS',
                              'C BIS' => 'C BIS',
                              'D BIS' => 'D BIS',
                              'N-BIS' => 'N-BIS',
                              'OCC' => 'OCC',
                              'A OCC' => 'A OCC',
                              'B OCC' => 'B OCC',
                              'C OCC' => 'C OCC',
                              'D OCC' => 'D OCC',
                              'BQ' => 'BLOQUE',
                              'MZ' => 'MANZANA',
                              'CS' => 'CASA',
                              'AP' => 'APARTAMENTO',
                              'LT' => 'LOTE',
                              'LO' => 'LOCAL',
                              'PEAT' => 'PEATONAL',
                              'N PEAT' => 'N PEATONAL',
                              'NA PEAT' => 'NA PEATONAL',
                              'NB PEAT' => 'NB PEATONAL',
                              'A PEAT GUAY OCC CS' => 'A PEATONAL GUAYACANES OCC',
                              'B PEAT GUAY OCC CS' => 'B PEATONAL GUAYACANES OCC',
                              'C PEAT GUAY OCC CS' => 'C PEATONAL GUAYACANES OCC',
                              'D PEAT GUAY OCC CS' => 'D PEATONAL GUAYACANES OCC',
                           ],
                           ['class' => 'form-control conDir', 'placeHolder' => 'seleccione', 'data-live-search' => 'true', 'data-size' => 10],
                           ['class' => 'select-govco col-md-2'],
                           []
                        ) ?>

                        <?= FH::inputBlock('text', 'Número', 'DD06', '', ['class' => 'form-control  text-uppercase input-govco conDir'], ['class' => 'form-group col-md-1'], []) ?>

                        <?= FH::selectBlock(
                           'Letra',
                           'DD07',
                           '',
                           [
                              'A' => 'A',
                              'B' => 'B',
                              'C' => 'C',
                              'D' => 'D',
                              'E' => 'E',
                              'F' => 'F',
                              'G' => 'G',
                              'H' => 'H',
                              'I' => 'I',
                              'J' => 'J',
                              'K' => 'K',
                              'L' => 'L',
                              'M' => 'M',
                              'N' => 'N',
                              'O' => 'O',
                              'P' => 'P',
                              'Q' => 'Q',
                              'R' => 'R',
                              'S' => 'S',
                              'T' => 'T',
                              'U' => 'U',
                              'V' => 'V',
                              'W' => 'W',
                              'X' => 'X',
                              'Y' => 'Y',
                              'Z' => 'Z',
                              'AW' => 'AW',
                              'BW' => 'BW',
                              'BN' => 'BN',
                              'CW' => 'CW',
                              'DW' => 'DW',
                              'AN' => 'AN',
                              'NA' => 'NA',
                              'NB' => 'NB',
                              'BN' => 'BN',
                              'NC' => 'NC',
                              'CN' => 'CN',
                              'BIS' => 'BIS',
                              'B BIS' => 'B BIS',
                              'C BIS' => 'C BIS',
                              'D BIS' => 'D BIS',
                              'N-BIS' => 'N-BIS',
                              'OCC' => 'OCC',
                              'A OCC' => 'A OCC',
                              'B OCC' => 'B OCC',
                              'C OCC' => 'C OCC',
                              'D OCC' => 'D OCC',
                              'BQ' => 'BLOQUE',
                              'MZ' => 'MANZANA',
                              'CS' => 'CASA',
                              'AP' => 'APARTAMENTO',
                              'LT' => 'LOTE',
                              'LO' => 'LOCAL',
                              'PEAT' => 'PEATONAL',
                              'N PEAT' => 'N PEATONAL',
                              'NA PEAT' => 'NA PEATONAL',
                              'NB PEAT' => 'NB PEATONAL',
                              'A PEAT GUAY OCC CS' => 'A PEATONAL GUAYACANES OCC',
                              'B PEAT GUAY OCC CS' => 'B PEATONAL GUAYACANES OCC',
                              'C PEAT GUAY OCC CS' => 'C PEATONAL GUAYACANES OCC',
                              'D PEAT GUAY OCC CS' => 'D PEATONAL GUAYACANES OCC',
                           ],
                           ['class' => 'form-control conDir', 'placeHolder' => 'seleccione', 'data-live-search' => 'true', 'data-size' => 10],
                           ['class' => 'select-govco col-md-2'],
                           []
                        ) ?>

                        <?= FH::inputBlock('text', '', 'DD00', '', ['class' => 'form-control  text-uppercase input-govco', 'readOnly' => true, 'placeHolder' => 'Previsualizador de la dirección introducida'], ['class' => 'form-group col-md-12'], []) ?>
                     </div>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                     <button type="button" class="btn btn-high" onClick="buscarPredial();return;">Realizar Busqueda</button>
                  </div>
            </form>
         </div>
      </div>
   </div>
   <!-- Fin modal buscar por direccion -->

   <!-- Modal espera por favor, utilizar con ajax -->
   <div class="modal fade" data-backdrop="static" id="modalEsperar" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true" style="padding-top:15%; overflow-y:visible;">
      <div class="modal-dialog modal-m">
         <div class="modal-content">
            <div class="modal-body">
               <h3>Consultando, espera por favor.</h3>
               <div class="progress">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Fin modal espera por favor -->

   <!-- Librerias de gov co -->
   <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

   <!-- Librerias externas es decir no de gov co -->
   <script src="<?=PROOT?>js/select2.js"></script>
   <script src="<?= PROOT ?>js/plugins/sweetalert/sweetalert.min.js"></script>
   <script src="<?= PROOT ?>js/plugins/validate/jquery.validate.min.js"></script>

   <!-- Libreria personalizada -->
   <script src="<?= PROOT ?>js/alertMsg.js"></script>
   <script>
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

         if (clase == 'all') {
            $('#body').removeClass("all");
            $('#myForm').css('background-color', 'white');
            $('#nav-header').css('background-color', color);
         } else {
            $('#body').addClass("all");
            $('#myForm').css('background-color', 'black');
            $('#nav-header').css('background-color', 'black');

         }

      })
      $('#btn-util').click(function() {

         $("#div-area-util").fadeToggle('slow', 'swing');
         $('#text-area-util').focus();
      })
      $('#btn-sugerencias').click(function() {
         $("#text-button").fadeToggle('slow', 'swing');
         $('#text-area').focus();

      })

      $('#util').click(function(){

      var util = $("#util").val();
      var sugerencia = $('#text-area-util').val();
      //console.log(util);        
      //console.log(sugerencia);
                                                                   
              jQuery.ajax({
                    type: "POST",
                    url: "<?= PROOT ?>personas/util",
                    data: "Parametro="+util+"&sugerencia="+sugerencia,                         
                     success: function(response){
                        //console.log(response);
                         if(response == '1'){

                           $('#Texto').fadeToggle();
                      
                              setTimeout(function() {

                                 $('#Texto').fadeToggle()

                               },5000);
                             $('#util').css('pointer-events','none');
                             $('#noUtil').css('pointer-events','none');
                             $('#util').attr('disabled', true);
                             $('#noUtil').attr('disabled', true);
                             $('#btn-util').attr('disabled', true);
                             $("#div-area-util").css('display','none');
                          
                         }else{
                           alert("Ha ocurrido un error al realizar la encuesta");
                         }                  
                          
                                                               
                    },error: function(){
                          alert("error de petición ajax");
                    },
              });                                                                   
              

    })

      $('#noUtil').click(function(){

          var noUtil = $("#noUtil").val();
          var sugerencia = $('#text-area-util').val();
          //console.log(noUtil);
          //console.log(sugerencia);         
     
                                                                   
             jQuery.ajax({
                    type: "POST",
                    url: "<?= PROOT ?>personas/util",
                    data: "Parametro="+noUtil+"&sugerencia="+sugerencia,                                    
                    success: function(response){  

                      if(response == '1'){

                           $('#Texto').fadeToggle()
                      
                              setTimeout(function() {

                                 $('#Texto').fadeToggle()

                               },5000);
                             $('#util').css('pointer-events','none');
                             $('#noUtil').css('pointer-events','none');
                             $('#util').attr('disabled', true);
                             $('#noUtil').attr('disabled', true);
                             $('#btn-util').attr('disabled', true);
                             $("#div-area-util").css('display','none');
                          
                         }else{
                     alert("Ha ocurrido un error al realizar la encuesta");                                    
                                                                                     
                    }
                 },
                    error: function(){
                          alert("error de petición ajax");
                    },
              });                                                                  
                 
    
    

    })
   </script>
   <?= $this->content('footer'); ?>
</body>

</html>