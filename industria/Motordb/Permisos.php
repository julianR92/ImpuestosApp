<?php
/*
Autor:
Software:
Versión: 1.0:
Tipo de proyecto:
Todos los derechos reservados 2020
Institución:
*/

#Funcion general que permite cargar datos de sesion

function permission (array $TipUser){

    if(!isset($_SESSION)){
        session_start();
    }
    $usuario=$_SESSION['user'];

    foreach($TipUser as $TipUser) {

        if ($TipUser == $usuario["UsuRol"]){

            return '';
        }
    }
    echo 'style="display:none"';
}

#Funciones para obtener datos de los usuarios del sistema
function User(){
    if(!isset($_SESSION)){
        session_start();
    }
    $User=$_SESSION['user'];
    return ($User["User"]);
}

function User2(){
    if(!isset($_SESSION)){
        session_start();
    }
    $User2=$_SESSION['user'];
    return print_r($User2["User"]);
}

function UsuNom(){
    if(!isset($_SESSION)){
        session_start();
    }
    $UsuNom = $_SESSION['user'];
    return print_r($UsuNom["UsuNom"]);
}

function UsuApe(){
    if(!isset($_SESSION)){
        session_start();
    }
    $UsuApe = $_SESSION['user'];
    return print_r($UsuApe["UsuApe"]);
}

function UsuNumDoc(){
    if(!isset($_SESSION)){
        session_start();
    }
    $UsuNumDoc = $_SESSION['user'];
    return print_r($UsuNumDoc["UsuNumDoc"]);
}

function UsuRol(){
    if(!isset($_SESSION)){
        session_start();
    }
    $UsuRol = $_SESSION['user'];
    return print_r($UsuRol["UsuRol"]);
}

function UsuRol2(){
    if(!isset($_SESSION)){
        session_start();
    }
    $UsuRol2 = $_SESSION['user'];
    return ($UsuRol2["UsuRol"]);
}

/*function NomEmp(){
    if(!isset($_SESSION)){
        session_start();
    }
    $UsuOficina = $_SESSION['user'];
    return print_r($UsuOficina["EmpRazSoc"]);
}*/

function IdEntidad(){
    if(!isset($_SESSION)){
        session_start();
    }
    $IdEntidad = $_SESSION['user'];
    return print_r($IdEntidad["IdEntidad"]);
}

/*function EmpNumDoc(){
    if(!isset($_SESSION)){
        session_start();
    }
    $EmpNumDoc = $_SESSION['user'];
    return print_r($EmpNumDoc["EmpNumDoc"]);
}*/

function UsuEmail(){
    if(!isset($_SESSION)){
        session_start();
    }
    $UsuEmail = $_SESSION['user'];
    return ($UsuEmail["UsuEmail"]);
}

/*function UsuRutImg(){
    if(!isset($_SESSION)){
        session_start();
    }
    $UsuRutImg = $_SESSION['user'];
    return print_r($UsuRutImg["UsuRutImg"]);
}*/
#Funciones para validar los permisos a los modulos
#Permisos para modulo Usuarios
function MOD1(){
    if(!isset($_SESSION)){
        session_start();
    }
    $MOD1 = $_SESSION['Permisos'];
    return ($MOD1["MOD1"]);
}
function MOD1I(){
    if(!isset($_SESSION)){
        session_start();
    }
    $MOD1I = $_SESSION['Permisos'];
    return ($MOD1I["MOD1I"]);
}
function MOD1U(){
    if(!isset($_SESSION)){
        session_start();
    }
    $MOD1U = $_SESSION['Permisos'];
    return ($MOD1U["MOD1U"]);
}
function MOD1D(){
    if(!isset($_SESSION)){
        session_start();
    }
    $MOD1D = $_SESSION['Permisos'];
    return ($MOD1D["MOD1D"]);
}
function MOD1S(){
    if(!isset($_SESSION)){
        session_start();
    }
    $MOD1D = $_SESSION['Permisos'];
    return ($MOD1D["MOD1S"]);
}
#Fin Modulo 1

