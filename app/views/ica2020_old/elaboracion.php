<?php $this->start('body'); ?>


<style type="text/css">
	.aling{
		text-align: center!important;		
		padding: 0rem!important;
        overflow: hidden;

	}
	.text-vertical{
		writing-mode: vertical-rl;  
       transform:scale(-1);

	}

	
	.entrada{
		border: none!important;
		border-bottom:1px solid #5B5857!important;
	}
	.table td, .table th {
		padding: .35rem .35rem .35rem .35rem!important;
	}

	.form-group {
    margin-bottom: 0.1rem!important;
}

table{
    table-layout: fixed;
    width: 100%;
}



	
</style>
<div class="">
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
							<a style="color: #004fbf;" class="breadcrumb-text" href="#">RETENCION 2021</a>
						</div>
					</li>


				</ol>
			</nav>
		</div>
		<div class="col-md-12 pt-4">			
			<h1 class="headline-xl-govco">RETENCION 2021</h1>
			<div class="row pt-5">			
		    <div  class="col-md-12 justify-content-center">
			
			
		    
		    <form>
			<table class="table table-bordered" width="100%" cellpadding="0">

				<thead>
					<tr>						
						<th colspan="16" rowspan="3">
							<img src="<?= PROOT ?>img/logo2.png" class="img-fluid float-left mt-2" width="80px" height="60px">
							<h5 style="color:#000;" class="text-center pt-5">RETENCIÓN Y AUTORETENCION  EN LA FUENTE INDUSTRIA Y COMERCIO</h5></th>	

					</tr>

					
					
				</thead>

				<tbody>
                
					<tr>
						<td colspan="4" rowspan="3" style="vertical-align: middle;">
							<label for="AñoIca">Año*</label>
							<select class="form-control" id="AñoIca" required="required">
                                <option value="">Seleccione*</option>
								<option value="2019">2019</option>
								<option value="2020">2020</option>
								<option value="2021">2021</option>
							</select>
						</td>

						<td colspan="1" rowspan="1" class="aling">ENE
						</td>
						<td colspan="1" rowspan="1" class="aling">FEB
						</td>
						<td colspan="1" rowspan="1"  class="aling">MAR
						</td>
						<td colspan="1" rowspan="1"  class="aling">ABR
						</td>
						<td colspan="1" rowspan="1"  class="aling">MAY
						</td>
						<td colspan="1" rowspan="1"  class="aling">JUN
						</td>
						<td colspan="1" rowspan="1"  class="aling">JUL
						</td>
						<td colspan="1" rowspan="1"  class="aling">AGO
						</td>
						<td colspan="1" rowspan="1" class="aling">SEP
						</td>
						<td colspan="1" rowspan="1"  class="aling">OCT
						</td>
						<td colspan="1" rowspan="1" class="aling">NOV
						</td>
						<td colspan="1" rowspan="1" class="aling">DIC
						</td>
					</tr>
					<tr>
						<td rowspan="1" class="aling" colspan="1" style="width: 35px!important;">
							<div class="form-check form-check-inline text-center">
								  <input class="form-check-input pl-2" name="meses[]" type="checkbox" id="inlineCheckbox1" value="1"><br>
								  <label class="form-check-label" for="inlineCheckbox1">1</label>
							</div>
															
						</td>
						<td rowspan="1" class="aling" colspan="1" style="width: 35px!important;">
							<div class="form-check form-check-inline text-center">
								  <input class="form-check-input" name="meses[]" type="checkbox" id="inlineCheckbox1" value="2"><br>
								  <label class="form-check-label" for="inlineCheckbox1">2</label>
							</div>
															
						</td>
						<td rowspan="1" class="aling" colspan="1" style="width: 35px!important;">
							<div class="form-check form-check-inline text-center">
								  <input class="form-check-input" name="meses[]" type="checkbox" id="inlineCheckbox1" value="3"><br>
								  <label class="form-check-label" for="inlineCheckbox1">3</label>
							</div>
															
						</td>
						<td rowspan="1" class="aling" colspan="1" style="width: 35px!important;">
							<div class="form-check form-check-inline text-center">
								  <input class="form-check-input" name="meses[]" type="checkbox" id="inlineCheckbox1" value="4"><br>
								  <label class="form-check-label" for="inlineCheckbox1">4</label>
							</div>
															
						</td>
						<td rowspan="1" class="aling" colspan="1" style="width: 35px!important;">
							<div class="form-check form-check-inline text-center">
								  <input class="form-check-input" name="meses[]" type="checkbox" id="inlineCheckbox1" value="5"><br>
								  <label class="form-check-label" for="inlineCheckbox1">5</label>
							</div>
															
						</td>
						<td rowspan="1" class="aling" colspan="1" style="width: 35px!important;">
							<div class="form-check form-check-inline text-center">
								  <input class="form-check-input" name="meses[]" type="checkbox" id="inlineCheckbox1" value="6"><br>
								  <label class="form-check-label" for="inlineCheckbox1">6</label>
							</div>
															
						</td>
						<td rowspan="1" class="aling" colspan="1" style="width: 35px!important;">
							<div class="form-check form-check-inline text-center">
								  <input class="form-check-input" name="meses[]" type="checkbox" id="inlineCheckbox1" value="7"><br>
								  <label class="form-check-label" for="inlineCheckbox1">7</label>
							</div>
															
						</td>
						<td rowspan="1" class="aling" colspan="1" style="width: 35px!important;">
							<div class="form-check form-check-inline text-center">
								  <input class="form-check-input" name="meses[]" type="checkbox" id="inlineCheckbox1" value="8"><br>
								  <label class="form-check-label" for="inlineCheckbox1">8</label>
							</div>
															
						</td>

						<td rowspan="1" class="aling" colspan="1" style="width: 35px!important;">
							<div class="form-check form-check-inline text-center">
								  <input class="form-check-input" name="meses[]" type="checkbox" id="inlineCheckbox1" value="9"><br>
								  <label class="form-check-label" for="inlineCheckbox1">9</label>
							</div>
															
						</td>
						<td rowspan="1" class="aling" colspan="1" style="width: 35px!important;">
							<div class="form-check form-check-inline text-center">
								  <input class="form-check-input" name="meses[]" type="checkbox" id="inlineCheckbox1" value="10"><br>
								  <label class="form-check-label" for="inlineCheckbox1">10</label>
							</div>
															
						</td>
						<td rowspan="1" class="aling" colspan="1" style="width: 35px!important;">
							<div class="form-check form-check-inline text-center">
								  <input class="form-check-input" name="meses[]" type="checkbox" id="inlineCheckbox1" value="11"><br>
								  <label class="form-check-label" for="inlineCheckbox1">11</label>
							</div>
															
						</td>
						<td rowspan="1" class="aling" colspan="1" style="width: 35px!important;">
							<div class="form-check form-check-inline text-center">
								  <input class="form-check-input"  name="meses[]" type="checkbox" id="inlineCheckbox1" value="12"><br>
								  <label class="form-check-label" for="inlineCheckbox1">12</label>
							</div>
															
						</td>
						
					</tr>
                    <tr>
                        <td rowspan="1" class="" colspan="3" style="width: 35px!important;">
                            <div class="form-check form-check-inline text-center">
                                  <input class="form-check-input" name="meses[]" type="checkbox" id="inlineCheckbox1" value="13"><br>
                                  <label class="form-check-label" for="inlineCheckbox1">Primer Trimestre</label>
                            </div>
                                                            
                        </td>
                        <td rowspan="1" class="" colspan="3" style="width: 35px!important;">
                            <div class="form-check form-check-inline text-center">
                                  <input class="form-check-input" name="meses[]" type="checkbox" id="inlineCheckbox1" value="14"><br>
                                  <label class="form-check-label" for="inlineCheckbox1">Segundo Trimestre</label>
                            </div>
                                                            
                        </td>
                        <td rowspan="1" class="" colspan="3" style="width: 35px!important;">
                            <div class="form-check form-check-inline text-center">
                                  <input class="form-check-input" name="meses[]" type="checkbox" id="inlineCheckbox1" value="15"><br>
                                  <label class="form-check-label" for="inlineCheckbox1">Tercer Trimestre</label>
                            </div>
                                                            
                        </td>
                        <td rowspan="1" class="" colspan="3" style="width: 35px!important;">
                            <div class="form-check form-check-inline text-center">
                                  <input class="form-check-input" name="meses[]" type="checkbox" id="inlineCheckbox1" value="16"><br>
                                  <label class="form-check-label" for="inlineCheckbox1">Cuarto Trimestre</label>
                            </div>
                                                            
                        </td>
                        
                    </tr>

					<tr> <!------ row vacio --></tr>
					<tr>
						<td colspan="8" rowspan="2">
							<label>SELECCIONE CORRECCIÓN Y ESCRIBA EL NÚMERO DE RADICACIÓN Y FECHA DE LA DECLARACIÓN QUE CORRIGE</label>
						</td>
						<td colspan="8" rowspan="2">
							<div class="form-check form-check-inline text-center">
								  <input class="form-check-input"  name="correcion" type="checkbox" id="inlineCheckbox1" value="SI">
								  <label class="form-check-label" for="inlineCheckbox1">Corrección</label>
								  <input class="form-control ml-4 entrada" name="fecha_correccion" type="date" id="fecha_correccion">
								  <label class="form-check-label ml-1" for="fecha_correccion">Fecha declaración</label>
								  
							</div>
						</td>						
						
					</tr>
					<tr> <!------ row vacio --></tr>

					<tr>
					<td colspan="1" rowspan="10" style="width: 15px;">
						<p class="text-vertical text-center" style="padding-bottom: 240px!important;">A. DATOS GENERALES</p>
						
					</td>
						
					</tr>
					<tr>
					 <td colspan="7" rowspan="2">					 	
					 <div class="form-group">
								<label for="nombre_representante">AGENTE RETENEDOR o AUTORETENEDOR/1. NOMBRE O RAZÓN SOCIAL</label>
								<input type="text" class="form-control entrada mt-4" name="razon_social" id="razon_social" onkeypress="return Letras(event)" onchange="aMayusculas(this.value,this.id)">
							</div></td>
					 <td colspan="8" rowspan="2"><label>2. IDENTIFICACIÓN</label> 
					 <div class="form-check form-check-inline text-center ml-3">
					   <input class="form-check-input"  name="tipo_documento" type="radio" id="inlineCheckbox1" value="C.C">
					 <label class="form-check-label" for="inlineCheckbox1">C.C</label>

					 <input class="form-check-input ml-2"  name="tipo_documento" type="radio" id="inlineCheckbox2" value="NIT">
					 <label class="form-check-label" for="inlineCheckbox1">NIT</label>

					 <input class="form-check-input ml-2"  name="tipo_documento" type="radio" id="inlineCheckbox3" value="C.E">
					 <label class="form-check-label" for="inlineCheckbox3">C.E</label><br>
			  
					</div>					 
					<div class="form-check form-check-inline text-center">
						<label class="form-check-label" for="inlineCheckbox3">No:</label><br>
					<input type="text" name="documento" class="form-control entrada" id="documento" required="required" onkeypress="return Numeros(event)" minlength="5" maxlength="20">
				    
				    <label class="form-check-label" for="inlineCheckbox3">DV:</label><br>
					<input type="text" name="digito_verificacion" id="digito_verificacion" class="form-control ml-2 entrada" style="width: 25%;" onkeypress="return Numeros(event)" maxlength="2">
				  </div>			    

				   </td>				  

					</tr>
					<tr><!----- tr vacio --->  </tr>
						
					
					<tr>
					<td colspan="15" rowspan="1">				   
				    <div class="form-check form-check-inline text-center">
				    <label class="form-check-label mr-4" for="">CALIDAD DE AGENTE AUTORETENEDOR: </label><br>

					 <input class="form-check-input ml-2"  name="autoretenedor" type="radio" id="inlineCheckbox4" value="gran_contribuyente">
					 <label class="form-check-label mr-4" for="inlineCheckbox4">Gran Contribuyente </label>
					  <input class="form-check-input ml-2"  name="autoretenedor" type="radio" id="inlineCheckbox5" value="regimen_comun">
					 <label class="form-check-label mr-4" for="inlineCheckbox5">Régimen común </label><br>
				    </div>
				   </td>
						
					</tr>
					
					<tr>
						<td colspan="15" rowspan="1">

							<div class="form-check form-check-inline text-center">
								<label class="form-check-label mr-2" for="">CALIDAD DE AGENTE RETENEDOR: </label>

								<label class="form-check-label ml-2" for="inlineCheckbox5">Entidad Publica </label>
								<input class="form-check-input ml-1"  name="retenedor" type="radio" id="inlineCheckbox5" value="entidad_publica">

								<label class="form-check-label ml-2" for="inlineCheckbox6">Sist Tarj Credito-Publico</label>
								<input class="form-check-input ml-1"  name="retenedor" type="radio" id="inlineCheckbox6" value="credito_debito">

								<label class="form-check-label ml-2" for="inlineCheckbox5">Ent Transportadores </label>
								<input class="form-check-input ml-1"  name="retenedor" type="radio" id="inlineCheckbox6" value="ent_transportadores">

								<label class="form-check-label ml-2" for="inlineCheckbox7">Intermediarios </label>
								<input class="form-check-input ml-1"  name="retenedor" type="radio" id="inlineCheckbox7" value="intermediario">
							</div>

							<div class="form-check form-check-inline text-center pt-2">

								<label class="form-check-label ml-2" for="inlineCheckbox8">Gran Contribuyente </label>
								<input class="form-check-input ml-1"  name="retenedor" type="radio" id="inlineCheckbox8" value="gran_contribuyente">


								<label class="form-check-label ml-2" for="inlineCheckbox9">Consorcio UT </label>
								<input class="form-check-input ml-1"  name="retenedor" type="radio" id="inlineCheckbox9" value="consorcio_ut">

								<label class="form-check-label ml-2" for="inlineCheckbox10">AutoRetenedor </label>
								<input class="form-check-input ml-1"  name="retenedor" type="radio" id="inlineCheckbox10" value="autoretenedor">
								<label class="form-check-label ml-2" for="inlineCheckbox10">Designados </label>
								<input class="form-check-input ml-1"  name="retenedor" type="radio" id="inlineCheckbox10" value="desiganados">


							</div>
							<br>
						</td>
					</tr>
					<tr>
						<td colspan="6" rowspan="1">
							<div class="form-group">
								<label for="nombre_representante">3. NOMBRE REPRESENTANTE LEGAL</label>
								<input type="text" class="form-control entrada mt-4" name="nombre_representante" id="nombre_representante" onkeypress="return Letras(event)" onchange="aMayusculas(this.value,this.id)">
							</div>
							
						</td>
						<td colspan="4" rowspan="1">

							<div class="form-check form-check-inline text-center">
								<label class="form-check-label" for="inlineCheckbox">4.IDENTIFICACIÓN</label>

								<label class="form-check-label ml-4" for="inlineCheckbox10">C.C</label>
								<input class="form-check-input ml-1"  name="tipo_documento_representante" type="radio" id="inlineCheckbox1" value="C.C">

								

								<label class="form-check-label pl-2" for="inlineCheckbox11">C.E</label>
								<input class="form-check-input ml-1"  name="tipo_documento_representante" type="radio" id="inlineCheckbox1" value="C.E">		    


							</div>

							<div class="form-check form-check-inline text-center pt-4">
								<label class="form-check-label mr-2" for="numero_documento_representante">No</label>				
								<input type="text" name="numero_documento_representante"  class="form-control entrada " id="numero_documento_representante" required="required" onkeypress="return Numeros(event)" minlength="5" maxlength="20">  

							</div>						
							
						</td>	

						<td colspan="5" rowspan="1">
							<div class="form-group">
								<label for="input_tel">5.TEL</label>
								<input type="text" class="form-control entrada mt-4" name="tel_representante" id="input_tel" onkeypress="return Numeros(event)" maxlength="10" minlength="7">
							</div>
							
						</td>					
					</tr>

					<tr>
						<td colspan="8" rowspan="1">
							<div class="form-group">
								<label for="dir_representante">6. DIRECCIÓN DE NOTIFICACIÓN:</label>
								<input type="text" class="form-control entrada " name="dir_representante" id="dir_representante" onchange="aMayusculas(this.value,this.id)" minlength="5" maxlength="80">
							</div>
						</td>
						<td colspan="7" rowspan="1">
							<div class="form-group">
								<label for="ciudad_representante">7. CIUDAD:</label>
								<input type="text" class="form-control entrada" name="ciudad_representante" id="ciudad_representante" onkeypress="return Letras(event)" maxlength="20">
							</div>
						</td>
					</tr>


					<tr>
						<td colspan="6" rowspan="1">
							<div class="form-group">
								<label for="tel_representante_dos">8. TEL:</label>
								<input type="text" class="form-control entrada " name="tel_representante_dos" id="tel_representante_dos" onkeypress="return Numeros(event)" minlength="7" maxlength="10">
							</div>
						</td>
						<td colspan="9" rowspan="1">
							<div class="form-group">
								<label for="correo_representante">9. DIRECCIÓN  DE NOTIFICACION ELECTRONICA:</label>
								<input type="text" class="form-control entrada" name="correo_representante" id="correo_representante">
							</div>
						</td>
					</tr>

					<tr>
						<td colspan="8" rowspan="1">
							<div class="form-group">
								<label for="dir_sede">10. DIRECCIÓN  SEDE PRINCIPAL</label>
								<input type="text" class="form-control entrada " name="dir_sede" id="dir_sede">
							</div>
						</td>
						<td colspan="7" rowspan="1">
							<div class="form-group">
								<label for="ciudad_sede">11. CIUDAD:</label>
								<input type="text" class="form-control entrada" name="ciudad_sede" id="ciudad_sede" onkeypress="return Letras(event)" maxlength="20">
							</div>
						</td>
					</tr>

					<tr>
						<td colspan="8" rowspan="1">
							<div class="form-group">
								<label for="tel_representante_tres">12. TEL</label>
								<input type="text" class="form-control entrada " name="tel_representante_tres" id="tel_representante_tres" onkeypress="return Numeros(event)" minlength="7" maxlength="10">
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
						<label >RECUERDE QUE LAS SANCIONES LÍQUIDADAS NO PODRÁN SER INFERIORES A LA SANCIÓN MÍNIMA ESTABLECIDA EN EL VALOR DE CINCO (5) UNIDADES DE VALOR TRIBUTARIO</label></td>
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
					<td colspan="1" rowspan="16" style="width: 15px;">
						<p class="text-vertical text-center" style="padding-bottom: 240px;">B. LIQUIDACIÓN PRIVADA</p>
						
					</td>
						
					</tr>
					<tr>
						<td colspan="1" rowspan="1" style="text-align: center;">1</td>
						<td colspan="6" rowspan="1">RETENCIÓN POR COMPRA DE BIENES</td>
						<td colspan="2" rowspan="1"></td>
						<td colspan="2" rowspan="1"></td>
						<td colspan="2" rowspan="1"></td>
						<td colspan="2" rowspan="1"></td>
					</tr>

					<tr>
						<td colspan="1" rowspan="1" style="text-align: center;">2</td>
						<td colspan="6" rowspan="1">RETENCIÓN POR SERVICIOS</td>
						<td colspan="2" rowspan="1"></td>
						<td colspan="2" rowspan="1"></td>
						<td colspan="2" rowspan="1"></td>
						<td colspan="2" rowspan="1"></td>
					</tr>
					<tr>
						<td colspan="1" rowspan="1" style="text-align: center;">3</td>
						<td colspan="6" rowspan="1">OTRAS RETENCIONES</td>
						<td colspan="2" rowspan="1"></td>
						<td colspan="2" rowspan="1"></td>
						<td colspan="2" rowspan="1"></td>
						<td colspan="2" rowspan="1"></td>
					</tr>
                    <tr>
                        <td colspan="1" rowspan="1" style="text-align: center;">4</td>
                        <td colspan="6" rowspan="1"><strong>TOTAL RETENCIONES PRACTICADAS (Sume renglones 1 a 3)</strong></td>
                        <td colspan="2" rowspan="1"></td>
                        <td colspan="2" rowspan="1"></td>
                        <td colspan="2" rowspan="1"></td>
                        <td colspan="2" rowspan="1"></td>
                    </tr>

					<tr>
						<td colspan="1" rowspan="1" style="text-align:center">5</td>
						<td colspan="6" rowspan="1">AUTORETENCIÓN POR VENTA  DE BIENES</td>
						<td colspan="2" rowspan="1"></td>
						<td colspan="2" rowspan="1"></td>
						<td colspan="2" rowspan="1"></td>
						<td colspan="2" rowspan="1"></td>
					</tr>
					<tr>
						<td colspan="1" rowspan="1" style="text-align: center;">6</td>
						<td colspan="6" rowspan="1">AUTORETENCIÓN POR VENTA DE SERVICIOS</td>
						<td colspan="2" rowspan="1"></td>
						<td colspan="2" rowspan="1"></td>
						<td colspan="2" rowspan="1"></td>
						<td colspan="2" rowspan="1"></td>
					</tr>
					<tr>
						<td colspan="1" rowspan="1" style="text-align: center;">7</td>
						<td colspan="6" rowspan="1">OTRAS AUTORRETENCIONES</td>
						<td colspan="2" rowspan="1"></td>
						<td colspan="2" rowspan="1"></td>
						<td colspan="2" rowspan="1"></td>
						<td colspan="2" rowspan="1"></td>
					</tr>

                    <tr>
                        <td colspan="1" rowspan="1" style="text-align: center">8</td>
                        <td colspan="6" rowspan="1">MENOS RETENCION QUE LE PRACTICARON AL PERIODO</td>
                        <td colspan="2" rowspan="1"></td>
                        <td colspan="2" rowspan="1"></td>
                        <td colspan="2" rowspan="1"></td>
                        <td colspan="2" rowspan="1"></td>
                    </tr>




					<tr>
						<td colspan="1" rowspan="1" style="text-align: center;">9</td>
						<td colspan="6" rowspan="1"><strong>TOTAL AUTORRETENCIONES PRACTICADAS(Sume Casilla 5+6+7-8)</strong></td>
						<td colspan="2" rowspan="1"></td>
						<td colspan="2" rowspan="1"></td>
						<td colspan="2" rowspan="1"></td>
						<td colspan="2" rowspan="1"></td>
					</tr>

                    <tr>
                        <td colspan="1" rowspan="1" style="text-align: center;">10</td>
                        <td colspan="6" rowspan="1"><strong>TOTAL RETENCIONES Y AUTORRETENCIONES PRACTICADAS(Sume Renglones 4 y 9)</strong></td>
                        <td colspan="2" rowspan="1"></td>
                        <td colspan="2" rowspan="1"></td>
                        <td colspan="2" rowspan="1"></td>
                        <td colspan="2" rowspan="1"></td>
                    </tr>

					<tr>
						<td colspan="1" rowspan="1" style="text-align: center;">11</td>
						<td colspan="12" rowspan="1">SANCIÓN POR CORRECCIÓN: 10% del mayor valor sin emplazamiento, 20% del mayor valor si media emplazamiento o auto de inspección tributaria.</td>
						
						<td colspan="2" rowspan="1"></td>
					</tr>

					<tr>
						<td colspan="1" rowspan="1"  style="text-align: center;">12</td>
						<td colspan="12" rowspan="1">SANCIÓN POR INEXACTITUD: 1/4 de la impuesta con ocasión al requerimiento especial; 1/2 con ocasión a la liquidación de revisión; 100% de la sanción luego de ejecutoriada la liquidación oficial de revisión.</td>
						
						<td colspan="2" rowspan="1"></td>
					</tr>

					<tr>
						<td colspan="1" rowspan="1"  style="text-align: center;">13</td>
						<td colspan="12" rowspan="1">SANCIÓN POR NO DECLARAR REDUCIDA: al 50% para que proceda la reducción de la sanción, esta declaración se deberá presentar con pago (Artículo 231 E.T.M.).</td>
						
						<td colspan="2" rowspan="1"></td>
					</tr>

					<tr>
						<td colspan="1" rowspan="1" style="text-align: center;">14</td>
						<td colspan="12" rowspan="1">SANCIÓN POR EXTEMPORANEIDAD: 10% por mes ofracción sobre el valor liqudado o 20% si media emplazamiento.</td>
						
						<td colspan="2" rowspan="1"></td>
					</tr>

					<tr>
						<td colspan="1" rowspan="1"  style="text-align: center;">15</td>
						<td colspan="12" rowspan="1"><strong>TOTAL RETENCIONES Y AUTORRETENCIONES PRACTICADAS (Sumar renglones 10 al 14).</strong></td>
						
						<td colspan="2" rowspan="1"></td>
					</tr>

					<tr>
						<td colspan="16" rowspan="1">
						<label class="text-center"><strong>SEÑOR AGENTE RETENEDOR:</strong> La declaración mensual de retención en la fuente debe presentarse con pago so pena de darla por no presentada</label></td>
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
							<p class="text-center" style="font-size: small;"><small>USO OFICIAL</small><br><small>SELLO NÚMERO  FECHA DE RADICACIÓN</small></p>
					

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
					<tr><!--- vacion--></tr>
					<tr><!--- vacion--></tr>
					<tr><!--- vacion--></tr>
					<tr><td colspan="5" rowspan="4" style="width: 50%;">
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
					<tr><!--- vacion--></tr>
					<tr><!--- vacion--></tr>
					<tr><!--- vacion--></tr>
					<tr><td colspan="5" rowspan="4" style="width: 50%;">
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


					

			</tbody>
				


			</table>
		</form>            
						
		</div>
	</div>
</div>
</div>
</div>
<?php $this->end(); ?>

<?php $this->start('footer'); ?>


<script type="text/javascript">

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

   function aMayusculas(obj,id){
      
          obj = obj.toUpperCase();
          document.getElementById(id).value = obj;
}


   var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //
    var yyyy = today.getFullYear();
     if(dd<10){
            dd='0'+dd
        } 
        if(mm<10){
            mm='0'+mm
        } 

    today = yyyy+'-'+mm+'-'+dd;
    document.getElementById("fecha_correccion").setAttribute("max", today);


     


	

</script>

<?php $this->end(); ?>


