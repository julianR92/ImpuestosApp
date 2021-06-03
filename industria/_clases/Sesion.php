<?php
/*
Autor:   Hugo Andres Pedroza Rodriguez
Software: 
Versi�n: 1.0:
Tipo de proyecto: 
Todos los derechos reservados 2020
Instituci�n:
*/
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
require_once('../Frame/library/PHPMailer/src/Exception.php');
require_once('../Frame/library/PHPMailer/src/PHPMailer.php');
require_once('../Frame/library/PHPMailer/src/SMTP.php');
require_once('../Motordb/conexiondb.php');
require_once('../_clases/Password.php');
require_once('../_clases/RestablecerPassword.php');

class Sesion{

  protected $User;
  protected $Password;
  protected $link;
  protected $Numdoc;

  public function __construct($Parametros){

    $this->User     = $Parametros["SP00"];
    $this->Password = $Parametros["SP01"];
    $this->Numdoc   = $Parametros["SP02"];
    $this->idUser   = $Parametros["SP03"];
    $this->Token    = $Parametros["SP04"];
  }

#Registro de la salida del sistema
  public function Logout(){

    $Paswd = "Logout no registra Password";
    $EstadoSession = "LOGOUT";
    $stmt = Conexion::conexiondb()->prepare("INSERT INTO session ( User,
                                                   Password,
                                                   SesFecReg,
                                                   SesHorReg,
                                                   EstadoSession) VALUES (:User,
                                                                          :Passwd,
                                                                          CURDATE(),
                                                                          CURTIME(),
                                                                          :EstadoSession
                                                                          )");
     $stmt->bindParam(":User",$this->User,PDO::PARAM_STR);
     $stmt->bindParam(":Passwd",$Paswd,PDO::PARAM_STR);
     $stmt->bindParam(":EstadoSession",$EstadoSession,PDO::PARAM_STR);
     $stmt->execute();

   if ($stmt->rowCount() > 0) {
    $stmt->closeCursor();
    session_start();
    session_unset();
    session_destroy();

    echo '<script>document.addEventListener("DOMContentLoaded", function(event){ swal({
      type: "success",
      title: "Ha cerrado sesion, hasta pronto",
      showConfirmButton: true,
      confirmButtonColor: "#004884",
      confirmButtonText: "Cerrar",
      timer: 5000,
      }).then(function(result){
        if (result.value) {
          top.window.location = "../index.php";
        }else{
           top.window.location = "../index.php";
        } }) })</script>';
      }
    }

