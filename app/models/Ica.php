<?php

namespace App\Models;

use Core\Model;
use Core\Validators\RequiredValidator;
use Core\DB;
use Core\H;

class Ica extends Model
{

   public $RetINit,   $RetIRazS,   $RetIDir,   $RetDirNot,   $RetITelPri,   $RetITelAge, $nit, $RetIMail,
      $razon_social, $direccion_pri, $ciudad_principal, $direccion_notificacion, $ciudad_notificacion, $email, $telefono_agente, $tipo_contribuyente, $nit_representante,
      $tipo_documento_representante, $nombre_representante, $telefono_representante, $RetITipDoc, $RetIPNom, $RetISNom, $RetIPApe, $RetISApe, $placa, $uReg, $tipo_persona, $tipo_agente, $periodo, $primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido, $nombre2_representante, $apellido_representante, $apellido2_representante, $DepNum;

   protected static $_table = '[RETINDC]';

   const blackList = ['RetINit'];


   public function validator()
   {
      $this->runValidation(new RequiredValidator($this, ['field' => 'nit', 'msg' => 'Nit es requerido.']));
      if ($this->tipo_persona == 'J') {

         $this->runValidation(new RequiredValidator($this, ['field' => 'tipo_documento_representante', 'msg' => 'Tipo de documento es requerido.']));
         $this->runValidation(new RequiredValidator($this, ['field' => 'nit_representante', 'msg' => 'NIT Representante Legal es requerido.']));
         $this->runValidation(new RequiredValidator($this, ['field' => 'nombre_representante', 'msg' => 'Nombre de representante legal es requerido.']));
         $this->runValidation(new RequiredValidator($this, ['field' => 'telefono_representante', 'msg' => 'Telefono del representante legal es requerido']));
         $this->runValidation(new RequiredValidator($this, ['field' => 'apellido_representante', 'msg' => 'Primer apellido del representante legal es requerido']));
         $this->runValidation(new RequiredValidator($this, ['field' => 'razon_social', 'msg' => 'Razon Social es requerido.']));
      }

      $this->runValidation(new RequiredValidator($this, ['field' => 'direccion_pri', 'msg' => 'Direccion sede principal es requerido.']));
      $this->runValidation(new RequiredValidator($this, ['field' => 'ciudad_principal', 'msg' => 'Ciudad sede principal es requerido.']));
      $this->runValidation(new RequiredValidator($this, ['field' => 'direccion_notificacion', 'msg' => 'Dirección de Notificacion es requerido.']));
      $this->runValidation(new RequiredValidator($this, ['field' => 'ciudad_notificacion', 'msg' => 'Ciudad de notificacion es requerido.']));
      $this->runValidation(new RequiredValidator($this, ['field' => 'email', 'msg' => 'Email es requerido.']));
      $this->runValidation(new RequiredValidator($this, ['field' => 'telefono_agente', 'msg' => 'Teléfono es requerido.']));
      $this->runValidation(new RequiredValidator($this, ['field' => 'tipo_contribuyente', 'msg' => 'Seleccionar Tipo de contribuyente es requerido.']));
      $this->runValidation(new RequiredValidator($this, ['field' => 'tipo_persona', 'msg' => 'Seleccionar Tipo de persona es requerido.']));
      $this->runValidation(new RequiredValidator($this, ['field' => 'tipo_agente', 'msg' => 'Seleccionar Tipo de agente es requerido.']));
      $this->runValidation(new RequiredValidator($this, ['field' => 'periodo', 'msg' => 'Seleccionar Periodo es requerido.']));
      if ($this->tipo_persona == 'N') {
         $this->runValidation(new RequiredValidator($this, ['field' => 'primer_nombre', 'msg' => 'Primer nombre es requerido.']));
         $this->runValidation(new RequiredValidator($this, ['field' => 'primer_apellido', 'msg' => 'Primer apellido es requerido.']));
      }
   }


   public static function validarNit($Nit)
   {
      $db = DB::getInstance2();
      $sql = "SELECT 
         [RetINit]
         ,[RetIRazS]
         ,ISNULL([RetIDir],[RetDirNot]) as Direccion
         ,ISNULL([RetITelPri],[RetITelAge]) AS Telefono
      FROM [RETINDC]
      WHERE [RetINit]='{$Nit}'";

      if ($db->query($sql)->count() > 0) {
         return $db->query($sql, [])->first();
      } else
         return false;
   }

   public static function validarActualizar($Nit)
   {
      $db = DB::getInstance2();
      $sql = "SELECT RetIFecActVal as Fecha
         FROM [RETINDC]
         WHERE [RetINit]='{$Nit}'";
      $resultado = $db->query($sql)->first();
      if ($db->query($sql)->count() > 0) {
         return $db->query($sql, [])->first();
      } else
         return false;
   }

