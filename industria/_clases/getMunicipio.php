<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("../Motor/conexiondb.php");

  if($_POST["DepartamentoId"]== true){

		$Parametro=$_POST["DepartamentoId"];
		$SqlMunicipio = 'SELECT M.IdMunicipio, M.MunNom FROM municipios AS M WHERE M.IdDepartamento ='.$Parametro.'';
		$QueryMunicipio = mysql_query($SqlMunicipio);   
		$html="";

		while ($RowMun = mysql_fetch_array($QueryMunicipio)) { 

		       $html.='<option value='.$RowMun[0].'>'.$RowMun[1].'</option>';
		}
    }

     echo $html;

?>