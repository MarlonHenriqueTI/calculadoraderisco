<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Calculadora de riscos</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="colorlib.com">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.css">

		<!-- DATE-PICKER -->
		<link rel="stylesheet" href="vendor/date-picker/css/datepicker.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="wrapper">
			<div class="image-holder">
				<img src="images/icone.png" alt="">
			</div>
            <form action="diagnostico.php" method="POST" id="formulario">
            	<div class="form-header">
            		<a href="#">#LuizNobrega</a>
            		<h3>Calculadora de riscos</h3>
            	</div>
            	<div id="wizard">
            		<!-- SECTION 1 -->
	                <h4></h4>
	                <section>
	                    <div class="form-row" style="margin-bottom: 50px;">
	                    	<label for="">
	                    		Qual o tipo da empresa?
	                    	</label>
	                    	<div class="form-holder">
	                    		<div class="checkbox-circle">
	                    			<div class="form-check">
									<label class="male">
										<input required type="radio" name="tipo_empresa" value="privada" checked> Privada<br>
										<span class="checkmark"></span>
									</label>
								</div>	
								<div class="checkbox-circle">
									<label class="female">
										<input required type="radio" name="tipo_empresa" value="publica"> Pública<br>
										<span class="checkmark"></span>
									</label>
								</div>
								<div class="checkbox-circle">
									<label>
										<input required type="radio" name="tipo_empresa" value="mista">Mista<br>
										<span class="checkmark"></span>
									</label>
								</div>
	                    	</div>
	                    </div>	
						<div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
	                </section>
	                
					<!-- SECTION 2 -->
					<h4></h4>
	                <section>
	                    <div class="form-row" style="margin-bottom: 50px;">
	                    	<label for="">
	                    		Regime Tributário
	                    	</label>
	                    	<div class="form-holder">
	                    		<div class="checkbox-circle">
	                    			<div class="form-check">
									<label class="male">
										<input required type="radio" name="regime_tributario" value="lucro_real" checked> Lucro Real<br>
										<span class="checkmark"></span>
									</label>
								</div>	
								<div class="checkbox-circle">
	                    			<div class="form-check">
									<label class="male">
										<input required type="radio" name="regime_tributario" value="lucro_presumido"> Lucro Presumido<br>
										<span class="checkmark"></span>
									</label>
								</div>
								<div class="checkbox-circle">
	                    			<div class="form-check">
									<label class="male">
										<input required type="radio" name="regime_tributario" value="lucro_arbitrado"> Lucro Arbitrado<br>
										<span class="checkmark"></span>
									</label>
								</div>
								<div class="checkbox-circle">
	                    			<div class="form-check">
									<label class="male">
										<input required type="radio" name="regime_tributario" value="simples_nacional"> Simples Nacional<br>
										<span class="checkmark"></span>
									</label>
								</div>
								<div class="checkbox-circle">
	                    			<div class="form-check">
									<label class="male">
										<input required type="radio" name="regime_tributario" value="mei"> MEI<br>
										<span class="checkmark"></span>
									</label>
								</div>
	                    	</div>
	                    </div>	
	                    <div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 4.54%" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
						</div>	
	                </section>

	                <!-- SECTION 3 -->
 					<h4></h4>
	                <section>
	                    <div class="form-row" style="margin-bottom: 50px;">
	                    	<label for="">
	                    		Localização da Matriz
	                    	</label>
	                    	<div class="form-holder">
	                    		<div class="checkbox-circle">
	                    			<div class="form-check">
									<label class="male">
										<input required type="radio" name="localizacao_matriz" value="brasil" checked> Brasil<br>
										<span class="checkmark"></span>
									</label>
								</div>	
								<div class="checkbox-circle">
									<label class="female">
										<input required type="radio" name="localizacao_matriz" value="exterior"> Exterior<br>
										<span class="checkmark"></span>
									</label>
								</div>
	                    	</div>
	                    </div>	
	                    <div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 9.09%" aria-valuenow="3" aria-valuemin="0" aria-valuemax="100"></div>
						</div>	
	                </section>

					<!-- SECTION 4 -->
 					<h4></h4>
	                <section>
	                    <div class="form-row" style="margin-bottom: 50px;">
	                    	<label for="">
	                    		Filiais no Exterior
	                    	</label>
	                    	<div class="form-holder">
	                    		<div class="checkbox-circle">
	                    			<div class="form-check">
									<label class="male">
										<input required type="radio" name="filiais_exterior" value="sim" checked> Sim<br>
										<span class="checkmark"></span>
									</label>
								</div>	
								<div class="checkbox-circle">
									<label class="female">
										<input required type="radio" name="filiais_exterior" value="nao"> Não<br>
										<span class="checkmark"></span>
									</label>
								</div>
	                    	</div>
	                    </div>
	                    <div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 13.63%" aria-valuenow="4" aria-valuemin="0" aria-valuemax="100"></div>
						</div>		
	                </section>

					<!-- SECTION 5 -->
 					<h4></h4>
	                <section>
	                    <div class="form-row" style="margin-bottom: 50px;">
	                    	<label for="">
	                    		Exportação
	                    	</label>
	                    	<div class="form-holder">
	                    		<div class="checkbox-circle">
	                    			<div class="form-check">
									<label class="male">
										<input required type="radio" name="exportacao" value="sim" checked> Sim<br>
										<span class="checkmark"></span>
									</label>
								</div>	
								<div class="checkbox-circle">
									<label class="female">
										<input required type="radio" name="exportacao" value="nao"> Não<br>
										<span class="checkmark"></span>
									</label>
								</div>
	                    	</div>
	                    </div>	

	                    <div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 18.17%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
						</div>	
	                </section>
					<!-- SECTION 6 -->
 					<h4></h4>
	                <section>
	                    <div class="form-row" style="margin-bottom: 50px;">
	                    	<label for="">
	                    		Importação
	                    	</label>
	                    	<div class="form-holder">
	                    		<div class="checkbox-circle">
	                    			<div class="form-check">
									<label class="male">
										<input required type="radio" name="importacao" value="sim" checked> Sim<br>
										<span class="checkmark"></span>
									</label>
								</div>	
								<div class="checkbox-circle">
									<label class="female">
										<input required type="radio" name="importacao" value="nao"> Não<br>
										<span class="checkmark"></span>
									</label>
								</div>
	                    	</div>
	                    </div>
	                    <div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 22.71%" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
						</div>		
	                </section>
					<!-- SECTION 7 -->
 					<h4></h4>
	                <section>
	                    <div class="form-row" style="margin-bottom: 50px;">
	                    	<label for="">
	                    		A empresa desenvolve uma Matriz de Riscos?
	                    	</label>
	                    	<div class="form-holder">
	                    		<div class="checkbox-circle">
	                    			<div class="form-check">
									<label class="male">
										<input required type="radio" name="desenvolve_matriz_risco" value="sim" checked> Sim<br>
										<span class="checkmark"></span>
									</label>
								</div>	
								<div class="checkbox-circle">
									<label class="female">
										<input required type="radio" name="desenvolve_matriz_risco" value="nao"> Não<br>
										<span class="checkmark"></span>
									</label>
								</div>
	                    	</div>
	                    </div>	
	                    <div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 27.25%" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
						</div>	
	                </section>
					<!-- SECTION 8 -->
 					<h4></h4>
	                <section>
	                    <div class="form-row" style="margin-bottom: 50px;">
	                    	<label for="">
	                    		A empresa tem controles internos eficientes?
	                       	</label>
	                    	<div class="form-holder">
	                    		<div class="checkbox-circle">
	                    			<div class="form-check">
									<label class="male">
										<input required type="radio" name="desenvolve_controles_internos_eficientes" value="sim" checked> Sim<br>
										<span class="checkmark"></span>
									</label>
								</div>	
								<div class="checkbox-circle">
									<label class="female">
										<input required type="radio" name="desenvolve_controles_internos_eficientes" value="nao"> Não<br>
										<span class="checkmark"></span>
									</label>
								</div>
	                    	</div>
	                    </div>	

	                    <div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 31.79%" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
						</div>	
	                </section>	
					<!-- SECTION 9 -->
 					<h4></h4>
	                <section>
	                    <div class="form-row" style="margin-bottom: 50px;">
	                    	<label for="">
	                    		A empresa possui um Código de Ética/Manual de Conduta?
	                       	</label>
	                    	<div class="form-holder">
	                    		<div class="checkbox-circle">
	                    			<div class="form-check">
									<label class="male">
										<input required type="radio" name="codigo_etica_manual_conduta" value="sim" checked> Sim<br>
										<span class="checkmark"></span>
									</label>
								</div>	
								<div class="checkbox-circle">
									<label class="female">
										<input required type="radio" name="codigo_etica_manual_conduta" value="nao"> Não<br>
										<span class="checkmark"></span>
									</label>
								</div>
	                    	</div>
	                    </div>	

	                    <div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 36.33%" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
						</div>	
	                </section>	
					<!-- SECTION 10 -->
 					<h4></h4>
	                <section>
	                    <div class="form-row" style="margin-bottom: 50px;">
	                    	<label for="">
	                    		A empresa possui políticas para Compras, escolha de fornecedores e outras?
	                       	</label>
	                    	<div class="form-holder">
	                    		<div class="checkbox-circle">
	                    			<div class="form-check">
									<label class="male">
										<input required type="radio" name="politicas_compras_escolha_fornecedores" value="sim" checked> Sim<br>
										<span class="checkmark"></span>
									</label>
								</div>	
								<div class="checkbox-circle">
									<label class="female">
										<input required type="radio" name="politicas_compras_escolha_fornecedores" value="nao"> Não<br>
										<span class="checkmark"></span>
									</label>
								</div>
	                    	</div>
	                    </div>

	                    <div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 40.87%" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
						</div>		
	                </section>	
					<!-- SECTION 11 -->
 					<h4></h4>
	                <section>
	                    <div class="form-row" style="margin-bottom: 50px;">
	                    	<label for="">
	                    		Sua empresa conhece as implicações da Lei 12.846/2013 a Lei Anticorrupção?
	                       	</label>
	                    	<div class="form-holder">
	                    		<div class="checkbox-circle">
	                    			<div class="form-check">
									<label class="male">
										<input required type="radio" name="conhece_lei_anticorrupcao" value="sim" checked> Sim<br>
										<span class="checkmark"></span>
									</label>
								</div>	
								<div class="checkbox-circle">
									<label class="female">
										<input required type="radio" name="conhece_lei_anticorrupcao" value="nao"> Não<br>
										<span class="checkmark"></span>
									</label>
								</div>
	                    	</div>
	                    </div>

	                    <div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 45.41%" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
						</div>		
	                </section>	
					<!-- SECTION 12 -->
 					<h4></h4>
	                <section>
	                    <div class="form-row" style="margin-bottom: 50px;">
	                    	<label for="">
	                    		Sua empresa está protegida para não sofrer as sansões da Lei 12.846/2013 a Lei Anticorrupção?
	                       	</label>
	                    	<div class="form-holder">
	                    		<div class="checkbox-circle">
	                    			<div class="form-check">
									<label class="male">
										<input required type="radio" name="protegida_lei_anticorrupcao" value="sim" checked> Sim<br>
										<span class="checkmark"></span>
									</label>
								</div>	
								<div class="checkbox-circle">
									<label class="female">
										<input required type="radio" name="protegida_lei_anticorrupcao" value="nao"> Não<br>
										<span class="checkmark"></span>
									</label>
								</div>
	                    	</div>
	                    </div>
	                    <div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 49.95%" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
						</div>		
	                </section>	
					<!-- SECTION 13 -->
 					<h4></h4>
	                <section>
	                    <div class="form-row" style="margin-bottom: 50px;">
	                    	<label for="">
	                    		Sua empresa conhece as implicações da Lei 9.613/98 a Lei de Lavagem de Dinheiro?
	                       	</label>
	                    	<div class="form-holder">
	                    		<div class="checkbox-circle">
	                    			<div class="form-check">
									<label class="male">
										<input required type="radio" name="conhece_lei_lavagem_dinheiro" value="sim" checked> Sim<br>
										<span class="checkmark"></span>
									</label>
								</div>	
								<div class="checkbox-circle">
									<label class="female">
										<input required type="radio" name="conhece_lei_lavagem_dinheiro" value="nao"> Não<br>
										<span class="checkmark"></span>
									</label>
								</div>
	                    	</div>
	                    </div>	
	                    <div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 54.46%" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
						</div>	
	                </section>	
					<!-- SECTION 14 -->
 					<h4></h4>
	                <section>
	                    <div class="form-row" style="margin-bottom: 50px;">
	                    	<label for="">
	                    		Sua empresa tem algum Programa de PLD - Prevenção à Lavagem de Dinheiro?
	                       	</label>
	                    	<div class="form-holder">
	                    		<div class="checkbox-circle">
	                    			<div class="form-check">
									<label class="male">
										<input required type="radio" name="programa_pld" value="sim" checked> Sim<br>
										<span class="checkmark"></span>
									</label>
								</div>	
								<div class="checkbox-circle">
									<label class="female">
										<input required type="radio" name="programa_pld" value="nao"> Não<br>
										<span class="checkmark"></span>
									</label>
								</div>
	                    	</div>
	                    </div>	
	                    <div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 59%" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
						</div>	
	                </section>	
					<!-- SECTION 15 -->
 					<h4></h4>
	                <section>
	                    <div class="form-row" style="margin-bottom: 50px;">
	                    	<label for="">
	                    		Número de colaboradores
	                       	</label>
	                    	<div class="form-holder">
	                    		<div class="checkbox-circle">
	                    			<div class="form-check">
									<label class="male">
										<input required type="radio" name="colaboradores" value="0 - 25" checked> 0 - 25<br>
										<span class="checkmark"></span>
									</label>
								</div>	
								<div class="checkbox-circle">
	                    			<div class="form-check">
									<label class="male">
										<input required type="radio" name="colaboradores" value="26 - 50" checked> 26 - 50<br>
										<span class="checkmark"></span>
									</label>
								</div>	
								<div class="checkbox-circle">
	                    			<div class="form-check">
									<label class="male">
										<input required type="radio" name="colaboradores" value="51 - 100" checked> 51 - 100<br>
										<span class="checkmark"></span>
									</label>
								</div>
								<div class="checkbox-circle">
	                    			<div class="form-check">
									<label class="male">
										<input required type="radio" name="colaboradores" value="101 - 150" checked> 101 - 150<br>
										<span class="checkmark"></span>
									</label>
								</div>	
								<div class="checkbox-circle">
	                    			<div class="form-check">
									<label class="male">
										<input required type="radio" name="colaboradores" value="151 - 200" checked> 151 - 200<br>
										<span class="checkmark"></span>
									</label>
								</div>
								<div class="checkbox-circle">
	                    			<div class="form-check">
									<label class="male">
										<input required type="radio" name="colaboradores" value="201 - 500" checked> 201 - 500<br>
										<span class="checkmark"></span>
									</label>
								</div>	
								<div class="checkbox-circle">
	                    			<div class="form-check">
									<label class="male">
										<input required type="radio" name="colaboradores" value="501 - 1000" checked> 501 - 1000<br>
										<span class="checkmark"></span>
									</label>
								</div>	
								<div class="checkbox-circle">
	                    			<div class="form-check">
									<label class="male">
										<input required type="radio" name="colaboradores" value="1001 - 2000" checked> 1001 - 2000<br>
										<span class="checkmark"></span>
									</label>
								</div>	
								<div class="checkbox-circle">
	                    			<div class="form-check">
									<label class="male">
										<input required type="radio" name="colaboradores" value="2001 - 3000" checked> 2001 - 3000<br>
										<span class="checkmark"></span>
									</label>
								</div>	
								<div class="checkbox-circle">
	                    			<div class="form-check">
									<label class="male">
										<input required type="radio" name="colaboradores" value="acima 3000" checked> Acima 3000<br>
										<span class="checkmark"></span>
									</label>
								</div>			
	                    	</div>
	                    </div>	

	                    <div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 63.51%" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
						</div>	
	                </section>	
					<!-- SECTION 16 -->
 					<h4></h4>
	                <section>
	                    <div class="form-row" style="margin-bottom: 50px;">
	                    	<label for="">
	                    		A empresa tem um canal de denúncias?
	                       	</label>
	                    	<div class="form-holder">
	                    		<div class="checkbox-circle">
	                    			<div class="form-check">
									<label class="male">
										<input required type="radio" name="canal_denuncias" value="sim" checked> Sim<br>
										<span class="checkmark"></span>
									</label>
								</div>	
								<div class="checkbox-circle">
									<label class="female">
										<input required type="radio" name="canal_denuncias" value="nao"> Não<br>
										<span class="checkmark"></span>
									</label>
								</div>
	                    	</div>
	                    </div>	
	                    <div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 68.02%" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
						</div>	
	                </section>	
					<!-- SECTION 17 -->
 					<h4></h4>
	                <section>
	                    <div class="form-row" style="margin-bottom: 50px;">
	                    	<label for="">
	                    		A empresa faz Due Diligence de Terceiros/Fornecedores?
	                       	</label>
	                    	<div class="form-holder">
	                    		<div class="checkbox-circle">
	                    			<div class="form-check">
									<label class="male">
										<input required type="radio" name="due_diligence" value="sim" checked> Sim<br>
										<span class="checkmark"></span>
									</label>
								</div>	
								<div class="checkbox-circle">
									<label class="female">
										<input required type="radio" name="due_diligence" value="nao"> Não<br>
										<span class="checkmark"></span>
									</label>
								</div>
	                    	</div>
	                    </div>	
	                    <div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 72.53%" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
						</div>	
	                </section>					
					<!-- SECTION 18 -->
 					<h4></h4>
	                <section>
	                    <div class="form-row" style="margin-bottom: 50px;">
	                    	<label for="">
	                    		A empresa usa representantes comerciais/despachantes ou outros terceiros que lhe representem?
	                       	</label>
	                    	<div class="form-holder">
	                    		<div class="checkbox-circle">
	                    			<div class="form-check">
									<label class="male">
										<input required type="radio" name="representantes" value="sim" checked> Sim<br>
										<span class="checkmark"></span>
									</label>
								</div>	
								<div class="checkbox-circle">
									<label class="female">
										<input required type="radio" name="representantes" value="nao"> Não<br>
										<span class="checkmark"></span>
									</label>
								</div>
	                    	</div>
	                    </div>		
	                    <div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 77.07%" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
	                </section>	
					<!-- SECTION 19 -->
 					<h4></h4>
	                <section>
	                    <div class="form-row" style="margin-bottom: 50px;">
	                    	<label for="">
	                    		Sua empresa conhece as implicações da Lei 13.709/2018 a chamada LGPD?
	                       	</label>
	                    	<div class="form-holder">
	                    		<div class="checkbox-circle">
	                    			<div class="form-check">
									<label class="male">
										<input required type="radio" name="conhece_LGPD" value="sim" checked> Sim<br>
										<span class="checkmark"></span>
									</label>
								</div>	
								<div class="checkbox-circle">
									<label class="female">
										<input required type="radio" name="conhece_LGPD" value="nao"> Não<br>
										<span class="checkmark"></span>
									</label>
								</div>
	                    	</div>
	                    </div>	

	                    <div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 81.61%" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
						</div>	
	                </section>	
					<!-- SECTION 20 -->
 					<h4></h4>
	                <section>
	                    <div class="form-row" style="margin-bottom: 50px;">
	                    	<label for="">
	                    		Sua empresa está preparada para não sofrer as sansões da Lei 13.709/2018 a chamada LGPD??
	                       	</label>
	                    	<div class="form-holder">
	                    		<div class="checkbox-circle">
	                    			<div class="form-check">
									<label class="male">
										<input required type="radio" name="preparada_lgpd" value="sim" checked> Sim<br>
										<span class="checkmark"></span>
									</label>
								</div>	
								<div class="checkbox-circle">
									<label class="female">
										<input required type="radio" name="preparada_lgpd" value="nao"> Não<br>
										<span class="checkmark"></span>
									</label>
								</div>
	                    	</div>
	                    </div>	
	                    <div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 86.15%" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
						</div>	
	                </section>	
					<!-- SECTION 21 -->
 					<h4></h4>
	                <section>
	                    <div class="form-row" style="margin-bottom: 50px;">
	                    	<label for="">
	                    		A empresa tem negócios com entes públicos?
	                       	</label>
	                    	<div class="form-holder">
	                    		<div class="checkbox-circle">
	                    			<div class="form-check">
									<label class="male">
										<input required type="radio" name="negocios_entes_publicos" value="sim" checked> Sim<br>
										<span class="checkmark"></span>
									</label>
								</div>	
								<div class="checkbox-circle">
									<label class="female">
										<input required type="radio" name="negocios_entes_publicos" value="nao"> Não<br>
										<span class="checkmark"></span>
									</label>
								</div>
	                    	</div>
	                    </div>	
	                    <div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 90.69%" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
						</div>	
	                </section>	
					<!-- SECTION 14 -->
 					<h4></h4>
	                <section>
	                    <div class="form-row" style="margin-bottom: 50px;">
	                    	<label for="">
	                    		A empresa disponibiliza treinamentos relacionados com temas de ética e compliance?
	                       	</label>
	                    	<div class="form-holder">
	                    		<div class="checkbox-circle">
	                    			<div class="form-check">
									<label class="male">
										<input required type="radio" name="treinamentos_etica_compliance" value="sim" checked> Sim<br>
										<span class="checkmark"></span>
									</label>
								</div>	
								<div class="checkbox-circle">
									<label class="female">
										<input required type="radio" name="treinamentos_etica_compliance" value="nao"> Não<br>
										<span class="checkmark"></span>
									</label>
								</div>
	                    	</div>
	                    </div>	
	                    <div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 95.23%" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
						</div>	
	                </section>	
					<!-- SECTION 14 -->
 					<h4></h4>
	                <section>
	                    <div class="form-row" style="margin-bottom: 50px;">
	                    	<label for="">
	                    		A empresa tem um Programa de Compliance EFETIVO?
	                       	</label>
	                    	<div class="form-holder">
	                    		<div class="checkbox-circle">
	                    			<div class="form-check">
									<label class="male">
										<input required type="radio" name="compliance_efetivo" value="sim" checked> Sim<br>
										<span class="checkmark"></span>
									</label>
								</div>	
								<div class="checkbox-circle">
									<label class="female">
										<input required type="radio" name="compliance_efetivo" value="nao"> Não<br>
										<span class="checkmark"></span>
									</label>
								</div>
	                    	</div>
	                    </div>	

	                    <div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
						</div>	
	                </section>	

            	</div>
            </form>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script src="js/jquery-3.3.1.min.js"></script>
		
		<!-- JQUERY STEP -->
		<script src="js/jquery.steps.js"></script>

		<!-- DATE-PICKER -->
		<script src="vendor/date-picker/js/datepicker.js"></script>
		<script src="vendor/date-picker/js/datepicker.en.js"></script>

		<script src="js/main.js"></script>
		
<!-- Template created and distributed by Colorlib -->
</body>
</html>