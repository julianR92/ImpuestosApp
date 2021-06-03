<?php
/*
Autor:   
Software: 
VersiÛn: 1.0:
Tipo de proyecto: 
Todos los derechos reservados 2020
InstituciÛn: CorporaciÛn universitaria de ciencia y desarrollo Uniciencia
*/

require_once '../Frame/Header.htm';
include_once("MenuPrincipal.php");
?>
<!-- Content Wrapper. Contains page content-->
<div class="content-wrapper" style="padding-top:50px !important; padding-left: 20px !important;">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6" style="align-self:flex-end;">
          <ol class="breadcrumb float-sm-left">
            <li class="breadcrumb-item"><a href="../Forms/Main.php">Home</a></li>
            <?php if ($this->MetodoUpd=="true"):?>
              <li class="breadcrumb-item active"><a href="../Forms/MenuPrincipal.php?CUS=Retroceso">Listar usuarios</a></li>
              <li class="breadcrumb-item active"><b>Editar usuarios</b></li>
            <?php elseif($this->MetodoRowP=="true"):?>
              <li class="breadcrumb-item active"><a href="../Forms/MenuPrincipal.php?CUS=Retroceso">Listar usuarios</a></li>
              <li class="breadcrumb-item active"><b>Programas usuarios</b></li>
            <?php elseif($this->MetodoPerUsu=="true"):?>
              <li class="breadcrumb-item active"><a href="../Forms/MenuPrincipal.php?CUS=Retroceso" >Listar usuarios</a></li>
              <li class="breadcrumb-item active"><b>Permisos y privilegios de usuario</b></li>
            <?php else:?>
              <li class="breadcrumb-item active"><b>Listar usuarios</b></li>
            <?php endif;?>
          </ol>
        </div>
      </div>
    </div>
  </div>
<?php include("../Forms/templateUsuarios.php");?>

