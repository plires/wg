<?php require ('includes/config.inc.php'); ?>
<?php require ('clases/selects.php'); ?>

<?php 
	$current = 'seguros'; 
	$current_sub = 'agro'; 
?>

<?php

	/* Creo los array para formar los select */
	$selects = new Selects();
	$segurosAgro = $selects->getValues('seguros_agricolas.json');
	$activities = $selects->getValues('seguros_agricolas_actividad.json');
	$hectares = $selects->getValues('seguros_agricolas_hectarias.json');
	$provinces = $selects->getValues('provincias.json');
  
  if (isset($_GET['seguro'])) {
    $seguroSelected = $_GET['seguro'];
  } else {
    $seguroSelected = '';
  }

  if (isset($_GET['activity'])) {
    $activitySelected = $_GET['activity'];
  } else {
    $activitySelected = '';
  }

  if (isset($_GET['hectares'])) {
    $hectarianSelected = $_GET['hectares'];
  } else {
    $hectarianSelected = '';
  }

  if (isset($_GET['province'])) {
    $provinceSelected = $_GET['province'];
  } else {
    $provinceSelected = '';
  }

  if (isset($_GET['locality'])) {
    $localitySelected = $_GET['locality'];
  } else {
    $localitySelected = '';
  }

  if (isset($_GET['name'])) {
    $nameSelected = $_GET['name'];
  } else {
    $nameSelected = '';
  }

  if (isset($_GET['email'])) {
    $email = $_GET['email'];
  } else {
    $email = '';
  }

  if (isset($_GET['phone'])) {
    $phoneSelected = $_GET['phone'];
  } else {
    $phoneSelected = '';
  }

  if (isset($_GET['errors'])) {
    $errors = $_GET['errors'];
  } else {
    $errors = [];
  }

  if (isset($_GET['msg_seguros'])) {
    $msg_seguros = $_GET['msg_seguros'];
  }

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Tag Manager Head -->
	<?php include_once("./includes/tag_manager_head.php"); ?>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Seccion sobre seguros agrícolas. Conocenos, Seguros de Agro, Patrimoniales y Vida">
	<title>WGSA Seguros de Agro, Patrimoniales y Vida - Seguros Agrícolas</title>

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

	<!-- Contenido AGRICOLA -->
	<section id="content" class="transition seguro_vida seguro_agricola">

		<!-- Header -->
		<section class="container-fluid p-0 header">
			<img class="img-fluid" src="./img/seguro-agricola/slide-seguro-agricola.jpg" alt="slide wgsa seguros seguros agricola">
			<div class="content_h1">
				<h1>Seguros<br>AGRÍCOLAS</h1>
				<p>
					Conocé la tranquilidad <br>de sembrar sin problemas
				</p>
			</div>
		</section>
		<!-- Header end -->

		<!-- Formulario -->
		<section class="container formulario">
			<div class="row">

				<div class="col-lg-6 datos">
					<p>
						Cada vez están más expuestos de fenómenos naturales. Enterate de que los podés proteger. vida te ofrecen amplias coberturas para tu tranquilidad y la de tu familia estén garantizadas. 
					</p>

					<ul>
						<li>Granizo</li>
						<li>Incendio</li>
						<li>Resiembra </li>
						<li>Vientos fuertes</li>
						<li>Heladas</li>
						<li>Falta de piso</li>
					</ul>
				</div>

				<div class="col-lg-4 offset-lg-1 form">

					<!-- Msg Exito Newsletter -->
	      	<?php include_once("./includes/msg-exito.php"); ?>
		      <!-- Msg. Exito Newsletter end -->

		      <!-- Errores Formulario -->
	      	<?php include_once("./includes/errors.php"); ?>
		      <!-- Errores Formulario end -->

					<form 
            id="form_seguros" 
            method="post" 
            action="./php/validate-form-seguros-agricolas.php" 
            class="needs-validation" 
            novalidate>

						<input type="hidden" name="origin" value="Seguros Agrícolas">

						<h4>Cotizá tu seguro ahora</h4>

						<div class="tab transition">

							<div class="mb-3">
							  <label for="seguro" class="form-label">Elegí el Seguro que Querés</label>
							  <select 
							  	name="seguro" 
							  	class="form-select" 
							  	oninput="this.className = 'form-select'">

							  		<?php if ( !empty($segurosAgro) ): ?>

								  		<?php foreach ($segurosAgro as $seguroAgro): ?>

								  			<?php $value = $seguroSelected === $seguroAgro['value'] ? 'selected' : ''; ?>

								  			<option value="<?= $seguroAgro['value'] ?>" <?= $value ?>  ><?= $seguroAgro['name'] ?></option>

								  		<?php endforeach ?>
								  			
							  		<?php else: ?>

							  			<option value="empty">Error al cargar los seguros</option>

							  		<?php endif ?>

								</select>
							</div>

							<div class="mb-3">
							  <label for="activity" class="form-label">Actividad que Desarrolla?</label>
							  <select 
							  	name="activity" 
							  	class="form-select" 
							  	oninput="this.className = 'form-select'">

							  		<?php if ( !empty($activities) ): ?>

								  		<?php foreach ($activities as $activity): ?>

								  			<?php $value = $activitySelected === $activity['value'] ? 'selected' : ''; ?>

								  			<option value="<?= $activity['value'] ?>" <?= $value ?>  ><?= $activity['name'] ?></option>

								  		<?php endforeach ?>
								  			
							  		<?php else: ?>

							  			<option value="empty">Error al cargar las actividades</option>

							  		<?php endif ?>

								</select>
							</div>

							<div class="mb-3">
							  <label for="hectares" class="form-label">Cant. de Hectareas?</label>
							  <select 
							  	name="hectares" 
							  	class="form-select" 
							  	oninput="this.className = 'form-select'">

							  		<?php if ( !empty($hectares) ): ?>

								  		<?php foreach ($hectares as $hectarian): ?>

								  			<?php $value = $hectarianSelected === $hectarian['value'] ? 'selected' : ''; ?>

								  			<option value="<?= $hectarian['value'] ?>" <?= $value ?>  ><?= $hectarian['name'] ?></option>

								  		<?php endforeach ?>
								  			
							  		<?php else: ?>

							  			<option value="empty">Error al cargar la cantida de hectarias</option>

							  		<?php endif ?>

								</select>
							</div>

						</div>

						<div class="tab transition">

							<div class="mb-3">
							  <label for="province" class="form-label">Provincia</label>
							  <select 
							  	name="province" 
							  	class="form-select" 
							  	oninput="this.className = 'form-select'">

							  	<?php if ( !empty($provinces) ): ?>

							  		<?php foreach ($provinces as $province): ?>

							  			<?php $value = $provinceSelected === $province['value'] ? 'selected' : ''; ?>

							  			<option value="<?= $province['value'] ?>" <?= $value ?>  ><?= $province['name'] ?></option>

							  		<?php endforeach ?>
							  			
						  		<?php else: ?>

						  			<option value="empty">Error al cargar las provincias</option>

						  		<?php endif ?>
										
								</select>
							</div>

							<div class="mb-3">
							  <label for="locality" class="form-label">Localidad</label>
							  <input 
							  	oninput="this.className = 'form-control'"
							  	type="tel" 
							  	value="<?= $localitySelected ?>" 
							  	class="form-control" 
							  	name="locality" 
							  	placeholder="ej: CABA">
							</div>

						</div>

						<div class="tab transition">

							<div class="mb-3">
							  <label for="name" class="form-label">Nombre</label>
							  <input 
							  	oninput="this.className = 'form-control'"
							  	type="text" 
							  	value="<?= $nameSelected ?>" 
							  	class="form-control" 
							  	name="name" 
							  	placeholder="ej: juan perez">
							</div>

							<div class="mb-3">
							  <label for="email" class="form-label">Email</label>
							  <input 
							  	oninput="this.className = 'form-control'"
							  	type="email" 
							  	value="<?= $email ?>"  
							  	class="form-control" 
							  	name="email" 
							  	placeholder="ej: juan.perez@gmail.com">
							</div>

							<div class="mb-3">
							  <label for="phone" class="form-label">Teléfono</label>
							  <input 
							  	oninput="this.className = 'form-control'"
							  	type="tel" 
							  	value="<?= $phoneSelected ?>" 
							  	class="form-control" 
							  	name="phone" 
							  	placeholder="ej: 1150547744">
							</div>

						</div>

						<div id="sending_form" class="transition">
							<div class="spinner-border text-warning" role="status">
							  <span class="visually-hidden">Enviando...</span>
							</div>
						</div>

						<!-- Circles which indicates the steps of the form: -->
						<div class="content_circles">
						  <span class="step"></span>
						  <span class="step"></span>
						  <span class="step"></span>
						</div>

						<div class="content_btn">
					    <button class="btn btn-primary" type="button" id="prevBtn" onclick="nextPrev(-1)">Anterior</button>
					    <button class="btn btn-primary" type="button" id="nextBtn" onclick="nextPrev(1)">Siguiente</button>
						</div>

					</form>

				</div>

			</div>
		</section>
		<!-- Formulario end -->

		<!-- Preguntas Frecuentes -->
		<section class="container preguntas">
			<div class="row">

				<div class="col-md-12">
					<h3>Preguntas frecuentes</h3>
				</div>

				<div class="col-md-12">

					<div class="accordion" id="accordionPreguntas">

					  <div class="accordion-item">
					    <h2 class="accordion-header" id="headingOne">
					      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#pta_1" aria-expanded="true" aria-controls="pta_1">
					        1. ¿Qué coberturas operan?
					      </button>
					    </h2>
					    <div id="pta_1" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionPreguntas">
					      <div class="accordion-body">
					        Operamos todas las alternativas de cobertura de granizo y adicionales e helada, falta de piso e inundación. Manejamos franquicias del 6% y 10% NO deducibles, y opciones de franquicias sobre ÁREA dañada para adicionales.
					      </div>
					    </div>
					  </div>

					  <div class="accordion-item">
					    <h2 class="accordion-header" id="headingTwo">
					      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pta_2" aria-expanded="false" aria-controls="pta_2">
					        2. ¿Cotizan Multirriesgo?
					      </button>
					    </h2>
					    <div id="pta_2" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionPreguntas">
					      <div class="accordion-body">
					        Si. Son coberturas específicas que presentan ciertos requisitos respecto de la superficie mínima, distribución geográfica y cultivos. El cliente debe presentar el plan de siembras e inversiones y a partir de esos datos se analizan las alternativas.
					      </div>
					    </div>
					  </div>

					  <div class="accordion-item">
					    <h2 class="accordion-header" id="headingThree">
					      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pta_3" aria-expanded="false" aria-controls="pta_3">
					       3. ¿Hay opciones de franquicia por área para adicionales?
					      </button>
					    </h2>
					    <div id="pta_3" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionPreguntas">
					      <div class="accordion-body">
					        Si. Para las coberturas adicionales de viento y helada ofrecemos las alternativas franquicias sobre ÁREA dañada, como así también las tradicionales sobre LOTE.
					      </div>
					    </div>
					  </div>

					  <div class="accordion-item">
					    <h2 class="accordion-header" id="headingThree">
					      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pta_4" aria-expanded="false" aria-controls="pta_4">
					        4. ¿Hay liberación de lote?
					      </button>
					    </h2>
					    <div id="pta_4" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionPreguntas">
					      <div class="accordion-body">
					        Si. En caso de resiembra, una vez alcanzada la cobertura plena, se indemniza el 100% del daño tasado.
					      </div>
					    </div>
					  </div>

					</div>

				</div>

			</div>
		</section>
		<!-- Preguntas Frecuentes end -->

	</section>
	<!-- Contenido AGRICOLA end -->

	</section>

	<!-- Footer -->
	<?php include_once("./includes/footer.php"); ?>

	<script type="text/javascript" src="./node_modules/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="https://www.google.com/recaptcha/api.js?render=<?= RECAPTCHA_KEY_SITE ?>"></script>
	<script type="text/javascript" src="./node_modules/aos/dist/aos.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
	<script type="text/javascript" src="js/steps-vida.js"></script>
</body>

</html>