<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <title>Industria & Comercio</title>
  <link rel="stylesheet" type="text/css" href="Frame/plugins/bootstrap-4.5.3/css/bootstrap.min.css">
  <link href="https://cdn.www.gov.co/assets/css/styles.css" rel="stylesheet">
  <link href="https://cdn.www.gov.co/v2/assets/cdn.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="Frame/styles/style.css">        
</head>
<body>
  <nav class="navbar navbar-expand-lg fixed-top navbar-govco navbar-expanded">
    <div class="navbar-container container">
      <div class="navbar-logo float-left">
        <a class="navbar-brand" ><img src="https://cdn.www.gov.co/assets/images/logo.png" height="30" alt="Logo Gov.co" /></a>
      </div>
      <div class="collapse navbar-collapse navbar-first-menu float-right"></div>
    </div>
    <div class='nav-secondary show-transition' id="nav-secondary"></div>
    <div class="navbar-nav navbar-notifications" id="notificationHeader"></div>
  </nav>
  <div class="container" style="padding-top: 80px;padding-bottom: 20px;">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-12 col-md-4">
        <div class="govco-form-signin">
          <form method="POST" role="form" action="controller/controlador.php">
            <div clas="text-center" align="center">
              <span  class=" bd-highlight govco-icon govco-icon-key-cn"></span>
            </div><br>
            <h3 align="center" class="govco-title-sign-form headline-l-govco">Inicio de sesión</h3>
            <div class="form-group"><br>
              <label for="inputEmail-govco">Usuario</label>
              <input type="text" class="form-control input-govco" maxlength="60" id="user_validate" name="SP00" required="required" onkeypress="return userValidate(event)">
            </div>
            <div class="form-group">
              <label for="inputPassword-govco">Contraseña</label>
              <input type="password" class="form-control input-govco" maxlength="20" id="SP01" name="SP01" required="required">
            </div>
            <div class="row">
              <div class="col-12">
                <input type="hidden" id="Archivo" name="Archivo" value="Sesion">
                <input type="hidden" id="Clase" name="Clase" value="Sesion">
                <input type="hidden" id="Funcion" name="Funcion" value="Login">
              </div>
            </div>
            <div class="d-flex d-flex justify-content-between">
              <div class="checkbox mb-3">
                <label class="checkbox-govco">
                  <input type="checkbox" id="checkboxPassword-govco" class="check_pass" />
                  <label class="label_checkbox" for="checkboxPassword-govco"> Mostrar contraseña</label><br>
                </label><br>
              </div>
              <div class="d-flex d-flex justify-content-between">
                <button type="submit" name="Boton" value="Boton" id="botonLogin" class="btn btn-round btn-high mr-0" style="height: fit-content; font-size: smaller;">Iniciar Sesión</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="govco-form-sign-links">
    <div class="row">
      <div class="col-md-6 col-sm-12 col-12" id="btn_href">
        <a href="Forms/formRecoverPasswd.php" class="btn-low" style="font-size: smaller;">Olvidé mi contraseña</a>
      </div>
    </div>
  </div>
  <footer class="he_footer">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-2 col-lg-3 split screen-lg logos">
          <div class="logo">
            <a href="https://www.gov.co"><img src="Frame/img/logo_footer.png" alt="logo" id="img_gov_footer" style="width: 100%;"></a>
          </div>
          <div class="logo_co">
            <a href="https://www.colombia.co">
              <img src="Frame/img/logo_co_footer.png" alt="logo co">
            </a>
          </div>
        </div>
        <div class="col-xl-6 col-lg-5 split">
          <h4 class="text-white">Alcaldia de Bucaramanga</h4>
          <p class="text-white">
            Nit: 890 201 222-0<br>
            Dirección: Fase I: Calle 35 # 10-43.<br>
            Fase II: Carrera 11 # 34-52.<br>
            Bucaramanga, Santander, Colombia.<br>
            Código Postal: 680006. Código Dane: 68001.<br>
            Horario de Atención: Lunes a viernes de 6:00 a.m. a 02:00 p.m. jornada contínua
          </p>
        </div>
        <div class="col-lg-4 no-split">
          <h4 class="text-white"> Contacto</h4>
          <p class="text-white">
            Conmutador: (57+7) 633 70 00<br>
            Atención a la Ciudadanía: (57+7) 652 55 55<br>
            Fax: (57+7) 652 17 77<br>
            Centro Integral de la Mujer - Violencia Intrafamiliar:
            6351897.<br>
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- js jquery -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="Frame/plugins/bootstrap-4.5.3/js/bootstrap.min.js"></script>
  <script src="https://cdn.www.gov.co/v2/assets/js/utils.js"></script>
  <script type="text/javascript" src="Frame/scripts/validate.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('input[type=checkbox]').click(function(){
        if(this.checked){          
          $('#SP01').attr('type', 'text');
        }else{
           $('#SP01').attr('type', 'password');
        }
      })
    });
  </script>
</body>
</html>