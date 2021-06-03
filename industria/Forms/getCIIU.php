<?php

    if (isset($_POST["SectorId"])):
    	
    	require_once("../Motordb/conexiondb.php");
		$SectorId=$_POST["SectorId"];
		$stmt = Conexion::conexiondb()->prepare("SELECT C.IdCiiu,
			                                            C.Codigo,
			                                            C.CodDes
			                                            FROM `_codigos_ciiu` AS C
			                                            WHERE C.SectorId like '$SectorId'
			                                            ORDER BY C.IdCiiu ASC");
		$stmt->execute();   
		$html="";

		while ($RowCiiu=$stmt->fetch()): 

		       $html.='<option value='.$RowCiiu[Codigo].'>'.$RowCiiu[CodDes].'</option>';

		endwhile;

        echo $html;

    endif;

?>