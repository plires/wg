<?php require ('includes/config.inc.php'); ?>

<?php 
	$current = 'seguros'; 
	$current_sub = 'patrimonial'; 
?>

<?php require ('includes/capture-variables-get.php'); ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Tag Manager Head -->
	<?php include_once("./includes/tag_manager_head.php"); ?>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Seccion sobre seguros patrimoniales del hogar. Tambien contamos con Seguros de Agro, de vida y otros patrimoniales.">
	<title>WGSA Seguros de Agro, Patrimoniales y Vida - Hogar</title>

	<!-- Favicons -->
	<?php include('includes/favicon.php'); ?>

	<link rel="stylesheet" type="text/css" href="./node_modules/normalize.css/normalize.css">
	<link rel="stylesheet" type="text/css" href="./node_modules/@fortawesome/fontawesome-free/css/all.css">
	<link rel="stylesheet" type="text/css" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./node_modules/aos/dist/aos.css"/>

	<link rel="stylesheet" href="./css/app.css">
</head>
<body>
	<!-- Tag Manager Body -->
	<?php include_once("./includes/tag_manager_body.php"); ?>

	<!-- Header -->
	<?php include_once("./includes/header.php"); ?>

	<!-- Enlatados -->
	<section id="content" class="transition patrimoniales_enlatados">

		<!-- Header -->
		<section class="container-fluid p-0 header">
			<div data-aos="fade-right" class="content_h1">
				<img class="img-fluid" src="./img/seguro-patrimoniales/enlatados/icono-casa.png" alt="icono seguro patrimoniales hogar">
				<h1>Hogar</h1>
			</div>
		</section>
		<!-- Header end -->

		<!-- Planes -->
		<section id="planes" class="container costos">

			<div class="row">
				<div data-aos="fade-up" class="col-md-12">
					<h2>CONTRATÁ<br>EL MEJOR SEGURO<br>PARA TU CASA</h2>
				</div>
			</div>

			<div class="row">
				<div class="com-md-12">
					<?php include_once("./includes/msg-exito.php"); ?>
				</div>
			</div>

			<div class="row">
				<div class="com-md-12">
					<?php include_once("./includes/errors.php"); ?>
				</div>
			</div>

			<div class="row">
				<div data-aos="fade-up" class="col-12 col-md-6 col-lg-3 plan">

					<div class="plan_numero">
						<p>Plan<br><span>01</span></p>
					</div>

					<div class="plan_costo">
						<p>A partir de<br><span>$ 666</span><br>por mes</p>
					</div>

					<div class="plan_contacto">
						<button class="btn btn-primary btn_contratar">Contratar</button>
					</div>

					<div class="formulario_desplegable transition">
						<form 
							id="form_seguros_hogar_01" 
							method="post" 
							class="forms" 
							action="./php/validate-form-seguros-patrimoniales.php">

							<input type="hidden" name="plan" value="01">
							<input type="hidden" name="seguro" value="Hogar">

			        <?php include("./includes/partial-form-patrimoniales.php"); ?>

			      </form>
					</div>	

					<div class="contenido">

						<p class="parrafo_desc">
							Incendio Edificio 1er Riesgo Absoluto<br>
							<span>2.500.000</span>
						</p>

						<p class="parrafo_desc">
							Incendio Contenido<br>
							<span>400.000</span>
						</p>

						<p class="parrafo_desc">
							Robo Contenido<br>
							<span>40.000</span>
						</p>

						<p class="parrafo_desc">
							Electrodomésticos<br>
							<span>30.000</span>
						</p>

						<p class="parrafo_desc">
							RC Hechos Privados<br>
							<span>120.000</span>
						</p>

						<p class="parrafo_desc">
							Equipos Portátiles<br>
							<span>10.000</span>
						</p>

						<div class="adicional_sin_costo">
							<p>Adicional sin costo</p>
						</div>

						<p class="parrafo_desc">
							Alimentos en freezer<br>
							<span>1.000</span>
						</p>

					</div>

				</div>

				<div data-aos="fade-up" data-aos-delay="50" class="col-12 col-md-6 col-lg-3 plan">

					<div class="plan_numero">
						<p>Plan<br><span>02</span></p>
					</div>

					<div class="plan_costo">
						<p>A partir de<br><span>$ 853</span><br>por mes</p>
					</div>

					<div class="plan_contacto">
						<button class="btn btn-primary btn_contratar">Contratar</button>
					</div>

					<div class="formulario_desplegable transition">
						<form 
							id="form_seguros_hogar_02" 
							method="post" 
							class="forms" 
							action="./php/validate-form-seguros-patrimoniales.php">

							<input type="hidden" name="plan" value="02">
							<input type="hidden" name="seguro" value="Hogar">

			        <?php include("./includes/partial-form-patrimoniales.php"); ?>

			      </form>
					</div>

					<div class="contenido">

						<p class="parrafo_desc">
							Incendio Edificio 1er Riesgo Absoluto<br>
							<span>3.500.000</span>
						</p>

						<p class="parrafo_desc">
							Incendio Contenido<br>
							<span>450.000</span>
						</p>

						<p class="parrafo_desc">
							Robo Contenido<br>
							<span>45.000</span>
						</p>

						<p class="parrafo_desc">
							Electrodomésticos<br>
							<span>35.000</span>
						</p>

						<p class="parrafo_desc">
							RC Hechos Privados<br>
							<span>120.000</span>
						</p>

						<p class="parrafo_desc">
							Equipos Portátiles<br>
							<span>15.000</span>
						</p>

						<div class="adicional_sin_costo">
							<p>Adicional sin costo</p>
						</div>

						<p class="parrafo_desc">
							Alimentos en freezer<br>
							<span>1.000</span>
						</p>
						
					</div>

				</div>

				<div data-aos="fade-up" data-aos-delay="100" class="col-12 col-md-6 col-lg-3 plan">

					<div class="plan_numero">
						<p>Plan<br><span>03</span></p>
					</div>

					<div class="plan_costo">
						<p>A partir de<br><span>$ 1069</span><br>por mes</p>
					</div>

					<div class="plan_contacto">
						<button class="btn btn-primary btn_contratar">Contratar</button>
					</div>

					<div class="formulario_desplegable transition">
						<form 
							id="form_seguros_hogar_03" 
							method="post" 
							class="forms" 
							action="./php/validate-form-seguros-patrimoniales.php">

							<input type="hidden" name="plan" value="03">
							<input type="hidden" name="seguro" value="Hogar">

			        <?php include("./includes/partial-form-patrimoniales.php"); ?>

			      </form>
					</div>

					<div class="contenido">

						<p class="parrafo_desc">
							Incendio Edificio 1er Riesgo Absoluto<br>
							<span>5.000.000</span>
						</p>

						<p class="parrafo_desc">
							Incendio Contenido<br>
							<span>500.000</span>
						</p>

						<p class="parrafo_desc">
							Robo Contenido<br>
							<span>50.000</span>
						</p>

						<p class="parrafo_desc">
							Electrodomésticos<br>
							<span>40.000</span>
						</p>

						<p class="parrafo_desc">
							RC Hechos Privados<br>
							<span>120.000</span>
						</p>

						<p class="parrafo_desc">
							Equipos Portátiles<br>
							<span>20.000</span>
						</p>

						<div class="adicional_sin_costo">
							<p>Adicional sin costo</p>
						</div>

						<p class="parrafo_desc">
							Alimentos en freezer<br>
							<span>1.000</span>
						</p>
						
					</div>

				</div>

				<div data-aos="fade-up" data-aos-delay="150" class="col-12 col-md-6 col-lg-3 plan">

					<div class="plan_numero">
						<p>Opción<br><span>ASESOR</span></p>
					</div>

					<div class="plan_costo">
						<p><span class="asesor">Personalizado</span></p>
					</div>

					<div class="plan_contacto">
						<button class="btn btn-primary btn_contratar">Contratar</button>
					</div>

					<div class="formulario_desplegable transition">
						<form 
							id="form_seguros_hogar_custom" 
							method="post" 
							class="forms" 
							action="./php/validate-form-seguros-patrimoniales.php">

							<input type="hidden" name="plan" value="Custom">
							<input type="hidden" name="seguro" value="Hogar">

			        <?php include("./includes/partial-form-patrimoniales.php"); ?>

			      </form>
					</div>

					<div class="contenido">

						<p class="parrafo_desc">
							Sabemos lo importante que es tu casa para vos, por eso te ofrecemos distintas alternativas de protección con múltiples beneficios y servicios de asistencias que podes solicitar en todo momento.
						</p>
						
					</div>

				</div>

			</div>

		</section>
		<!-- Planes end -->

		<!-- Mas Informacion -->
		<section class="container mas_info">

			<div class="row">

				<div class="col-md-4 text-center" data-aos="fade-up">
					<img class="img-fluid" src="./img/seguro-patrimoniales/hogar/icon-incendio.png" alt="icono incendio seguros patrimoniales">
					<h3>Incendio Edificio</h3>
					<p>
						Cubrimos los daños a tu vivienda causados por el fuego y el humo provocados por un incendio, rayo o explosión.
					</p>
				</div>

				<div class="col-md-4 text-center" data-aos="fade-up">
					<img class="img-fluid" src="./img/seguro-patrimoniales/hogar/icon-robo-hurto.png" alt="icono incendio seguros patrimoniales">
					<h3>Robo y/o hurto Contenido</h3>
					<p>
						Cubrimos los daños a tu vivienda causados por el fuego y el humo provocados por un incendio, rayo o explosión.
					</p>
				</div>

				<div class="col-md-4 text-center" data-aos="fade-up">
					<img class="img-fluid" src="./img/seguro-patrimoniales/hogar/icon-responsabilidad-civil.png" alt="icono responsabilidad civil seguros patrimoniales">
					<h3>Responsabilidad Civil</h3>
					<p>
						Cubrimos la pérdida o daño de dichos bienes, dentro del Hogar.
					</p>
				</div>

			</div>

			<div class="row">

				<div class="col-md-4 text-center" data-aos="fade-up">
					<img class="img-fluid" src="./img/seguro-patrimoniales/hogar/icon-equipos-portatiles.png" alt="icono equipos portatiles seguros patrimoniales">
					<h3>Equipos portátiles</h3>
					<p>
						Cámaras, notebooks, netbooks, tablets y reproductores de música están cubiertos contra pérdida,daño o robo en todo el mundo.
					</p>
				</div>

				<div class="col-md-4 text-center" data-aos="fade-up">
					<img class="img-fluid" src="./img/seguro-patrimoniales/hogar/icon-granizo.png" alt="icono granizo seguros patrimoniales">
					<h3>Granizo</h3>
					<p>
						Te cubrimos los daños y pérdidas que pudiera sufrir la vivienda como consecuencia del granizo.
					</p>
				</div>

				<div class="col-md-4 text-center" data-aos="fade-up">
					<img class="img-fluid" src="./img/seguro-patrimoniales/hogar/icon-todo-riesgo.png" alt="icono todo riesgo seguros patrimoniales">
					<h3>Todo Riesgo Electrodomésticos</h3>
					<p>
						Cubrimos la pérdida o daño de dichos bienes, dentro del Hogar.
					</p>
				</div>

			</div>

		</section>
		<!-- Mas Informacion end -->

	</section>
	<!-- Enlatados end -->

	<!-- Newsletter -->
	<?php include_once("./includes/newsletter.php"); ?>

	</section>

	<!-- Footer -->
	<?php include_once("./includes/footer.php"); ?>

	<script type="text/javascript" src="./node_modules/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="./node_modules/aos/dist/aos.js"></script>
	<script src="https://www.google.com/recaptcha/api.js?render=<?= RECAPTCHA_KEY_SITE ?>"></script>
	<script type="text/javascript" src="js/seguros-patrimoniales.js"></script>
	<script type="text/javascript" src="js/app.js"></script>

</body>

</html>