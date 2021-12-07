<?php require ('includes/config.inc.php'); ?>
<?php require ('clases/selects.php'); ?>

<?php 
	$current = 'seguros'; 
	$current_sub = 'vida'; 
?>

<?php

	/* Creo los array para formar los select */
	$selects = new Selects();
	$segurosVida = $selects->getValues('seguros_vida.json');
	$provinces = $selects->getValues('provincias.json');
	$genders = $selects->getValues('sexos.json');
	$incomes = $selects->getValues('ingresos.json');
  
  if (isset($_GET['seguro'])) {
    $seguroSelected = $_GET['seguro'];
  } else {
    $seguroSelected = '';
  }

  if (isset($_GET['age'])) {
    $age = $_GET['age'];
  } else {
    $age = '';
  }

  if (isset($_GET['gender'])) {
    $genderSelected = $_GET['gender'];
  } else {
    $genderSelected = '';
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

  if (isset($_GET['income'])) {
    $incomeSelected = $_GET['income'];
  } else {
    $incomeSelected = '';
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
	<meta name="description" content="Seccion sobre seguros de vida. Conocenos, Seguros de Agro, Patrimoniales y Vida">
	<title>WGSA Seguros de Agro, Patrimoniales y Vida - Seguros de Vida</title>

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

	<!-- Contenido SEGURO DE VIDA -->
	<section id="content" class="transition seguro_vida">

		<!-- Header -->
		<section class="container-fluid p-0 header">
			<img class="img-fluid" src="./img/seguro-vida/slide-seguro-vida.jpg" alt="slide wgsa seguros seguros de vida">
			<div class="content_h1">
				<h1>Seguro<br>DE VIDA</h1>
				<p>
					Conocé la tranquilidad <br>de tener un seguro de vida
				</p>
			</div>
		</section>
		<!-- Header end -->

		<!-- Formulario -->
		<section id="formulario" data-aos="fade-up" class="container formulario">
			<div class="row">

				<div class="col-lg-6 datos">
					<p>
						La Salud es lo más importante, y por eso lo protegemos de la mejor manera. Nuestros seguros de vida te ofrecen amplias coberturas para tu tranquilidad y la de tu familia estén garantizadas. 
					</p>

					<ul>
						<li>Vida individual</li>
						<li>Planes de ahorro</li>
						<li>Vida societario</li>
						<li>Vida para hombres clave</li>
						<li>Vida corporativo</li>
						<li>Ahorro corporativo</li>
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
            action="./php/validate-form-seguros-vida.php" 
            class="needs-validation" 
            novalidate>

						<input type="hidden" name="origin" value="Seguros de Vida">

						<h4>Cotizá tu seguro ahora</h4>

						<div class="tab transition">

							<div class="mb-3">
							  <label for="seguro" class="form-label">Elegí el Seguro que Querés</label>
							  <select 
							  	name="seguro" 
							  	class="form-select" 
							  	oninput="this.className = 'form-select'">

							  		<?php if ( !empty($segurosVida) ): ?>

								  		<?php foreach ($segurosVida as $seguroVida): ?>

								  			<?php $value = $seguroSelected === $seguroVida['value'] ? 'selected' : ''; ?>

								  			<option value="<?= $seguroVida['value'] ?>" <?= $value ?>  ><?= $seguroVida['name'] ?></option>

								  		<?php endforeach ?>
								  			
							  		<?php else: ?>

							  			<option value="empty">Error al cargar los seguros</option>

							  		<?php endif ?>

								</select>
							</div>

							<div class="mb-3">
							  <label for="age" class="form-label">Edad</label>
							  <input 
							  	oninput="this.className = 'form-control'"
							  	type="text" 
							  	value="<?= $age ?>" 
							  	class="form-control" 
							  	name="age" 
							  	placeholder="ej: 42 años">
							</div>

							<div class="mb-3">
							  <label for="gender" class="form-label">Género</label>
							  <select 
							  	name="gender" 
							  	class="form-select" 
							  	oninput="this.className = 'form-select'">

							  		<?php if ( !empty($genders) ): ?>

								  		<?php foreach ($genders as $gender): ?>

								  			<?php $value = $genderSelected === $gender['value'] ? 'selected' : ''; ?>

								  			<option value="<?= $gender['value'] ?>" <?= $value ?>  ><?= $gender['name'] ?></option>

								  		<?php endforeach ?>
								  			
							  		<?php else: ?>

							  			<option value="empty">Error al cargar los géneros</option>

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

							<div class="mb-3">
							  <label for="income" class="form-label">Ingresos Mensuales Aprox?</label>
							  <select 
							  	name="income" 
							  	class="form-select" 
							  	oninput="this.className = 'form-select'">

							  	<?php if ( !empty($incomes) ): ?>

							  		<?php foreach ($incomes as $income): ?>

							  			<?php $value = $incomeSelected === $income['value'] ? 'selected' : ''; ?>

							  			<option value="<?= $income['value'] ?>" <?= $value ?>  ><?= $income['name'] ?></option>

							  		<?php endforeach ?>
							  			
						  		<?php else: ?>

						  			<option value="empty">Error al cargar los ingresos</option>

						  		<?php endif ?>

								</select>
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
					        1. ¿Se pagan en dólares?
					      </button>
					    </h2>
					    <div id="pta_1" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionPreguntas">
					      <div class="accordion-body">
					        No. Los planes de seguros de vida son contratos en pesos que siguen el tipo de cambio oficial, se pagan siempre en pesos argentinos.
					      </div>
					    </div>
					  </div>

					  <div class="accordion-item">
					    <h2 class="accordion-header" id="headingTwo">
					      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pta_2" aria-expanded="false" aria-controls="pta_2">
					        2. ¿Los seguros de vida en Argentina pueden seguir al dólar oficial?
					      </button>
					    </h2>
					    <div id="pta_2" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionPreguntas">
					      <div class="accordion-body">
					        Puede seguirlo o no, es decisión del asegurado hacerlo, es una buena opción para que la suma asegurada sea importante en el momento del siniestro.
					      </div>
					    </div>
					  </div>

					  <div class="accordion-item">
					    <h2 class="accordion-header" id="headingThree">
					      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pta_3" aria-expanded="false" aria-controls="pta_3">
					        3. ¿Si estoy en algún tratamiento médico la compañía puede analizar darme un seguro de vida?
					      </button>
					    </h2>
					    <div id="pta_3" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionPreguntas">
					      <div class="accordion-body">
					        Si, tiene un experimentado equipo de suscripción para analizar el riesgo de persona que desea adquirir el seguro.
					      </div>
					    </div>
					  </div>

					  <div class="accordion-item">
					    <h2 class="accordion-header" id="headingThree">
					      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pta_4" aria-expanded="false" aria-controls="pta_4">
					        4. ¿Con qué compañías trabajan?
					      </button>
					    </h2>
					    <div id="pta_4" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionPreguntas">
					      <div class="accordion-body">
					        Trabajamos con Zurich International Life principalmente como socio estratégico y otras compañías nacionales.
					      </div>
					    </div>
					  </div>

					  <div class="accordion-item">
					    <h2 class="accordion-header" id="headingThree">
					      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pta_5" aria-expanded="false" aria-controls="pta_5">
					        5. ¿Cómo se calcula el seguro de vida?
					      </button>
					    </h2>
					    <div id="pta_5" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionPreguntas">
					      <div class="accordion-body">
					        Hay varias maneras de calcularlo. Se hace una cuenta sobre garantizar gastos o ingresos dolarizados por un tiempo determinado, de la persona asegurada.
					      </div>
					    </div>
					  </div>

					  <div class="accordion-item">
					    <h2 class="accordion-header" id="headingThree">
					      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pta_6" aria-expanded="false" aria-controls="pta_6">
					        6. ¿Existen coberturas por enfermedades?
					      </button>
					    </h2>
					    <div id="pta_6" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionPreguntas">
					      <div class="accordion-body">
					        Sí y actúan como anticipo según diagnóstico.
					      </div>
					    </div>
					  </div>

					  <div class="accordion-item">
					    <h2 class="accordion-header" id="headingThree">
					      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pta_7" aria-expanded="false" aria-controls="pta_7">
					        7. ¿Se puede desgravar el pago de seguro de vida del impuesto a la presunta ganancia?
					      </button>
					    </h2>
					    <div id="pta_7" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionPreguntas">
					      <div class="accordion-body">
					        Si, tanto sea en la escala de personas físicas o de personas jurídicas.
					      </div>
					    </div>
					  </div>

					</div>

				</div>

			</div>
		</section>
		<!-- Preguntas Frecuentes end -->

	</section>
	<!-- Contenido SEGURO DE VIDA end -->

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