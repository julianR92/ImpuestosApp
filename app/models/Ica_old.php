<?php

namespace App\Models;

use Core\Model;
use Core\Validators\RequiredValidator;
use Core\DB;

class Ica extends Model
{

   public $RetINit,   $RetIRazS,   $RetIDir,   $RetDirNot,   $RetITelPri,   $RetITelAge, $nit,
   $razon_social, $direccion_pri,$ciudad_principal,$direccion_notificacion,$email,$telefono_agente,
   $tipo_contribuyente,$nit_representante,$tipo_documento_representante,$nombre_representante,
   $telefono_representante;

   protected static $_table = '[IMPPRUEBAS].[dbo].[RETINDC]';

   const blackList = ['RetINit'];


   public function validator()
   {
      $this->runValidation(new RequiredValidator($this, ['field' => 'usuario', 'msg' => 'Usuario es requerido.']));
      $this->runValidation(new RequiredValidator($this, ['field' => 'password', 'msg' => 'Contraseña es requerido.']));
   }

   public static function validarNit($Nit)
   {
      $db = DB::getInstance2();
      $sql = "SELECT 
         [RetINit]
         ,[RetIRazS]
         ,ISNULL([RetIDir],[RetDirNot]) as Direccion
         ,ISNULL([RetITelPri],[RetITelAge]) AS Telefono
      FROM [131.110.1.21].[Impuestos].[dbo].[RETINDC]
      WHERE [RetINit]='{$Nit}'";

      if ($db->query($sql)->count() > 0) {
         return $db->query($sql, [])->first();
      } else
         return false;
   }

   public static function preguntas($Nit)
   {
      $db = DB::getInstance2();
      $sql = "SELECT * FROM(
         SELECT 
             [RetINit]
             ,[RetIRazS]
             ,ISNULL([RetIDir],[RetDirNot]) as Direccion
             ,ISNULL([RetITelPri],[RetITelAge]) AS Telefono
         FROM [131.110.1.21].Impuestos.dbo.[RETINDC]
         WHERE [RetINit]='{$Nit}'
         
         UNION ALL
         
         SELECT * FROM (
            SELECT TOP 3
               [RetINit]
               ,[RetIRazS]
               ,COALESCE(NULLIF([RetIDir],''),'ALCALDIA DE BUCARAMANGA') as Direccion
               ,COALESCE(NULLIF([RetITelPri],''),'ALCALDIA DE BUCARAMANGA') as Telefono
            FROM [131.110.1.21].Impuestos.dbo.[RETINDC]
            order by NEWID()
         ) AS tablaRandom
         ) as tabla order by NEWID();";

      if ($db->query($sql)->count() > 0) {
         return $db->query($sql, [])->results();
      } else
         return false;
   }

   public static function validarRespuestas($nit,$razon_social,$direccion,$telefono)
   {
      $db = DB::getInstance2();
      $sql = "SELECT RetINit
      FROM [131.110.1.21].[Impuestos].[dbo].[RETINDC]
      WHERE [RetINit]='{$nit}' and RetIRazS='{$razon_social}' and [RetIDir]='{$direccion}' and RetITelPri='{$telefono}';";

      if ($db->query($sql)->count() > 0) {
         return $db->query($sql, [])->first();
      } else
         return false;
   }


   public static function cargarCiudades(){

      $db = DB::getInstance2();
      $sql="SELECT CiudCod, CiudNom, CiudDpt, CiudCodDep 
      FROM [131.110.1.21].[Impuestos].[dbo].[CIUDADES]
      WHERE CiudCod !=0
       ORDER BY CiudNom ASC ";

      if ($db->query($sql)->count() > 0) {
         return $db->query($sql, [])->results();
      } else{
         return false;
      }

   }

   public static function validarDuplicado($nit){


      $db = DB::getInstance2();
      $sql = "SELECT 
         [RetINit]
         ,[RetIRazS]
         ,ISNULL([RetIDir],[RetDirNot]) as Direccion
         ,ISNULL([RetITelPri],[RetITelAge]) AS Telefono
      FROM [131.110.1.21].[Impuestos].[dbo].[RETINDC]
      WHERE [RetINit]='{$nit}'";

      if ($db->query($sql)->count() >= 1) {
         return true;
      } else{
         return false;
      }




   }


}
