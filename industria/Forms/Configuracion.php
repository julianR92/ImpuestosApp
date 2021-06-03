<?php
/**
Software:        
Desarrollador:   
Versiòn:         
Todos los derechos reservados 2020
@copyrigth
**/
require_once '../Frame/Header.htm';
require_once 'MenuPrincipal.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="padding-top: 50px !important;">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6" style="align-self:flex-end;">
          <ol class="breadcrumb float-sm-left">
            <li class="breadcrumb-item"><a href="../Forms/Main.php">Home</a></li>
            <?php if($this->Parametro==true):?>
            <li class="breadcrumb-item active"><b>Configuraciones</b></li>
            <?php elseif($this->MetodoRowRol=="true"):?>
              <li class="breadcrumb-item"><a href="../Forms/MenuPrincipal.php?CNF=Retroceso">Configuraciones</a></li>
              <li class="breadcrumb-item active"><b>Listar roles de usuarios</b></li>
            <?php elseif($this->MetodoRegRol=="true"):?>
              <li class="breadcrumb-item"><a href="../Forms/MenuPrincipal.php?CNF=Retroceso">Configuraciones</a></li>
              <li class="breadcrumb-item active"><b>Registrar roles</b></li>
            <?php elseif($this->MetodoRowPer=="true"):?>
              <li class="breadcrumb-item"><a href="../Forms/MenuPrincipal.php?CNF=Retroceso">Configuraciones</a></li>
              <li class="breadcrumb-item active"><b>Detalle permisos rol</b></li>
            <?php endif;?>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-sm-6 col-md-2">
          <div style="padding: 4px 4px 4px 4px !important; width:220px;" class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1"><i style="width:50px !important;" class="fas fa-exclamation-triangle"></i></span>
            <div class="info-box-content">
              <form method="post" action="../Motordb/Motor.php">
                <input type="hidden" name="Archivo" value="Configuracion">
                <input type="hidden" name="Clase" value="Configuracion">
                <input type="hidden" name="Funcion" value="listarRolUsuario">
                <input type="hidden" name="RU01" value="true">
                <button type="submit" name="Boton" id="BotonGRU" value="Boton" class="FuenteExtra">
                  <span class="info-box-text">Gestión</span>
                  <span class="info-box-number">Rol de Usuario</span>
                </button>
              </form>     
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php require_once("../Forms/templateConfiguraciones.php"); ?>
  </div>
</section> 
</div>
<?php
require_once '../Frame/Footer.htm';
?>