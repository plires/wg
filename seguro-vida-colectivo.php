<?php require ('includes/config.inc.php'); ?>
<?php require ('clases/selects.php'); ?>

<?php 
	$current = 'seguros'; 
	$current_sub = 'patrimonial'; 

	/* Creo los array para formar los select */
	$selects = new Selects();
	$segurosTipo = $selects->getValues('./seguros_vida_colectivo.json');
?>

<?php require ('./includes/capture-variables-get.php'); ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Tag Manager Head -->
	<?php include_once("./includes/tag_manager_head.php"); ?>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Seccion sobre seguros patrimoniales Vida Colectivo. Tambien contamos con Seguros de Agro, de vida y otros patrimoniales.">
	<title>WGSA Seguros de Agro, Patrimoniales y Vida - Vida Colectivo</title>

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
				<img class="img-fluid" src="./img/seguro-patrimoniales/enlatados/icono-vida-colectivo.png" alt="icono seguro patrimoniales Vida Colectivo">
				<h1>Vida Colectivo</h1>
			</div>
		</section>
		<!-- Header end -->

		<!-- Contenido VIDA COLECTIVO -->
		<section id="content" class="transition seguro_vida">

			<!-- Formulario -->
			<section id="formulario" data-aos="fade-up" class="container formulario">
				<div class="row">

					<div class="col-lg-6 datos">
						<p>
							El éxito de una compañía depende en gran parte de su capital humano. La atracción del talento, motivar y retener a sus empleados son algunos de los objetivos principales de una adecuada política de compensación y beneficios.
							Ponemos a tu disposición diferentes alternativas para que puedas brindarles valiosos beneficios de protección, al mismo tiempo que tu compañía obtiene eficiencia en costos.
						</p>

						<ul>
							<li>Seguros de Vida Colectivos</li>
							<li>Soluciones Internacionales</li>
							<li>Accidentes Personales Colectivos</li>
						</ul>
					</div>

					<div class="col-lg-4 offset-lg-1 form content_otros_patrimoniales">

						<!-- Msg Exito Newsletter -->
		      	<?php include_once("./includes/msg-exito.php"); ?>
			      <!-- Msg. Exito Newsletter end -->

			      <!-- Errores Formulario -->
		      	<?php include_once("./includes/errors.php"); ?>
			      <!-- Errores Formulario end -->

						<form 
	            id="form_seguros" 
	            method="post" 
	            action="./php/validate-form-seguros-otros-patrimoniales.php" 
	            class="needs-validation otros_patrimoniales" 
	            novalidate>

							<h4>Cotizá tu seguro ahora</h4>

								<input type="hidden" name="seguro" value="Vida Colectivo">

								<div class="mb-3">
								  <label for="plan" class="form-label">Elegí el Seguro que Querés</label>
								  <select 
								  	name="plan" 
								  	class="form-select" 
								  	oninput="this.className = 'form-select'">

								  		<?php if ( !empty($segurosTipo) ): ?>

									  		<?php foreach ($segurosTipo as $seguroTipo): ?>

									  			<?php $value = $seguroSelected === $seguroTipo['value'] ? 'selected' : ''; ?>

									  			<option value="<?= $seguroTipo['value'] ?>" <?= $value ?>  ><?= $seguroTipo['name'] ?></option>

									  		<?php endforeach ?>
									  			
								  		<?php else: ?>

								  			<option value="empty">Error al cargar los seguros</option>

								  		<?php endif ?>

									</select>
								</div>

				        <?php include("./includes/partial-form-patrimoniales.php"); ?>

						</form>

					</div>

				</div>
			</section>
			<!-- Formulario end -->

		</section>
		<!-- Contenido VIDA COLECTIVO end -->

	</section>
	<!-- Enlatados end -->

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