#Permisos para modulo 2 Permisos
function MOD2(){
    if(!isset($_SESSION)){
        session_start();
    }
    $MOD2 = $_SESSION['Permisos'];
    return ($MOD2["MOD2"]);
}
function MOD2I(){
    if(!isset($_SESSION)){
        session_start();
    }
    $MOD2I = $_SESSION['Permisos'];
    return ($MOD2I["MOD2I"]);
}
function MOD2U(){
    if(!isset($_SESSION)){
        session_start();
    }
    $MOD2U = $_SESSION['Permisos'];
    return ($MOD2U["MOD2U"]);
}
function MOD2D(){
    if(!isset($_SESSION)){
        session_start();
    }
    $MOD2D = $_SESSION['Permisos'];
    return ($MOD2D["MOD2D"]);
}
#Fin Modulo 2 Permisos

#Permisos para modulo 3 Administracion
function MOD3(){
    if(!isset($_SESSION)){
        session_start();
    }
    $MOD3 = $_SESSION['Permisos'];
    return ($MOD3["MOD3"]);
}
function MOD3I(){
    if(!isset($_SESSION)){
        session_start();
    }
    $MOD3I = $_SESSION['Permisos'];
    return ($MOD3I["MOD3I"]);
}
function MOD3U(){
    if(!isset($_SESSION)){
        session_start();
    }
    $MOD3U = $_SESSION['Permisos'];
    return ($MOD3U["MOD3U"]);
}
function MOD3D(){
    if(!isset($_SESSION)){
        session_start();
    }
    $MOD3D = $_SESSION['Permisos'];
    return ($MOD3D["MOD3D"]);
}
#Fin de Modulo ADMINISTRACION

#Permisos para modulo 4 SEM
function MOD4(){
    if(!isset($_SESSION)){
        session_start();
    }
    $MOD4 = $_SESSION['Permisos'];
    return ($MOD4["MOD4"]);
}
function MOD4I(){
    if(!isset($_SESSION)){
        session_start();
    }
    $MOD4I = $_SESSION['Permisos'];
    return ($MOD4I["MOD4I"]);
}
function MOD4U(){
    if(!isset($_SESSION)){
        session_start();
    }
    $MOD4U = $_SESSION['Permisos'];
    return ($MOD4U["MOD4U"]);
}
function MOD4D(){
    if(!isset($_SESSION)){
        session_start();
    }
    $MOD4D = $_SESSION['Permisos'];
    return ($MOD4D["MOD4D"]);
}
#Fin de modulos 4 Modulos
/*
#Permisos para modulo 5 Docentes
function MOD5(){
    if(!isset($_SESSION)){
        session_start();
    }
    $MOD5 = $_SESSION['Permisos'];
    return ($MOD5["MOD5"]);
}
function MOD5I(){
    if(!isset($_SESSION)){
        session_start();
    }
    $MOD5I = $_SESSION['Permisos'];
    return ($MOD5I["MOD5I"]);
}
function MOD5U(){
    if(!isset($_SESSION)){
        session_start();
    }
    $MOD5U = $_SESSION['Permisos'];
    return ($MOD5U["MOD5U"]);
}
function MOD5D(){
    if(!isset($_SESSION)){
        session_start();
    }
    $MOD5D = $_SESSION['Permisos'];
    return ($MOD5D["MOD5D"]);
}
#Fin de Permisos para modulo 5 Docentes

#Permisos para modulo 6 Estudiantes
function MOD6(){
    if(!isset($_SESSION)){
        session_start();
    }
    $MOD6 = $_SESSION['Permisos'];
    return ($MOD6["MOD6"]);
}
function MOD6I(){
    if(!isset($_SESSION)){
        session_start();
    }
    $MOD6I = $_SESSION['Permisos'];
    return ($MOD6I["MOD6I"]);
}
function MOD6U(){
    if(!isset($_SESSION)){
        session_start();
    }
    $MOD6U = $_SESSION['Permisos'];
    return ($MOD6U["MOD6U"]);
}
function MOD6D(){
    if(!isset($_SESSION)){
        session_start();
    }
    $MOD6D = $_SESSION['Permisos'];
    return ($MOD6D["MOD6D"]);
}
#Fin de Permisos para modulo 6 Estudiantes

#Permisos para modulo 7 usuarios
function MOD7(){
    if(!isset($_SESSION)){
        session_start();
    }
    $MOD7 = $_SESSION['Permisos'];
    return ($MOD7["MOD7"]);
}
function MOD7I(){
    if(!isset($_SESSION)){
        session_start();
    }
    $MOD7I = $_SESSION['Permisos'];
    return ($MOD7I["MOD7I"]);
}
function MOD7U(){
    if(!isset($_SESSION)){
        session_start();
    }
    $MOD7U = $_SESSION['Permisos'];
    return ($MOD7U["MOD7U"]);
}
function MOD7D(){
    if(!isset($_SESSION)){
        session_start();
    }
    $MOD7D = $_SESSION['Permisos'];
    return ($MOD7D["MOD7D"]);
}
#Fin de Permisos para modulo 7 usuarios

#Permisos para modulo 8 Gestiones
function MOD8(){
    if(!isset($_SESSION)){
        session_start();
    }
    $MOD8 = $_SESSION['Permisos'];
    return ($MOD8["MOD8"]);
}
function MOD8A(){
    if(!isset($_SESSION)){
        session_start();
    }
    $MOD8A = $_SESSION['Permisos'];
    return ($MOD8A["MOD8A"]);
}
function MOD8B(){
    if(!isset($_SESSION)){
        session_start();
    }
    $MOD8B = $_SESSION['Permisos'];
    return ($MOD8B["MOD8B"]);
}
function MOD8C(){
    if(!isset($_SESSION)){
        session_start();
    }
    $MOD8C = $_SESSION['Permisos'];
    return ($MOD8C["MOD8C"]);
}
function MOD8D(){
    if(!isset($_SESSION)){
        session_start();
    }
    $MOD8D = $_SESSION['Permisos'];
    return ($MOD8D["MOD8D"]);
}
function MOD8E(){
    if(!isset($_SESSION)){
        session_start();
    }
    $MOD8E = $_SESSION['Permisos'];
    return ($MOD8E["MOD8E"]);
}
function MOD8F(){
    if(!isset($_SESSION)){
        session_start();
    }
    $MOD8F = $_SESSION['Permisos'];
    return ($MOD8F["MOD8F"]);
}
function MOD8G(){
    if(!isset($_SESSION)){
        session_start();
    }
    $MOD8G = $_SESSION['Permisos'];
    return ($MOD8G["MOD8G"]);
}
#Fin de los Permisos para modulo 8 Gestiones

#Permisos para modulo 9 Archivos
function MOD9(){
    if(!isset($_SESSION)){
        session_start();
    }
    $MOD9 = $_SESSION['Permisos'];
    return ($MOD9["MOD9"]);
}
function MOD9A(){
    if(!isset($_SESSION)){
        session_start();
    }
    $MOD9A = $_SESSION['Permisos'];
    return ($MOD9A["MOD9A"]);
}
#Fin de los Permisos para modulo 9 Archivos*/

