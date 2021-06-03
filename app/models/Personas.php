<?php

namespace App\Models;

use Core\Model;
use Core\Validators\RequiredValidator;
use Core\DB;
use Core\H;
class Personas extends Model
{

   public $IdPersonas,   $PerPriNom,   $PerSegNom,   $PerPriApe,   $PerSegApe,   $PerTipDoc,   $PerNumDoc,   $PerRazSoc,   $PerDirResPro,   $PerBarResPro,   $PerComResPro,   $PerMunResPro,   $PerDirPre,   $PerBarPre,   $PerComPre,   $PerMunPre,   $PerNumPre,   $PerMatInmPre,   $PerNumCel1,   $PerNumCel2,   $PerCorreo1,   $PerCorreo2,   $PerOrigenDb;

   protected static $_table = 'PersonasAct';

   const blackList = ['IdPersonas'];

   public function cargarBarrios()
   {
      $db = DB::getInstance();
      $sql = "SELECT * from barrios;";

      if ($db->query($sql)->count() > 0) {
         return $db->query($sql, [], 'App\Models\Personas')->results();
      } else
         return [];
   }

   public static function cargarDeptos()
   {
      $db = DB::getInstance();
      $sql = "SELECT DepartamentoId,DepNom from departamentos order by DepNom;";

      if ($db->query($sql)->count() > 0) {
         return $db->query($sql, [])->results();
      } else
         return [];
   }

   public static function cargarMuni($codigo_depto)
   {
      $db = DB::getInstance();
      $sql = "SELECT IdMunicipio,MunNom,MunCod,IdDepartamentos from municipios where IdDepartamentos={$codigo_depto} order by MunNom;";

      if ($db->query($sql)->count() > 0) {
         return $db->query($sql, [])->results();
      } else
         return [];
   }

   public static function buscarPredios($cedula)
   {
      $db = DB::getInstance2();
      $sql = "SELECT p.*, d.PreNum EcRef2, d.PreCod,  d.PreDir EcRef4, d.PreDir EcRef3, p.PrePrsDoc EcRef1 , d.PreMatInm, 'IMPUESTO PREDIAL UNIFICADO - IPU' EcDesTImp  
      FROM  [PREDIOS3] p,[PREDIOS] d
      WHERE p.PreNum = d.PreNum AND p.PrePrsdoc = '{$cedula}' and p.Muncod = 1 and p.prenum in
      (select prenum from [predios] where muncod = 1 and prepercan = 0 and (PreEstMun in (0, 3, 4, 5)))
      order by p.PreNum asc";
       if ($db->query($sql)->count() > 0) {
         return $db->query($sql, [])->results();
      }else{
         return false;
      }
   }

   public static function insertExperiencia($parametro1, $parametro2){
      $db = DB::getInstance();
      $Campos = "INSERT INTO experiencia(ValExp,SugExp,FecRegExp,HorRegExp) VALUES ('{$parametro1}',
               '{$parametro2}', convert(date, getdate()), convert(time, getdate()))";

      if ($db->query($Campos)->count() > 0) {
         return true;
      }else{
         return false;
      }


   }
   public static function insertContenido($parametro1, $parametro2){
      $db = DB::getInstance();
      $Campos = "INSERT INTO encuesta (VotoEncuesta,SugEnc,FecRegEnc,HorRegEnc) VALUES (
      '{$parametro1}','{$parametro2}', convert(date, getdate()), convert(time, getdate()))";

      if ($db->query($Campos)->count() > 0) {
         return true;
      }else{
         return false;
      }


   }
}
