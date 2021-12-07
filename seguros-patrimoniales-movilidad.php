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
	<meta name="description" content="Seccion sobre seguros patrimoniales movilidad. Tambien contamos con Seguros de Agro, de vida y otros patrimoniales.">
	<title>WGSA Seguros de Agro, Patrimoniales y Vida - Movilidad</title>

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
				<img class="img-fluid" src="./img/seguro-patrimoniales/enlatados/icono-bici.png" alt="icono seguro patrimoniales movilidad">
				<h1>Movilidad</h1>
			</div>
		</section>
		<!-- Header end -->

		<!-- Planes -->
		<section class="container costos">

			<div class="row">
				<div class="com-md-12">
					<?php include_once("./includes/msg-exito.php"); ?>
				</div>
			</div>

			<div class="row">
				<div data-aos="fade-up" class="col-md-12">
					<h2>PARA VOS <br>QUE LA BICI ES <br>PARTE DE TU VIDA</h2>
				</div>
			</div>

			<div class="row">
				<div data-aos="fade-up" class="col-12 col-md-6 col-lg-3 plan">

					<div class="plan_numero">
						<p>Plan<br><span>01</span></p>
					</div>

					<div class="plan_costo">
						<p>A partir de<br><span>$ 810</span><br>por mes</p>
					</div>

					<div class="plan_contacto">
						<button class="btn btn-primary btn_contratar">Contratar</button>
					</div>

					<div class="formulario_desplegable transition">
						<form 
							id="form_seguros_movilidad_01" 
							method="post" 
							class="forms" 
							action="./php/validate-form-seguros-patrimoniales.php">

							<input type="hidden" name="plan" value="01">
							<input type="hidden" name="seguro" value="Movilidad">

			        <?php include("./includes/partial-form-patrimoniales.php"); ?>

			      </form>
					</div>

					<div class="contenido">

						<p class="parrafo_desc">
							Responsabilidad civil<br>
							<span>200.000</span>
						</p>

						<p class="parrafo_desc">
							Robo equipo movilidad<br>
							<span>50.000</span>
						</p>

						<p class="parrafo_desc">
							Robo de accesorios<br>
							<span>3.000</span>
						</p>

						<p class="parrafo_desc">
							Robo bolso / cartera<br>
							<span>2.000</span>
						</p>

					</div>

				</div>

				<div data-aos="fade-up" data-aos-delay="50" class="col-12 col-md-6 col-lg-3 plan">

					<div class="plan_numero">
						<p>Plan<br><span>02</span></p>
					</div>

					<div class="plan_costo">
						<p>A partir de<br><span>$ 1494</span><br>por mes</p>
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
							<input type="hidden" name="seguro" value="Movilidad">

			        <?php include("./includes/partial-form-patrimoniales.php"); ?>

			      </form>
					</div>

					<div class="contenido">

						<p class="parrafo_desc">
							Responsabilidad civil<br>
							<span>200.000</span>
						</p>

						<p class="parrafo_desc">
							Robo equipo movilidad<br>
							<span>100.000</span>
						</p>

						<p class="parrafo_desc">
							Robo de accesorios<br>
							<span>3.000</span>
						</p>

						<p class="parrafo_desc">
							Robo bolso / cartera<br>
							<span>2.000</span>
						</p>
						
					</div>

				</div>

				<div data-aos="fade-up" data-aos-delay="100" class="col-12 col-md-6 col-lg-3 plan">

					<div class="plan_numero">
						<p>Plan<br><span>03</span></p>
					</div>

					<div class="plan_costo">
						<p>A partir de<br><span>$ 2868</span><br>por mes</p>
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
							<input type="hidden" name="seguro" value="Movilidad">

			        <?php include("./includes/partial-form-patrimoniales.php"); ?>

			      </form>
					</div>

					<div class="contenido">

						<p class="parrafo_desc">
							Responsabilidad civil<br>
							<span>200.000</span>
						</p>

						<p class="parrafo_desc">
							Robo equipo movilidad<br>
							<span>200.000</span>
						</p>

						<p class="parrafo_desc">
							Robo de accesorios<br>
							<span>3.000</span>
						</p>

						<p class="parrafo_desc">
							Robo bolso / cartera<br>
							<span>2.000</span>
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
							<input type="hidden" name="seguro" value="Movilidad">

			        <?php include("./includes/partial-form-patrimoniales.php"); ?>

			      </form>
					</div>

					<div class="contenido">

						<p class="parrafo_desc">
							Con nuestros planes estás protegido, tenés un seguro que está del lado de los que usamos bici.
							Podés protegerla para que, si te la roban y se destruye, nada te impida seguir pedaleando.
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
					<img class="img-fluid" src="./img/seguro-patrimoniales/movilidad/icon-bici.png" alt="icono bici seguros patrimoniales">
					<h3>Robo Equipos de Movilidad</h3>
					<p>
						Robo total más el daño por la tentativa de: bicicletas, triciclos, patines, rollers, skates, monopatines hoverboard. 
					</p>
				</div>

				<div class="col-md-4 text-center" data-aos="fade-up">
					<img class="img-fluid" src="./img/seguro-patrimoniales/movilidad/icon-robo-hurto.png" alt="icono incendio seguros patrimoniales">
					<h3>Robo y/o hurto Bolso/Cartera</h3>
					<p>
						Bolso, portafolio o mochila para traslado o guarda de Efectos Personales.
					</p>
				</div>

				<div class="col-md-4 text-center" data-aos="fade-up">
					<img class="img-fluid" src="./img/seguro-patrimoniales/movilidad/icon-reparacion.png" alt="icono reparaciones y traslado seguros patrimoniales">
					<h3>Reparación y Traslado</h3>
					<p>
						Ante desperfecto ofrecemos servicio de mecánica ligera in situ. Si no es posible la reparación, traslado a un taller o a tu casa.
					</p>
				</div>

			</div>

			<div class="row">

				<div class="col-md-4 text-center" data-aos="fade-up">
					<img class="img-fluid" src="./img/seguro-patrimoniales/movilidad/icon-robo-accesorios.png" alt="icono robo de accesorios seguros patrimoniales">
					<h3>Equipos portátiles</h3>
					<p>
						Comprende el robo del kit de seguridad, como casco, coderas, rodilleras y también los candados de seguridad.
					</p>
				</div>

				<div class="col-md-4 text-center" data-aos="fade-up">
					<img class="img-fluid" src="./img/seguro-patrimoniales/movilidad/icon-robo-preferencias.png" alt="icono Robo Otras Pertenencias seguros patrimoniales">
					<h3>Robo Otras Pertenencias</h3>
					<p>
						Objetos de uso personal dentro de la Cartera/Bolso como tus llaves, maquillaje e incluso zapatillas.
					</p>
				</div>

				<div class="col-md-4 text-center" data-aos="fade-up">
					<img class="img-fluid" src="./img/seguro-patrimoniales/movilidad/icon-robo-documentos.png" alt="icono Robo/Hurto Documentos y Tarjetas patrimoniales">
					<h3>Robo/Hurto Documentos y Tarjetas</h3>
					<p>
						DNI, Pasaporte, Registro o Licencia de Conducir, incluye tarjetas de Débito o Crédito.
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