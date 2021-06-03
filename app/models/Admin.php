<?php

namespace App\Models;

use Core\Model;
use Core\Validators\RequiredValidator;
use Core\DB;
use Core\H;

class Admin extends Model
{

   public $RetINit,   $RetIRazS,   $RetIDir,   $RetDirNot,   $RetITelPri,   $RetITelAge, $nit, $RetIMail,
      $razon_social, $direccion_pri, $ciudad_principal, $direccion_notificacion, $ciudad_notificacion, $email, $telefono_agente, $tipo_contribuyente, $nit_representante,
      $tipo_documento_representante, $nombre_representante, $telefono_representante, $RetITipDoc, $RetIPNom, $RetISNom, $RetIPApe, $RetISApe, $placa, $uReg, $tipo_persona, $tipo_agente, $periodo, $primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido, $nombre2_representante, $apellido_representante, $apellido2_representante, $DepNum, $estado_representante,$observacion_hacienda;

   protected static $_table = '[RETINDC]';

   const blackList = ['RetINit'];

   public static function consultaRetindc($nit)
   {

      $db = DB::getInstance2();
      $sql = "SELECT [RetINit]
            ,[RetIRazS]
            ,[RetIDir]
            ,[RetITip]
            ,[RetIEst]     
            ,[RetDirNot]
            ,[RetITelAge]
            ,[RetIUsr]
            ,[RetITer]
            ,[RetIHor]
            ,[RetIConPag]  
            ,[RetIDirCiu]
            ,(select CiudNom from CIUDADES where CiudCod=RetIDirCiu) as CiuNomPri
            ,[RetIDirNot]
            ,(select CiudNom from CIUDADES where CiudCod=RetIDirNot) as CiuNomNot
            ,[RetIMail]
            ,[RetISwiInd]
            ,[RetIFecGra]
            ,[RetITelPri]
            ,[RetIMailPr]
            ,[RetIFecActVal] 
                       
         from RETINDC         
         WHERE [RetINit]='{$nit}'";

      if ($db->query($sql)->count() > 0) {
         return $db->query($sql, [])->first();
      } else {

         return false;
      }
   }


   public static function updateContribuyente($model,$usuario)
   {

      if ($model->razon_social == '') {
         $model->razon_social = $model->primer_nombre . " " . $model->segundo_nombre . " " . $model->primer_apellido . " " . $model->segundo_apellido;
      }

      $db = DB::getInstance2();
      $sql = "BEGIN TRY
      BEGIN TRANSACTION
            
         UPDATE [RETINDC]
         SET
            [RetIRazS]='{$model->razon_social}'
            ,[RetIDir]='{$model->direccion_pri}'
            ,[RetITip]='{$model->tipo_contribuyente}'
            ,[RetDirNot]='{$model->direccion_notificacion}'
            ,[RetITelAge]='{$model->telefono_agente}'
            ,[RetIDirCiu]='{$model->ciudad_principal}'
            ,[RetIDirNot]='{$model->ciudad_notificacion}'
            ,[RetIMail]='{$model->email}'
            ,[RetITelPri]='{$model->telefono_agente}'
            ,[RetIMailPr]='{$model->email}'
            ,[RetITipDoc]='{$model->tipo_persona}'
         WHERE [RetINit]='{$model->nit}';

      INSERT INTO AUDITORIARICA(AudRicUser,AudRicNit,AudRicObservacion,AudRicFecha,AudRicObsHacienda)VALUES('{$usuario}','{$model->nit}','Actualización de datos del contribuyente en la tabla RETINDC',GETDATE(),'{$model->observacion_hacienda}');

         IF EXISTS  (SELECT [RetINit] FROM [RETIDEC] WHERE [RetINit] = '{$model->nit}' 
         AND [RetDecTip] = 0  AND [RetDecIndP] = 'N' AND [RetDecFecG] >= '2021-04-08')
         BEGIN

            UPDATE [RETIDEC]
             SET 
                 [RetDecCorN]  = '{$model->email}'     
                ,[RetDecCorP] =  '{$model->email}'
            WHERE [RetINit] = '{$model->nit}' 
            AND [RetDecTip] = 0  AND [RetDecIndP] = 'N' AND [RetDecFecG] >= '2021-04-08';
           
      INSERT INTO AUDITORIARICA(AudRicUser,AudRicNit,AudRicObservacion,AudRicFecha,AudRicObsHacienda)VALUES('{$usuario}','{$model->nit}','Actualización de datos del contribuyente en la tabla RETINDC Y RETIDEC',GETDATE(),'{$model->observacion_hacienda}');

         END
      
      SELECT 'OK' AS respuesta  

      COMMIT TRANSACTION
      END TRY
      BEGIN CATCH
         SELECT 'error' AS error
      ROLLBACK TRANSACTION
      END CATCH";
      //H::dnd($sql);
      if ($db->query($sql)->count() > 0) {
         return true;
      } else {
         return false;
      }
   }