<?php if ($this->MetodoUpd == "true"): ?>
<div class="card card-dark" style="width: 96% !important;">
    <div class="card-header">
      <h3 class="card-title"><b>Editar usuarios</b></h3>
      <a href="../Forms/MenuPrincipal.php?CUS=Retroceso"><button style="width:200px;float:right" class="form-control btn btn-warning" class="float-md-right"><i class="glyphicon glyphicon-plus"></i><b>Regresar</b></button></a>
    </div>
    <div class="card-body">
      <form role="form" action="../Motordb/Motor.php" method="post" enctype="multipart/form-data">
      <div class="row">
                   <div class="col-md-3">
                    <div class="form-group">
                      <label class="input-control" for="file">Foto de perfil</label>
                      <div class="input-group">
                        <img style="width:100px ;height:100px; border-radius: 50px;" src="<?php echo $RowEdiUsu[17];?>">
                        <input style="padding-top: 10px;" name="file" type="file"/>
                      </div>
                    </div>
                  </div>

                   <div class="col-md-12">
                        <div class="form-group">
                          <label class="input-control">Instituci√≥n</label>
                          <input type="tetx" readonly="" value="<?php echo $RowEdiUsu[16]?>" class="form-control" title="Nombres del usuario">
                        </div>        
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                          <label class="input-control" for="US01">Nombres *</label>
                          <input type="tetx" name="US01" id="US01" required="" maxlength="50" value="<?php echo $RowEdiUsu[1]?>" class="form-control" title="Nombres del usuario" onkeyup="aMayusculas(this.value,this.id)" onkeypress="return Letras(event)">
                        </div>        
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                          <label class="input-control" for="US02">Apellidos *</label>
                          <input type="tetx" name="US02" id="US02" required="" maxlength="50" value="<?php echo $RowEdiUsu[2]?>" class="form-control" title="Apellidos del usuario" onkeyup="aMayusculas(this.value,this.id)" onkeypress="return Letras(event)">
                        </div>        
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="input-control" for="US03">Tipo de identificaci√≥n *</label>
                            <select class="form-control" name="US03" id="US03" required="" title="Seleccione el tipo de documento de identificacion">
                                <option value="<?php echo $RowEdiUsu[3]?>"><?php echo $RowEdiUsu[3];?></option>
                                <option value="">Seleccione una opcion</option>
                                <option value="Tarjeta de identidad">Tarjeta de identidad</option>
                                <option value="Cedula de ciudadania">Cedula de ciudadania</option>
                                <option value="Cedula de extranjeria">Cedula de extranjeria</option>
                                <option value="Pasaporte">Tarjeta Pasaporte</option>
                            </select>           
                        </div>        
                    </div>

                    <div class="col-md-6">
                       <div class="form-group">
                           <label class="input-control">N√∫mero de identificaci√≥n *</label>
                           <input type="text" name="US04" id="US04" readonly="" value="<?php echo $RowEdiUsu[4]?>" title="Digite su Numero de Identificacion segun corresponda con el documento de identidad seleccionado" class="form-control">
                      </div>        
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                          <label class="input-control" for="US05">Direcci√≥n *</label>
                          <input type="text" name="US05" id="US05" value="<?php echo $RowEdiUsu[5]?>" class="form-control" required="" maxlength="250" title="" onkeyup="aMayusculas(this.value,this.id)" onkeypress="return NumDoc(event)">
                        </div>        
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                          <label class="input-control">Correo *</label>
                          <input type="email" readonly="" value="<?php echo $RowEdiUsu[6]?>" class="form-control" title="Digite la DirecciÛn de correo donde recibira las notificaciones" onkeypress="return Email(event)">
                        </div>        
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                          <label class="input-control" for="US07">Telefono</label>
                          <input type="number" name="US07" id="US07" value="<?php echo $RowEdiUsu[7]?>" class="form-control" maxlength="20" title="" onkeypress="return Numeros(event)">
                        </div>        
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                          <label class="input-control" for="US08">Celular *</label>
                          <input type="number" name="US08" id="US08" value="<?php echo $RowEdiUsu[8]?>" required="" maxlength="20" class="form-control" title="" onkeypress="return Numeros(event)">
                        </div>        
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                          <label class="input-control">Usuario *</label>
                          <input type="text" readonly="" value="<?php echo $RowEdiUsu[12];?>" class="form-control" title="El usuario asignado corresponde al n√∫mero de identificaci√≥n, este ser√° √∫nico u no podr√° ser editado">
                        </div>        
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                          <label class="input-control" for="US13">Contrase√±a *</label>
                          <input value="<?php $datos = base64_decode($RowEdiUsu[13]); echo $datos;?>" type="text" name="US13" id="US13" maxlength="20"class="form-control" title="La contraseÒa podr· ser una combinaciÛn de caracteres especiales">
                        </div>        
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="input-control" for="US09">Rol *</label>
                            <div class="input-group">
                            <div class="input-group-addon">
                            </div>
                              <select class="form-control" name="US09" id="US09" title="Rol y permisos asignados">
                                 <option value="<?php echo $RowEdiUsu[9]?>"><?php echo $RowEdiUsu[9];?></option>
                                 <option value="">Seleccione una opci√≥n </option>
                                 <option value="ADMIN">ADMIN</option>
                                 <option value="COORDINADOR">COORDINADOR</option> 
                                 <option value="GESTOR">GESTOR</option>                                   
                              </select>  
                            </div>                             
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="input-control" for="US14">Estado *</label>
                            <div class="input-group">
                            <div class="input-group-addon">
                            </div>
                                <select class="form-control" name="US14" id="US14" title="Seleccione el grado de escolaridad">
                                   <option value="<?php echo $RowEdiUsu[14]?>"><?php echo $RowEdiUsu[14]?></option>
                                   <option value="">Seleccione una opci√≥n </option>
                                   <option value="ACTIVO">Activo</option>
                                   <option value="INACTIVO">Inactivo</option>                            
                                </select>  
                            </div>                             
                        </div>
                    </div>

                    <input type="hidden" name="Archivo" value="Usuarios">
                    <input type="hidden" name="Clase" value="Usuarios">
                    <input type="hidden" name="Funcion" value="UpdateUsuario">
                    </div><br>

                    <div class="modal-footer">
                        <div class="col-md-3">
                            <div class="form-group"><br><br>
                                <button type="submit" name="Boton" value="Boton" class="form-control btn btn-dark"><b> Aceptar</b></button>
                            </div>
                        </div>
                    </div>
                  </form>
                </div>