   public static function consultarRetinDc($Nit)
   {
      $db = DB::getInstance2();
      $sql = "SELECT RETINDC.[RetINit]
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
            ,(select CiudNom from CIUDADES where CiudCod=RETINDC.RetIDirCiu) as CiuNomPri
            ,[RetIDirNot]
            ,(select CiudNom from CIUDADES where CiudCod=RETINDC.RetIDirNot) as CiuNomNot
            ,[RetIMail]
            ,[RetISwiInd]
            ,[RetIFecGra]
            ,[RetITelPri]
            ,[RetIMailPr]
            ,[RetIFecActVal] 
            ,[RetITipDoc]
            ,[RetNitRepL]
            ,[RetINomRep]
            ,[RetITipIde]
            ,[RetIEstRep]
            ,[RetITelRep]
            
         from RETINDC
         left join RETINDCL on RETINDC.[RetINit]=RETINDCL.[RetINit]
         WHERE RETINDC.[RetINit]='{$Nit}' and RETINDCL.[RetIEstRep]=0";
      // and RETINDCL.RetIEstRep=0 H::dnd($db->query($sql, [])->first());
      if ($db->query($sql)->count() > 0) {
         return $db->query($sql, [])->first();
      } else {

         $sql2 = "SELECT RETINDC.[RetINit]
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
            ,(select CiudNom from CIUDADES where CiudCod=RETINDC.RetIDirCiu) as CiuNomPri
            ,[RetIDirNot]
            ,(select CiudNom from CIUDADES where CiudCod=RETINDC.RetIDirNot) as CiuNomNot
            ,[RetIMail]
            ,[RetISwiInd]
            ,[RetIFecGra]
            ,[RetITelPri]
            ,[RetIMailPr]
            ,[RetIFecActVal] 
            ,[RetITipDoc]
            ,[RetNitRepL]
            ,[RetINomRep]
            ,[RetITipIde]
            ,[RetIEstRep]
            ,[RetITelRep]            
         from RETINDC
         left join RETINDCL on RETINDC.[RetINit]=RETINDCL.[RetINit]
         WHERE RETINDC.[RetINit]='{$Nit}'";

         if ($db->query($sql2)->count() > 0) {

            return $db->query($sql2, [])->first();
         } else {
            return false;
         }
      }
   }

   public static function validarIca($Nit)
   {
      $db = DB::getInstance2();
      $sql = "SELECT top(1) d.DepVig, m.MaeProCod, a.DecMaeNum, a.BasGraNro, a.DecValBas, 
      (a.DecValBas / f.ValUniTri) ValidacionTrimestre, d.DepNum
      FROM MAEIC m 
      inner join DECLARC d ON d.DepMatNum = m.MaeNum AND m.MaeEstAct < 3 
      AND m.MaeSwiPri = 1 AND d.DepPre = 'S' and d.DepFecP > '01/01/1900'
      INNER JOIN ACTDCL5 a ON a.DecMaeNum = d.DepMatNum AND a.DecVig = d.DepVig AND a.BasGraNro = 8,
      FECHAS f
      WHERE m.maeprocod = '{$Nit}' AND f.FecVig = DATEPART(YEAR, GETDATE()) AND a.DecVig = 2019
      ORDER BY  a.DecVig DESC";
      $sql1 = "SELECT [MaeNum],[ProTipCod] FROM [MAEIC] WHERE [MaeProCod] = '{$Nit}'";

      $resultado1 = $db->query($sql, [])->first();
      $resultado2 = $db->query($sql1, [])->first();

      /*
      if ($db->query($sql)->count() > 0 || $db->query($sql1)->count() > 0) {
         return $db->query($sql, [])->first();
      } else
         return false;
         */

      return [$resultado1, $resultado2];
   }

   public static function consultarUVT($Nit)
   {
      $db = DB::getInstance2();
      $sql = "SELECT top(1)   d.DepVig, m.MaeProCod, a.DecMaeNum, a.BasGraNro, a.DecValBas, 
            (a.DecValBas / f.ValUniTri) ValidacionTrimestre
            FROM MAEIC m 
            inner join DECLARC d ON d.DepMatNum = m.MaeNum AND m.MaeEstAct < 3 
            AND m.MaeSwiPri = 1 AND d.DepPre = 'S' and d.DepFecP > '01/01/1900'
            INNER JOIN ACTDCL5 a ON a.DecMaeNum = d.DepMatNum AND a.DecVig = d.DepVig AND a.BasGraNro = 8,
            FECHAS f
            WHERE m.maeprocod = '{$Nit}' AND f.FecVig = DATEPART(YEAR, GETDATE())
            order by a.DecVig desc";

      if ($db->query($sql)->count() > 0) {
         return $db->query($sql, [])->first();
      } else
         return false;
   }

   public static function validarIntentos($Nit)
   {
      $db = DB::getInstance2();
      $sql = "SELECT 
      ISNULL(IntValEst,0)as IntValEst
      FROM [INTVAL]
      WHERE [IntValNit]='{$Nit}'";

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
         FROM [RETINDC]
         WHERE [RetINit]='{$Nit}'
         
         UNION ALL
         
         SELECT * FROM (
            SELECT TOP 3
               [RetINit]
               ,[RetIRazS]
               ,COALESCE(NULLIF([RetIDir],''),'ALCALDIA DE BUCARAMANGA') as Direccion
               ,COALESCE(NULLIF([RetITelPri],''),'ALCALDIA DE BUCARAMANGA') as Telefono
            FROM [RETINDC]
            order by NEWID()
         ) AS tablaRandom
         ) as tabla order by NEWID();";