   public static function consultaRepre($nit)
   {

      $db = DB::getInstance2();
      $sql = "SELECT [RetINit],[RetNitRepL],[RetINomRep],[RetITipIde],[RetIEstRep],[RetITelRep],[RetIPNomRep] ,[RetISNomRep] ,[RetIPApeRep] ,[RetISApeRep] FROM [RETINDCL] WHERE [RetINit] = '{$nit}' AND [RetIEstRep] = 0";

      if ($db->query($sql)->count() > 0) {
         return $db->query($sql, [])->first();
      } else {

         $sql2 = "SELECT [RetINit],[RetNitRepL],[RetINomRep],[RetITipIde],[RetIEstRep],[RetITelRep],[RetIPNomRep] ,[RetISNomRep] ,[RetIPApeRep] ,[RetISApeRep] FROM [RETINDCL] WHERE [RetINit] = '{$nit}'";

         if ($db->query($sql2)->count() > 0) {
            return $db->query($sql2, [])->first();
         } else {
            return false;
         }
      }
   }

   public static function updateRepresentante($model,$usuario)
   {

      if ($model->razon_social == '') {
         $model->razon_social = $model->nombre_representante . " " . $model->nombre2_representante . " " . $model->apellido_representante . " " . $model->apellido2_representante;
      }


      $db = DB::getInstance2();
      $sql = "BEGIN TRY
      BEGIN TRANSACTION
              
         IF EXISTS  (SELECT RetNitRepL from [RETINDCL] WHERE [RetINit]='{$model->nit}' and [RetNitRepL]='{$model->nit_representante}')
         BEGIN

            UPDATE [RETINDCL]
               SET
               [RetIEstRep] = 1                  
               WHERE [RetINit]='{$model->nit}';

            UPDATE [RETINDCL]
            SET
               [RetNitRepL]='{$model->nit_representante}'
               ,[RetINomRep]='{$model->razon_social}'
               ,[RetITipIde]= {$model->tipo_documento_representante}
               ,[RetIEstRep] = 0
               ,[RetITelRep]='{$model->telefono_representante}'
               ,[RetIPNomRep]='{$model->nombre_representante}'
               ,[RetISNomRep]='{$model->nombre2_representante}'
               ,[RetIPApeRep]='{$model->apellido_representante}'
               ,[RetISApeRep]='{$model->apellido2_representante}'
            WHERE [RetINit]='{$model->nit}' and [RetNitRepL]='{$model->nit_representante}';

      INSERT INTO AUDITORIARICA(AudRicUser,AudRicNit,AudRicObservacion,AudRicFecha,AudRicObsHacienda)VALUES('{$usuario}','{$model->nit}','Actualización de datos del representante en la tabla RETINDCL',GETDATE(), '{$model->observacion_hacienda}');

         END
         ELSE
         BEGIN
            IF EXISTS (SELECT RetNitRepL FROM [RETINDCL] WHERE [RetINit]='{$model->nit}')
            BEGIN
            
               UPDATE [RETINDCL]
               SET
               [RetIEstRep] = 1                  
               WHERE [RetINit]='{$model->nit}';

               INSERT INTO [RETINDCL] ([RetINit],[RetNitRepL],[RetINomRep],[RetITipIde] ,[RetIEstRep] ,[RetITelRep],[RetIPNomRep] ,[RetISNomRep] ,[RetIPApeRep] ,[RetISApeRep])
              VALUES('{$model->nit}','{$model->nit_representante}','{$model->razon_social}','{$model->tipo_documento_representante}',0,'{$model->telefono_representante}',
            '{$model->nombre_representante}' ,'{$model->nombre2_representante}' ,'{$model->apellido_representante}','{$model->apellido2_representante}');

      INSERT INTO AUDITORIARICA(AudRicUser,AudRicNit,AudRicObservacion,AudRicFecha, AudRicObsHacienda)VALUES('{$usuario}','{$model->nit}','Creación de datos del representante en la tabla RETINDCL',GETDATE(), '{$model->observacion_hacienda}');

               
              /*select 'continue';*/
            END
          
      END
      SELECT 'OK' AS respuesta 

      COMMIT TRANSACTION
      END TRY
      BEGIN CATCH
         SELECT 'error' AS error
      ROLLBACK TRANSACTION
      END CATCH";

      //H::dnd($sql);
      if ($db->query($sql)->count() > 0) {
         return true;
      } else {
         return false;
      }
   }