#Funcion para el ingreso para los usuarios del sistema
    public function Login(){

            try{
            $stmt = Conexion::conexiondb()->prepare("SELECT U.IdUsuario,
                                                            U.EntidadId,
                                                            U.UsuNom,
                                                            U.UsuApe,
                                                            U.UsuTipDoc,
                                                            U.UsuNumDoc,
                                                            U.UsuDirRes,
                                                            U.UsuEmail,
                                                            U.UsuTelFij,
                                                            U.UsuTelMov,
                                                            U.UsuRol,
                                                            U.UsuFecReg,
                                                            U.UsuHorReg,
                                                            U.User,
                                                            U.Password,
                                                            U.UsuarioEstado,
                                                            E.IdEntidad,
                                                            E.EntNumDoc,
                                                            E.EntRazSoc,
                                                            E.EntTipDoc,
                                                            E.EntDir,
                                                            E.EntTelFij,
                                                            E.EntTelMov,
                                                            E.EntEmail,
                                                            E.EntidadEstado
                                                            FROM usuarios AS U
                                                                INNER JOIN entidades as E ON E.IdEntidad=U.EntidadId
                                                                WHERE U.User=:User");

            $stmt->bindParam(":User",$this->User,PDO::PARAM_STR);
            $stmt->execute();

            if($stmt->rowCount()>0){

               $row_login = $stmt->fetch();
               $stmt->closeCursor();

              if($row_login[15]=='ACTIVO'){

                 $pass_desc = Password::verify($this->Password,$row_login[14]);

                 if($pass_desc==true){

                    $PassHash = Password::hash($this->Password);

                    $stmt2 = Conexion::conexiondb()->prepare("INSERT INTO session(User,
                                                                                  Password,
                                                                                  SesFecReg,
                                                                                  SesHorReg,
                                                                                  EstadoSession)VALUES(:UserSession,
                                                                                                       :Password,
                                                                                                       CURDATE(),
                                                                                                       CURTIME(),
                                                                                                       'LOGIN')");
                    $stmt2->bindParam(":UserSession",$this->User,PDO::PARAM_STR);
                    $stmt2->bindParam(":Password",$PassHash,PDO::PARAM_STR);
                    $stmt2->execute();

                    if($stmt2->rowCount()>0){

                       $stmt2->closeCursor();
                       $stmt3= Conexion::conexiondb()->prepare("SELECT UM.IdRolUsuario,
                                                                       UM.UserModulos,
                                                                       UM.MOD1,
                                                                       UM.MOD1I,
                                                                       UM.MOD1U,
                                                                       UM.MOD1D,
                                                                       UM.MOD1S,
                                                                       UM.MOD2,
                                                                       UM.MOD2I,
                                                                       UM.MOD2U,
                                                                       UM.MOD2D,
                                                                       UM.MOD2S,
                                                                       UM.MOD3,
                                                                       UM.MOD3I,
                                                                       UM.MOD3U,
                                                                       UM.MOD3D,
                                                                       UM.MOD3S,
                                                                       UM.MOD4,
                                                                       UM.MOD4I,
                                                                       UM.MOD4U,
                                                                       UM.MOD4D,
                                                                       UM.MOD4S,
                                                                       UM.RolFecReg,
                                                                       UM.RolHorReg
                                                                       FROM _usuarios_modulos AS UM WHERE UM.UserModulos=:UserModules");

                      $stmt3->bindParam(":UserModules",$this->User,PDO::PARAM_STR);
                      $stmt3->execute();
                      $RowPermisos = $stmt3->fetch();

                      if($stmt3->rowCount()>0){
                         $stmt3->closeCursor();

                        #Inicia la sesion y caraga los permisos, roles y privilegios
                        session_start();
                        $_SESSION["user"] = $row_login;
                        $_SESSION["Permisos"] = $RowPermisos;
                        $_SESSION['SessionActive'] = 'currentUser';
                        require_once('../Forms/MenuPrincipal.php');

                      }else{

                        echo '<script>document.addEventListener("DOMContentLoaded", function(event){
                        swal({ type: "error",
                        title: "Error al cargar los permisos de usuario comunicate con el administrador",
                        showConfirmButton: true,
                        confirmButtonColor: "#004884",
                        confirmButtonText: "Aceptar",
                          }).then(function(result){
                            if (result.value) {
                              top.window.location = "../index";
                            } }) })</script>';
                          }

                        }else{

                          echo '<script>document.addEventListener("DOMContentLoaded", function(event){
                        swal({ type: "error",
                        title: "Error en la instrucci�n Insert Session, comun�cate con el administrador",
                        showConfirmButton: true,
                        confirmButtonColor: "#004884",
                        confirmButtonText: "Aceptar",
                          }).then(function(result){
                            if (result.value) {
                              top.window.location = "../index";
                            } }) })</script>';
                          }

                        }else{

                          echo '<script>document.addEventListener("DOMContentLoaded", function(event){
                        swal({ type: "error",
                        title: "Error al digitar tu contrase&ntilde;a, vuelve a intentarlo",
                        showConfirmButton: true,
                        confirmButtonColor: "#004884",
                        confirmButtonText: "Aceptar",
                          }).then(function(result){
                            if (result.value) {
                              top.window.location = "../index.php";
                            } }) })</script>';
                          }

                        }else{

                          echo '<script>document.addEventListener("DOMContentLoaded", function(event){
                        swal({ type: "error",
                        title: "Tu usuario no se encuentra activo, comunicate con el administrador",
                        showConfirmButton: true,
                        confirmButtonColor: "#004884",
                        confirmButtonText: "Aceptar",
                          }).then(function(result){
                            if (result.value) {
                              top.window.location = "../index";
                            } }) })</script>';

                          }

                        }else{

                          echo '<script>document.addEventListener("DOMContentLoaded", function(event){
                        swal({ type: "error",
                        title: "Error al digitar tu usuario",
                        showConfirmButton: true,
                        confirmButtonColor: "#004884",
                        confirmButtonText: "Aceptar"
                          }).then(function(result){
                            if (result.value) {
                              top.window.location = "../index";
                            } }) })</script>';

                          }

                        }catch (PDOException $e) {
                          echo $e->getMessage();
                          die();
                        }

      }#fin de la funcion LOGIN


      public function recoverPassword(){
       try{
        $stmt = Conexion::conexiondb()->prepare("SELECT U.IdUsuario,
                                                        U.EntidadId,
                                                        U.UsuNom,
                                                        U.UsuApe,
                                                        U.UsuTipDoc,
                                                        U.UsuNumDoc,
                                                        U.UsuDirRes,
                                                        U.UsuEmail,
                                                        U.UsuTelFij,
                                                        U.UsuTelMov,
                                                        U.UsuRol,
                                                        U.UsuFecReg,
                                                        U.UsuHorReg,
                                                        U.User,
                                                        U.Password,
                                                        U.UsuarioEstado,
                                                        U.UsuReqPass
                                                        FROM usuarios AS U
                                                          WHERE U.User = :User");

        $stmt->bindParam(":User",$this->User,PDO::PARAM_STR);
        $stmt->execute();

        if($stmt->rowCount()==1){
         $RowRecPasw = $stmt->fetch();


         if($RowRecPasw[5] == $this->Numdoc){

              if($RowRecPasw[16] != '1'){

           $token = RecuperarPassword::generateToken();
           $idUser = $RowRecPasw[0]; // USERID
           $emailuser = $this->User;
           $nomUser = $RowRecPasw[2]." ".$RowRecPasw[3];
           $reqPasswd = "1";
           $stmt->closeCursor();

           $stmt2 = Conexion::conexiondb()->prepare("UPDATE usuarios
                                                     SET UsuReqPass = :request,
                                                          UsuPasTok = :token
                                                          WHERE IdUsuario = :userId");


           $stmt2->bindParam(":request",$reqPasswd,PDO::PARAM_STR);
           $stmt2->bindParam(":token",$token,PDO::PARAM_STR);
           $stmt2->bindValue(":userId",$idUser,PDO::PARAM_INT);
           $stmt2->execute();

            if($stmt2->rowCount()==1){


              $ruta = "http://" . $_SERVER["SERVER_NAME"]."/sem_v1.0/Forms/formChangePasswd.php?user_id=".$idUser."&tokenPass=".$token;


              require_once('../Forms/plantillaCorreoPasswd.php'); // plantilla

                  $mail = new PHPMailer(true);
                  $mail->SMTPDebug = 0;                      // Enable verbose debug output
                  $mail->isSMTP();                                            // Send using SMTP
                  $mail->Host       = 'smtp.office365.com';
                  $mail->SMTPAuth   = true;                  // Enable SMTP authentication
                  $mail->Username   = 'no-responder3@bucaramanga.gov.co';  // SMTP username
                  $mail->Password   = '4IyKF4jEKo0vLU';                 // SMTP password
                  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  // Enable TLS encryption;
                  $mail->Port       = 587;                // TCP port to connect to
                  $mail->setFrom('no-responder3@bucaramanga.gov.co', 'Notificaciones SEM');
                  $mail->addAddress($emailuser, $nomUser);     // Add a recipient
                  $mail->isHTML(true);                                  // Set email format to HTML
                  $mail->Subject = 'Restablecimiento de contrase�a SEM';
                  $mail->Body    =  $correo;
                  $mail->CharSet = 'UTF-8';

                  if($mail->Send()) {

                     echo '<script>document.addEventListener("DOMContentLoaded", function(event){
                        swal({ type: "success",
                        title: "Se ha enviado un correo a '.$emailuser.' para restablecer tu contrase&ntilde;a, por favor revisa",
                        showConfirmButton: true,
                        confirmButtonColor: "#004884",
                        confirmButtonText: "Aceptar",
                          }).then(function(result){
                            if (result.value) {
                              top.window.location = "../index.php";
                            } }) })</script>';

                    }else{

                      echo '<script>document.addEventListener("DOMContentLoaded", function(event){
                        swal({ type: "error",
                        title: "ERROR:'.$mail->ErrorInfo.'no se ha enviado correo de recuperaci�n",
                        showConfirmButton: true,
                        confirmButtonColor: "#004884",
                        confirmButtonText: "Aceptar",
                          }).then(function(result){
                            if (result.value) {
                              top.window.location = "../index.php";
                            } }) })</script>';

                    }


            }else{

              echo '<script>document.addEventListener("DOMContentLoaded", function(event){
                        swal({ type: "warning",
                        title: "Ha ocurrido un problema al generar el Token de recuperaci�n",
                        showConfirmButton: true,
                        confirmButtonColor: "#004884",
                        confirmButtonText: "Aceptar",
                          }).then(function(result){
                            if (result.value) {
                              top.window.location = "../Forms/formRecoverPasswd.php";
                            } }) })</script>';



              }

              }else{

                echo '<script>document.addEventListener("DOMContentLoaded", function(event){
                        swal({ type: "info",
                        title: "Tienes un Token generado en menos de 24 horas por favor revisa tu correo",
                        showConfirmButton: true,
                        confirmButtonColor: "#004884",
                        confirmButtonText: "Aceptar",
                          }).then(function(result){
                            if (result.value) {
                              top.window.location = "../Forms/formRecoverPasswd.php";
                            } }) })</script>';

              }



         }else{

                echo '<script>document.addEventListener("DOMContentLoaded", function(event){
                        swal({ type: "error",
                        title: "El documento '.$this->Numdoc.' no registra en la base de datos",
                        showConfirmButton: true,
                        confirmButtonColor: "#004884",
                        confirmButtonText: "Aceptar",
                          }).then(function(result){
                            if (result.value) {
                              top.window.location = "../Forms/formRecoverPasswd.php";
                            } }) })</script>';

         }

        }else{

          echo '<script>document.addEventListener("DOMContentLoaded", function(event){
                        swal({ type: "error",
                        title: "El usuario '.$this->User.' no registra en la base de datos",
                        showConfirmButton: true,
                        confirmButtonColor: "#004884",
                        confirmButtonText: "Aceptar",
                          }).then(function(result){
                            if (result.value) {
                              top.window.location = "../Forms/formRecoverPasswd.php";
                            } }) })</script>';



        }
       }catch (PDOException $e) {

            echo $e->getMessage();
            die();


          }



      }#Fin de la funcion

   public function ChangePassword(){

    try{

      $stmt = Conexion::conexiondb()->prepare("UPDATE usuarios
                                                         SET UsuReqPass = null,
                                                          UsuPasTok = null,
                                                          Password = :hashPass
                                                          WHERE IdUsuario = :userId
                                                          AND UsuPasTok = :token ");

      $PassHash = Password::hash($this->Password);
      $stmt->bindParam(":hashPass",$PassHash,PDO::PARAM_STR);
      $stmt->bindParam(":token",$this->Token,PDO::PARAM_STR);
      $stmt->bindValue(":userId",$this->idUser,PDO::PARAM_INT);
      $stmt->execute();

      if($stmt->rowCount()==1){

        echo '<script>document.addEventListener("DOMContentLoaded", function(event){
                        swal({ type: "success",
                        title: "Contrase&ntilde;a actualizada correctamente",
                        showConfirmButton: true,
                        confirmButtonColor: "#004884",
                        confirmButtonText: "Aceptar",
                          }).then(function(result){
                            if (result.value) {
                              top.window.location = "../index.php";
                            } }) })</script>';


      }else{

         echo '<script>document.addEventListener("DOMContentLoaded", function(event){
                        swal({ type: "error",
                        title: " Ha ocurrido un error al actualizar tu Contrase&ntilde;a",
                        showConfirmButton: true,
                        confirmButtonColor: "#004884",
                        confirmButtonText: "Aceptar",
                          }).then(function(result){
                            if (result.value) {
                              top.window.location = "../index.php";
                            } }) })</script>';
      }
    }catch (PDOException $e) {

            echo $e->getMessage();
            die();

          }

     $stmt->closeCursor();



   }



}#Fin de la clase
?>
