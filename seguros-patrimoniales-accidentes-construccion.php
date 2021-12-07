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
	<meta name="description" content="Seccion sobre seguros patrimoniales accidentes personales en contrucción. Tambien contamos con Seguros de Agro, de vida y otros patrimoniales.">
	<title>WGSA Seguros de Agro, Patrimoniales y Vida - Accidentes personales en contrucción</title>

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
		<section class="container-fluid p-0 header extra">
			<div data-aos="fade-right" class="content_h1">
				<img class="img-fluid" src="./img/seguro-patrimoniales/enlatados/icono-accidentes-contruccion.png" alt="icono seguro patrimoniales accidentes personales construccion">
				<h1>Accidentes <br>personales <br>construcción <br><span>*hasta 14mts de altura</span></h1>
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
					<h2>LA TRANQUILIDAD DE <br>SENTIRSE PROTEGIDO <br>DESDE LA BASE</h2>
				</div>
			</div>

			<div class="row">
				<div data-aos="fade-up" class="col-12 col-md-6 col-lg-3 plan">

					<div class="plan_numero">
						<p>Plan<br><span>01</span></p>
					</div>

					<div class="plan_costo">
						<p>A partir de<br><span>$ 345</span><br>por mes</p>
					</div>

					<div class="plan_contacto">
						<button class="btn btn-primary btn_contratar">Contratar</button>
					</div>

					<div class="formulario_desplegable transition">
						<form 
							id="form_seguros_accidente_const_01" 
							method="post" 
							class="forms" 
							action="./php/validate-form-seguros-patrimoniales.php">

							<input type="hidden" name="plan" value="01">
							<input type="hidden" name="seguro" value="Accidentes Personales Construccion">

			        <?php include("./includes/partial-form-patrimoniales.php"); ?>

			      </form>
					</div>

					<div class="contenido">

						<p class="parrafo_desc">
							Muerte accidental<br>
							<span>600.000</span>
						</p>

						<p class="parrafo_desc">
							Invalidez total y/o permanente por accidente<br>
							<span>600.000</span>
						</p>

						<p class="parrafo_desc">
							Asistencia médica farmaceútica<br>
							<span>180.000</span>
						</p>

						<p class="parrafo_desc">
							Subsidio por fallecimiento<br>
							<span>118.800</span>
						</p>

					</div>

				</div>

				<div data-aos="fade-up" data-aos-delay="50" class="col-12 col-md-6 col-lg-3 plan">

					<div class="plan_numero">
						<p>Plan<br><span>02</span></p>
					</div>

					<div class="plan_costo">
						<p>A partir de<br><span>$ 510</span><br>por mes</p>
					</div>

					<div class="plan_contacto">
						<button class="btn btn-primary btn_contratar">Contratar</button>
					</div>

					<div class="formulario_desplegable transition">
						<form 
							id="form_seguros_accidente_const_02" 
							method="post" 
							class="forms" 
							action="./php/validate-form-seguros-patrimoniales.php">

							<input type="hidden" name="plan" value="02">
							<input type="hidden" name="seguro" value="Accidentes Personales Construccion">

			        <?php include("./includes/partial-form-patrimoniales.php"); ?>

			      </form>
					</div>

					<div class="contenido">

						<p class="parrafo_desc">
							Muerte accidental<br>
							<span>1.000.000</span>
						</p>

						<p class="parrafo_desc">
							Invalidez total y/o permanente por accidente<br>
							<span>1.000.000</span>
						</p>

						<p class="parrafo_desc">
							Asistencia médica farmaceútica<br>
							<span>250.000</span>
						</p>

						<p class="parrafo_desc">
							Subsidio por fallecimiento<br>
							<span>118.800</span>
						</p>

					</div>

				</div>

				<div data-aos="fade-up" data-aos-delay="100" class="col-12 col-md-6 col-lg-3 plan">

					<div class="plan_numero">
						<p>Plan<br><span>03</span></p>
					</div>

					<div class="plan_costo">
						<p>A partir de<br><span>$ 680</span><br>por mes</p>
					</div>

					<div class="plan_contacto">
						<button class="btn btn-primary btn_contratar">Contratar</button>
					</div>

					<div class="formulario_desplegable transition">
						<form 
							id="form_seguros_accidente_const_03" 
							method="post" 
							class="forms" 
							action="./php/validate-form-seguros-patrimoniales.php">

							<input type="hidden" name="plan" value="03">
							<input type="hidden" name="seguro" value="Accidentes Personales Construccion">

			        <?php include("./includes/partial-form-patrimoniales.php"); ?>

			      </form>
					</div>

					<div class="contenido">

						<p class="parrafo_desc">
							Muerte accidental<br>
							<span>2.000.000</span>
						</p>

						<p class="parrafo_desc">
							Invalidez total y/o permanente por accidente<br>
							<span>2.000.000</span>
						</p>

						<p class="parrafo_desc">
							Asistencia médica farmaceútica<br>
							<span>250.000</span>
						</p>

						<p class="parrafo_desc">
							Subsidio por fallecimiento<br>
							<span>118.800</span>
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
							id="form_seguros_accidente_const_custom" 
							method="post" 
							class="forms" 
							action="./php/validate-form-seguros-patrimoniales.php">

							<input type="hidden" name="plan" value="Custom">
							<input type="hidden" name="seguro" value="Accidentes Personales Construccion">

			        <?php include("./includes/partial-form-patrimoniales.php"); ?>

			      </form>
					</div>

					<div class="contenido">

						<p class="parrafo_desc">
							Para una protección que se adapte a tus necesidades te asesoramos de manera personalizada. Contactanos.
						</p>
						
					</div>

				</div>

			</div>

		</section>
		<!-- Planes end -->

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