      if ($db->query($sql)->count() > 0) {
         return $db->query($sql, [])->results();
      } else
         return false;
   }

   public static function validarRespuestas($nit, $razon_social, $direccion, $telefono)
   {
      $db = DB::getInstance();
      $sql = "SELECT top 1 RetINit
      FROM [RETINDC]
      WHERE replace([RetINit], ' ', '') like '{$nit}%' and RetIRazS like '%{$razon_social}%' and [RetIDir] like '%{$direccion}%' and RetITelPri like '%{$telefono}%';";
     // var_dump($sql);
       //$x = $db->query($sql)->first();
       //H::dnd($x);
      if ($db->query($sql)->count() > 0) {
         return $db->query($sql, [])->first();
      } else
         return false;
   }

   public static function respuestaMal($nit)
   {
      $db = DB::getInstance2();
      $ip = '';
      if (!empty($_SERVER['HTTP_CLIENT_IP']))
         $ip = $_SERVER['HTTP_CLIENT_IP'];

      if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
         $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];

      if ($ip == '')
         $ip = $_SERVER['REMOTE_ADDR'];

      $sql = "IF EXISTS (SELECT [IntValEst] FROM [INTVAL] WHERE IntValNit='{$nit}')
         BEGIN
            UPDATE [INTVAL] SET IntValEst = IntValEst+1 WHERE IntValNit='{$nit}'
         END
         ELSE
         BEGIN
            INSERT INTO [INTVAL] (IntValNit,IntValEst,IntValCapIp,IntValFecInt)VALUES('{$nit}',1,'{$ip}',getdate())
         END;";
      if ($db->query($sql)->count() > 0) {
         $sql2 = "SELECT [IntValEst] FROM [INTVAL] WHERE IntValNit='{$nit}';";
         $resultado = $db->query($sql2)->first()->IntValEst;
         return $resultado;
      }
   }

   public static function cargarCiudades()
   {

      $db = DB::getInstance2();
      $sql = "SELECT CiudCod, CiudNom, CiudDpt, CiudCodDep 
      FROM [CIUDADES]
      WHERE CiudCod !=0
       ORDER BY CiudNom ASC ";

      if ($db->query($sql)->count() > 0) {
         return $db->query($sql, [])->results();
      } else {
         return false;
      }
   }

   public static function validarDuplicado($nit)
   {
      $db = DB::getInstance2();
      $sql = "SELECT 
         [RetINit]
         ,[RetIRazS]
         ,ISNULL([RetIDir],[RetDirNot]) as Direccion
         ,ISNULL([RetITelPri],[RetITelAge]) AS Telefono
      FROM [RETINDC]
      WHERE [RetINit]='{$nit}'";

      if ($db->query($sql)->count() >= 1) {
         return true;
      } else {
         return false;
      }
   }

   public static function validaExisteIca($nit)
   {

      $db = DB::getInstance2();
      $sql = "SELECT [MaeNum]
      ,[MaeProCod]
      ,[ProTipCod]
      ,[MaeProNom]
      ,[MaeDir]      
       FROM [MAEIC] WHERE [MaeProCod] LIKE '%{$nit}' ";

      if ($db->query($sql)->count() > 0) {
         return true;
      } else {
         return false;
      }
   }

   public static function datosRepre($nit)
   {
      $db = DB::getInstance2();
      $sql = "SELECT [RetINit],[RetNitRepL],[RetINomRep],[RetITipIde],[RetIEstRep],[RetITelRep],[RetIPNomRep] ,[RetISNomRep] ,[RetIPApeRep] ,[RetISApeRep] FROM [RETINDCL] WHERE [RetINit] like '%{$nit}' AND [RetIEstRep] = 0;";
      return $db->query($sql)->first();
   }

   public static function insertAgente($model, $swiche)
   {
      $estado = 0;
      $usuario = "WEB";
      $conpag = 0;
      $claraAgente = 0;

      if ($model->razon_social == '') {
         $model->razon_social = $model->primer_nombre . " " . $model->segundo_nombre . " " . $model->primer_apellido . " " . $model->segundo_apellido;
      }

      $nombre_repre = $model->nombre_representante . " " . $model->nombre2_representante . " " . $model->apellido_representante . " " . $model->apellido2_representante;


      $db = DB::getInstance2();
      $sql = "BEGIN TRY
      BEGIN TRANSACTION
         IF '{$model->tipo_persona}'='J'
         BEGIN
            INSERT INTO [RETINDC]
               ([RetINit]
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
               ,[RetIDirNot]
               ,[RetIMail]
               ,[RetISwiInd]
               ,[RetIFecGra]
               ,[RetITelPri]
               ,[RetIMailPr]
               ,[RetIFecActVal]
               ,[RetITipDoc]
               ,[RetIPNom]
               ,[RetISNom]
               ,[RetIPApe]
               ,[RetSApe]
               ,[RetIFecEsc])
            VALUES
               ('{$model->nit}'
               ,'{$model->razon_social}'
               ,'{$model->direccion_pri}'
               ,'{$model->tipo_contribuyente}'
               ,'{$estado}'   
               ,'{$model->direccion_notificacion}'
               ,'{$model->telefono_agente}'
               ,'{$usuario}'
               ,'{$usuario}'
               , convert(time, getdate())        
               ,'{$conpag}'        
               ,'{$model->ciudad_principal}'
               ,'{$model->ciudad_notificacion}'
               ,'{$model->email}'
               ,'{$swiche}'
               , convert(date, getdate())
               , '{$model->telefono_agente}'
               , '{$model->email}'
               , convert(date, getdate())
               , '{$model->tipo_persona}'
               , '{$model->primer_nombre}'
               , '{$model->segundo_nombre}'
               , '{$model->primer_apellido}'
               , '{$model->segundo_apellido}'
               ,CONVERT(DATE,GETDATE()))
   
            INSERT INTO [RETINDCL]
              ([RetINit]
              ,[RetNitRepL]
              ,[RetINomRep]
              ,[RetITipIde]
              ,[RetIEstRep]
              ,[RetITelRep]
              ,[RetIPNomRep]
              ,[RetISNomRep]
              ,[RetIPApeRep]
              ,[RetISApeRep])
            VALUES
              ( '{$model->nit}'
               ,'{$model->nit_representante}'
               ,'{$nombre_repre}'
               ,'{$model->tipo_documento_representante}'
               ,'{$estado}'
               ,'{$model->telefono_representante}'
               ,'{$model->nombre_representante}'
               ,'{$model->nombre2_representante}'
               ,'{$model->apellido_representante}'
               ,'{$model->apellido2_representante}');
   
             INSERT INTO [dbo].[CLAAGENRET]
              ([CaretPlaca]
              ,[CaretNit]
              ,[CaretVig]
              ,[CaretTAuto]
              ,[CaretFReg]
              ,[CaretFPDec]
              ,[CaretIngDec]
              ,[CaretUReg]
              ,[CaretTDec]
              ,[CaretUVT]
              ,[CaretDecNro]
              ,[CaretEst]
              ,[CaretFFin])
            VALUES
              ('{$model->placa}'
              ,'{$model->nit}'
              ,'{$claraAgente}'
              ,'{$model->tipo_agente}'
              ,convert(date, getdate())
              ,convert(date, getdate())
              ,'{$claraAgente}'
              ,'{$model->uReg}'
              ,'{$claraAgente}'
              ,'{$claraAgente}'
              ,'{$claraAgente}'
              ,'{$claraAgente}'
              ,convert(date, getdate()));
            
            INSERT INTO [dbo].[RETPERIODO]
              ([RperVig]
              ,[RperTPer]
              ,[RperNit]
              ,[RperFReg]
              ,[RPerUReg]
              ,[RPerEst]
              ,[RPerClaPor]
              ,[RPerVigDec]
              ,[RPerDecNum])
            VALUES(
              '{$claraAgente}'
             ,'{$model->periodo}'
             ,'{$model->nit}'
             ,convert(date, getdate())
             ,'{$usuario}'
             ,'{$estado}'
             ,'{$model->uReg}'
             , 2019
             ,'{$model->DepNum}');
         END
         ELSE
         BEGIN
            INSERT INTO [RETINDC]
               ([RetINit]
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
               ,[RetIDirNot]
               ,[RetIMail]
               ,[RetISwiInd]
               ,[RetIFecGra]
               ,[RetITelPri]
               ,[RetIMailPr]
               ,[RetIFecActVal]
               ,[RetITipDoc]
               ,[RetIPNom]
               ,[RetISNom]
               ,[RetIPApe]
               ,[RetSApe]
               ,[RetIFecEsc])
            VALUES
               ('{$model->nit}'
               ,'{$model->razon_social}'
               ,'{$model->direccion_pri}'
               ,'{$model->tipo_contribuyente}'
               ,'{$estado}'   
               ,'{$model->direccion_notificacion}'
               ,'{$model->telefono_agente}'
               ,'{$usuario}'
               ,'{$usuario}'
               , convert(time, getdate())        
               ,'{$conpag}'        
               ,'{$model->ciudad_principal}'
               ,'{$model->ciudad_notificacion}'
               ,'{$model->email}'
               ,'{$swiche}'
               , convert(date, getdate())
               , '{$model->telefono_agente}'
               , '{$model->email}'
               , convert(date, getdate())
               , '{$model->tipo_persona}'
               , '{$model->primer_nombre}'
               , '{$model->segundo_nombre}'
               , '{$model->primer_apellido}'
               , '{$model->segundo_apellido}'
            ,convert(date,GETDATE()));
   
            INSERT INTO [dbo].[CLAAGENRET]
              ([CaretPlaca]
              ,[CaretNit]
              ,[CaretVig]
              ,[CaretTAuto]
              ,[CaretFReg]
              ,[CaretFPDec]
              ,[CaretIngDec]
              ,[CaretUReg]
              ,[CaretTDec]
              ,[CaretUVT]
              ,[CaretDecNro]
              ,[CaretEst]
              ,[CaretFFin])
            VALUES
              ('{$model->placa}'
              ,'{$model->nit}'
              ,'{$claraAgente}'
              ,'{$model->tipo_agente}'
              ,convert(date, getdate())
              ,convert(date, getdate())
              ,'{$claraAgente}'
              ,'{$model->uReg}'
              ,'{$claraAgente}'
              ,'{$claraAgente}'
              ,'{$claraAgente}'
              ,'{$claraAgente}'
              , convert(date, getdate()));

            INSERT INTO [dbo].[RETPERIODO]
              ([RperVig]
              ,[RperTPer]
              ,[RperNit]
              ,[RperFReg]
              ,[RPerUReg]
              ,[RPerEst]
              ,[RPerClaPor]
              ,[RPerVigDec]
              ,[RPerDecNum])
            VALUES(
              '{$claraAgente}'
             ,'{$model->periodo}'
             ,'{$model->nit}'
             ,convert(date, getdate())
             ,'{$usuario}'
             ,'{$estado}'
             ,'{$model->uReg}'
             , 2019
             ,'{$model->DepNum}');
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

   public static function updateAgente($model)
   {
      $estado = 1;
      $usuario = "WEB";
      $conpag = 0;
      $claraAgente = 0;

      if ($model->razon_social == '') {
         $model->razon_social = $model->primer_nombre . " " . $model->segundo_nombre . " " . $model->primer_apellido . " " . $model->segundo_apellido;
      }

      $nombre_repre = $model->nombre_representante . " " . $model->nombre2_representante . " " . $model->apellido_representante . " " . $model->apellido2_representante;

      $db = DB::getInstance2();
      $sql = "BEGIN TRY
      BEGIN TRANSACTION
      IF '{$model->tipo_persona}'='J'
      BEGIN
      
         UPDATE [RETINDC]
         SET
            [RetIRazS]='{$model->razon_social}'
            ,[RetIDir]='{$model->direccion_pri}'
            ,[RetITip]='{$model->tipo_contribuyente}'
            ,[RetDirNot]='{$model->direccion_notificacion}'
            ,[RetITelAge]='{$model->telefono_agente}'
            ,[RetIUsr]='{$usuario}'
            ,[RetIConPag]=0
            ,[RetIDirCiu]='{$model->ciudad_principal}'
            ,[RetIDirNot]='{$model->ciudad_notificacion}'
            ,[RetIMail]='{$model->email}'
            ,[RetITelPri]='{$model->telefono_agente}'
            ,[RetIMailPr]='{$model->email}'
            ,[RetIFecActVal]=GETDATE()
            ,[RetITipDoc]='{$model->tipo_persona}'
            ,[RetIPNom]='{$model->nombre_representante}'
            ,[RetISNom]='{$model->nombre2_representante}'
            ,[RetIPApe]='{$model->apellido_representante}'
			   ,[RetSApe]='{$model->apellido2_representante}'
            ,[RetIFecEsc]=CONVERT(DATE,GETDATE())
         WHERE [RetINit]='{$model->nit}';

         IF EXISTS  (SELECT RetNitRepL from [RETINDCL] WHERE [RetINit]='{$model->nit}' and [RetNitRepL]='{$model->nit_representante}')
         BEGIN

            UPDATE [RETINDCL]
               SET
               [RetIEstRep] = 1                  
               WHERE [RetINit]='{$model->nit}';

            UPDATE [RETINDCL]
            SET
               [RetNitRepL]='{$model->nit_representante}'
               ,[RetINomRep]='{$nombre_repre}'
               ,[RetITipIde]='{$model->tipo_documento_representante}'
               ,[RetIEstRep] = 0
               ,[RetITelRep]='{$model->telefono_representante}'
               ,[RetIPNomRep]='{$model->nombre_representante}'
               ,[RetISNomRep]='{$model->nombre2_representante}'
               ,[RetIPApeRep]='{$model->apellido_representante}'
               ,[RetISApeRep]='{$model->apellido2_representante}'
            WHERE [RetINit]='{$model->nit}' and [RetNitRepL]='{$model->nit_representante}';
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
              VALUES('{$model->nit}','{$model->nit_representante}','{$nombre_repre}','{$model->tipo_documento_representante}',0,'{$model->telefono_representante}',
            '{$model->nombre_representante}' ,'{$model->nombre2_representante}' ,'{$model->apellido_representante}','{$model->apellido2_representante}');


               
              /*select 'continue';*/
            END
            ELSE
            BEGIN
            INSERT INTO [RETINDCL] ([RetINit],[RetNitRepL],[RetINomRep],[RetITipIde] ,[RetIEstRep] ,[RetITelRep],[RetIPNomRep] ,[RetISNomRep] ,[RetIPApeRep] ,[RetISApeRep])
            VALUES('{$model->nit}','{$model->nit_representante}','{$nombre_repre}','{$model->tipo_documento_representante}',0,'{$model->telefono_representante}',
            '{$model->nombre_representante}' ,'{$model->nombre2_representante}' ,'{$model->apellido_representante}','{$model->apellido2_representante}');
            END
         END

         IF EXISTS  (SELECT CaretPlaca from [CLAAGENRET] WHERE [CaretNit]='{$model->nit}')
         BEGIN
            UPDATE [dbo].[CLAAGENRET]
            SET [CaretPlaca]='{$model->placa}'
               ,[CaretNit]='{$model->nit}'
               ,[CaretVig]='{$claraAgente}'
               ,[CaretTAuto]='{$model->tipo_agente}'
               ,[CaretFReg]=convert(date, getdate())
               ,[CaretFPDec]=convert(date, getdate())
               ,[CaretIngDec]='{$claraAgente}'
               ,[CaretUReg]='{$model->uReg}'
               ,[CaretTDec]='{$claraAgente}'
               ,[CaretUVT]='{$claraAgente}'
               ,[CaretDecNro]='{$claraAgente}'
               ,[CaretEst]='{$claraAgente}'
               ,[CaretFFin]=convert(date, getdate())
            WHERE [CaretNit]='{$model->nit}';
         END
         ELSE
         BEGIN
            INSERT INTO [dbo].[CLAAGENRET]
               ([CaretPlaca]
               ,[CaretNit]
               ,[CaretVig]
               ,[CaretTAuto]
               ,[CaretFReg]
               ,[CaretFPDec]
               ,[CaretIngDec]
               ,[CaretUReg]
               ,[CaretTDec]
               ,[CaretUVT]
               ,[CaretDecNro]
               ,[CaretEst]
               ,[CaretFFin])
            VALUES
               ('{$model->placa}'
               ,'{$model->nit}'
               ,'{$claraAgente}'
               ,'{$model->tipo_agente}'
               ,convert(date, getdate())
               ,convert(date, getdate())
               ,'{$claraAgente}'
               ,'{$model->uReg}'
               ,'{$claraAgente}'
               ,'{$claraAgente}'
               ,'{$claraAgente}'
               ,'{$claraAgente}'
               ,convert(date, getdate()));
         END

         IF EXISTS  (SELECT RperNit from [RETPERIODO] WHERE [RperNit]='{$model->nit}')
         BEGIN
            UPDATE [RETPERIODO] SET 
            [RperVig]='{$claraAgente}'
            ,[RperTPer]='{$model->periodo}'
            ,[RperNit]='{$model->nit}'
            ,[RperFReg]=convert(date, getdate())
            ,[RPerUReg]='{$usuario}'
            ,[RPerEst]='{$estado}'
            ,[RPerClaPor]='{$model->uReg}'
            ,[RPerVigDec]= 2019
            ,[RPerDecNum]='{$model->DepNum}'
            WHERE [RperNit]='{$model->nit}';
         END
         ELSE
         BEGIN
            INSERT INTO [dbo].[RETPERIODO]
               ([RperVig]
               ,[RperTPer]
               ,[RperNit]
               ,[RperFReg]
               ,[RPerUReg]
               ,[RPerEst]
               ,[RPerClaPor]
               ,[RPerVigDec]
               ,[RPerDecNum])
            VALUES(
               '{$claraAgente}'
               ,'{$model->periodo}'
               ,'{$model->nit}'
               ,convert(date, getdate())
               ,'{$usuario}'
               ,'{$estado}'
               ,'{$model->uReg}'
               , 2019
               ,'{$model->DepNum}');
         END
      END
      ELSE
      BEGIN
         UPDATE [RETINDC]
         SET
            [RetIRazS]='{$model->razon_social}'
            ,[RetIDir]='{$model->direccion_pri}'
            ,[RetITip]='{$model->tipo_contribuyente}'
            ,[RetDirNot]='{$model->direccion_notificacion}'
            ,[RetITelAge]='{$model->telefono_agente}'
            ,[RetIUsr]='{$usuario}'
            ,[RetIConPag]=0
            ,[RetIDirCiu]='{$model->ciudad_principal}'
            ,[RetIDirNot]='{$model->ciudad_notificacion}'
            ,[RetIMail]='{$model->email}'
            ,[RetITelPri]='{$model->telefono_agente}'
            ,[RetIMailPr]='{$model->email}'
            ,[RetIFecActVal]=GETDATE()
            ,[RetITipDoc]='{$model->tipo_persona}'
            ,[RetIPNom]='{$model->primer_nombre}'
            ,[RetISNom]='{$model->segundo_nombre}'
            ,[RetIPApe]='{$model->primer_apellido}'
			   ,[RetSApe]='{$model->segundo_apellido}'
            ,[RetIFecEsc]=CONVERT(DATE,GETDATE())
         WHERE [RetINit]='{$model->nit}';

         IF EXISTS  (SELECT CaretPlaca from [CLAAGENRET] WHERE [CaretNit]='{$model->nit}')
         BEGIN
            UPDATE [dbo].[CLAAGENRET]
            SET [CaretPlaca]='{$model->placa}'
               ,[CaretNit]='{$model->nit}'
               ,[CaretVig]='{$claraAgente}'
               ,[CaretTAuto]='{$model->tipo_agente}'
               ,[CaretFReg]=convert(date, getdate())
               ,[CaretFPDec]=convert(date, getdate())
               ,[CaretIngDec]='{$claraAgente}'
               ,[CaretUReg]='{$model->uReg}'
               ,[CaretTDec]='{$claraAgente}'
               ,[CaretUVT]='{$claraAgente}'
               ,[CaretDecNro]='{$claraAgente}'
               ,[CaretEst]='{$claraAgente}'
               ,[CaretFFin]=convert(date, getdate())
            WHERE [CaretNit]='{$model->nit}';
         END
         ELSE
         BEGIN
            INSERT INTO [dbo].[CLAAGENRET]
               ([CaretPlaca]
               ,[CaretNit]
               ,[CaretVig]
               ,[CaretTAuto]
               ,[CaretFReg]
               ,[CaretFPDec]
               ,[CaretIngDec]
               ,[CaretUReg]
               ,[CaretTDec]
               ,[CaretUVT]
               ,[CaretDecNro]
               ,[CaretEst]
               ,[CaretFFin])
            VALUES
               ('{$model->placa}'
               ,'{$model->nit}'
               ,'{$claraAgente}'
               ,'{$model->tipo_agente}'
               ,convert(date, getdate())
               ,convert(date, getdate())
               ,'{$claraAgente}'
               ,'{$model->uReg}'
               ,'{$claraAgente}'
               ,'{$claraAgente}'
               ,'{$claraAgente}'
               ,'{$claraAgente}'
               ,convert(date, getdate()));
         END

         IF EXISTS  (SELECT RperNit from [RETPERIODO] WHERE [RperNit]='{$model->nit}')
         BEGIN
            UPDATE [RETPERIODO] SET 
            [RperVig]='{$claraAgente}'
            ,[RperTPer]='{$model->periodo}'
            ,[RperNit]='{$model->nit}'
            ,[RperFReg]=convert(date, getdate())
            ,[RPerUReg]='{$usuario}'
            ,[RPerEst]='{$estado}'
            ,[RPerClaPor]='{$model->uReg}'
            ,[RPerVigDec]= 2019
            ,[RPerDecNum]='{$model->DepNum}'
            WHERE [RperNit]='{$model->nit}';
         END
         ELSE
         BEGIN
            INSERT INTO [dbo].[RETPERIODO]
               ([RperVig]
               ,[RperTPer]
               ,[RperNit]
               ,[RperFReg]
               ,[RPerUReg]
               ,[RPerEst]
               ,[RPerClaPor]
               ,[RPerVigDec]
               ,[RPerDecNum])
            VALUES(
               '{$claraAgente}'
               ,'{$model->periodo}'
               ,'{$model->nit}'
               ,convert(date, getdate())
               ,'{$usuario}'
               ,'{$estado}'
               ,'{$model->uReg}'
               , 2019
               ,'{$model->DepNum}');
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

   public static function consultarClaAgent($nit)
   {
      $db = DB::getInstance2();
      $sql = "SELECT CaretTAuto from [CLAAGENRET] WHERE [CaretNit] like '{$nit}'";

      if ($db->query($sql)->count() > 0) {
         return $db->query($sql, [])->first();
      } else
         return false;
   }

   public static function consultarPeriocidad($nit)
   {
      $db = DB::getInstance2();
      $sql = "SELECT RperTPer from RETPERIODO where RperNit='{$nit}'";

      if ($db->query($sql)->count() > 0) {
         return $db->query($sql, [])->first();
      } else
         return false;
   }

   public static function consultarDeclarC($nit, $vigencia, $mes)
   {
      $db = DB::getInstance2();
      $sql = "SELECT count(RetINit) as existe from RETIDEC where RetINit='{$nit}' and RetDecVig={$vigencia} and RetIDecSub={$mes} and RetDecIndP='S'";
      $resultado = $db->query($sql, [])->first();
      $ult_digito = substr($nit, -1);

      if ($resultado->existe == 0) {
         $sql = "SELECT convert(date,FecRetNit{$ult_digito})as fecha from FECRETE where FecRetVig={$vigencia} and FecRetMes={$mes}";

         return $db->query($sql, [])->first();
      } else {
         return false;
      }
   }

   public static function guardarDeclaracion(
      $acc,
      $RetINit,
      $RetDecVig,
      $RetIDecSub,
      $RetDecTip,
      $RetDecNro,
      $RetTipPer,
      $RetDecFecP,
      $RetDecNroC,
      $RetDecRepL,
      $RetDecDirN,
      $RetDecTotV,
      $RetDecEst,
      $RetDecUsr,
      $RetDecTer,
      $RetDecHor,
      $RetDecNomC,
      $RetDecFecI,
      $RetDecIndP,
      $RetDEcIndC,
      $RetDecCalA,
      $RetDecDocR,
      $RetDecNomR,
      $RetDecTelR,
      $RetDecCiuN,
      $RetDecTelN,
      $RetDecCorN,
      $RetDecDirP,
      $RetDecTelP,
      $RetDecCorP,
      $RetDecCiuP,
      $RetDecFecG,
      $RetDecSwiE,
      $RetDecId,
      $RetBienIca,
      $RetBienAvT,
      $RetBienBom,
      $RetSerIca,
      $RetSerAvT,
      $RetSerBom,
      $RetOtrIca,
      $RetOtrAvT,
      $RetOtrBom,
      $AutRBienIca,
      $AutRBienAvT,
      $AutRBienBom,
      $AutRSerIca,
      $AutRSerAvT,
      $AutRSerBom,
      $AutROtrIca,
      $AutROtrAvT,
      $AutROtrBom,
      $PracRBienIca,
      $PracRBienAvT,
      $PracRBienBom,
      $PracRSerIca,
      $PracRSerAvT,
      $PracRSerBom,
      $PracROtrIca,
      $PracROtrAvT,
      $PracROtrBom,
      $ValSancion
   ) {

      $db = DB::getInstance2();
      $sql = "SET NOCOUNT ON exec [Pa_RegDecReteica] {$acc}, '{$RetINit}', {$RetDecVig}, {$RetIDecSub}, {$RetDecTip}, {$RetDecNro}, '{$RetTipPer}', '{$RetDecFecP}', {$RetDecNroC}, '{$RetDecRepL}', '{$RetDecDirN}', {$RetDecTotV}, {$RetDecEst},
      '{$RetDecUsr}','{$RetDecTer}','{$RetDecHor}','{$RetDecNomC}','{$RetDecFecI}','{$RetDecIndP}','{$RetDEcIndC}',{$RetDecCalA},{$RetDecDocR},'{$RetDecNomR}','{$RetDecTelR}',{$RetDecCiuN},'{$RetDecTelN}','{$RetDecCorN}','{$RetDecDirP}',
      '{$RetDecTelP}','{$RetDecCorP}',{$RetDecCiuP},'{$RetDecFecG}',{$RetDecSwiE},'{$RetDecId}',{$RetBienIca},{$RetBienAvT},{$RetBienBom},{$RetSerIca},{$RetSerAvT},{$RetSerBom},{$RetOtrIca},{$RetOtrAvT},{$RetOtrBom},{$AutRBienIca},
      {$AutRBienAvT},{$AutRBienBom},{$AutRSerIca},{$AutRSerAvT},{$AutRSerBom},{$AutROtrIca},{$AutROtrAvT},{$AutROtrBom},{$PracRBienIca},{$PracRBienAvT},{$PracRBienBom},{$PracRSerIca},{$PracRSerAvT},{$PracRSerBom},{$PracROtrIca},{$PracROtrAvT},{$PracROtrBom},{$ValSancion}";
      $resultado = $db->query($sql)->results()[0];
      //H::dnd($sql);
      if ($resultado->CodMensaje == 0)
         return $resultado->RetDecId;
      else
         return false;
   }

   public static function buscarDeclaracion(
      $acc,
      $RetINit,
      $RetDecVig,
      $RetIDecSub,
      $RetDecTip,
      $RetDecNro,
      $RetTipPer,
      $RetDecFecP,
      $RetDecNroC,
      $RetDecRepL,
      $RetDecDirN,
      $RetDecTotV,
      $RetDecEst,
      $RetDecUsr,
      $RetDecTer,
      $RetDecHor,
      $RetDecNomC,
      $RetDecFecI,
      $RetDecIndP,
      $RetDEcIndC,
      $RetDecCalA,
      $RetDecDocR,
      $RetDecNomR,
      $RetDecTelR,
      $RetDecCiuN,
      $RetDecTelN,
      $RetDecCorN,
      $RetDecDirP,
      $RetDecTelP,
      $RetDecCorP,
      $RetDecCiuP,
      $RetDecFecG,
      $RetDecSwiE,
      $RetDecId,
      $RetBienIca,
      $RetBienAvT,
      $RetBienBom,
      $RetSerIca,
      $RetSerAvT,
      $RetSerBom,
      $RetOtrIca,
      $RetOtrAvT,
      $RetOtrBom,
      $AutRBienIca,
      $AutRBienAvT,
      $AutRBienBom,
      $AutRSerIca,
      $AutRSerAvT,
      $AutRSerBom,
      $AutROtrIca,
      $AutROtrAvT,
      $AutROtrBom,
      $PracRBienIca,
      $PracRBienAvT,
      $PracRBienBom,
      $PracRSerIca,
      $PracRSerAvT,
      $PracRSerBom,
      $PracROtrIca,
      $PracROtrAvT,
      $PracROtrBom,
      $ValSancion
   ) {

      $db = DB::getInstance2();
      $sql = " exec [Pa_RegDecReteica] {$acc}, '{$RetINit}', {$RetDecVig}, {$RetIDecSub}, {$RetDecTip}, {$RetDecNro}, '{$RetTipPer}', '{$RetDecFecP}', {$RetDecNroC}, '{$RetDecRepL}', '{$RetDecDirN}', {$RetDecTotV}, {$RetDecEst},
      '{$RetDecUsr}','{$RetDecTer}','{$RetDecHor}','{$RetDecNomC}','{$RetDecFecI}','{$RetDecIndP}','{$RetDEcIndC}',{$RetDecCalA},{$RetDecDocR},'{$RetDecNomR}','{$RetDecTelR}',{$RetDecCiuN},'{$RetDecTelN}','{$RetDecCorN}','{$RetDecDirP}',
      '{$RetDecTelP}','{$RetDecCorP}',{$RetDecCiuP},'{$RetDecFecG}',{$RetDecSwiE},'{$RetDecId}',{$RetBienIca},{$RetBienAvT},{$RetBienBom},{$RetSerIca},{$RetSerAvT},{$RetSerBom},{$RetOtrIca},{$RetOtrAvT},{$RetOtrBom},{$AutRBienIca},
      {$AutRBienAvT},{$AutRBienBom},{$AutRSerIca},{$AutRSerAvT},{$AutRSerBom},{$AutROtrIca},{$AutROtrAvT},{$AutROtrBom},{$PracRBienIca},{$PracRBienAvT},{$PracRBienBom},{$PracRSerIca},{$PracRSerAvT},{$PracRSerBom},{$PracROtrIca},{$PracROtrAvT},{$PracROtrBom},{$ValSancion}";
      //H::dnd($sql);
      $resultado = $db->query($sql)->results();

      if ($resultado)
         return $resultado;
      else
         return false;
   }

   public static function calcularSancion($total, $vigencia, $mes)
   {
      $db = DB::getInstance2();
      $sql = "declare	@lRetDecTotV money,@lRetDecVig int,@lRetIDecSub int
      set @lRetDecTotV = {$total}
      set @lRetDecVig = {$vigencia}
      set @lRetIDecSub = {$mes}
      DECLARE @lUVTvalorYear decimal(18,0), @l_SanMinVT decimal(18,0) , @l_ValSanCalculo decimal(18,0)
      declare @lValSancion decimal(18,0), @l_MesDec varchar(2)
      
      SET @lUVTvalorYear = (SELECT f.ValUniTri FROM FECHAS f WHERE f.FecVig = DATEPART(YEAR, GETDATE()))
      --VALOR SANCION MINIMA APROXIMADA A MIL, QUE EQUIVALE A 5 UVT DE LA VIGENCIA ACTUAL
      SET @l_SanMinVT = ROUND((@lUVTvalorYear * 5), -3) 
      
      IF @lRetIDecSub > 12 --VALIDAR SI ES UN TRIMESTRE
         BEGIN
            IF @lRetIDecSub = 13 BEGIN SET @l_MesDec = '03' END --PRIMER TRIMESTRE
            IF @lRetIDecSub = 14 BEGIN SET @l_MesDec = '06' END --SEGUNDO TRIMESTRE
            IF @lRetIDecSub = 15 BEGIN SET @l_MesDec = '09' END --TERCER TRIMESTRE
            IF @lRetIDecSub = 16 BEGIN SET @l_MesDec = '12' END --CUARTO TRIMESTRE
         END
      ELSE 
         BEGIN
            IF @lRetIDecSub < 10 BEGIN SET @l_MesDec = @lRetIDecSub END
            ELSE
               BEGIN SET @l_MesDec = '0' + @lRetIDecSub END
         END

      --CANTIDAD DE MESES ATRASADOS
      DECLARE @l_FecIni datetime,  @l_FecFin datetime, @l_MesSan int, @l_DiaSan int
      SET @l_FecIni = '01/' + @l_MesDec +'/' + convert(varchar(4), @lRetDecVig)
      SET @l_FecFin = (convert(date, getdate()))
      SET @l_MesSan = (DATEDIFF(MONTH, @l_FecIni, @l_FecFin))
      SET @l_DiaSan = (DATEPART(DAY, convert(date, GETDATE())))

      
      --CALCULAR LA SANCION
      SET @l_ValSanCalculo = ROUND(((@l_MesSan * (@lRetDecTotV * 0.10)) + ( @l_DiaSan * ( (@lRetDecTotV * 0.10)/30) ) ), -3)
      
      --VALIDAR SI EL CALCULO DE SANCION ES MAYOR AL CALCULO DE LA SANCIÓN MINIMA
      
      IF @l_ValSanCalculo > @l_SanMinVT
         BEGIN SET @lValSancion = @l_ValSanCalculo END
      ELSE 
         BEGIN SET @lValSancion = @l_SanMinVT END

         select @lValSancion as sancion";
      $resultado = $db->query($sql)->results()[0];
      return $resultado;
   }

   public static function yaTieneDecla($vigencia, $mes, $nit)
   {
      $db = DB::getInstance2();

      $sql = "SELECT top(1) r.RetDecNro as existe FROM RETIDEC r 
         INNER JOIN RETIDECL d ON d.RetDecVig =  r.RetDecVig AND d.RetIDecSub = r.RetIDecSub AND r.RetINit = '{$nit}'
         AND d.RetDecNro = r.RetDecNro
         WHERE r.RetDecVig =  {$vigencia} AND r.RetIDecSub = {$mes}  and RetDecIndP='N' and r.RetDecEst = 0 order by r.retdecnro desc";

      if ($db->query($sql)->count() == 0)
         return false;

      $resultado = $db->query($sql)->results()[0];
      return $resultado->existe;
   }

   public static function deleteDeclaracion($vigencia, $nit, $mes)
   {

      $db = DB::getInstance2();
      $sql = "UPDATE [dbo].[RETIDEC]
      SET [RetDecEst] = 1    
      WHERE [RetINit] = '{$nit}' and [RetDecVig] = '{$vigencia}' and [RetIDecSub] = '{$mes}'";

      if ($db->query($sql)->count() > 0) {
         return true;
      } else {
         return false;
      }
   }

   public static function validarAgente($nit)
   {
      $db = DB::getInstance2();
      $sql = "SELECT [CaretTAuto]     
         FROM [CLAAGENRET]
         WHERE [CaretNit] = '{$nit}'";

      if ($db->query($sql)->count() > 0) {
         return $db->query($sql, [])->first();
      } else {
         return false;
      }
   }
}
