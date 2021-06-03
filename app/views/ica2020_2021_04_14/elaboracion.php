<?php $this->start('body'); ?>
<style type="text/css">
   .aling {
      text-align: center !important;
      padding: 0rem !important;
      overflow: hidden;
   }

   .text-vertical {
      writing-mode: vertical-rl;
      transform: scale(-1);
   }

   .entrada {
      border: none !important;
      border-bottom: 1px solid #5B5857 !important;
   }

   .table td,
   .table th {
      padding: .35rem .35rem .35rem .35rem !important;
   }

   .form-group {
      margin-bottom: 0.1rem !important;
   }

   table {
      table-layout: fixed;
      width: 100%;
   }

   input[type=number]::-webkit-outer-spin-button,
   input[type=number]::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
   }

   input[type=number] {
      -moz-appearance: textfield;
   }

   .totales {
      font-weight: bold;
      font-size: 1.1rem;
   }
</style>
<div class="body">
   <section class="container pt-5">
      <div class="row" style="padding-top: 6%;">
         <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="container-fluid">
               <img src="<?= PROOT ?>img/logo.png" class="img-fluid float-left mt-2" width="80px" height="60px">

            </div>
         </div>
      </div>
   </section>

   <div class="container pt-2">
      <form action="" method="POST" id="frm">
         <div class="row">
            <div style="padding-left:30px;" class="col-md-12">
               <nav aria-label="Miga de pan" style="max-height: 20px;">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item">
                        <a style="color: #004fbf;" class="breadcrumb-text" href="https://www.bucaramanga.gov.co/">Inicio</a>
                     </li>
                     <li class="breadcrumb-item">
                        <div class="image-icon">
                           <span class="breadcrumb govco-icon govco-icon-shortr-arrow"></span>
                           <a style="color: #004fbf;" class="breadcrumb-text" href="#">Tramites y servicios</a>
                        </div>
                     </li>
                     <li class="breadcrumb-item">
                        <div class="image-icon">
                           <span class="breadcrumb govco-icon govco-icon-shortr-arrow"></span>
                           <a style="color: #004fbf;" class="breadcrumb-text" href="#">Declaración de Retención de Industria y Comercio</a>
                        </div>
                     </li>
                  </ol>
               </nav>
            </div>
            <div class="col-md-12 pt-4">
               <h1 class="headline-xl-govco">Declaración de Retención de Industria y Comercio</h1>
               <div class="row pt-5">
                  <div class="col-md-12 justify-content-center">
                     <table class="table table-bordered" width="100%" cellpadding="0">
                        <thead>
                           <tr>
                              <th colspan="16" rowspan="3">
                                 <img src="<?= PROOT ?>img/logo2.png" class="img-fluid float-left mt-2" width="80px" height="60px">
                                 <h5 style="color:#000;" class="text-center pt-5">RETENCIÓN Y AUTORETENCION EN LA FUENTE INDUSTRIA Y COMERCIO</h5>
                              </th>

                           </tr>
                        </thead>
                        <tbody>
                           <input type="hidden" value="<?= $this->presentacion ?>" readOnly name="presentacion" id="presentacion" class="form-control">
                           <input type="hidden" value="<?= $this->datos->RetIDirCiu ?>" readOnly name="RetIDirCiu" id="RetIDirCiu" class="form-control">
                           <input type="hidden" value="<?= $this->datos->RetIDirNot ?>" readOnly name="RetIDirNot" id="RetIDirNot" class="form-control">
                           <input type="hidden" value="<?= $this->datos->RetIMail ?>" readOnly name="RetIMail" id="RetIMail" class="form-control">


                           <!-- por meses -->
                           <tr>
                              <td colspan="4" rowspan="3" style="vertical-align: middle;">
                                 <label for="añoIca">Año a declarar</label>
                                 <input type="text" value="<?= $this->año ?>" readOnly name="añoIca" id="añoIca" class="form-control">
                              </td>
                              <td colspan="1" rowspan="1" class="aling">ENE</td>
                              <td colspan="1" rowspan="1" class="aling">FEB</td>
                              <td colspan="1" rowspan="1" class="aling">MAR</td>
                              <td colspan="1" rowspan="1" class="aling">ABR</td>
                              <td colspan="1" rowspan="1" class="aling">MAY</td>
                              <td colspan="1" rowspan="1" class="aling">JUN</td>
                              <td colspan="1" rowspan="1" class="aling">JUL</td>
                              <td colspan="1" rowspan="1" class="aling">AGO</td>
                              <td colspan="1" rowspan="1" class="aling">SEP</td>
                              <td colspan="1" rowspan="1" class="aling">OCT</td>
                              <td colspan="1" rowspan="1" class="aling">NOV</td>
                              <td colspan="1" rowspan="1" class="aling">DIC</td>
                           </tr>
                           <tr>
                              <td rowspan="1" class="aling" colspan="1" style="width: 35px!important;">
                                 <div class="form-check form-check-inline text-center">
                                    <input class="form-check-input pl-2 group_check1" id="chkg1" name="meses" type="checkbox" value="1"><br>
                                    <label class="form-check-label" for="chkg1">1</label>
                                 </div>
                              </td>
                              <td rowspan="1" class="aling" colspan="1" style="width: 35px!important;">
                                 <div class="form-check form-check-inline text-center">
                                    <input class="form-check-input group_check1" id="chkg2" name="meses" type="checkbox" value="2"><br>
                                    <label class="form-check-label" for="chkg2">2</label>
                                 </div>
                              </td>
                              <td rowspan="1" class="aling" colspan="1" style="width: 35px!important;">
                                 <div class="form-check form-check-inline text-center">
                                    <input class="form-check-input group_check1" id="chkg3" name="meses" type="checkbox" value="3"><br>
                                    <label class="form-check-label" for="chkg3">3</label>
                                 </div>
                              </td>
                              <td rowspan="1" class="aling" colspan="1" style="width: 35px!important;">
                                 <div class="form-check form-check-inline text-center">
                                    <input class="form-check-input group_check1" id="chkg4" name="meses" type="checkbox" value="4"><br>
                                    <label class="form-check-label" for="chkg4">4</label>
                                 </div>
                              </td>
                              <td rowspan="1" class="aling" colspan="1" style="width: 35px!important;">
                                 <div class="form-check form-check-inline text-center">
                                    <input class="form-check-input group_check1" id="chkg5" name="meses" type="checkbox" value="5"><br>
                                    <label class="form-check-label" for="chkg5">5</label>
                                 </div>
                              </td>
                              <td rowspan="1" class="aling" colspan="1" style="width: 35px!important;">
                                 <div class="form-check form-check-inline text-center">
                                    <input class="form-check-input group_check1" id="chkg6" name="meses" type="checkbox" value="6"><br>
                                    <label class="form-check-label" for="chkg6">6</label>
                                 </div>
                              </td>
                              <td rowspan="1" class="aling" colspan="1" style="width: 35px!important;">
                                 <div class="form-check form-check-inline text-center">
                                    <input class="form-check-input group_check1" id="chkg7" name="meses" type="checkbox" value="7"><br>
                                    <label class="form-check-label" for="chkg7">7</label>
                                 </div>
                              </td>
                              <td rowspan="1" class="aling" colspan="1" style="width: 35px!important;">
                                 <div class="form-check form-check-inline text-center">
                                    <input class="form-check-input group_check1" id="chkg8" name="meses" type="checkbox" value="8"><br>
                                    <label class="form-check-label" for="chkg8">8</label>
                                 </div>
                              </td>
                              <td rowspan="1" class="aling" colspan="1" style="width: 35px!important;">
                                 <div class="form-check form-check-inline text-center">
                                    <input class="form-check-input group_check1" id="chkg9" name="meses" type="checkbox" value="9"><br>
                                    <label class="form-check-label" for="chkg9">9</label>
                                 </div>
                              </td>
                              <td rowspan="1" class="aling" colspan="1" style="width: 35px!important;">
                                 <div class="form-check form-check-inline text-center">
                                    <input class="form-check-input group_check1" id="chkg10" name="meses" type="checkbox" value="10"><br>
                                    <label class="form-check-label" for="chkg10">10</label>
                                 </div>
                              </td>
                              <td rowspan="1" class="aling" colspan="1" style="width: 35px!important;">
                                 <div class="form-check form-check-inline text-center">
                                    <input class="form-check-input group_check1" id="chkg11" name="meses" type="checkbox" value="11"><br>
                                    <label class="form-check-label" for="chkg11">11</label>
                                 </div>
                              </td>
                              <td rowspan="1" class="aling" colspan="1" style="width: 35px!important;">
                                 <div class="form-check form-check-inline text-center">
                                    <input class="form-check-input group_check1" id="chkg12" name="meses" type="checkbox" value="12"><br>
                                    <label class="form-check-label" for="chkg12">12</label>
                                 </div>
                              </td>
                           </tr>
                           <!-- trimestre -->
                           <tr>
                              <td rowspan="1" class="" colspan="3" style="width: 35px!important;">
                                 <div class="form-check form-check-inline text-center">
                                    <input class="form-check-input group_check2" name="meses" type="checkbox" trimestre="1" value="13"><br>
                                    <label class="form-check-label" for="meses">Primer Trimestre</label>
                                 </div>
                              </td>
                              <td rowspan="1" class="" colspan="3" style="width: 35px!important;">
                                 <div class="form-check form-check-inline text-center">
                                    <input class="form-check-input group_check2" name="meses" type="checkbox" trimestre="2" value="14"><br>
                                    <label class="form-check-label" for="meses">Segundo Trimestre</label>
                                 </div>
                              </td>
                              <td rowspan="1" class="" colspan="3" style="width: 35px!important;">
                                 <div class="form-check form-check-inline text-center">
                                    <input class="form-check-input group_check2" name="meses" type="checkbox" trimestre="3" value="15"><br>
                                    <label class="form-check-label" for="meses">Tercer Trimestre</label>
                                 </div>
                              </td>
                              <td rowspan="1" class="" colspan="3" style="width: 35px!important;">
                                 <div class="form-check form-check-inline text-center">
                                    <input class="form-check-input group_check2" name="meses" type="checkbox" trimestre="4" value="16"><br>
                                    <label class="form-check-label" for="meses">Cuarto Trimestre</label>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <!------ row vacio -->
                           </tr>
                           <tr>
                              <td colspan="8" rowspan="2">
                                 <label>SELECCIONE CORRECCIÓN Y ESCRIBA EL NÚMERO DE RADICACIÓN Y FECHA DE LA DECLARACIÓN QUE CORRIGE</label>
                              </td>
                              <td colspan="8" rowspan="2">
                                 <div class="form-check form-check-inline text-center">
                                    <input class="form-check-input" name="correcion" type="checkbox" id="chkCorreccion" value="SI">
                                    <label class="form-check-label" for="chkCorreccion">Corrección</label>
                                    <input class="form-control ml-4 entrada" name="fecha_correccion" type="date" id="fecha_correccion">
                                    <label class="form-check-label ml-1" for="fecha_correccion">Fecha declaración</label>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <!------ row vacio -->
                           </tr>
                           <tr>
                              <td colspan="1" rowspan="10" style="width: 15px;">
                                 <p class="text-vertical text-center" style="padding-bottom: 240px!important;">A. DATOS GENERALES</p>
                              </td>
                           </tr>
                           <tr>
                              <td colspan="7" rowspan="2">
                                 <div class="form-group">
                                    <label for="razon_social">AGENTE RETENEDOR o AUTORETENEDOR/1. NOMBRE O RAZÓN SOCIAL</label>
                                    <input type="text" class="form-control entrada mt-4" name="razon_social" id="razon_social" readOnly value="<?= $this->datos->RetIRazS; ?>">
                                 </div>
                              </td>
                              <td colspan="8" rowspan="2"><label>2. IDENTIFICACIÓN</label>
                                 <div class="form-check form-check-inline text-center ml-3">
                                    <input class="form-check-input" name="tipo_documento" type="radio" value="C.C">
                                    <label class="form-check-label" for="chkTipoDoc">C.C</label>

                                    <input class="form-check-input ml-2" name="tipo_documento" type="radio" value="NIT">
                                    <label class="form-check-label" for="chkTipoDoc">NIT</label>

                                    <input class="form-check-input ml-2" name="tipo_documento" type="radio" value="C.E">
                                    <label class="form-check-label" for="chkTipoDoc">C.E</label><br>
                                 </div>
                                 <div class="form-check form-check-inline text-center">
                                    <label class="form-check-label" for="documento">No:</label><br>
                                    <input type="text" name="documento" class="form-control entrada" id="documento" required="required" readOnly value="<?= $this->datos->RetINit; ?>">

                                    <label class="form-check-label" for="digito_verificacion">DV:</label><br>
                                    <input type="text" name="digito_verificacion" id="digito_verificacion" class="form-control ml-2 mt-3 entrada" style="width: 25%;" onkeypress="return Numeros(event)" maxlength="2">
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <!----- tr vacio --->
                           </tr>
                           <tr>
                              <td colspan="15" rowspan="1">
                                 <div class="form-check form-check-inline text-center">
                                    <label class="form-check-label mr-4" for="">CALIDAD DE AGENTE AUTORETENEDOR: </label><br>

                                    <input class="form-check-input ml-2 input_auto" name="autoretenedor" type="radio" id="gran_contribuyente" value="G" <?php if ($this->clasi_agente == 'G') echo "checked"; ?>>
                                    <label class="form-check-label mr-4" for="gran_contribuyente">Gran Contribuyente </label>

                                    <input class="form-check-input ml-2 input_auto" name="autoretenedor" type="radio" id="regimen_comun" value="C" <?php if ($this->clasi_agente == 'C') echo "checked"; ?>>
                                    <label class="form-check-label mr-4" for="regimen_comun">Régimen común </label>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td colspan="15" rowspan="1">
                                 <div class="form-check form-check-inline text-center">
                                    <label class="form-check-label mr-2" for="">CALIDAD DE AGENTE RETENEDOR: </label>

                                    <label class="form-check-label ml-2" for="chkEntPublica">Entidad Publica </label>
                                    <input class="form-check-input ml-1" name="retenedor" type="radio" id="chkEntPublica" <?php if ($this->datos->RetITip == 3) echo "checked"; ?> value="3">

                                    <label class="form-check-label ml-2" for="chkCredPublico">Sist Tarj Credito-Publico</label>
                                    <input class="form-check-input ml-1" name="retenedor" type="radio" id="chkCredPublico" <?php if ($this->datos->RetITip == 2) echo "checked"; ?> value="2">

                                    <label class="form-check-label ml-2" for="chkTransportadores">Ent Transportadores </label>
                                    <input class="form-check-input ml-1" name="retenedor" type="radio" id="chkTransportadores" <?php if ($this->datos->RetITip == 4) echo "checked"; ?> value="4">

                                    <label class="form-check-label ml-2" for="chkIntermediarios">Intermediarios </label>
                                    <input class="form-check-input ml-1" name="retenedor" type="radio" id="chkIntermediarios" <?php if ($this->datos->RetITip == 7) echo "checked"; ?> value="7">
                                 </div>
                                 <div class="form-check form-check-inline text-center pt-2">
                                    <label class="form-check-label ml-2" for="chkGranCont">Gran Contribuyente </label>
                                    <input class="form-check-input ml-1" name="retenedor" type="radio" id="chkGranCont" <?php if ($this->datos->RetITip == 1) echo "checked"; ?> value="1">

                                    <label class="form-check-label ml-2" for="chkConsorcio">Consorcio UT </label>
                                    <input class="form-check-input ml-1" name="retenedor" type="radio" id="chkConsorcio" <?php if ($this->datos->RetITip == 5) {
                                                                                                                              echo "checked"; ?> value="5" <?php } elseif ($this->datos->RetITip == 6) {
                                                                                                                                                            echo "checked"; ?> value="6" <?php  } ?>>

                                    <label class="form-check-label ml-2" for="chkAutp">AutoRetenedor </label>
                                    <input class="form-check-input ml-1" name="retenedor" type="radio" id="chkAutp" <?php if ($this->datos->RetITip == 8) echo "checked"; ?> value="8">

                                    <label class="form-check-label ml-2" for="chkDesignados">Designados </label>
                                    <input class="form-check-input ml-1" name="retenedor" type="radio" id="chkDesignados" <?php if ($this->datos->RetITip == 9) echo "checked"; ?> value="9">
                                    <label class="form-check-label ml-2" for="chkRegimenComun">Regimen Comun </label>
                                    <input class="form-check-input ml-1" name="retenedor" type="radio" id="chkRegimenComun" <?php if ($this->datos->RetITip == 10) echo "checked"; ?> value="10">

                                    <label class="form-check-label ml-2" for="chkRegimenComun">No Aplica </label>
                                    <input class="form-check-input ml-1" name="retenedor" type="radio" id="chkRegimenComun" <?php if ($this->datos->RetITip == 11) echo "checked"; ?> value="10">
                                 </div>
                                 <br>
                              </td>
                           </tr>
                           <tr>
                              <td colspan="6" rowspan="1">
                                 <div class="form-group">
                                    <label for="nombre_representante">3. NOMBRE REPRESENTANTE LEGAL</label>
                                    <input type="text" class="form-control entrada mt-4 input_repre" name="nombre_representante" id="nombre_representante" value="<?= $this->datos->RetINomRep ?>">
                                 </div>
                              </td>
                              <td colspan="4" rowspan="1">
                                 <div class="form-check form-check-inline text-center">
                                    <label class="form-check-label" for="inlineCheckbox">4.IDENTIFICACIÓN</label>

                                    <label class="form-check-label ml-4" for="tipo_documento_representante">C.C</label>
                                    <input class="form-check-input ml-1" name="tipo_documento_representante" <?php if ($this->datos->RetITipIde == 1) echo "checked"; ?> type="radio" value="C.C">

                                    <label class="form-check-label pl-2" for="tipo_documento_representante">C.E</label>
                                    <input class="form-check-input ml-1" name="tipo_documento_representante" <?php if ($this->datos->RetITipIde == 2) echo "checked"; ?> type="radio" value="C.E">
                                 </div>
                                 <div class="form-check form-check-inline text-center pt-4">
                                    <label class="form-check-label mr-2" for="numero_documento_representante">No</label>
                                    <input type="text" name="numero_documento_representante" class="form-control entrada input_repre" id="numero_documento_representante" value="<?= $this->datos->RetNitRepL ?>" required="required" onkeypress="return Numeros(event)" minlength="5" maxlength="20">
                                 </div>
                              </td>
                              <td colspan="5" rowspan="1">
                                 <div class="form-group">
                                    <label for="input_tel">5.TEL</label>
                                    <input type="text" class="form-control entrada mt-4 input_repre" name="tel_representante" id="input_tel" value="<?= $this->datos->RetITelRep ?>" onkeypress="return Numeros(event)" maxlength="10" minlength="7">
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td colspan="8" rowspan="1">
                                 <div class="form-group">
                                    <label for="dir_representante">6. DIRECCIÓN DE NOTIFICACIÓN:</label>
                                    <input type="text" class="form-control entrada" name="dir_representante" id="dir_representante" value="<?= $this->datos->RetDirNot ?>" readonly onchange="aMayusculas(this.value,this.id)" minlength="5" maxlength="80">
                                 </div>
                              </td>
                              <td colspan="7" rowspan="1">
                                 <div class="form-group">
                                    <label for="ciudad_representante">7. CIUDAD:</label>
                                    <input type="text" class="form-control entrada" name="ciudad_representante" id="ciudad_representante" value="<?= $this->datos->CiuNomNot ?>" readonly onkeypress="return Letras(event)" maxlength="20">
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td colspan="6" rowspan="1">
                                 <div class="form-group">
                                    <label for="tel_representante_dos">8. TEL:</label>
                                    <input type="text" class="form-control entrada " name="tel_representante_dos" id="tel_representante_dos" value="<?= $this->datos->RetITelAge ?>" readonly onkeypress="return Numeros(event)" minlength="7" maxlength="10">
                                 </div>
                              </td>
                              <td colspan="9" rowspan="1">
                                 <div class="form-group">
                                    <label for="correo_representante">9. DIRECCIÓN DE NOTIFICACION ELECTRONICA:</label>
                                    <input type="text" class="form-control entrada" name="correo_representante" readonly="readonly" value="<?= $this->datos->RetIMailPr ?>" id="correo_representante">
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td colspan="8" rowspan="1">
                                 <div class="form-group">
                                    <label for="dir_sede">10. DIRECCIÓN SEDE PRINCIPAL</label>
                                    <input type="text" class="form-control entrada " name="dir_sede" id="dir_sede" value="<?= $this->datos->RetIDir ?>" readonly>
                                 </div>
                              </td>
                              <td colspan="7" rowspan="1">
                                 <div class="form-group">
                                    <label for="ciudad_sede">11. CIUDAD:</label>
                                    <input type="text" class="form-control entrada" name="ciudad_sede" id="ciudad_sede" value="<?= $this->datos->CiuNomPri ?>" readonly onkeypress="return Letras(event)" maxlength="20">
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td colspan="8" rowspan="1">
                                 <div class="form-group">
                                    <label for="tel_representante_tres">12. TEL</label>
                                    <input type="text" class="form-control entrada " name="tel_representante_tres" id="tel_representante_tres" value="<?= $this->datos->RetITelPri ?>" readonly onkeypress="return Numeros(event)" minlength="7" maxlength="10">
                                 </div>
                              </td>
                              <td colspan="7" rowspan="1">
                                 <div class="form-group">
                                    <label for="telefono_movil">13 TEL MOVIL:</label>
                                    <input type="text" class="form-control entrada" name="telefono_movil" id="telefono_movil" onkeypress="return Numeros(event)" minlength="7" maxlength="10">
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td colspan="16" rowspan="1">
                                 <label>RECUERDE QUE LAS SANCIONES LÍQUIDADAS NO PODRÁN SER INFERIORES A LA SANCIÓN MÍNIMA ESTABLECIDA EN EL VALOR DE CINCO (5) UNIDADES DE VALOR TRIBUTARIO</label>
                              </td>
                           </tr>
                           <tr>
                              <td colspan="8" rowspan="1">
                                 <h6 style="color: #000;" class="text-center">LIQUIDACION RETENCIONES Y AUTORETENCIONES</h6>
                              </td>
                              <td colspan="2" rowspan="1">
                                 <h6 style="color: #000;" class="text-center">IND Y CIO</h6>
                              </td>
                              <td colspan="2" rowspan="1">
                                 <h6 style="color: #000;" class="text-center">AVISOS Y TABL</h6>
                              </td>
                              <td colspan="2" rowspan="1">
                                 <h6 style="color: #000;" class="text-center">S. BOMB</h6>
                              </td>
                              <td colspan="2" rowspan="1">
                                 <h6 style="color: #000;" class="text-center">TOTAL</h6>
                              </td>
                           </tr>
                           <tr>
                              <td colspan="1" rowspan="19" style="width: 15px;">
                                 <p class="text-vertical text-center" style="padding-bottom: 240px;">B. LIQUIDACIÓN PRIVADA</p>
                              </td>
                           </tr>
                           <!-- INPUTS PARA HACER CALCULOS -->
                           <tr>
                              <td colspan="1" rowspan="1" style="text-align: center;">1</td>
                              <td colspan="6" rowspan="1">RETENCIÓN POR COMPRA DE BIENES</td>
                              <td colspan="2" rowspan="1"><input name="retencionCompra_indcio" id="retencionCompra_indcio" value="0" class="entrada form-control suma4" onkeypress="return Numeros(event)" maxlength="20" required="required"></td>
                              <td colspan="2" rowspan="1"><input name="retencionCompra_avisos" id="retencionCompra_avisos" value="0" class="entrada form-control suma4" onkeypress="return Numeros(event)" maxlength="20"></td>
                              <td colspan="2" rowspan="1"><input name="retencionCompra_bomberos" id="retencionCompra_bomberos" value="0" class="entrada form-control suma4" onkeypress="return Numeros(event)" maxlength="20"></td>
                              <td colspan="2" rowspan="1"><input name="retencionCompra_total" id="retencionCompra_total" value="0" class="entrada form-control totales" onkeypress="return Numeros(event)" maxlength="20"></td>
                           </tr>
                           <tr>
                              <td colspan="1" rowspan="1" style="text-align: center;">2</td>
                              <td colspan="6" rowspan="1">RETENCIÓN POR SERVICIOS</td>
                              <td colspan="2" rowspan="1"><input name="retencionServicios_indcio" id="retencionServicios_indcio" value="0" class="entrada form-control suma5" onkeypress="return Numeros(event)" maxlength="20" required="required"></td>
                              <td colspan="2" rowspan="1"><input name="retencionServicios_avisos" id="retencionServicios_avisos" value="0" class="entrada form-control  suma5" onkeypress="return Numeros(event)" maxlength="20"></td>
                              <td colspan="2" rowspan="1"><input name="retencionServicios_bomberos" id="retencionServicios_bomberos" value="0" class="entrada form-control suma5" onkeypress="return Numeros(event)" maxlength="20"></td>
                              <td colspan="2" rowspan="1"><input name="retencionServicios_total" id="retencionServicios_total" value="0" class="entrada form-control totales" onkeypress="return Numeros(event)" maxlength="20"></td>
                           </tr>
                           <tr>
                              <td colspan="1" rowspan="1" style="text-align: center;">3</td>
                              <td colspan="6" rowspan="1">OTRAS RETENCIONES</td>
                              <td colspan="2" rowspan="1"><input name="retencionOtras_indcio" id="retencionOtras_indcio" value="0" class="entrada form-control suma6" onkeypress="return Numeros(event)" maxlength="20" required="required"></td>
                              <td colspan="2" rowspan="1"><input name="retencionOtras_avisos" id="retencionOtras_avisos" value="0" class="entrada form-control  suma6" onkeypress="return Numeros(event)" maxlength="20"></td>
                              <td colspan="2" rowspan="1"><input name="retencionOtras_bomberos" id="retencionOtras_bomberos" value="0" class="entrada form-control suma6" onkeypress="return Numeros(event)" maxlength="20"></td>
                              <td colspan="2" rowspan="1"><input name="retencionOtras_total" id="retencionOtras_total" value="0" class="entrada form-control totales" onkeypress="return Numeros(event)" maxlength="20"></td>
                           </tr>
                           <tr>
                              <td colspan="1" rowspan="1" style="text-align: center;">4</td>
                              <td colspan="6" rowspan="1"><strong>TOTAL RETENCIONES PRACTICADAS (Sume renglones 1 a 3)</strong></td>
                              <td colspan="2" rowspan="1"><input name="totalRetenciones_indcio" id="totalRetenciones_indcio" value="0" class="entrada form-control totales" onkeypress="return Numeros(event)" maxlength="20"></td>
                              <td colspan="2" rowspan="1"><input name="totalRetenciones_avisos" id="totalRetenciones_avisos" value="0" class="entrada form-control totales" onkeypress="return Numeros(event)" maxlength="20"></td>
                              <td colspan="2" rowspan="1"><input name="totalRetenciones_bomberos" id="totalRetenciones_bomberos" class="entrada form-control totales" onkeypress="return Numeros(event)" maxlength="20"></td>
                              <td colspan="2" rowspan="1"><input name="totalRetenciones_total" id="totalRetenciones_total" value="0" class="entrada form-control totales" onkeypress="return Numeros(event)" maxlength="20"></td>
                           </tr>

                           <tr>
                              <td colspan="1" rowspan="1" style="text-align:center">5</td>
                              <td colspan="6" rowspan="1">AUTORETENCIÓN POR VENTA DE BIENES</td>
                              <td colspan="2" rowspan="1"><input name="autoBienes_indcio" id="autoBienes_indcio" class="entrada form-control suma7" onkeypress="return Numeros(event)" maxlength="20" value="0"></td>
                              <td colspan="2" rowspan="1"><input name="autoBienes_avisos" value="0" id="autoBienes_avisos" class="entrada form-control suma8" onkeypress="return Numeros(event)" maxlength="20"></td>
                              <td colspan="2" rowspan="1"><input name="autoBienes_bomberos" id="autoBienes_bomberos" class="entrada form-control suma9" onkeypress="return Numeros(event)" maxlength="20" value="0"></td>
                              <td colspan="2" rowspan="1"><input name="autoBienes_total" id="autoBienes_total" class="entrada form-control totales" onkeypress="return Numeros(event)" maxlength="20" value="0"></td>
                           </tr>
                           <tr>
                              <td colspan="1" rowspan="1" style="text-align: center;">6</td>
                              <td colspan="6" rowspan="1">AUTORETENCIÓN POR VENTA DE SERVICIOS</td>
                              <td colspan="2" rowspan="1"><input name="autoServicios_indcio" id="autoServicios_indcio" class="entrada form-control suma7" onkeypress="return Numeros(event)" maxlength="20" value="0"></td>
                              <td colspan="2" rowspan="1"><input name="autoServicios_avisos" value="0" id="autoServicios_avisos" class="entrada form-control suma8" onkeypress="return Numeros(event)" maxlength="20"></td>
                              <td colspan="2" rowspan="1"><input name="autoServicios_bomberos" id="autoServicios_bomberos" class="entrada form-control suma9" onkeypress="return Numeros(event)" maxlength="20" value="0"></td>
                              <td colspan="2" rowspan="1"><input name="autoServicios_total" id="autoServicios_total" class="entrada form-control totales" onkeypress="return Numeros(event)" maxlength="20" value="0"></td>
                           </tr>
                           <tr>
                              <td colspan="1" rowspan="1" style="text-align: center;">7</td>
                              <td colspan="6" rowspan="1">OTRAS AUTORRETENCIONES</td>
                              <td colspan="2" rowspan="1"><input name="otrasAuto_indcio" id="otrasAuto_indcio" class="entrada form-control suma7" onkeypress="return Numeros(event)" maxlength="20" value="0"></td>
                              <td colspan="2" rowspan="1"><input name="otrasAuto_avisos" id="otrasAuto_avisos" value="0" class="entrada form-control suma8" onkeypress="return Numeros(event)" maxlength="20"></td>
                              <td colspan="2" rowspan="1"><input name="otrasAuto_bomberos" id="otrasAuto_bomberos" class="entrada form-control suma9" onkeypress="return Numeros(event)" maxlength="20" value="0"></td>
                              <td colspan="2" rowspan="1"><input name="otrasAuto_total" id="otrasAuto_total" class="entrada form-control totales" onkeypress="return Numeros(event)" maxlength="20" value="0"></td>
                           </tr>

                           <tr>
                              <td colspan="1" rowspan="1" style="text-align: center">8</td>
                              <td colspan="6" rowspan="1">MENOS RETENCION QUE LE PRACTICARON AL PERIODO</td>
                              <td colspan="2" rowspan="1"><input name="menosReten_indcio" id="menosReten_indcio" class="entrada form-control" onkeypress="return Numeros(event)" value="0" maxlength="20" readonly="readonly"></td>
                              <td colspan="2" rowspan="1"><input name="menosReten_avisos" id="menosReten_avisos" value="0" class="entrada form-control" onkeypress="return Numeros(event)" maxlength="20" readonly="readonly"></td>
                              <td colspan="2" rowspan="1"><input name="menosReten_bomberos" id="menosReten_bomberos" value="0" class="entrada form-control" onkeypress="return Numeros(event)" maxlength="20" readonly="readonly"></td>
                              <td colspan="2" rowspan="1"><input name="menosReten_total" id="menosReten_total" class="entrada form-control totales" onkeypress="return Numeros(event)" maxlength="20" readonly="readoly" value="0"></td>
                           </tr>

                           <tr>
                              <td colspan="1" rowspan="1" style="text-align: center">8.1</td>
                              <td colspan="6" rowspan="1">MENOS RET. POR VENTA DEBIENES QUE LE PRACTICARON EN EL PERIODO</td>
                              <td colspan="2" rowspan="1"><input name="menosRetenBie_indcio" id="menosRetenBie_indcio" class="entrada form-control" onkeypress="return Numeros(event)" value="0" maxlength="20"></td>
                              <td colspan="2" rowspan="1"><input name="menosRetenBie_avisos" id="menosRetenBie_avisos" value="0" class="entrada form-control" onkeypress="return Numeros(event)" maxlength="20"></td>
                              <td colspan="2" rowspan="1"><input name="menosRetenBie_bomberos" id="menosRetenBie_bomberos" value="0" class="entrada form-control" onkeypress="return Numeros(event)" maxlength="20" value="0"></td>
                              <td colspan="2" rowspan="1"><input name="menosRetenBie_total" id="menosRetenBie_total" class="entrada form-control totales" onkeypress="return Numeros(event)" maxlength="20" value="0"></td>
                           </tr>

                           <tr>
                              <td colspan="1" rowspan="1" style="text-align: center">8.2</td>
                              <td colspan="6" rowspan="1">MENOS RET. POR VENTA DE SERVICIOS QUE LE PRACTICARON EN EL PERIODO</td>
                              <td colspan="2" rowspan="1"><input name="menosRetenSer_indcio" id="menosRetenSer_indcio" class="entrada form-control" onkeypress="return Numeros(event)" value="0" maxlength="20"></td>
                              <td colspan="2" rowspan="1"><input name="menosRetenSer_avisos" id="menosRetenSer_avisos" value="0" class="entrada form-control" onkeypress="return Numeros(event)" maxlength="20"></td>
                              <td colspan="2" rowspan="1"><input name="menosRetenSer_bomberos" id="menosRetenSer_bomberos" value="0" class="entrada form-control" onkeypress="return Numeros(event)" maxlength="20"></td>
                              <td colspan="2" rowspan="1"><input name="menosRetenSer_total" id="menosRetenSer_total" class="entrada form-control totales" onkeypress="return Numeros(event)" maxlength="20" value="0"></td>
                           </tr>

                           <tr>
                              <td colspan="1" rowspan="1" style="text-align: center">8.3</td>
                              <td colspan="6" rowspan="1">MENOS RET. OTRAS QUE LE PRACTICARON EN EL PERIODO</td>
                              <td colspan="2" rowspan="1"><input name="menosRetenOtras_indcio" id="menosRetenOtras_indcio" class="entrada form-control" onkeypress="return Numeros(event)" value="0" maxlength="20"></td>
                              <td colspan="2" rowspan="1"><input name="menosRetenOtras_avisos" id="menosRetenOtras_avisos" value="0" class="entrada form-control" onkeypress="return Numeros(event)" maxlength="20"></td>
                              <td colspan="2" rowspan="1"><input name="menosRetenOtras_bomberos" id="menosRetenOtras_bomberos" value="0" class="entrada form-control" onkeypress="return Numeros(event)" maxlength="20" value="0"></td>
                              <td colspan="2" rowspan="1"><input name="menosRetenOtras_total" id="menosRetenOtras_total" class="entrada form-control totales" onkeypress="return Numeros(event)" maxlength="20" value="0"></td>
                           </tr>


                           <tr>
                              <td colspan="1" rowspan="1" style="text-align: center;">9</td>
                              <td colspan="6" rowspan="1"><strong>TOTAL AUTORRETENCIONES PRACTICADAS(Sume Casilla 5+6+7-8)</strong></td>
                              <td colspan="2" rowspan="1"><input type="number" name="totalAuto_indcio" id="totalAuto_indcio" class="entrada form-control totales" onkeypress="return Numeros(event)" maxlength="20" value="0"><!-- total oculto indicio --> <input type="hidden" name="totales_auto_indcio" id="totales_auto_indcio"></td>
                              <td colspan="2" rowspan="1"><input type="number" name="totalAuto_avisos" id="totalAuto_avisos" class="entrada form-control totales" onkeypress="return Numeros(event)" maxlength="20" value="0"> <!-- total oculto avisos --> <input type="hidden" name="totales_auto_avisos" id="totales_auto_avisos"></td>
                              <td colspan="2" rowspan="1"><input type="number" name="totalAuto_bomberos" id="totalAuto_bomberos_total" class="entrada form-control totales" onkeypress="return Numeros(event)" maxlength="20" value="0"><!-- total oculto bomberos --> <input type="hidden" name="totales_auto_bomberos" id="totales_auto_bomberos"></td>
                              <td colspan="2" rowspan="1"><input name="totalAuto_total" id="totalAuto_total" class="entrada form-control totales" onkeypress="return Numeros(event)" maxlength="20" value="0"></td>
                           </tr>

                           <tr>
                              <td colspan="1" rowspan="1" style="text-align: center;">10</td>
                              <td colspan="6" rowspan="1"><strong>TOTAL RETENCIONES Y AUTORRETENCIONES PRACTICADAS(Sume Renglones 4 y 9)</strong></td>
                              <td colspan="2" rowspan="1"><input name="totalReteYAuto_indcio" id="totalReteYAuto_indcio" class="entrada form-control totales" onkeypress="return Numeros(event)" maxlength="20"></td>
                              <td colspan="2" rowspan="1"><input name="totalReteYAuto_avisos" id="totalReteYAuto_avisos" class="entrada form-control totales" onkeypress="return Numeros(event)" maxlength="20"></td>
                              <td colspan="2" rowspan="1"><input name="totalReteYAuto_bomberos" id="totalReteYAuto_bomberos" class="entrada form-control totales" onkeypress="return Numeros(event)" maxlength="20"></td>
                              <td colspan="2" rowspan="1"><input name="totalReteYAuto_total" id="totalReteYAuto_total" class="entrada form-control totales" onkeypress="return Numeros(event)" maxlength="20"></td>
                           </tr>

                           <tr>
                              <td colspan="1" rowspan="1" style="text-align: center;">11</td>
                              <td colspan="12" rowspan="1">SANCIÓN POR CORRECCIÓN: 10% del mayor valor sin emplazamiento, 20% del mayor valor si media emplazamiento o auto de inspección tributaria.</td>

                              <td colspan="2" rowspan="1"><input name="sancion_correccion" id="sancion_correccion" class="entrada form-control totales" onkeypress="return Numeros(event)" maxlength="20" value="0"></td>
                           </tr>

                           <tr>
                              <td colspan="1" rowspan="1" style="text-align: center;">12</td>
                              <td colspan="12" rowspan="1">SANCIÓN POR INEXACTITUD: 1/4 de la impuesta con ocasión al requerimiento especial; 1/2 con ocasión a la liquidación de revisión; 100% de la sanción luego de ejecutoriada la liquidación oficial de revisión.</td>

                              <td colspan="2" rowspan="1"><input name="sancion_inexactitud" id="sancion_inexactitud" class="entrada form-control totales" onkeypress="return Numeros(event)" maxlength="20" value="0"></td>
                           </tr>

                           <tr>
                              <td colspan="1" rowspan="1" style="text-align: center;">13</td>
                              <td colspan="12" rowspan="1">SANCIÓN POR NO DECLARAR REDUCIDA: al 50% para que proceda la reducción de la sanción, esta declaración se deberá presentar con pago (Artículo 231 E.T.M.).</td>

                              <td colspan="2" rowspan="1"><input name="sancion_nodeclarar" id="sancion_nodeclarar" class="entrada form-control totales" onkeypress="return Numeros(event)" maxlength="20" value="0"></td>
                           </tr>

                           <tr>
                              <td colspan="1" rowspan="1" style="text-align: center;">14</td>
                              <td colspan="12" rowspan="1">SANCIÓN POR EXTEMPORANEIDAD: 10% por mes ofracción sobre el valor liqudado o 20% si media emplazamiento.</td>

                              <td colspan="2" rowspan="1"><input name="sancion_extemporaneidad" id="sancion_extemporaneidad" class="entrada form-control totales" onkeypress="return Numeros(event)" maxlength="20" value="0"></td>
                           </tr>

                           <tr>
                              <td colspan="1" rowspan="1" style="text-align: center;">15</td>
                              <td colspan="12" rowspan="1"><strong>TOTAL RETENCIONES Y AUTORRETENCIONES PRACTICADAS (Sumar renglones 10 al 14).</strong></td>

                              <td colspan="2" rowspan="1"><input name="total_declaracion" id="total_declaracion" class="entrada form-control totales" onkeypress="return Numeros(event)" maxlength="20" value="0"></td>
                           </tr>

                           <tr>
                              <td colspan="16" rowspan="1">
                                 <label class="text-center"><strong>SEÑOR AGENTE RETENEDOR:</strong> La declaración mensual de retención en la fuente debe presentarse con pago so pena de darla por no presentada</label>
                              </td>
                           </tr>

                           <tr>
                              <td colspan="1" rowspan="11" style="width: 15px;">
                                 <p class="text-vertical text-center" style="padding-bottom: 45px;">C. FIRMAS</p>

                              </td>

                           </tr>

                           <tr>
                              <td colspan="10" rowspan="1" style="height: 8px;">
                                 <p align="justify" style="margin-bottom: 0!important;padding-bottom: 0!important;"><small>Declaro que la información aquí consignada es correcta y ajustada a las disposiciones vigentes</small></p>
                              </td>
                              <td colspan="5" rowspan="10" style="width: 15px;">
                                 <p class="text-center" style="font-size: small;"><small>USO OFICIAL</small><br><small>SELLO NÚMERO FECHA DE RADICACIÓN</small></p>
                              </td>
                           </tr>
                           <tr>
                              <td colspan="5" rowspan="4" style="width: 50%">
                                 <p align="justify"><small>FIRMA,</small></p><br>
                                 ______________________________

                              </td>
                              <td colspan="5" rowspan="4" style="width: 50%;">
                                 <p align="justify"><small>FIRMA,</small></p><br>
                                 _______________________________
                              </td>
                           </tr>
                           <tr>
                              <!--- vacion-->
                           </tr>
                           <tr>
                              <!--- vacion-->
                           </tr>
                           <tr>
                              <!--- vacion-->
                           </tr>
                           <tr>
                              <td colspan="5" rowspan="4" style="width: 50%;">
                                 <p align="justify" style="margin-bottom: 0!important;padding-bottom: 0!important;"><small>REPRESENTANTE LEGAL,</small></p>

                              </td>
                              <td colspan="5" rowspan="4" style="width: 50%;">
                                 <div class="form-check form-check-inline text-center">
                                    <p align="left" class="form-check-label pl-1" style="margin-bottom: 0!important;padding-bottom: 0!important;"><small>FIRMA DEL CONTADOR</small></p>&nbsp;
                                    <input type="checkbox" class="form-check-input pl-3">

                                    <p align="justify" class="form-check-label pl-5" style="margin-bottom: 0!important;padding-bottom: 0!important;"><small>REVISOR FISCAL</small></p>&nbsp;
                                    <input type="checkbox" class="form-check-input pl-3">
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <!--- vacion-->
                           </tr>
                           <tr>
                              <!--- vacion-->
                           </tr>
                           <tr>
                              <!--- vacion-->
                           </tr>
                           <tr>
                              <td colspan="5" rowspan="4" style="width: 50%;">
                                 <p align="justify" style="margin-bottom: 0!important;padding-bottom: 0!important;"><small>C.C/NIT</small></p>

                              </td>
                              <td colspan="5" rowspan="4" style="width: 50%;">
                                 <p align="justify" style="margin-bottom: 0!important;padding-bottom: 0!important;"><small>T.P No</small></p>

                              </td>
                           </tr>
                           </p>
                           </td>
                           </tr>
                           </p>
                           </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <a class="btn btn-round btn-high" href="<?= PROOT ?>ica/index" style="float: left;">Volver</a>

               <button type="button" onclick="guardarDeclaracion();" class="btn btn-round btn-middle" style="float: right;">Enviar</button>
            </div>
         </div>
      </form>
   </div>
   <?php $this->end(); ?>
   <?php $this->start('footer'); ?>
   <script type="text/javascript">
      function guardarDeclaracion() {
         var continuar = 0;
         if ($('#totalAuto_indcio').val() < 0) {
            alertMsg('Valor negativo en Total Autorretenciones Practicadas!', '<strong>El calculo de las casillas 5+6+7-8 no puede ser negativo</strong>', 'error', 5000);
            $('#totalAuto_indcio').addClass('text-danger');
            return;
         }
         if ($('#totalAuto_avisos').val() < 0) {
            alertMsg('Valor negativo en Total Autorretenciones Practicadas!', '<strong>El calculo de las casillas 5+6+7-8 no puede ser negativo</strong>', 'error', 5000);
            $('#totalAuto_avisos').addClass('text-danger');
            return;
         }
         if ($('#totalAuto_bomberos_total').val() < 0) {
            alertMsg('Valor negativo en Total Autorretenciones Practicadas!', '<strong>El calculo de las casillas 5+6+7-8 no puede ser negativo</strong>', 'error', 5000);
            $('#totalAuto_bomberos_total').addClass('text-danger');
            return;
         }
         if ($('#totalAuto_total').val() < 0) {
            alertMsg('Valor negativo en Total Autorretenciones Practicadas!', '<strong>El calculo de las casillas 5+6+7-8 no puede ser negativo</strong>', 'error', 5000);
            $('#totalAuto_total').addClass('text-danger');
            return;
         }
         if ('<?= $this->presentacion ?>' == 'Mensual') {
            $('.group_check1').each(function() {
               if (this.checked) {
                  continuar = 1;
               }
            });
         }
         if ('<?= $this->presentacion ?>' == 'Trimestral') {
            $('.group_check2').each(function() {
               if (this.checked) {
                  continuar = 1;
               }
            });
         }
         if (continuar == 0) {
            alertMsg('Seleccionar el periodo!', '<strong>Falta seleccionar el periodo a declarar</strong>', 'error', 4000);
            return;
         }

         if ($('#retencionCompra_indcio').val() == '' && $('#retencionServicios_indcio').val() == '' && $('#retencionOtras_indcio').val() == '') {
            alertMsg('Campos vacios!', '<strong>LIQUIDACION RETENCIONES Y AUTORETENCIONES VACIOS</strong>', 'error', 4000);
            return;
         }

         var form = jQuery('#frm').serialize();
         jQuery.ajax({
            url: '<?= PROOT ?>ica/guardarDeclaracion',
            method: "POST",
            data: form,
            success: function(resp) {
               if (resp.success) {
                  alertMsg('Proceso existoso!', 'Su declaración ha sido guardada con exito.', 'success', 3000);
                  window.location.href = 'https://referencia.bucaramanga.gov.co/ForReteica.aspx?id=' + resp.declaracion;
                  return;
               } else {
                  alertMsg('Proceso fallido!', 'ha ocurrido un error al guardar su declaración', 'error', 6000);
                  return;
               }
            }
         });
      }

      function Numeros(e) {
         key = e.keyCode || e.which;
         tecla = String.fromCharCode(key).toLowerCase();
         letras = "0123456789";
         especiales = [8, 37];
         tecla_especial = false
         for (var i in especiales) {
            if (key == especiales[i]) {
               tecla_especial = true;
               break;
            }
         }
         if (letras.indexOf(tecla) == -1 && !tecla_especial)
            return false;
      }

      function Letras(n) {
         key = n.keyCode || n.which;
         tecla = String.fromCharCode(key).toLowerCase();
         numeros = "ñ";
         especiales = [14, 15, 32, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83,
            84, 85, 86, 87, 88, 89, 90, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109,
            110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 130, 160, 161, 162, 163, 164, 165, 239
         ];
         tecla_especial = false
         for (var i in especiales) {
            if (key == especiales[i]) {
               tecla_especial = true;
               break;
            }
         }
         if (numeros.indexOf(tecla) == -1 && !tecla_especial)
            return false;
      }

      function aMayusculas(obj, id) {
         obj = obj.toUpperCase();
         document.getElementById(id).value = obj;
      }

      function SumaRetenciones() {
         var total1 = 0;
         var input_total1 = $('#retencionCompra_total').val();
         var input_total2 = $('#retencionServicios_total').val();
         var input_total3 = $('#retencionOtras_total').val();
         total = parseInt(input_total1) + parseInt(input_total2) + parseInt(input_total3);
         $('#totalRetenciones_total').val(total);
      }

      var today = new Date();
      var dd = today.getDate();
      var mm = today.getMonth() + 1; //
      var yyyy = today.getFullYear();
      if (dd < 10) {
         dd = '0' + dd
      }
      if (mm < 10) {
         mm = '0' + mm
      }

      today = yyyy + '-' + mm + '-' + dd;
      document.getElementById("fecha_correccion").setAttribute("max", today);

      // money 
      $('.money').mask("#.##0", {
         reverse: true
      });


      // document.addEventListener("change", e => {
      //    if (!e.target.matches(".group_check1") && !e.target.matches(".group_check2")) {
      //       if (!e.target.matches("#total_declaracion")) {
      //          if ($('#sancion_extemporaneidad').val() > 0) {

      //             var total = $('#total_declaracion').val();
      //             //setTimeout(function() {
      //             jQuery.ajax({
      //                url: '<?= PROOT ?>ica/calcularSancion/' + total + '/' + vigencia + '/' + mes.val(),
      //                method: "GET",
      //                success: function(resp) {
      //                   if (resp.success) {
      //                      $('#sancion_extemporaneidad').val(resp.sancion);
      //                      return;
      //                   } else {
      //                      console.log('error');
      //                      return;
      //                   }
      //                }
      //             });
      //             //}, 1000);
      //          }
      //       }
      //    }
      // })

      $('.body').ready(function() {

         if ('<?= $this->presentacion ?>' == 'Mensual') {
            $('.group_check2').attr('disabled', true);
            //$('.group_check2').attr('required', false);
            //$('.group_check1').attr('required', true);

         } else if ('<?= $this->presentacion ?>' == 'Trimestral') {
            $('.group_check1').attr('disabled', true);
            //$('.group_check1').attr('required', false);
            //$('.group_check2').attr('required', true);
         }

         if ('<?= $this->datos->RetITipDoc ?>' == 'N') {
            $('.input_repre').attr('readonly', false);

         } else if ('<?= $this->datos->RetITipDoc ?>' == 'J') {
            $('.input_repre').attr('readonly', true);

         }

         if ('<?= $this->año ?>' < '2021') {
            // validacion campo de autoretenedor
            $('.input_auto').attr('disabled', true);
            $('.input_auto').attr('required', false);
            // validaciones grilla

            $('#retencionCompra_avisos').attr('readonly', true);
            $('#retencionCompra_avisos').val(0);

            $('#retencionCompra_bomberos').attr('readonly', true);
            $('#retencionCompra_bomberos').val(0);

            $('#retencionCompra_bomberos').attr('readonly', true);
            $('#retencionCompra_bomberos').val(0);

            $('#retencionServicios_avisos').attr('readonly', true);
            $('#retencionServicios_avisos').val(0);

            $('#retencionServicios_bomberos').attr('readonly', true);
            $('#retencionServicios_bomberos').val(0);

            $('#retencionOtras_avisos').attr('readonly', true);
            $('#retencionOtras_avisos').val(0);

            $('#retencionOtras_bomberos').attr('readonly', true);
            $('#retencionOtras_bomberos').val(0);

            $('#totalRetenciones_bomberos').attr('readonly', true);
            $('#totalRetenciones_bomberos').val(0);

            $('#totalRetenciones_avisos').attr('readonly', true);
            $('#totalRetenciones_avisos').val(0);

            $('#autoBienes_indcio').attr('readonly', true);
            $('#autoBienes_indcio').val(0);

            $('#autoBienes_avisos').attr('readonly', true);
            $('#autoBienes_avisos').val(0);

            $('#autoBienes_bomberos').attr('readonly', true);
            $('#autoBienes_bomberos').val(0);

            $('#autoServicios_indcio').attr('readonly', true);
            $('#autoServicios_indcio').val(0);

            $('#autoServicios_avisos').attr('readonly', true);
            $('#autoServicios_avisos').val(0);

            $('#autoServicios_bomberos').attr('readonly', true);
            $('#autoServicios_bomberos').val(0);

            $('#otrasAuto_indcio').attr('readonly', true);
            $('#otrasAuto_indcio').val(0);

            $('#otrasAuto_avisos').attr('readonly', true);
            $('#otrasAuto_avisos').val(0);

            $('#otrasAuto_bomberos').attr('readonly', true);
            $('#otrasAuto_bomberos').val(0);

            $('#menosReten_indcio').attr('readonly', true);
            $('#menosReten_indcio').val(0);

            $('#menosReten_avisos').attr('readonly', true);
            $('#menosReten_avisos').val(0);

            $('#menosReten_bomberos').attr('readonly', true);
            $('#menosReten_bomberos').val(0);

            $('#totalAuto_indcio').attr('readonly', true);
            $('#totalAuto_indcio').val(0);

            $('#totalAuto_avisos').attr('readonly', true);
            $('#totalAuto_avisos').val(0);

            $('#totalAuto_bomberos').attr('readonly', true);
            $('#totalAuto_bomberos').val(0);

            $('#autoBienes_total').attr('readonly', true);
            $('#autoBienes_total').val(0);

            $('#autoServicios_total').attr('readonly', true);
            $('#autoServicios_total').val(0);

            $('#otrasAuto_total').attr('readonly', true);
            $('#otrasAuto_total').val(0);

            $('#menosReten_total').attr('readonly', true);
            $('#menosReten_total').val(0);

            $('#totalAuto_total').attr('readonly', true);
            $('#totalAuto_total').val(0);

            $('#menosRetenBie_indcio').attr('readonly', true);
            $('#menosRetenBie_indcio').val(0);

            $('#menosRetenBie_avisos').attr('readonly', true);
            $('#menosRetenBie_avisos').val(0);

            $('#menosRetenBie_bomberos').attr('readonly', true);
            $('#menosRetenBie_bomberos').val(0);

            $('#menosRetenBie_total').attr('readonly', true);
            $('#menosRetenBie_total').val(0);

            $('#menosRetenSer_indcio').attr('readonly', true);
            $('#menosRetenSer_indcio').val(0);

            $('#menosRetenSer_avisos').attr('readonly', true);
            $('#menosRetenSer_avisos').val(0);

            $('#menosRetenSer_bomberos').attr('readonly', true);
            $('#menosRetenSer_bomberos').val(0);

            $('#menosRetenSer_total').attr('readonly', true);
            $('#menosRetenSer_total').val(0);

            $('#menosRetenOtras_indcio').attr('readonly', true);
            $('#menosRetenOtras_indcio').val(0);

            $('#menosRetenOtras_avisos').attr('readonly', true);
            $('#menosRetenOtras_avisos').val(0);

            $('#menosRetenOtras_bomberos').attr('readonly', true);
            $('#menosRetenOtras_bomberos').val(0);

            $('#menosRetenOtras_total').attr('readonly', true);
            $('#menosRetenOtras_total').val(0);

            $('#totalAuto_bomberos_total').attr('readonly', true);
            $('#totalAuto_bomberos_total').val(0);

            $('#totalReteYAuto_indcio').attr('readonly', true);
            $('#totalReteYAuto_indcio').val(0);

            $('#totalReteYAuto_avisos').attr('readonly', true);
            $('#totalReteYAuto_avisos').val(0);

            $('#totalReteYAuto_bomberos').attr('readonly', true);
            $('#totalReteYAuto_bomberos').val(0);

            $('#totalReteYAuto_total').attr('readonly', true);
            $('#totalReteYAuto_total').val(0);

            $('#sancion_correccion').attr('readonly', true);
            $('#sancion_correccion').val(0);

            $('#sancion_inexactitud').attr('readonly', true);
            $('#sancion_inexactitud').val(0);

            $('#sancion_extemporaneidad').attr('readonly', true);
            $('#sancion_extemporaneidad').val(0);

            $('#sancion_nodeclarar').attr('readonly', true);
            $('#sancion_nodeclarar').val(0);

            $('#total_declaracion').attr('readonly', true);
            $('#total_declaracion').val(0);

            $('#totalRetenciones_indcio').attr('readonly', true);
            $('#totalRetenciones_indcio').val(0);

            $('#totalRetenciones_total').attr('readonly', true);
            $('#totalRetenciones_total').val(0);

         }
         if ('<?= $this->año ?>' == '2021' && '<?= $this->clasi_agente ?>' == 'P') {
            // validacion campo de autoretenedor
            $('.input_auto').attr('disabled', true);
            $('.input_auto').attr('required', false);

            //$('#retencionCompra_bomberos').attr('readonly', true);
            //$('#retencionCompra_bomberos').val(0);

            //$('#retencionServicios_bomberos').attr('readonly', true);
            //$('#retencionServicios_bomberos').val(0);

            //$('#retencionOtras_bomberos').attr('readonly', true);
            //$('#retencionOtras_bomberos').val(0);

            $('#totalRetenciones_bomberos').attr('readonly', true);
            $('#totalRetenciones_bomberos').val(0);

            // validaciones grilla  

            $('#autoBienes_indcio').attr('readonly', true);
            $('#autoBienes_indcio').val(0);

            $('#autoBienes_avisos').attr('readonly', true);
            $('#autoBienes_avisos').val(0);

            $('#autoBienes_bomberos').attr('readonly', true);
            $('#autoBienes_bomberos').val(0);

            $('#autoServicios_indcio').attr('readonly', true);
            $('#autoServicios_indcio').val(0);

            $('#autoServicios_avisos').attr('readonly', true);
            $('#autoServicios_avisos').val(0);

            $('#autoServicios_bomberos').attr('readonly', true);
            $('#autoServicios_bomberos').val(0);

            $('#otrasAuto_indcio').attr('readonly', true);
            $('#otrasAuto_indcio').val(0);

            $('#otrasAuto_avisos').attr('readonly', true);
            $('#otrasAuto_avisos').val(0);

            $('#otrasAuto_bomberos').attr('readonly', true);
            $('#otrasAuto_bomberos').val(0);

            $('#menosReten_indcio').attr('readonly', true);
            $('#menosReten_indcio').val(0);

            $('#menosReten_avisos').attr('readonly', true);
            $('#menosReten_avisos').val(0);

            $('#menosReten_bomberos').attr('readonly', true);
            $('#menosReten_bomberos').val(0);

            $('#totalAuto_indcio').attr('readonly', true);
            $('#totalAuto_indcio').val(0);

            $('#totalAuto_avisos').attr('readonly', true);
            $('#totalAuto_avisos').val(0);

            $('#totalAuto_bomberos').attr('readonly', true);
            $('#totalAuto_bomberos').val(0);

            $('#autoBienes_total').attr('readonly', true);
            $('#autoBienes_total').val(0);

            $('#autoServicios_total').attr('readonly', true);
            $('#autoServicios_total').val(0);

            $('#otrasAuto_total').attr('readonly', true);
            $('#otrasAuto_total').val(0);

            $('#menosReten_total').attr('readonly', true);
            $('#menosReten_total').val(0);

            $('#totalAuto_total').attr('readonly', true);
            $('#totalAuto_total').val(0);

            $('#menosRetenBie_indcio').attr('readonly', true);
            $('#menosRetenBie_indcio').val(0);

            $('#menosRetenBie_avisos').attr('readonly', true);
            $('#menosRetenBie_avisos').val(0);

            $('#menosRetenBie_bomberos').attr('readonly', true);
            $('#menosRetenBie_bomberos').val(0);

            $('#menosRetenBie_total').attr('readonly', true);
            $('#menosRetenBie_total').val(0);

            $('#menosRetenSer_indcio').attr('readonly', true);
            $('#menosRetenSer_indcio').val(0);

            $('#menosRetenSer_avisos').attr('readonly', true);
            $('#menosRetenSer_avisos').val(0);

            $('#menosRetenSer_bomberos').attr('readonly', true);
            $('#menosRetenSer_bomberos').val(0);

            $('#menosRetenSer_total').attr('readonly', true);
            $('#menosRetenSer_total').val(0);

            $('#menosRetenOtras_indcio').attr('readonly', true);
            $('#menosRetenOtras_indcio').val(0);

            $('#menosRetenOtras_avisos').attr('readonly', true);
            $('#menosRetenOtras_avisos').val(0);

            $('#menosRetenOtras_bomberos').attr('readonly', true);
            $('#menosRetenOtras_bomberos').val(0);

            $('#menosRetenOtras_total').attr('readonly', true);
            $('#menosRetenOtras_total').val(0);

            $('#totalAuto_bomberos_total').attr('readonly', true);
            $('#totalAuto_bomberos_total').val(0);

            $('#totalReteYAuto_indcio').attr('readonly', true);
            $('#totalReteYAuto_indcio').val(0);

            $('#totalReteYAuto_avisos').attr('readonly', true);
            $('#totalReteYAuto_avisos').val(0);

            $('#totalReteYAuto_bomberos').attr('readonly', true);
            $('#totalReteYAuto_bomberos').val(0);

            $('#totalReteYAuto_total').attr('readonly', true);
            $('#totalReteYAuto_total').val(0);

            $('#sancion_correccion').attr('readonly', true);
            $('#sancion_correccion').val(0);

            $('#sancion_inexactitud').attr('readonly', true);
            $('#sancion_inexactitud').val(0);

            $('#sancion_extemporaneidad').attr('readonly', true);
            $('#sancion_extemporaneidad').val(0);

            $('#sancion_nodeclarar').attr('readonly', true);
            $('#sancion_nodeclarar').val(0);

            $('#total_declaracion').attr('readonly', true);
            $('#total_declaracion').val(0);

            $('#totalRetenciones_indcio').attr('readonly', true);
            $('#totalRetenciones_indcio').val(0);

            $('#totalRetenciones_avisos').attr('readonly', true);
            $('#totalRetenciones_avisos').val(0);


            $('#totalRetenciones_total').attr('readonly', true);
            $('#totalRetenciones_total').val(0);

            $('#retencionCompra_total').attr('readonly', true);
            $('#retencionCompra_total').val(0);

            $('#retencionServicios_total').attr('readonly', true);
            $('#retencionServicios_total').val(0);

            $('#retencionOtras_total').attr('readonly', true);
            $('#retencionOtras_total').val(0);

         }
          if ('<?= $this->año ?>' == '2021' && '<?= $this->clasi_agente ?>' == 'G' || '<?= $this->clasi_agente ?>' == 'C') {

            //$('#retencionCompra_bomberos').attr('readonly', true);
            //$('#retencionCompra_bomberos').val(0);

            //$('#retencionServicios_bomberos').attr('readonly', true);
            //$('#retencionServicios_bomberos').val(0);

            //$('#retencionOtras_bomberos').attr('readonly', true);
            //$('#retencionOtras_bomberos').val(0);

            $('#totalRetenciones_bomberos').attr('readonly', true);
            $('#totalRetenciones_bomberos').val(0);

            //$('#autoBienes_bomberos').attr('readonly', true);
            //$('#autoBienes_bomberos').val(0);

            //$('#autoServicios_bomberos').attr('readonly', true);
            //$('#autoServicios_bomberos').val(0);

            //$('#otrasAuto_bomberos').attr('readonly', true);
            //$('#otrasAuto_bomberos').val(0);

            $('#menosReten_bomberos').attr('readonly', true);
            $('#menosReten_bomberos').val(0);


            //$('#menosRetenBie_bomberos').attr('readonly', true);
            //$('#menosRetenBie_bomberos').val(0);

            //$('#menosRetenSer_bomberos').attr('readonly', true);
            //$('#menosRetenSer_bomberos').val(0);

            //$('#menosRetenOtras_bomberos').attr('readonly', true);
            //$('#menosRetenOtras_bomberos').val(0);

            $('#totalAuto_indcio').attr('readonly', true);
            $('#totalAuto_indcio').val(0);

            $('#totalAuto_avisos').attr('readonly', true);
            $('#totalAuto_avisos').val(0);

            $('#totalAuto_bomberos_total').attr('readonly', true);
            $('#totalAuto_bomberos_total').val(0);

            $('#totalAuto_total').attr('readonly', true);
            $('#totalAuto_total').val(0);

            $('#autoBienes_total').attr('readonly', true);
            $('#autoBienes_total').val(0);

            $('#autoServicios_total').attr('readonly', true);
            $('#autoServicios_total').val(0);

            $('#otrasAuto_total').attr('readonly', true);
            $('#otrasAuto_total').val(0);

            $('#menosRetenBie_total').attr('readonly', true);
            $('#menosRetenBie_total').val(0);

            $('#menosRetenSer_total').attr('readonly', true);
            $('#menosRetenSer_total').val(0);

            $('#menosRetenOtras_total').attr('readonly', true);
            $('#menosRetenOtras_total').val(0);

            $('#retencionCompra_total').attr('readonly', true);
            $('#retencionCompra_total').val(0);

            $('#retencionServicios_total').attr('readonly', true);
            $('#retencionServicios_total').val(0);

            $('#retencionOtras_total').attr('readonly', true);
            $('#retencionOtras_total').val(0);

            $('#totalRetenciones_total').attr('readonly', true);
            $('#totalRetenciones_total').val(0);

            $('#totalRetenciones_indcio').attr('readonly', true);
            $('#totalRetenciones_indcio').val(0);

            $('#totalRetenciones_avisos').attr('readonly', true);
            $('#totalRetenciones_avisos').val(0);

            $('#totalReteYAuto_indcio').attr('readonly', true);
            $('#totalReteYAuto_indcio').val(0);

            $('#totalReteYAuto_avisos').attr('readonly', true);
            $('#totalReteYAuto_avisos').val(0);

            $('#totalReteYAuto_bomberos').attr('readonly', true);
            $('#totalReteYAuto_bomberos').val(0);

            $('#totalReteYAuto_total').attr('readonly', true);
            $('#totalReteYAuto_total').val(0);

            $('#sancion_correccion').attr('readonly', true);
            $('#sancion_correccion').val(0);

            $('#sancion_inexactitud').attr('readonly', true);
            $('#sancion_inexactitud').val(0);

            $('#sancion_extemporaneidad').attr('readonly', true);
            $('#sancion_extemporaneidad').val(0);

            $('#sancion_nodeclarar').attr('readonly', true);
            $('#sancion_nodeclarar').val(0);

            $('#total_declaracion').attr('readonly', true);
            $('#total_declaracion').val(0);

         }

          if ('<?= $this->año ?>' == '2021' && '<?=$this->datos->RetITip ?>' == 11 
            && '<?= $this->clasi_agente ?>' != 'P' ) {

            $('#retencionCompra_bomberos').attr('readonly', true);
            $('#retencionCompra_bomberos').val(0);

            $('#retencionServicios_bomberos').attr('readonly', true);
            $('#retencionServicios_bomberos').val(0);

            $('#retencionOtras_bomberos').attr('readonly', true);
            $('#retencionOtras_bomberos').val(0);

            $('#totalRetenciones_bomberos').attr('readonly', true);
            $('#totalRetenciones_bomberos').val(0);

            //$('#autoBienes_bomberos').attr('readonly', true);
            //$('#autoBienes_bomberos').val(0);

            //$('#autoServicios_bomberos').attr('readonly', true);
            //$('#autoServicios_bomberos').val(0);

            //$('#otrasAuto_bomberos').attr('readonly', true);
            //$('#otrasAuto_bomberos').val(0);

            $('#menosReten_bomberos').attr('readonly', true);
            $('#menosReten_bomberos').val(0);


            //$('#menosRetenBie_bomberos').attr('readonly', true);
            //$('#menosRetenBie_bomberos').val(0);

            //$('#menosRetenSer_bomberos').attr('readonly', true);
            //$('#menosRetenSer_bomberos').val(0);

            //$('#menosRetenOtras_bomberos').attr('readonly', true);
            //$('#menosRetenOtras_bomberos').val(0);

            $('#totalAuto_indcio').attr('readonly', true);
            $('#totalAuto_indcio').val(0);

            $('#totalAuto_avisos').attr('readonly', true);
            $('#totalAuto_avisos').val(0);

            $('#totalAuto_bomberos_total').attr('readonly', true);
            $('#totalAuto_bomberos_total').val(0);

            $('#totalAuto_total').attr('readonly', true);
            $('#totalAuto_total').val(0);

            $('#autoBienes_total').attr('readonly', true);
            $('#autoBienes_total').val(0);

            $('#autoServicios_total').attr('readonly', true);
            $('#autoServicios_total').val(0);

            $('#otrasAuto_total').attr('readonly', true);
            $('#otrasAuto_total').val(0);

            $('#menosRetenBie_total').attr('readonly', true);
            $('#menosRetenBie_total').val(0);

            $('#menosRetenSer_total').attr('readonly', true);
            $('#menosRetenSer_total').val(0);

            $('#menosRetenOtras_total').attr('readonly', true);
            $('#menosRetenOtras_total').val(0);

            $('#retencionCompra_total').attr('readonly', true);
            $('#retencionCompra_total').val(0);

            $('#retencionServicios_total').attr('readonly', true);
            $('#retencionServicios_total').val(0);

            $('#retencionOtras_total').attr('readonly', true);
            $('#retencionOtras_total').val(0);

            $('#totalRetenciones_total').attr('readonly', true);
            $('#totalRetenciones_total').val(0);

            $('#totalRetenciones_indcio').attr('readonly', true);
            $('#totalRetenciones_indcio').val(0);

            $('#totalRetenciones_avisos').attr('readonly', true);
            $('#totalRetenciones_avisos').val(0);

            $('#totalReteYAuto_indcio').attr('readonly', true);
            $('#totalReteYAuto_indcio').val(0);

            $('#totalReteYAuto_avisos').attr('readonly', true);
            $('#totalReteYAuto_avisos').val(0);

            $('#totalReteYAuto_bomberos').attr('readonly', true);
            $('#totalReteYAuto_bomberos').val(0);

            $('#totalReteYAuto_total').attr('readonly', true);
            $('#totalReteYAuto_total').val(0);

            $('#sancion_correccion').attr('readonly', true);
            $('#sancion_correccion').val(0);

            $('#sancion_inexactitud').attr('readonly', true);
            $('#sancion_inexactitud').val(0);

            $('#sancion_extemporaneidad').attr('readonly', true);
            $('#sancion_extemporaneidad').val(0);

            $('#sancion_nodeclarar').attr('readonly', true);
            $('#sancion_nodeclarar').val(0);

            $('#total_declaracion').attr('readonly', true);
            $('#total_declaracion').val(0);

            $('#retencionCompra_indcio').attr('readonly', true);
            $('#retencionCompra_indcio').val(0);

            $('#retencionServicios_indcio').attr('readonly', true);
            $('#retencionServicios_indcio').val(0);

            $('#retencionOtras_indcio').attr('readonly', true);
            $('#retencionOtras_indcio').val(0);

            $('#retencionCompra_total').attr('readonly', true);
            $('#retencionCompra_total').val(0);

            $('#retencionServicios_total').attr('readonly', true);
            $('#retencionServicios_total').val(0);

            $('#retencionOtras_total').attr('readonly', true);
            $('#retencionOtras_total').val(0);

            $('#retencionCompra_avisos').attr('readonly', true);
            $('#retencionCompra_avisos').val(0);

            $('#retencionServicios_avisos').attr('readonly', true);
            $('#retencionServicios_avisos').val(0);
            
            $('#retencionOtras_avisos').attr('readonly', true);
            $('#retencionServicios_avisos').val(0);


           





         }

      });

      // validacion mes
      $('.group_check1').click(function() {

         if ($(this).prop('checked')) {

            mes = $(this);
            vigencia = $('#añoIca').val();
            nit = $('#documento').val();

            var hoy = new Date();
            var dia = hoy.getDate();
            var mesActual = hoy.getMonth() + 1;
            var año = hoy.getFullYear();

            if (año == vigencia) {
               if (mes.val() < mesActual) {
                  jQuery.ajax({
                     url: '<?= PROOT ?>ica/consultarDeclarC',
                     method: "POST",
                     data: {
                        'nit': nit,
                        'vigencia': vigencia,
                        'mes': mes.val()
                     },
                     success: function(resp) {
                        if (resp.success) {
                           //ACA PONGO LA SANCION

                           //$('#sancion_extemporaneidad').val(resp.sancion);
                           return;
                        } else {
                           alertMsg('Usted ya tiene declaración!', resp.mensaje, 'error', 6000);
                           mes.prop("checked", false);
                           mes.checked == false;
                           return;
                        }
                     }
                  });
               } else {
                  alertMsg('Mes incorrecto', 'Debe realizar la declaración mes vencido', 'error', 4000);
                  mes.prop("checked", false);
                  mes.checked == false;
               }
            } else {
               jQuery.ajax({
                  url: '<?= PROOT ?>ica/consultarDeclarC',
                  method: "POST",
                  data: {
                     'nit': nit,
                     'vigencia': vigencia,
                     'mes': mes.val()
                  },
                  success: function(resp) {

                     if (resp.success) {
                        //$('#sancion_extemporaneidad').val(resp.sancion);

                        return;
                     } else {
                        alertMsg('Usted ya tiene declaración!', resp.mensaje, 'error', 6000);
                        mes.prop("checked", false);
                        mes.checked == false;
                        return;
                     }
                  }
               });
            }

         }
      });

      // validacion trimestral

      $('.group_check2').click(function() {
         if ($(this).prop('checked')) {

            mes = $(this);
            vigencia = $('#añoIca').val();
            nit = $('#documento').val();
            trimestre = $(this).attr("trimestre");



            var hoy = new Date();
            var dia = hoy.getDate();
            var mesActual = hoy.getMonth() + 1;
            var año = hoy.getFullYear();
            var quarter = Math.floor((hoy.getMonth() + 3) / 3);

            //var today = new Date();
            /*var quarter = Math.floor((today.getMonth() + 3) / 3);
            Esto te da:

            Month      getMonth()  quarter
            ---------  ----------  -------
            January         0         1
            February        1         1
            March           2         1
            April           3         2
            May             4         2
            June            5         2
            July            6         3
            August          7         3
            September       8         3
            October         9         4
            November       10         4
            December       11         4*/

            if (año == vigencia) {
               if (quarter > trimestre) {
                  jQuery.ajax({
                     url: '<?= PROOT ?>ica/consultarDeclarC',
                     method: "POST",
                     data: {
                        'nit': nit,
                        'vigencia': vigencia,
                        'mes': mes.val()
                     },
                     success: function(resp) {
                        if (resp.success) {
                           //ACA PONGO LA SANCION
                           //$('#sancion_extemporaneidad').val(resp.sancion);

                           return;
                        } else {
                           alertMsg('Usted ya tiene declaración!', resp.mensaje, 'error', 6000);
                           mes.prop("checked", false);
                           mes.checked == false;
                           return;
                        }
                     }
                  });
               } else {
                  alertMsg('Trimestre incorrecto', 'Debe realizar la declaración Trimestre vencido', 'error', 4000);
                  mes.prop("checked", false);
                  mes.checked == false;
               }
            } else {
               jQuery.ajax({
                  url: '<?= PROOT ?>ica/consultarDeclarC',
                  method: "POST",
                  data: {
                     'nit': nit,
                     'vigencia': vigencia,
                     'mes': mes.val()
                  },
                  success: function(resp) {
                     if (resp.success) {
                        //$('#sancion_extemporaneidad').val(resp.sancion);
                        return;
                     } else {
                        alertMsg('Usted ya tiene declaración!', resp.mensaje, 'error', 6000);
                        mes.prop("checked", false);
                        mes.checked == false;
                        return;
                     }
                  }
               });
            }

         }
      });

      //fila 1
      $('#retencionCompra_indcio').change(function() {
         //calcular4RetPractInd();
         calcularTotalRetCompras();
         calcular4RetPractInd();
         totalAutoretencion();
         $("#total_declaracion").trigger("change");

         /*calcular4RetPractBomb();
         calcularTotalRetPrac();
         calcular4RetPractAvi();*/
      });
      $('#retencionCompra_avisos').change(function() {

         recalculoBienesIndcioAvisos();
         calcularRetAvisosVertical();
         totalAutoretencion();
         /*calcular4RetPractAvi();
         calcularTotalRetCompras();
         calcular4RetPractBomb();
         calcularTotalRetPrac();*/
      });
      //fila 2
      $('#retencionServicios_indcio').change(function() {
         //calcular4RetPractInd();
         calcularTotalRetServicios();
         calcular4RetPractInd();
         totalAutoretencion();
         /*calcular4RetPractBomb();
         calcularTotalRetPrac();
         calcular4RetPractAvi();*/
      });
      $('#retencionServicios_avisos').change(function() {

         recalculoServiciosAvisos();
         calcularRetAvisosVertical();
         totalAutoretencion();
         /*calcular4RetPractAvi();
         calcularTotalRetServicios();
         calcular4RetPractBomb();
         calcularTotalRetPrac();*/
      });
      //fila 3
      $('#retencionOtras_indcio').change(function() {
         //calcular4RetPractInd();
         calcularTotalRetOtras();
         calcular4RetPractInd();
         totalAutoretencion();
         /*calcular4RetPractBomb();
         calcularTotalRetPrac();
         calcular4RetPractAvi();*/
      });
      $('#retencionOtras_avisos').change(function() {

         recalculoOtrasAvisos();
         calcularRetAvisosVertical();
         totalAutoretencion();
         /*calcular4RetPractInd();
         calcularTotalRetOtras();
         calcular4RetPractBomb();
         calcularTotalRetPrac();*/
      });

      // filla 1 Bomberos NUEVOOOOOOOOO
      $('#retencionCompra_bomberos').change(function() {
      	  recalculoRetCompraBomberos();
      	  calcularRetBomberosVertical();
      	  totalAutoretencion();

         /*calcular4RetPractInd();
         calcularTotalRetCompras();
         calcular4RetPractBomb();
         calcularTotalRetPrac();*/
      });
      // fila 2 Bomberos Nuevo
      $('#retencionServicios_bomberos').change(function() {
      	  recalculoRetSerBomberos();
      	  calcularRetBomberosVertical();
      	  totalAutoretencion();
         /* calcular4RetPractInd();
          calcularTotalRetServicios();
          calcular4RetPractBomb();
          calcularTotalRetPrac();*/
      });
      //fila 3 Bomberos
      $('#retencionOtras_bomberos').change(function() {
      	recalculoRetOtrasBomberos();
      	calcularRetBomberosVertical();
      	 totalAutoretencion();
         /*calcular4RetPractInd();
         calcularTotalRetOtras();
         calcular4RetPractBomb();
         calcularTotalRetPrac();*/
      });
      //Fila 5
      $('#autoBienes_bomberos').change(function() {
      	recalculoAutoBienesBomberos();
      	restaMenosRetenBomberos();
        recalculartotalAuto_indcio();
        totalAutoretencion();
         /*calcular4RetPractAvi();
         calcularTotalRetCompras();
         calcular4RetPractBomb();
         calcularTotalRetPrac();*/
      });
      // fila 6
      $('#autoServicios_bomberos').change(function() {
      	recalculoAutoSerBomberos();
      	restaMenosRetenBomberos();
        recalculartotalAuto_indcio();
        totalAutoretencion();
         /* calcular4RetPractAvi();
          calcularTotalRetServicios();
          calcular4RetPractBomb();
          calcularTotalRetPrac();*/
      });
      // fila 7
      $('#otrasAuto_bomberos').change(function() {
      	recalculoAutoOtrasBomberos();
      	restaMenosRetenBomberos();
        recalculartotalAuto_indcio();
        totalAutoretencion();
         /*calcular4RetPractAvi();
         calcularTotalRetOtras();
         calcular4RetPractBomb();
         calcularTotalRetPrac();*/
      });

      // fila 8.1

      $('#menosRetenBie_bomberos').change(function() {
      	recalculoMenosRetenBienesBomberos();
      	restaMenosRetenBomberos();
        recalculartotalAuto_indcio();
        totalAutoretencion();
         
      });

      // fila 8.2

      $('#menosRetenSer_bomberos').change(function() {
      	recalculoMenosRetenServBomberos();
      	restaMenosRetenBomberos();
        recalculartotalAuto_indcio();
        totalAutoretencion();
         
      });

      // fila 8.2

      $('#menosRetenOtras_bomberos').change(function() {
      	recalculoMenosRetenOtrasBomberos();
      	restaMenosRetenBomberos();
        recalculartotalAuto_indcio();
        totalAutoretencion();
         
      });

      // fila 1 autoretencion
      $('#autoBienes_indcio').change(function() {

         calcular9AutoPractInd();
         calcularAutoBienesTotal();
         restaMenosReten();
         restaMenosRetenAvisos();
         restaMenosRetenBomberos();
         recalculartotalAuto_indcio();
         totalAutoretencion();
      });

      $('#autoServicios_indcio').change(function() {
         calcular9AutoPractInd();
         calcularAutoServiciosTotal();
         restaMenosReten();
         restaMenosRetenAvisos();
         restaMenosRetenBomberos();
         recalculartotalAuto_indcio();
         totalAutoretencion();
      });

      $('#otrasAuto_indcio').change(function() {
         calcular9AutoPractInd();
         calcularAutoOtrasTotal();
         restaMenosReten();
         restaMenosRetenAvisos();
         restaMenosRetenBomberos();
         recalculartotalAuto_indcio();
         totalAutoretencion();
      });

      // restas
      $('#menosRetenBie_indcio').change(function() {
         calcularAutoMenosReten();
         calcular81Horizontal();
         restaMenosReten();
         recalculartotalAuto_indcio();
         totalAutoretencion();
      });

      $('#menosRetenSer_indcio').change(function() {
         calcularAutoMenosReten();
         calcular82Horizontal();
         restaMenosReten();
         recalculartotalAuto_indcio();
         totalAutoretencion();
      });

      $('#menosRetenOtras_indcio').change(function() {
         calcularAutoMenosReten();
         calcular83Horizontal();
         restaMenosReten();
         recalculartotalAuto_indcio();
         totalAutoretencion();
      });

      $('#autoBienes_avisos').change(function() {
         recalcularAutoBienesAvisos();
         restaMenosRetenAvisos();
         recalculartotalAuto_indcio();
         totalAutoretencion();

      });

      $('#autoServicios_avisos').change(function() {
         recalcularAutoServiciosAvisos();
         restaMenosRetenAvisos();
         recalculartotalAuto_indcio();
         totalAutoretencion();

      });

      $('#otrasAuto_avisos').change(function() {
         recalcularAutoOtroAvisos();
         restaMenosRetenAvisos();
         recalculartotalAuto_indcio();
         totalAutoretencion();

      });

      $('#menosRetenBie_avisos').change(function() {
         recalcularMenosRetenBienAvisos();
         restaMenosRetenAvisos();
         recalculartotalAuto_indcio();
         totalAutoretencion();
      });

      $('#menosRetenSer_avisos').change(function() {
         recalcularMenosRetenServiciosAvisos();
         restaMenosRetenAvisos();
         recalculartotalAuto_indcio();
         totalAutoretencion();
      });

      $('#menosRetenOtras_avisos').change(function() {
         recalcularMenosRetenOtrosAvisos();
         restaMenosRetenAvisos();
         recalculartotalAuto_indcio();
         totalAutoretencion();
      });



      function calcular4RetPractInd() {

         var retencionCompra_indcio = 0;
         var retencionServicios_indcio = 0;
         var retencionOtras_indcio = 0;


         if ($('#retencionCompra_indcio').val() != '')
            retencionCompra_indcio = parseInt($('#retencionCompra_indcio').val());

         if ($('#retencionServicios_indcio').val() != '')
            retencionServicios_indcio = parseInt($('#retencionServicios_indcio').val());

         if ($('#retencionOtras_indcio').val() != '')
            retencionOtras_indcio = parseInt($('#retencionOtras_indcio').val());

         if (retencionCompra_indcio == '') {
            $('#retencionCompra_indcio').val(0);
         }
         if (retencionServicios_indcio == '') {
            $('#retencionServicios_indcio').val(0);
         }
         if (retencionOtras_indcio == '') {
            $('#retencionOtras_indcio').val(0);
         }

         var totalRetenciones_indcio = retencionCompra_indcio + retencionServicios_indcio + retencionOtras_indcio;
         $('#totalRetenciones_indcio').val(totalRetenciones_indcio);


         //calcular total item 10
         var totalReteYAuto_indcio = 0;
         var totalAuto_indcio = 0;

         if ($('#totalAuto_indcio').val() != '')
            totalAuto_indcio = parseInt($('#totalAuto_indcio').val());

         var totalReteYAuto_indcio = totalRetenciones_indcio + totalAuto_indcio;
         $('#totalReteYAuto_indcio').val(totalReteYAuto_indcio);
      }

      function calcularRetAvisosVertical() {
         var retencionCompra_avisos = 0;
         var retencionServicios_avisos = 0;
         var retencionOtras_avisos = 0;

         if ($('#retencionCompra_avisos').val() != '')
            retencionCompra_avisos = parseInt($('#retencionCompra_avisos').val());

         if ($('#retencionServicios_avisos').val() != '')
            retencionServicios_avisos = parseInt($('#retencionServicios_avisos').val());

         if ($('#retencionOtras_avisos').val() != '')
            retencionOtras_avisos = parseInt($('#retencionOtras_avisos').val());

         var totalRetenciones_avisos = retencionCompra_avisos + retencionServicios_avisos + retencionOtras_avisos;
         $('#totalRetenciones_avisos').val(totalRetenciones_avisos);

         //calcular total item 10
         var totalReteYAuto_avisos = 0;
         var totalAuto_avisos = 0;

         if ($('#totalAuto_avisos').val() != '')
            totalAuto_avisos = parseInt($('#totalAuto_avisos').val());

         var totalReteYAuto_avisos = totalRetenciones_avisos + totalAuto_avisos;
         $('#totalReteYAuto_avisos').val(totalReteYAuto_avisos);
      }

      function calcularRetBomberosVertical() {
         var retencionCompra_bomberos = 0;
         var retencionServicios_bomberos = 0;
         var retencionOtras_bomberos = 0;

         if ($('#retencionCompra_bomberos').val() != '')
            retencionCompra_bomberos = parseInt($('#retencionCompra_bomberos').val());

         if ($('#retencionServicios_bomberos').val() != '')
            retencionServicios_bomberos = parseInt($('#retencionServicios_bomberos').val());

         if ($('#retencionOtras_bomberos').val() != '')
            retencionOtras_bomberos = parseInt($('#retencionOtras_bomberos').val());

         var totalRetenciones_bomberos = retencionCompra_bomberos + retencionServicios_bomberos + retencionOtras_bomberos;
         $('#totalRetenciones_bomberos').val(totalRetenciones_bomberos);

         //calcular total item 10
         var totalRetenciones_bomberos = 0;
         var totalAuto_bomberos_total = 0;

         if ($('#totalRetenciones_bomberos').val() != '')
            totalRetenciones_bomberos = parseInt($('#totalRetenciones_bomberos').val());

         if ($('#totalAuto_bomberos_total').val() != '')
            totalAuto_bomberos_total = parseInt($('#totalAuto_bomberos_total').val());


         var totalReteYAuto_bomberos = totalRetenciones_bomberos + totalAuto_bomberos_total;
         $('#totalReteYAuto_bomberos').val(totalReteYAuto_bomberos);
      }

      function calcularTotalRetCompras() {
         //fila 1
         var retencionCompra_indcio = 0;
         var retencionCompra_avisos = 0;
         var retencionCompra_bomberos = 0;

         //fila 1
         if ($('#retencionCompra_indcio').val() != '')
            retencionCompra_indcio = parseInt($('#retencionCompra_indcio').val());
         if ($('#retencionCompra_avisos').val() != '')
            retencionCompra_avisos = parseInt($('#retencionCompra_avisos').val());
         if ($('#retencionCompra_bomberos').val() != '')
            retencionCompra_bomberos = parseInt($('#retencionCompra_bomberos').val());

         if ('<?= $this->año ?>' == '2021') {

            retencionCompra_avisos = Math.round(parseInt(retencionCompra_indcio) * 0.15);
            retencionCompra_bomberos = Math.round(parseInt(retencionCompra_indcio) * 0.10);

            //fila 1
            $('#retencionCompra_avisos').val(retencionCompra_avisos);
            $('#retencionCompra_bomberos').val(retencionCompra_bomberos);
            calcularRetAvisosVertical();
            calcularRetBomberosVertical();
         }

         var retencionCompra_total = retencionCompra_indcio + retencionCompra_avisos + retencionCompra_bomberos;
         $('#retencionCompra_total').val(retencionCompra_total);
         calcularTotalRetPrac();
      }

      function recalculoBienesIndcioAvisos() {

         var retencionCompra_indcio = 0;
         var retencionCompra_avisos = 0;
         var retencionCompra_bomberos = 0;
         //fila 1
         if ($('#retencionCompra_indcio').val() != '')
            retencionCompra_indcio = parseInt($('#retencionCompra_indcio').val());
         if ($('#retencionCompra_avisos').val() != '')
            retencionCompra_avisos = parseInt($('#retencionCompra_avisos').val());
         if ($('#retencionCompra_bomberos').val() != '')
            retencionCompra_bomberos = parseInt($('#retencionCompra_bomberos').val());

         if (retencionCompra_avisos == '') {
            $('#retencionCompra_avisos').val(0);

         }

         var retencionCompra_total = retencionCompra_indcio + retencionCompra_avisos + retencionCompra_bomberos;
         $('#retencionCompra_total').val(retencionCompra_total);
         calcularTotalRetPrac();



      }

      function calcularTotalRetServicios() {
         //fila 2
         var retencionServicios_indcio = 0;
         var retencionServicios_avisos = 0;
         var retencionServicios_bomberos = 0;

         //fila 2
         if ($('#retencionServicios_indcio').val() != '')
            retencionServicios_indcio = parseInt($('#retencionServicios_indcio').val());
         if ($('#retencionServicios_avisos').val() != '')
            retencionServicios_avisos = parseInt($('#retencionServicios_avisos').val());
         if ($('#retencionServicios_bomberos').val() != '')
            retencionServicios_bomberos = parseInt($('#retencionServicios_bomberos').val());

         if ('<?= $this->año ?>' == '2021') {

            retencionServicios_avisos = Math.round(parseInt(retencionServicios_indcio) * 0.15);
            retencionServicios_bomberos = Math.round(parseInt(retencionServicios_indcio) * 0.10);

            //fila 2
            $('#retencionServicios_avisos').val(retencionServicios_avisos);
            $('#retencionServicios_bomberos').val(retencionServicios_bomberos);
            calcularRetAvisosVertical();
            calcularRetBomberosVertical();
         }

         var retencionServicios_total = retencionServicios_indcio + retencionServicios_avisos + retencionServicios_bomberos;
         $('#retencionServicios_total').val(retencionServicios_total);
         calcularTotalRetPrac();
      }

      function recalculoServiciosAvisos() {

         var retencionServicios_indcio = 0;
         var retencionServicios_avisos = 0;
         var retencionServicios_bomberos = 0;

         //fila 2
         if ($('#retencionServicios_indcio').val() != '')
            retencionServicios_indcio = parseInt($('#retencionServicios_indcio').val());
         if ($('#retencionServicios_avisos').val() != '')
            retencionServicios_avisos = parseInt($('#retencionServicios_avisos').val());
         if ($('#retencionServicios_bomberos').val() != '')
            retencionServicios_bomberos = parseInt($('#retencionServicios_bomberos').val());

         if (retencionServicios_avisos == '') {
            $('#retencionServicios_avisos').val(0);

         }

         var retencionServicios_total = retencionServicios_indcio + retencionServicios_avisos + retencionServicios_bomberos;
         $('#retencionServicios_total').val(retencionServicios_total);
         calcularTotalRetPrac();



      }

      function calcularTotalRetOtras() {
         //fila 3
         var retencionOtras_indcio = 0;
         var retencionOtras_avisos = 0;
         var retencionOtras_bomberos = 0;

         //fila 3
         if ($('#retencionOtras_indcio').val() != '')
            retencionOtras_indcio = parseInt($('#retencionOtras_indcio').val());
         if ($('#retencionOtras_avisos').val() != '')
            retencionOtras_avisos = parseInt($('#retencionOtras_avisos').val());
         if ($('#retencionOtras_bomberos').val() != '')
            retencionOtras_bomberos = parseInt($('#retencionOtras_bomberos').val());

         if ('<?= $this->año ?>' == '2021') {

            retencionOtras_avisos = Math.round(parseInt(retencionOtras_indcio) * 0.15);
            retencionOtras_bomberos = Math.round(parseInt(retencionOtras_indcio) * 0.10);

            //fila 3
            $('#retencionOtras_avisos').val(retencionOtras_avisos);
            $('#retencionOtras_bomberos').val(retencionOtras_bomberos);
            calcularRetAvisosVertical();
            calcularRetBomberosVertical();

         }

         var retencionOtras_total = retencionOtras_indcio + retencionOtras_avisos + retencionOtras_bomberos;
         $('#retencionOtras_total').val(retencionOtras_total);
         calcularTotalRetPrac();
      }

      function recalculoOtrasAvisos() {

         var retencionOtras_indcio = 0;
         var retencionOtras_avisos = 0;
         var retencionOtras_bomberos = 0;

         //fila 3
         if ($('#retencionOtras_indcio').val() != '')
            retencionOtras_indcio = parseInt($('#retencionOtras_indcio').val());
         if ($('#retencionOtras_avisos').val() != '')
            retencionOtras_avisos = parseInt($('#retencionOtras_avisos').val());
         if ($('#retencionOtras_bomberos').val() != '')
            retencionOtras_bomberos = parseInt($('#retencionOtras_bomberos').val());

         if (retencionOtras_avisos == '') {
            $('#retencionOtras_avisos').val(0);

         }



         var retencionOtras_total = retencionOtras_indcio + retencionOtras_avisos + retencionOtras_bomberos;
         $('#retencionOtras_total').val(retencionOtras_total);
         calcularTotalRetPrac();


      }

      function calcularTotalRetPrac() {
         var retencionCompra_total = 0;
         var retencionServicios_total = 0;
         var retencionOtras_total = 0;

         if ($('#retencionCompra_total').val() != '')
            retencionCompra_total = parseInt($('#retencionCompra_total').val());
         if ($('#retencionServicios_total').val() != '')
            retencionServicios_total = parseInt($('#retencionServicios_total').val());
         if ($('#retencionOtras_total').val() != '')
            retencionOtras_total = parseInt($('#retencionOtras_total').val());

         var totalRetenciones_total = retencionCompra_total + retencionServicios_total + retencionOtras_total;
         $('#totalRetenciones_total').val(totalRetenciones_total);

         //calcular total item 10
         /*var totalAuto_total = 0;

          if ($('#totalAuto_total').val() != '')
             totalAuto_total = parseInt($('#totalAuto_total').val());

          var totalReteYAuto_total = totalRetenciones_total + totalAuto_total;
          $('#totalReteYAuto_total').val(totalReteYAuto_total);*/
      }

      // SECCION AUTO RETENECIONES ////////////////////////////////////////////////////

      function calcular9AutoPractInd() {
         var autoBienes_indcio = 0;
         var autoServicios_indcio = 0;
         var otrasAuto_indcio = 0;

         if ($('#autoBienes_indcio').val() != '')
            autoBienes_indcio = parseInt($('#autoBienes_indcio').val());
         if ($('#autoServicios_indcio').val() != '')
            autoServicios_indcio = parseInt($('#autoServicios_indcio').val());
         if ($('#otrasAuto_indcio').val() != '')
            otrasAuto_indcio = parseInt($('#otrasAuto_indcio').val());

         var totalAuto_indcio = autoBienes_indcio + autoServicios_indcio + otrasAuto_indcio;
         $('#totalAuto_indcio').val(totalAuto_indcio);
         $('#totales_auto_indcio').val(totalAuto_indcio);

         //calcular total item 10
         var totalReteYAuto_indcio = 0;
         var totalAuto_indcio = 0;
         var totalRetenciones_indcio = 0;

         if ($('#totalAuto_indcio').val() != '')
            totalAuto_indcio = parseInt($('#totalAuto_indcio').val());

         if ($('#totalRetenciones_indcio').val() != '')
            totalRetenciones_indcio = parseInt($('#totalRetenciones_indcio').val());

         var totalReteYAuto_indcio = totalRetenciones_indcio + totalAuto_indcio;
         $('#totalReteYAuto_indcio').val(totalReteYAuto_indcio);
      }

      function calcularAutoBienesTotal() {

         var autoBienes_indcio = 0;
         var autoBienes_avisos = 0;
         var autoBienes_bomberos = 0;

         //fila 5
         if ($('#autoBienes_indcio').val() != '')
            autoBienes_indcio = parseInt($('#autoBienes_indcio').val());
         if ($('#autoBienes_avisos').val() != '')
            autoBienes_avisos = parseInt($('#autoBienes_avisos').val());
         if ($('#autoBienes_bomberos').val() != '')
            autoBienes_bomberos = parseInt($('#autoBienes_bomberos').val());

         if ('<?= $this->año ?>' == '2021') {
            //fila 5

            autoBienes_avisos = Math.round(parseInt(autoBienes_indcio) * 0.15);
            autoBienes_bomberos = Math.round(parseInt(autoBienes_indcio) * 0.10);

            //fila 5
            $('#autoBienes_avisos').val(autoBienes_avisos);
            $('#autoBienes_bomberos').val(autoBienes_bomberos);

            sumatoriaVerticalAvisos();
            sumatoriaVerticalBomberos();
         }


         var autoBienes_total = autoBienes_indcio + autoBienes_avisos + autoBienes_bomberos;
         $('#autoBienes_total').val(autoBienes_total);

      }

      function calcularAutoServiciosTotal() {

         var autoServicios_indcio = 0;
         var autoServicios_avisos = 0;
         var autoServicios_bomberos = 0;

         //fila 5
         if ($('#autoServicios_indcio').val() != '')
            autoServicios_indcio = parseInt($('#autoServicios_indcio').val());
         if ($('#autoServicios_avisos').val() != '')
            autoServicios_avisos = parseInt($('#autoServicios_avisos').val());
         if ($('#autoServicios_bomberos').val() != '')
            autoServicios_bomberos = parseInt($('#autoServicios_bomberos').val());

         if ('<?= $this->año ?>' == '2021') { //fila 5            
            autoServicios_avisos = Math.round(parseInt(autoServicios_indcio) * 0.15);
            autoServicios_bomberos = Math.round(parseInt(autoServicios_indcio) * 0.10);
            //fila 5
            $('#autoServicios_avisos').val(autoServicios_avisos);
            $('#autoServicios_bomberos').val(autoServicios_bomberos);
            sumatoriaVerticalAvisos();
            sumatoriaVerticalBomberos();
         }

         var autoServicios_total = autoServicios_indcio + autoServicios_avisos + autoServicios_bomberos;
         $('#autoServicios_total').val(autoServicios_total);
      }

      function calcularAutoOtrasTotal() {

         var otrasAuto_indcio = 0;
         var otrasAuto_avisos = 0;
         var otrasAuto_bomberos = 0;

         //fila 5
         if ($('#otrasAuto_indcio').val() != '')
            otrasAuto_indcio = parseInt($('#otrasAuto_indcio').val());
         if ($('#otrasAuto_avisos').val() != '')
            otrasAuto_avisos = parseInt($('#otrasAuto_avisos').val());
         if ($('#otrasAuto_bomberos').val() != '')
            otrasAuto_bomberos = parseInt($('#otrasAuto_bomberos').val());

         if ('<?= $this->año ?>' == '2021') {
            //fila 5

            otrasAuto_avisos = Math.round(parseInt(otrasAuto_indcio) * 0.15);
            otrasAuto_bomberos = Math.round(parseInt(otrasAuto_indcio) * 0.10);

            //fila 5
            $('#otrasAuto_avisos').val(otrasAuto_avisos);
            $('#otrasAuto_bomberos').val(otrasAuto_bomberos);
            sumatoriaVerticalAvisos();
            sumatoriaVerticalBomberos();
         }

         var otrasAuto_total = otrasAuto_indcio + otrasAuto_avisos + otrasAuto_bomberos;
         $('#otrasAuto_total').val(otrasAuto_total);
      }

      function calcularAutoMenosReten() {
         var menosRetenBie_indcio = 0;
         var menosRetenSer_indcio = 0;
         var menosRetenOtras_indcio = 0;


         if ($('#menosRetenBie_indcio').val() != '') {
            menosRetenBie_indcio = parseInt($('#menosRetenBie_indcio').val());
         } else {
            $('#menosRetenBie_indcio').val(0);
         }

         if ($('#menosRetenSer_indcio').val() != '') {
            menosRetenSer_indcio = parseInt($('#menosRetenSer_indcio').val());
         } else {
            $('#menosRetenSer_indcio').val(0);
         }
         if ($('#menosRetenOtras_indcio').val() != '') {
            menosRetenOtras_indcio = parseInt($('#menosRetenOtras_indcio').val());
         } else {
            $('#menosRetenOtras_indcio').val(0);
         }

         var menosReten_indcio = menosRetenBie_indcio + menosRetenSer_indcio + menosRetenOtras_indcio;
         $('#menosReten_indcio').val(menosReten_indcio);

         totalMenosRetenTotales();
      }

      function restaMenosReten() {

         var total_MenosReten = 0;
         var total_autoReten = 0;

         var total_MenosReten = parseInt($('#menosReten_indcio').val());
         var totales_auto_indcio = parseInt($('#totales_auto_indcio').val());

         /*if(total_MenosReten>totales_auto_indcio){
           alertMsg('Error en los calculos!', 'La retenciones de las casilla 8 no puede superar la sumatoria de las casillas 5+6+7, <strong> Por favor vuelva a digitar los valores de la casilla 8 </strong>' , 'error', 6000);

          $('#menosReten_indcio').val(0);
          $('#menosRetenBie_indcio').val(0);
          $('#menosRetenSer_indcio').val(0);
          $('#menosRetenOtras_indcio').val(0);
          $('#menosReten_avisos').val(0);
          $('#menosRetenBie_avisos').val(0);          
          $('#menosRetenSer_avisos').val(0);
          $('#menosReten_bomberos').val(0);
          $('#menosRetenBie_bomberos').val(0);
          $('#menosRetenSer_bomberos').val(0);
          $('#menosRetenOtras_bomberos').val(0);
          $('#menosReten_total').val(0);
          $('#menosRetenBie_total').val(0);
          $('#menosRetenOtras_total').val(0);
          $('#menosRetenOtras_avisos').val(0);
          $('#menosRetenBie_indcio').focus();
          $('#menosRetenSer_total').val(0);
          return;

         console.log($('#menosRetenBie_total').val());


         }else{}*/

         var resta_total = totales_auto_indcio - total_MenosReten;
         $('#totalAuto_indcio').val(resta_total);


         //calcular total item 10
         var totalReteYAuto_indcio = 0;
         var totalAuto_indcio = 0;
         var totalRetenciones_indcio = 0;

         if ($('#totalAuto_indcio').val() != '')
            totalAuto_indcio = parseInt($('#totalAuto_indcio').val());

         if ($('#totalRetenciones_indcio').val() != '')
            totalRetenciones_indcio = parseInt($('#totalRetenciones_indcio').val());

         var totalReteYAuto_indcio = totalRetenciones_indcio + totalAuto_indcio;
         $('#totalReteYAuto_indcio').val(totalReteYAuto_indcio);
      }

      function recalcularAutoBienesAvisos() {

         var autoBienes_indcio = 0;
         var autoBienes_avisos = 0;
         var autoBienes_bomberos = 0;

         if ($('#autoBienes_indcio').val() != '')
            autoBienes_indcio = parseInt($('#autoBienes_indcio').val());
         if ($('#autoBienes_avisos').val() != '')
            autoBienes_avisos = parseInt($('#autoBienes_avisos').val());
         if ($('#autoBienes_bomberos').val() != '')
            autoBienes_bomberos = parseInt($('#autoBienes_bomberos').val());

         if (autoBienes_avisos == '') {
            $('#autoBienes_avisos').val(0);
         }

         var autoBienes_total = autoBienes_indcio + autoBienes_avisos + autoBienes_bomberos;
         $('#autoBienes_total').val(autoBienes_total);

         sumatoriaVerticalAvisos();

      }

      function recalcularAutoServiciosAvisos() {

         var autoServicios_indcio = 0;
         var autoServicios_avisos = 0;
         var autoServicios_bomberos = 0;

         //fila 5
         if ($('#autoServicios_indcio').val() != '')
            autoServicios_indcio = parseInt($('#autoServicios_indcio').val());
         if ($('#autoServicios_avisos').val() != '')
            autoServicios_avisos = parseInt($('#autoServicios_avisos').val());
         if ($('#autoServicios_bomberos').val() != '')
            autoServicios_bomberos = parseInt($('#autoServicios_bomberos').val());

         if (autoServicios_avisos == '') {
            $('#autoServicios_avisos').val(0);
         }

         var autoServicios_total = autoServicios_indcio + autoServicios_avisos + autoServicios_bomberos;
         $('#autoServicios_total').val(autoServicios_total);

         sumatoriaVerticalAvisos();

      }

      function recalcularAutoOtroAvisos() {

         var otrasAuto_indcio = 0;
         var otrasAuto_avisos = 0;
         var otrasAuto_bomberos = 0;

         //fila 5
         if ($('#otrasAuto_indcio').val() != '')
            otrasAuto_indcio = parseInt($('#otrasAuto_indcio').val());
         if ($('#otrasAuto_avisos').val() != '')
            otrasAuto_avisos = parseInt($('#otrasAuto_avisos').val());
         if ($('#otrasAuto_bomberos').val() != '')
            otrasAuto_bomberos = parseInt($('#otrasAuto_bomberos').val());


         if (otrasAuto_avisos == '') {
            $('#otrasAuto_avisos').val(0);
         }


         var otrasAuto_total = otrasAuto_indcio + otrasAuto_avisos + otrasAuto_bomberos;
         $('#otrasAuto_total').val(otrasAuto_total);

         sumatoriaVerticalAvisos();

      }

      function recalculartotalAuto_indcio() {

         var totalAuto_indcio = 0;
         var totalAuto_avisos = 0;
         var totalAuto_bomberos_total = 0;

         //fila 5
         if ($('#totalAuto_indcio').val() != '')
            totalAuto_indcio = parseInt($('#totalAuto_indcio').val());
         if ($('#totalAuto_avisos').val() != '')
            totalAuto_avisos = parseInt($('#totalAuto_avisos').val());
         if ($('#totalAuto_bomberos_total').val() != '')
            totalAuto_bomberos_total = parseInt($('#totalAuto_bomberos_total').val());

         console.log(totalAuto_avisos);
         var totalAuto_total = totalAuto_indcio + totalAuto_avisos + totalAuto_bomberos_total;
         $('#totalAuto_total').val(totalAuto_total);

         //calcular total item 10
         var totalRetenciones_total = 0;

         if ($('#totalRetenciones_total').val() != '')
            totalRetenciones_total = parseInt($('#totalRetenciones_total').val());

         /*var totalReteYAuto_total = totalRetenciones_total   + totalAuto_total;
         $('#totalReteYAuto_total').val(totalReteYAuto_total);*/

      }

      function sumatoriaVerticalAvisos() {

         var autoBienes_avisos = 0;
         var autoServicios_avisos = 0;
         var otrasAuto_avisos = 0;

         //fila 5
         if ($('#autoBienes_avisos').val() != '')
            autoBienes_avisos = parseInt($('#autoBienes_avisos').val());
         if ($('#autoServicios_avisos').val() != '')
            autoServicios_avisos = parseInt($('#autoServicios_avisos').val());
         if ($('#otrasAuto_bomberos').val() != '')
            otrasAuto_avisos = parseInt($('#otrasAuto_avisos').val());

         var sumatoriaAvisos = autoBienes_avisos + autoServicios_avisos + otrasAuto_avisos;
         $('#totalAuto_avisos').val(sumatoriaAvisos);
         $('#totales_auto_avisos').val(sumatoriaAvisos);

         //calcular total item 10
         var totalRetenciones_avisos = 0;
         var totalAuto_avisos = 0;

         if ($('#totalAuto_avisos').val() != '')
            totalAuto_avisos = parseInt($('#totalAuto_avisos').val());
         if ($('#totalRetenciones_avisos').val() != '')
            totalRetenciones_avisos = parseInt($('#totalRetenciones_avisos').val());

         var totalReteYAuto_avisos = totalAuto_avisos + totalRetenciones_avisos;
         $('#totalReteYAuto_avisos').val(totalReteYAuto_avisos);
      }

      function sumatoriaVerticalBomberos() {

         var autoBienes_bomberos = 0;
         var autoServicios_bomberos = 0;
         var otrasAuto_bomberos = 0;

         //fila 5
         if ($('#autoBienes_bomberos').val() != '')
            autoBienes_bomberos = parseInt($('#autoBienes_bomberos').val());
         if ($('#autoServicios_bomberos').val() != '')
            autoServicios_bomberos = parseInt($('#autoServicios_bomberos').val());
         if ($('#otrasAuto_bomberos').val() != '')
            otrasAuto_bomberos = parseInt($('#otrasAuto_bomberos').val());

         var sumatoriaBomberos = autoBienes_bomberos + autoServicios_bomberos + otrasAuto_bomberos;
         $('#totalAuto_bomberos_total').val(sumatoriaBomberos);
         $('#totales_auto_bomberos').val(sumatoriaBomberos);

         //calcular total item 10
         var totalRetenciones_bomberos = 0;
         var totalAuto_bomberos_total = 0;

         if ($('#totalRetenciones_bomberos').val() != '')
            totalRetenciones_bomberos = parseInt($('#totalRetenciones_bomberos').val());

         if ($('#totalAuto_bomberos_total').val() != '')
            totalAuto_bomberos_total = parseInt($('#totalAuto_bomberos_total').val());

         var totalReteYAuto_bomberos = totalRetenciones_bomberos + totalAuto_bomberos_total;
         $('#totalReteYAuto_bomberos').val(totalReteYAuto_bomberos);

      }

      function calcular81Horizontal() {

         var menosRetenBie_indcio = 0;
         var menosRetenBie_avisos = 0;
         var menosRetenBie_bomberos = 0;

         //fila 5
         if ($('#menosRetenBie_indcio').val() != '')
            menosRetenBie_indcio = parseInt($('#menosRetenBie_indcio').val());
         if ($('#menosRetenBie_avisos').val() != '')
            menosRetenBie_avisos = parseInt($('#menosRetenBie_avisos').val());
         if ($('#menosRetenBie_bomberos').val() != '')
            menosRetenBie_bomberos = parseInt($('#menosRetenBie_bomberos').val());

         if ('<?= $this->año ?>' == '2021') {
            //fila 5

            menosRetenBie_avisos = Math.round(parseInt(menosRetenBie_indcio) * 0.15);
            menosRetenBie_bomberos = Math.round(parseInt(menosRetenBie_indcio) * 0.10);

            //fila 5
            $('#menosRetenBie_avisos').val(menosRetenBie_avisos);
            $('#menosRetenBie_bomberos').val(menosRetenBie_bomberos);
            sumatoriaVerticalMenosRetenAvisos();
            sumatoriaVerticalMenosRetenBomberos();
            restaMenosRetenAvisos();
            restaMenosRetenBomberos();

         }

         var totalMenosAuto81 = menosRetenBie_indcio + menosRetenBie_avisos + menosRetenBie_bomberos;
         $('#menosRetenBie_total').val(totalMenosAuto81);

      }

      function calcular82Horizontal() {

         var menosRetenSer_indcio = 0;
         var menosRetenSer_avisos = 0;
         var menosRetenSer_bomberos = 0;

         //fila 5
         if ($('#menosRetenSer_indcio').val() != '')
            menosRetenSer_indcio = parseInt($('#menosRetenSer_indcio').val());
         if ($('#menosRetenSer_avisos').val() != '')
            menosRetenSer_avisos = parseInt($('#menosRetenSer_avisos').val());
         if ($('#menosRetenSer_bomberos').val() != '')
            menosRetenSer_bomberos = parseInt($('#menosRetenSer_bomberos').val());

         if ('<?= $this->año ?>' == '2021') {
            //fila 5

            menosRetenSer_avisos = Math.round(parseInt(menosRetenSer_indcio) * 0.15);
            menosRetenSer_bomberos = Math.round(parseInt(menosRetenSer_indcio) * 0.10);

            //fila 5
            $('#menosRetenSer_avisos').val(menosRetenSer_avisos);
            $('#menosRetenSer_bomberos').val(menosRetenSer_bomberos);
            sumatoriaVerticalMenosRetenAvisos();
            sumatoriaVerticalMenosRetenBomberos();
            restaMenosRetenAvisos();
            restaMenosRetenBomberos();
         }

         var totalMenosAuto82 = menosRetenSer_indcio + menosRetenSer_avisos + menosRetenSer_bomberos;
         $('#menosRetenSer_total').val(totalMenosAuto82);


      }

      function calcular83Horizontal() {

         var menosRetenOtras_indcio = 0;
         var menosRetenOtras_avisos = 0;
         var menosRetenOtras_bomberos = 0;

         //fila 5
         if ($('#menosRetenOtras_indcio').val() != '')
            menosRetenOtras_indcio = parseInt($('#menosRetenOtras_indcio').val());
         if ($('#menosRetenOtras_avisos').val() != '')
            menosRetenOtras_avisos = parseInt($('#menosRetenOtras_avisos').val());
         if ($('#menosRetenOtras_bomberos').val() != '')
            menosRetenOtras_bomberos = parseInt($('#menosRetenOtras_bomberos').val());

         if ('<?= $this->año ?>' == '2021') {
            //fila 5

            menosRetenOtras_avisos = Math.round(parseInt(menosRetenOtras_indcio) * 0.15);
            menosRetenOtras_bomberos = Math.round(parseInt(menosRetenOtras_indcio) * 0.10);

            //fila 5
            $('#menosRetenOtras_avisos').val(menosRetenOtras_avisos);
            $('#menosRetenOtras_bomberos').val(menosRetenOtras_bomberos);
            sumatoriaVerticalMenosRetenAvisos();
            sumatoriaVerticalMenosRetenBomberos();
            restaMenosRetenAvisos();
            restaMenosRetenBomberos();

         }

         var totalMenosAuto83 = menosRetenOtras_indcio + menosRetenOtras_avisos + menosRetenOtras_bomberos;
         $('#menosRetenOtras_total').val(totalMenosAuto83);


      }

      function recalcularMenosRetenBienAvisos() {

         var menosRetenBie_indcio = 0;
         var menosRetenBie_avisos = 0;
         var menosRetenBie_bomberos = 0;

         //fila 5
         if ($('#menosRetenBie_indcio').val() != '')
            menosRetenBie_indcio = parseInt($('#menosRetenBie_indcio').val());
         if ($('#menosRetenBie_avisos').val() != '')
            menosRetenBie_avisos = parseInt($('#menosRetenBie_avisos').val());
         if ($('#menosRetenBie_bomberos').val() != '')
            menosRetenBie_bomberos = parseInt($('#menosRetenBie_bomberos').val());

         if (menosRetenBie_avisos == '') {
            $('#menosRetenBie_avisos').val(0);
         }



         var totalMenosAuto81 = menosRetenBie_indcio + menosRetenBie_avisos + menosRetenBie_bomberos;
         $('#menosRetenBie_total').val(totalMenosAuto81);
         sumatoriaVerticalMenosRetenAvisos();

      }

      function recalcularMenosRetenServiciosAvisos() {

         var menosRetenSer_indcio = 0;
         var menosRetenSer_avisos = 0;
         var menosRetenSer_bomberos = 0;

         //fila 5
         if ($('#menosRetenSer_indcio').val() != '')
            menosRetenSer_indcio = parseInt($('#menosRetenSer_indcio').val());
         if ($('#menosRetenSer_avisos').val() != '')
            menosRetenSer_avisos = parseInt($('#menosRetenSer_avisos').val());
         if ($('#menosRetenSer_bomberos').val() != '')
            menosRetenSer_bomberos = parseInt($('#menosRetenSer_bomberos').val());

         if (menosRetenSer_avisos == '') {
            $('#menosRetenSer_avisos').val(0);
         }

         var totalMenosAuto82 = menosRetenSer_indcio + menosRetenSer_avisos + menosRetenSer_bomberos;
         $('#menosRetenSer_total').val(totalMenosAuto82);
         sumatoriaVerticalMenosRetenAvisos();

      }

      function recalcularMenosRetenOtrosAvisos() {

         var menosRetenOtras_indcio = 0;
         var menosRetenOtras_avisos = 0;
         var menosRetenOtras_bomberos = 0;

         //fila 5
         if ($('#menosRetenOtras_indcio').val() != '')
            menosRetenOtras_indcio = parseInt($('#menosRetenOtras_indcio').val());
         if ($('#menosRetenOtras_avisos').val() != '')
            menosRetenOtras_avisos = parseInt($('#menosRetenOtras_avisos').val());
         if ($('#menosRetenOtras_bomberos').val() != '')
            menosRetenOtras_bomberos = parseInt($('#menosRetenOtras_bomberos').val());

         if (menosRetenOtras_avisos == '') {
            $('#menosRetenOtras_avisos').val(0);
         }


         var totalMenosAuto83 = menosRetenOtras_indcio + menosRetenOtras_avisos + menosRetenOtras_bomberos;
         $('#menosRetenOtras_total').val(totalMenosAuto83);
         sumatoriaVerticalMenosRetenAvisos();

      }

      function sumatoriaVerticalMenosRetenAvisos() {

         var menosRetenBie_avisos = 0;
         var menosRetenSer_avisos = 0;
         var menosRetenOtras_avisos = 0;

         //fila 5
         if ($('#menosRetenBie_avisos').val() != '')
            menosRetenBie_avisos = parseInt($('#menosRetenBie_avisos').val());
         if ($('#menosRetenSer_avisos').val() != '')
            menosRetenSer_avisos = parseInt($('#menosRetenSer_avisos').val());
         if ($('#menosRetenOtras_avisos').val() != '')
            menosRetenOtras_avisos = parseInt($('#menosRetenOtras_avisos').val());

         var sumatoriaMenosRetenAvisos = menosRetenBie_avisos + menosRetenSer_avisos + menosRetenOtras_avisos;
         $('#menosReten_avisos').val(sumatoriaMenosRetenAvisos);
         totalMenosRetenTotales();


      }

      function sumatoriaVerticalMenosRetenBomberos() {

         var menosRetenBie_bomberos = 0;
         var menosRetenSer_bomberos = 0;
         var menosRetenOtras_bomberos = 0;

         //fila 5
         if ($('#menosRetenBie_bomberos').val() != '')
            menosRetenBie_bomberos = parseInt($('#menosRetenBie_bomberos').val());
         if ($('#menosRetenSer_bomberos').val() != '')
            menosRetenSer_bomberos = parseInt($('#menosRetenSer_bomberos').val());
         if ($('#menosRetenOtras_bomberos').val() != '')
            menosRetenOtras_bomberos = parseInt($('#menosRetenOtras_bomberos').val());

         var sumatoriaMenosRetenBomberos = menosRetenBie_bomberos + menosRetenSer_bomberos + menosRetenOtras_bomberos;
         $('#menosReten_bomberos').val(sumatoriaMenosRetenBomberos);
         totalMenosRetenTotales();


      }

      function restaMenosRetenAvisos() {

         var total_MenosRetenAvisos = 0;
         var total_autoRetenAvisos = 0;

         var total_MenosRetenAvisos = parseInt($('#menosReten_avisos').val());
         var total_autoRetenAvisos = parseInt($('#totales_auto_avisos').val());

         /*if(total_MenosRetenAvisos>total_autoRetenAvisos){

         alertMsg('Error en los calculos!', 'La retenciones de las casilla 8 no puede superar la sumatoria de las casillas 5+6+7 <strong> Por favor vuelva a digitar los valores de la casilla 8 </strong>', 'error', 6000);

          $('#menosReten_indcio').val(0);
          $('#menosRetenBie_indcio').val(0);
          $('#menosRetenSer_indcio').val(0);
          $('#menosRetenOtras_indcio').val(0);
          $('#menosReten_avisos').val(0);
          $('#menosRetenBie_avisos').val(0);          
          $('#menosRetenSer_avisos').val(0);
          $('#menosReten_bomberos').val(0);
          $('#menosRetenBie_bomberos').val(0);
          $('#menosRetenSer_bomberos').val(0);
          $('#menosRetenOtras_bomberos').val(0);
          $('#menosReten_total').val(0);
          $('#menosRetenBie_total').val(0);
          $('#menosRetenOtras_total').val(0);
          $('#menosRetenOtras_avisos').val(0);
          $('#menosRetenSer_total').val(0);
          $('#menosRetenBie_indcio').focus();
          return;
          console.log($('#menosRetenBie_total').val());



         }else{}*/
         var resta_total_avisos = total_autoRetenAvisos - total_MenosRetenAvisos;
         $('#totalAuto_avisos').val(resta_total_avisos);


         //calcular total item 10
         var totalRetenciones_avisos = 0;
         var totalAuto_avisos = 0;

         if ($('#totalAuto_avisos').val() != '')
            totalAuto_avisos = parseInt($('#totalAuto_avisos').val());
         if ($('#totalRetenciones_avisos').val() != '')
            totalRetenciones_avisos = parseInt($('#totalRetenciones_avisos').val());

         var totalReteYAuto_avisos = totalAuto_avisos + totalRetenciones_avisos;
         $('#totalReteYAuto_avisos').val(totalReteYAuto_avisos);

      }

      function restaMenosRetenBomberos() {

         var menosReten_bomberos = 0;
         var totales_auto_bomberos = 0;

         var menosReten_bomberos = parseInt($('#menosReten_bomberos').val());
         var totales_auto_bomberos = parseInt($('#totales_auto_bomberos').val());

         /*if(menosReten_bomberos> totales_auto_bomberos){

            alertMsg('Error en los calculos!', 'La retenciones de las casilla 8 no puede superar la sumatoria de las casillas 5+6+7 <strong> Por favor vuelva a digitar los valores de la casilla 8 </strong>', 'error', 6000);

          $('#menosReten_indcio').val(0);
          $('#menosRetenBie_indcio').val(0);
          $('#menosRetenSer_indcio').val(0);
          $('#menosRetenOtras_indcio').val(0);
          $('#menosReten_avisos').val(0);
          $('#menosRetenBie_avisos').val(0);          
          $('#menosRetenSer_avisos').val(0);
          $('#menosReten_bomberos').val(0);
          $('#menosRetenBie_bomberos').val(0);
          $('#menosRetenSer_bomberos').val(0);
          $('#menosRetenOtras_bomberos').val(0);
          $('#menosReten_total').val(0);
          $('#menosRetenBie_total').val(0);
          $('#menosRetenOtras_total').val(0);
          $('#menosRetenOtras_avisos').val(0);
          $('#menosRetenSer_total').val(0);
          $('#menosRetenBie_indcio').focus();
          return;
          console.log($('#menosRetenBie_total').val());

         }else{}*/

         var resta_total_bomberos = totales_auto_bomberos - menosReten_bomberos;
         $('#totalAuto_bomberos_total').val(resta_total_bomberos);


         //calcular total item 10
         var totalAuto_bomberos = 0;
         var totalAuto_bomberos_total = 0;

         if ($('#totalRetenciones_bomberos').val() != '')
            totalRetenciones_bomberos = parseInt($('#totalRetenciones_bomberos').val());

         if ($('#totalAuto_bomberos_total').val() != '')
            totalAuto_bomberos_total = parseInt($('#totalAuto_bomberos_total').val());

         var totalReteYAuto_bomberos = totalRetenciones_bomberos + totalAuto_bomberos_total;
         $('#totalReteYAuto_bomberos').val(totalReteYAuto_bomberos);
      }

      function totalMenosRetenTotales() {

         var menosReten_indcio = 0;
         var menosReten_avisos = 0;
         var menosReten_bomberos = 0;

         //fila 8
         if ($('#menosReten_indcio').val() != '')
            menosReten_indcio = parseInt($('#menosReten_indcio').val());
         if ($('#menosReten_avisos').val() != '')
            menosReten_avisos = parseInt($('#menosReten_avisos').val());
         if ($('#menosReten_bomberos').val() != '')
            menosReten_bomberos = parseInt($('#menosReten_bomberos').val());

         var totalMenosRetenTotal = menosReten_indcio + menosReten_avisos + menosReten_bomberos;
         $('#menosReten_total').val(totalMenosRetenTotal);

      }

      function totalAutoretencion() {

         var totalRetenciones_total = 0;
         var totalAuto_total = 0;

         if ($('#totalRetenciones_total').val() != '')
            totalRetenciones_total = parseInt($('#totalRetenciones_total').val());
         if ($('#totalAuto_total').val() != '')
            totalAuto_total = parseInt($('#totalAuto_total').val());

         var totalFila10 = totalRetenciones_total + totalAuto_total;
         $('#totalReteYAuto_total').val(totalFila10);

         totalDeclaracion();


      }

      function totalDeclaracion() {

         var sancion_correccion = 0;
         var sancion_inexactitud = 0;
         var sancion_extemporaneidad = 0;
         var totalReteYAuto_total = 0;
         var sancion_nodeclarar = 0;


         if ($('#sancion_correccion').val() != '')
            sancion_correccion = parseInt($('#sancion_correccion').val());
         if ($('#sancion_inexactitud').val() != '')
            sancion_inexactitud = parseInt($('#sancion_inexactitud').val());
         if ($('#sancion_extemporaneidad').val() != '')
            sancion_extemporaneidad = parseInt($('#sancion_extemporaneidad').val());
         if ($('#sancion_nodeclarar').val() != '')
            sancion_nodeclarar = parseInt($('#sancion_nodeclarar').val());
         if ($('#totalReteYAuto_total').val() != '')
            totalReteYAuto_total = parseInt($('#totalReteYAuto_total').val());

         var total_declaracion = sancion_correccion + sancion_extemporaneidad + sancion_inexactitud + sancion_nodeclarar + totalReteYAuto_total;
         var valor_aproxMiles = Math.round(total_declaracion / 1000) * 1000;

         $('#total_declaracion').val(valor_aproxMiles);

      }

      // BOMBEROSSS NUEVOOO

      // BOMBEROS 
       function recalculoRetCompraBomberos(){

       	 var retencionCompra_indcio = 0;
         var retencionCompra_avisos = 0;
         var retencionCompra_bomberos = 0;
         //fila 1
         if ($('#retencionCompra_indcio').val() != '')
            retencionCompra_indcio = parseInt($('#retencionCompra_indcio').val());
         if ($('#retencionCompra_avisos').val() != '')
            retencionCompra_avisos = parseInt($('#retencionCompra_avisos').val());
         if ($('#retencionCompra_bomberos').val() != '')
            retencionCompra_bomberos = parseInt($('#retencionCompra_bomberos').val());

         if (retencionCompra_bomberos == '') {
            $('#retencionCompra_bomberos').val(0);

         }

         var retencionCompra_total = retencionCompra_indcio + retencionCompra_avisos + retencionCompra_bomberos;
         $('#retencionCompra_total').val(retencionCompra_total);
         calcularTotalRetPrac();


       }

      function recalculoRetSerBomberos(){

      	 var retencionServicios_indcio = 0;
         var retencionServicios_avisos = 0;
         var retencionServicios_bomberos = 0;

         //fila 2
         if ($('#retencionServicios_indcio').val() != '')
            retencionServicios_indcio = parseInt($('#retencionServicios_indcio').val());
         if ($('#retencionServicios_avisos').val() != '')
            retencionServicios_avisos = parseInt($('#retencionServicios_avisos').val());
         if ($('#retencionServicios_bomberos').val() != '')
            retencionServicios_bomberos = parseInt($('#retencionServicios_bomberos').val());

         if (retencionServicios_bomberos == '') {
            $('#retencionServicios_bomberos').val(0);

         }

         var retencionServicios_total = retencionServicios_indcio + retencionServicios_avisos + retencionServicios_bomberos;
         $('#retencionServicios_total').val(retencionServicios_total);
         calcularTotalRetPrac();


       }

       function recalculoRetOtrasBomberos(){

       	var retencionOtras_indcio = 0;
         var retencionOtras_avisos = 0;
         var retencionOtras_bomberos = 0;

         //fila 3
         if ($('#retencionOtras_indcio').val() != '')
            retencionOtras_indcio = parseInt($('#retencionOtras_indcio').val());
         if ($('#retencionOtras_avisos').val() != '')
            retencionOtras_avisos = parseInt($('#retencionOtras_avisos').val());
         if ($('#retencionOtras_bomberos').val() != '')
            retencionOtras_bomberos = parseInt($('#retencionOtras_bomberos').val());

         if (retencionOtras_bomberos == '') {
            $('#retencionOtras_bomberos').val(0);

         }

         var retencionOtras_total = retencionOtras_indcio + retencionOtras_avisos + retencionOtras_bomberos;
         $('#retencionOtras_total').val(retencionOtras_total);
         calcularTotalRetPrac();


       }

       function recalculoAutoBienesBomberos(){

       	 var autoBienes_indcio = 0;
         var autoBienes_avisos = 0;
         var autoBienes_bomberos = 0;

         if ($('#autoBienes_indcio').val() != '')
            autoBienes_indcio = parseInt($('#autoBienes_indcio').val());
         if ($('#autoBienes_avisos').val() != '')
            autoBienes_avisos = parseInt($('#autoBienes_avisos').val());
         if ($('#autoBienes_bomberos').val() != '')
            autoBienes_bomberos = parseInt($('#autoBienes_bomberos').val());

         if (autoBienes_bomberos == '') {
            $('#autoBienes_bomberos').val(0);
         }

         var autoBienes_total = autoBienes_indcio + autoBienes_avisos + autoBienes_bomberos;
         $('#autoBienes_total').val(autoBienes_total);

         sumatoriaVerticalBomberos();

       }

       function recalculoAutoSerBomberos(){

       	var autoServicios_indcio = 0;
         var autoServicios_avisos = 0;
         var autoServicios_bomberos = 0;

         //fila 5
         if ($('#autoServicios_indcio').val() != '')
            autoServicios_indcio = parseInt($('#autoServicios_indcio').val());
         if ($('#autoServicios_avisos').val() != '')
            autoServicios_avisos = parseInt($('#autoServicios_avisos').val());
         if ($('#autoServicios_bomberos').val() != '')
            autoServicios_bomberos = parseInt($('#autoServicios_bomberos').val());

         if (autoServicios_bomberos == '') {
            $('#autoServicios_bomberos').val(0);
         }

         var autoServicios_total = autoServicios_indcio + autoServicios_avisos + autoServicios_bomberos;
         $('#autoServicios_total').val(autoServicios_total);
          sumatoriaVerticalBomberos();

       }

       function recalculoAutoOtrasBomberos(){

       	var otrasAuto_indcio = 0;
         var otrasAuto_avisos = 0;
         var otrasAuto_bomberos = 0;

         //fila 5
         if ($('#otrasAuto_indcio').val() != '')
            otrasAuto_indcio = parseInt($('#otrasAuto_indcio').val());
         if ($('#otrasAuto_avisos').val() != '')
            otrasAuto_avisos = parseInt($('#otrasAuto_avisos').val());
         if ($('#otrasAuto_bomberos').val() != '')
            otrasAuto_bomberos = parseInt($('#otrasAuto_bomberos').val());


         if (otrasAuto_bomberos == '') {
            $('#otrasAuto_bomberos').val(0);
         }


         var otrasAuto_total = otrasAuto_indcio + otrasAuto_avisos + otrasAuto_bomberos;
         $('#otrasAuto_total').val(otrasAuto_total);
         sumatoriaVerticalBomberos();



       }

       function recalculoMenosRetenBienesBomberos(){

       	 var menosRetenBie_indcio = 0;
         var menosRetenBie_avisos = 0;
         var menosRetenBie_bomberos = 0;

         //fila 5
         if ($('#menosRetenBie_indcio').val() != '')
            menosRetenBie_indcio = parseInt($('#menosRetenBie_indcio').val());
         if ($('#menosRetenBie_avisos').val() != '')
            menosRetenBie_avisos = parseInt($('#menosRetenBie_avisos').val());
         if ($('#menosRetenBie_bomberos').val() != '')
            menosRetenBie_bomberos = parseInt($('#menosRetenBie_bomberos').val());

         if (menosRetenBie_bomberos == '') {
            $('#menosRetenBie_bomberos').val(0);
         }



         var totalMenosAuto81 = menosRetenBie_indcio + menosRetenBie_avisos + menosRetenBie_bomberos;
         $('#menosRetenBie_total').val(totalMenosAuto81);
         sumatoriaVerticalMenosRetenBomberos();

       }

       function recalculoMenosRetenServBomberos(){

       	 var menosRetenSer_indcio = 0;
         var menosRetenSer_avisos = 0;
         var menosRetenSer_bomberos = 0;

         //fila 5
         if ($('#menosRetenSer_indcio').val() != '')
            menosRetenSer_indcio = parseInt($('#menosRetenSer_indcio').val());
         if ($('#menosRetenSer_avisos').val() != '')
            menosRetenSer_avisos = parseInt($('#menosRetenSer_avisos').val());
         if ($('#menosRetenSer_bomberos').val() != '')
            menosRetenSer_bomberos = parseInt($('#menosRetenSer_bomberos').val());

         if (menosRetenSer_bomberos == '') {
            $('#menosRetenSer_bomberos').val(0);
         }

         var totalMenosAuto82 = menosRetenSer_indcio + menosRetenSer_avisos + menosRetenSer_bomberos;
         $('#menosRetenSer_total').val(totalMenosAuto82);
         sumatoriaVerticalMenosRetenBomberos();


       }

       function recalculoMenosRetenOtrasBomberos(){

       	var menosRetenOtras_indcio = 0;
         var menosRetenOtras_avisos = 0;
         var menosRetenOtras_bomberos = 0;

         //fila 5
         if ($('#menosRetenOtras_indcio').val() != '')
            menosRetenOtras_indcio = parseInt($('#menosRetenOtras_indcio').val());
         if ($('#menosRetenOtras_avisos').val() != '')
            menosRetenOtras_avisos = parseInt($('#menosRetenOtras_avisos').val());
         if ($('#menosRetenOtras_bomberos').val() != '')
            menosRetenOtras_bomberos = parseInt($('#menosRetenOtras_bomberos').val());

         if (menosRetenOtras_bomberos == '') {
            $('#menosRetenOtras_bomberos').val(0);
         }


         var totalMenosAuto83 = menosRetenOtras_indcio + menosRetenOtras_avisos + menosRetenOtras_bomberos;
         $('#menosRetenOtras_total').val(totalMenosAuto83);
         sumatoriaVerticalMenosRetenBomberos();



       }
   </script>
   <?php $this->end(); ?>