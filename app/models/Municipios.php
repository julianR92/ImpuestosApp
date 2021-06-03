<?php

namespace App\Models;

use Core\Model;
use Core\Validators\RequiredValidator;
use Core\DB;

class Municipios extends Model
{

   public $IdPersonas,   $PerPriNom,   $PerSegNom,   $PerPriApe,   $PerSegApe,   $PerTipDoc,   $PerNumDoc,   $PerRazSoc,   $PerDirResPro,   $PerBarResPro,   $PerComResPro,   $PerMunResPro,   $PerDirPre,   $PerBarPre,   $PerComPre,   $PerMunPre,   $PerNumPre,   $PerMatInmPre,   $PerNumCel1,   $PerNumCel2,   $PerCorreo1,   $PerCorreo2,   $PerOrigenDb;

   protected static $_table = 'Municipios';

   const blackList = ['IdPersonas'];

   public function cargarBarrios()
   {
      $db = DB::getInstance();
      $sql = "select * from barrios;";

      if ($db->query($sql)->count() > 0) {
         return $db->query($sql, [], 'App\Models\Personas')->results();
      } else
         return [];
   }

}