<?php endif;?>
</div>
<!--Ventana modal para agregar usuarios-->
<div class="modal fade" id="modalAgregarUsuario" tabindex="3" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div style="background-color: #4F5962; color: #FFFFFF;" class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Registrar Usuario</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span style="color: #FFFFFF;" aria-hidden="true">&times;</span>
        </button>
      </div>
      <form role="form" action="../Motordb/Motor.php" method="post" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="row">

          <div class="col-md-3">
                    <div class="form-group">
                      <label class="input-control" for="file">Foto de perfil</label>
                      <div class="input-group">
                        <img style="width:100px ;height:100px; border-radius: 50px;" src="<?php echo $RowEdiUsu[17];?>">
                        <input style="padding-top: 10px;" name="file" type="file"/>
                      </div>
                    </div>
                  </div>

                      <div class="col-md-12">
                          <div class="form-group">
                              <label class="input-control" for="US00">Instituci&#243n *</label>
                              <div class="input-group">
                              <div class="input-group-addon">
                              </div>
                                  <select class="form-control" name="US00" id="US00" required="" title="Seleccione la mpresa a la que pertenece el nuevo usuario">
                                     <option value="">Elija una opci&#243n </option>
                                     <option value="<?php IdEntidad();?>"><?php NomEmp();?></option>
                                     
                                  </select>  
                              </div>                             
                          </div>
                      </div>

                      <div class="col-md-6">
                          <div class="form-group">
                            <label class="input-control" for="US01">Nombres *</label>
                            <input type="tetx" name="US01" id="US01" required="" maxlength="50" class="form-control" title="Nombres del usuario" onkeypress="return Letras(event)" onkeyup="aMayusculas(this.value,this.id)">
                          </div>        
                      </div>

                      <div class="col-md-6">
                          <div class="form-group">
                            <label class="input-control" for="US02">Apellidos *</label>
                            <input type="tetx" name="US02" id="US02" required="" maxlength="50" class="form-control" title="Apellidos del usuario" onchange="aMayusculas(this.value,this.id)" onkeypress="return Letras(event)">
                          </div>        
                      </div>

                      <div class="col-md-6">
                          <div class="form-group">
                              <label class="input-control" for="US03">Tipo de identificaci√≥n *</label>
                              <select class="form-control" name="US03" id="US03" required="" title="Seleccione el tipo de documento de identificacion">
                                  <option value="">Seleccione una opcionn</option>
                                  <option value="Tarjeta de identidad">Tarjeta de identidad</option>
                                  <option value="Cedula de ciudadania">Cedula de ciudadania</option>
                                  <option value="Cedula de extranjeria">Cedula de extranjeria</option>
                                  <option value="Pasaporte">Tarjeta Pasaporte</option>
                              </select>           
                          </div>        
                      </div>

                      <div class="col-md-6">
                         <div class="form-group">
                             <label class="input-control" for="US04" id="FuenteTexto">Numero de identificacion *</label>
                             <input type="text" name="US04" id="US04" required="" maxlength="20" title="Digite su Numero de Identificacion segun corresponda con el documento de identidad seleccionado" class="form-control" onkeyup="PasarValor();" onkeypress="return NumDoc(event)">
                        </div>        
                      </div>

                      <div class="col-md-12">
                          <div class="form-group">
                            <label class="input-control" for="US05">Direcci√≥n *</label>
                            <input type="text" name="US05" id="US05" class="form-control" required="" maxlength="250" title="" onchange="aMayusculas(this.value,this.id)" onkeypress="return Letras(event)">
                          </div>        
                      </div>

                      <div class="col-md-12">
                          <div class="form-group">
                            <label class="input-control" for="US06">Correo *</label>
                            <input type="email" name="US06" id="US06" class="form-control" required="" maxlength="120" title="Digite la DirecciÛn de correo donde recibira las notificaciones" onkeypress="return Email(event)">
                          </div>        
                      </div>

                      <div class="col-md-6">
                          <div class="form-group">
                            <label class="input-control" for="US07">Telefono</label>
                            <input type="number" name="US07" id="US07" class="form-control" maxlength="20">
                          </div>        
                      </div>

                      <div class="col-md-6">
                          <div class="form-group">
                            <label class="input-control" for="US08">Celular *</label>
                            <input type="number" name="US08" id="US08" required="required" maxlength="20" class="form-control">
                          </div>        
                      </div>

                      <div class="col-md-6">
                          <div class="form-group">
                            <label class="input-control" for="US13">Contrase√±a *</label>
                            <input type="text" name="US13" id="US13" maxlength="20" required="" class="form-control" title="La contraseÒa podr· ser una combinaciÛn de caracteres especiales"  onkeypress="return NumDoc(event)">
                          </div>        
                      </div>

                      <div class="col-md-6">
                          <div class="form-group">
                              <label class="input-control" for="US09">Rol *</label>
                              <div class="input-group">
                              <div class="input-group-addon">
                              </div>
                                <select class="form-control" name="US09" id="US09" title="Rol y permisos asignados">
                                   <option value="<?php echo $RowUsu['1'];?>"><?php echo $RowUsu["1"];?></option>
                                   <option value="">Elija una opci√≥n </option>
                                   <?php require_once("../_clases/Configuracion.php");
                                         while ($RowRolUsu = mysql_fetch_array($QueryrolesUsu)) { ?>
                                   <option value="<?php echo $RowRolUsu[0]; ?>"><?php echo $RowRolUsu["1"]; ?></option>
                                   <?php } ?>                           
                                </select>  
                              </div>                             
                          </div>
                      </div>

                      <div class="col-md-12">
                          <div class="form-group">
                              <label class="input-control" for="US14">Estado * </label>
                              <div class="input-group">
                              <div class="input-group-addon">
                              </div>
                                  <select class="form-control" name="US14" id="US14" title="Seleccione el grado de escolaridad">
                                     <option value="<?php echo $RowUsu['11'];?>"><?php echo $RowUsu["11"];?></option>
                                     <option value="">Seleccione una opci√≥n </option>
                                     <option value="ACTIVO">Activo</option>
                                     <option value="INACTIVO">Inactivo</option>                            
                                  </select>  
                              </div>                             
                          </div>
                      </div>

                      <input type="hidden" name="Archivo" value="Usuarios">
                      <input type="hidden" name="Clase" value="Usuarios">
                      <input type="hidden" name="Funcion" value="InsertUsuario">
                  </div><br>

                  <div class="modal-footer">
        <button type="submit" name="Boton" value="Boton" id="Boton" class="btn btn-primary">Aceptar</button>
        <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
      </div>
          </form>
      </div>
    </div>
</div>
<!--Fin de la ventana modal para agregar usuarios-->
<?php
require_once '../Frame/Footer.htm';
?>

<script type="text/javascript">
  document.getElementById("file").onchange = function(e) {
  // Creamos el objeto de la clase FileReader
  let reader = new FileReader();

  // Leemos el archivo subido y se lo pasamos a nuestro fileReader
  reader.readAsDataURL(e.target.files[0]);

  // Le decimos que cuando este listo ejecute el cÛdigo interno
  reader.onload = function(){
    let preview = document.getElementById('preview'),
            image = document.createElement('img');

    image.src = reader.result;

    preview.innerHTML = '';
    preview.append(image);
  };
}
</script>