function UltimaSession(){
 require_once("conexiondb.php");

    $User = User();
    $EstadoSession = "LOGIN";
    $stmt = Conexion::conexiondb()->prepare("SELECT S.IdSession,
                             S.User,
                             S.Password,
                             S.SesFecReg,
                             S.SesHorReg,
                             S.EstadoSession
                             FROM session as S
                                 WHERE User= :User
                                     and EstadoSession = :Estado
                                      ORDER BY IdSession DESC LIMIT 1,1");

   $stmt->bindParam(":User",$User,PDO::PARAM_STR);
   $stmt->bindParam(":Estado",$EstadoSession,PDO::PARAM_STR);
   $stmt->execute();

    $RowSes = $stmt->fetch();
    $stmt->closeCursor();

    echo 'Ultima sesion '.$RowSes["3"].'-'.$RowSes["4"];

}#Fin funcion ultima sesion


function Cierre(){

      if($_SESSION['user'] == null){

        session_unset();
        session_destroy();
        echo "<script>window.location.href='../index.htm';</script>";
             exit;
      }
}

function Inactividad(){

    if(isset($_SESSION['tiempo']) ) {

        $inactivo = 1200;//Tiempo en segundos
        $vida_session = time() - $_SESSION['tiempo'];

          if($vida_session > $inactivo){

            session_unset();
            session_destroy();
            //header("Location:");
            echo "<script>window.location.href='../index.htm';</script>";
                 exit;
          }

    }else{

          $_SESSION['tiempo'] = time();

         }
}
date_default_timezone_set('America/Bogota');
$SysFecReg  = date('Y-m-d');
$IntFegReg  = strtotime($SysFecReg);

$SysHorReg  = date('H:i:s');
$IntHorReg  = strtotime($SysHorReg);
?>
