<?php
/*
Autor:
Software:
Versión: 1.0:
Tipo de proyecto:
Todos los derechos reservados 2020
Institución: Corporación universitaria de ciencia y desarrollo Uniciencia
*/
session_start();
if($_SESSION['SessionActive'] == null || $_SESSION['SessionActive'] == ''){
  echo "<script> alert('Debes iniciar sesión para ingresar al sistema');</script>";
  echo "<script>window.location.href='../index.php';</script>";
}
require_once '../Frame/Header.htm';
require_once '../Motordb/Permisos.php';
?>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="width:100%; padding-right:300px !important; position: fixed; background-color: #3366CC;">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button" style="color: #FFF"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="../Forms/MainPrincipal.php" class="nav-link" style="color: #FFF">Home</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item  d-none d-sm-inline-block">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <img src="https://cdn.www.gov.co/assets/images/logo.png" height="30" alt="Logo Gov.co" />
          </a>
        </li>
      </ul>
    </nav>

    <aside class="main-sidebar sidebar-dark-primary  elevation-4">
      <a href="#" class="brand-link">
        <span class="brand-text font-weight-bold">Industria & Comercio</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info" style="padding-top: 25px !important;">
          <a href="#" class="d-block" style="font-size:10px !important; color: #FFFFFF!important"><b><?php UsuNom();?> <?php UsuApe();?></b></a>
        </div>
      </div>

      <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="padding-top: 0px !important;">
        <div class="info" style="padding-top: 0px !important;">
          <span class="badge badge-info right"><?php UltimaSession();?></span><br>
          <span class="badge badge-info right" style="width: 205px !important; text-align: left !important;"><?php echo "Hora local:".' '."<b style='font-size:12px;' id='reloj' title='(UTC - 05:00) BogotÃ¡, LÃ­ma, Quito, Rio Branco'></b>"?></span>
          <!-- <span class="badge badge-info right">Fecha de ingreso:</span>-->
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
           <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link active" style="background-color:#3366CC!important;">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Administración<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <?php if (MOD1()==="TRUE"):?>
                <li class="nav-item">
                <a href="#" class="nav-link">
                  <form method="post" action="../controller/controlador.php">
                    <input type="hidden" name="Archivo" value="Usuarios">
                    <input type="hidden" name="Clase" value="Usuarios">
                    <input type="hidden" name="Funcion" value="selectUsuario">
                    <input type="hidden" name="US08" value="<?php UsuRol()?>">
                    <input type="hidden" name="US09" value="<?php User2()?>">
                    <button type="submit" name="Boton" id="BotonCEM" value="Boton">
                    <i class="nav-icon fas fa-users"></i>
                    <p>Usuarios<span class="right badge badge-danger"></span></p>
                    <?php if ($_GET["CEM"]==="Retroceso"){ ?>
                      <script type="text/javascript">document.getElementById('BotonCEM').click();</script><?php } ?>
                  </button>
                  </form>
                </a>
              </li><?php endif;?>

                <?php if (MOD1S()):?>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <form method="post" action="../controller/controlador.php">
                     <input type="hidden" name="Archivo" value="Usuarios">
                    <input type="hidden" name="Clase" value="Usuarios">
                    <input type="hidden" name="Funcion" value="SelectUsuario">
                    <input type="hidden" name="US08" value="<?php UsuRol()?>">
                    <input type="hidden" name="US09" value="<?php User2()?>">
                    <button type="submit" name="Boton" id="BotonPER" value="Boton">
                      <i class="nav-icon fas  fa-user"></i>
                      <p>Perfil<span class="right badge badge-danger"></span></p>                    <?php if ($_GET["NAC"]==="Retroceso"){ ?>
                        <script type="text/javascript">document.getElementById('BotonPER').click();</script><?php } ?>
                      </button>
                    </form>
                </a>
              </li><?php endif;?>

              <?php if (MOD2()==="TRUE"):?>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <form method="post" action="../controller/controlador.php">
                    <input type="hidden" name="Archivo" value="Permisos">
                    <input type="hidden" name="Clase" value="Permisos">
                    <input type="hidden" name="Funcion" value="verPermisos">
                    <input type="hidden" name="EM10" value="true">
                    <button type="submit" name="Boton" id="BotonNAC" value="Boton">
                    <i class="nav-icon fas fa-lock"></i>
                    <p>Permisos<span class="right badge badge-danger"></span></p>
                    <?php if ($_GET["NAC"]==="Retroceso"){ ?>
                      <script type="text/javascript">document.getElementById('BotonNAC').click();</script><?php } ?>
                    </button>
                  </form>
                </a>
              </li><?php endif;?>

              <?php if (MOD3()==="TRUE"):?>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <form method="post" action="../controller/controlador.php">
                    <input type="hidden" name="Archivo" value="Programas">
                    <input type="hidden" name="Clase" value="Programas">
                    <input type="hidden" name="Funcion" value="listarProgramas">
                    <input type="hidden" name="EM10" value="true">
                    <button type="submit" name="Boton" id="BotonADP" value="Boton">
                    <i class="nav-icon fas  fa-cog"></i>
                    <p>Administración<span class="right badge badge-danger"></span></p>
                    <?php if ($_GET["ADP"]==="Retroceso"){ ?>
                      <script type="text/javascript">document.getElementById('BotonADP').click();</script><?php } ?>
                      </button>
                  </form>
                </a>
              </li><?php endif;?>
            </ul>

            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
           <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active" style="background-color:#3366CC!important;">
              <i  class="fa fa-university" aria-hidden="true"></i>
              <p>Establecimientos<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <?php if (MOD4()==="TRUE"):?>
                <li class="nav-item">
                  <a href="../Forms/Main.php" class="nav-link">
                    <i class="fa fa-id-card" aria-hidden="true"></i>
                    <p>Admin Establecimientos<span class="right badge badge-danger"></span></p>
                    <?php if ($_GET["MOD"]==="Retroceso"){ ?>
                      <script type="text/javascript">document.getElementById('BotonMOD').click();</script><?php } ?>
                    </button>
                  </a>
                </li>
              <?php endif;?>
            </ul>
          </li>
          <li>
            <div class="user-panel mt-3 pb-3 mb-3 d-flex"></div>
          </li>
           <li class="nav-item">
            <a href="#" class="nav-link">
              <form method="post" action="../controller/controlador.php">
                <input type="hidden" name="Archivo" value="Sesion">
                <input type="hidden" name="Clase" value="Sesion">
                <input type="hidden" name="Funcion" value="Logout">
                <input type="hidden" name="SP00" value="<?php User2()?>">
                 <button type="submit" name="Boton" id="BotonCerrarSesion" value="Boton">
                  <i class="nav-icon far fa-circle text-danger" style="color: #FFFFFF!important"></i>
                  <p>Cerrar Sesión<span class="right badge badge-danger"></span></p>
                 </button>
               </form>
             </a>
           </li>
         </ul><!--Fin de administracion-->
       </nav>
     </div>
   </aside>
 </div>
</body>
<?php
require_once '../Frame/Footer.htm';
?>
<script type="text/javascript">
  function Regresar(){
    history.go(-1);
  }
</script>
</html>