   public static function consultaTipoAge($nit)
   {

      $db = DB::getInstance2();

      $sql = "SELECT CaretTAuto from [CLAAGENRET] WHERE [CaretNit] = '{$nit}'";

      if ($db->query($sql)->count() > 0) {
         return $db->query($sql, [])->first();
      } else {
         return false;
      }
   }

   public static function updateTipoAgente($model,$usuario)
   {

      $db = DB::getInstance2();

      $sql = "UPDATE [dbo].[CLAAGENRET] SET [CaretTAuto] = '{$model->tipo_agente}' 
           WHERE [CaretNit] = '{$model->nit}';
      INSERT INTO AUDITORIARICA(AudRicUser,AudRicNit,AudRicObservacion,AudRicFecha,AudRicObsHacienda)VALUES('{$usuario}','{$model->nit}','Actualización del tipo de agente en la tabla CLAAGENRET',GETDATE(),'{$model->observacion_hacienda}');";


      if ($db->query($sql)->count() > 0) {
         return true;
      } else {
         return false;
      }
   }

   public static function consultaPeridocidad($nit)
   {

      $db = DB::getInstance2();
      $sql = "SELECT RperTPer from RETPERIODO where RperNit='{$nit}'";

      if ($db->query($sql)->count() > 0) {
         return $db->query($sql, [])->first();
      } else {
         return false;
      }
   }

   public static function updatePeriodo($model,$usuario)
   {

      $db = DB::getInstance2();
      $sql = "UPDATE [RETPERIODO] SET [RperTPer] = '{$model->periodo}'
       WHERE [RperNit] = '{$model->nit}';
      INSERT INTO AUDITORIARICA(AudRicUser,AudRicNit,AudRicObservacion,AudRicFecha,AudRicObsHacienda)VALUES('{$usuario}','{$model->nit}','Actualización del periodo en la tabla RETPERIODO',GETDATE(),'{$model->observacion_hacienda}');";

      if ($db->query($sql)->count() > 0) {
         return true;
      } else {
         return false;
      }
   }

   public static function consultaTraza($nit)
   {
     
     $db = DB::getInstance2();
     $sql = "SELECT [AudRicId]
                   ,[AudRicUser]
                   ,[AudRicNit]
                   ,[AudRicObservacion]
                   ,[AudRicFecha]
                   ,[AudRicObsHacienda]
                   FROM [AUDITORIARICA]
                    WHERE [AudRicNit] = '{$nit}'";

      if ($db->query($sql)->count() > 0) {
         return $db->query($sql, [])->results();
      } else {
         return false;
      }

   }


   public static function reiniciaIntentos($nit)
   {
     
     $db = DB::getInstance2();
     $sql = "UPDATE [dbo].[INTVAL]
               SET [IntValEst] = 0
               WHERE IntValNit= '{$nit}'";

      if ($db->query($sql)->count() > 0) {
         return true;
      } else {
         return false;
      }

   }
}
