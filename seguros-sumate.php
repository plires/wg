<?php require ('includes/config.inc.php'); ?>

<?php 
	$current = 'sumate'; 
	$current_sub = ''; 
?>

<?php require ('includes/capture-variables-get.php'); ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Tag Manager Head -->
	<?php include_once("./includes/tag_manager_head.php"); ?>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="¿Por qué ser parte del equipo de productores y productoras de WG?">
	<title>WGSA Seguros de Agro, Sumate a nuestra organización como productor/a</title>

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

	<!-- Sumate -->
	<section id="content" class="transition patrimoniales_enlatados sumate">

		<!-- Header -->
		<section class="container-fluid p-0 header">
			<div data-aos="fade-right" class="content_h1">
				<img class="img-fluid" src="./img/sumate/icono-sumate.png" alt="icono sumate manos equipo">
				<h1>Sumate a nuestra <br>organización <br>como productor/a</h1>
			</div>
		</section>
		<!-- Header end -->

		<!-- Formulario -->
		<section class="container formulario">
			
			<div class="row">
				<div class="col-md-12">
					<h2>Sumate a nuestra organización como productor/a</h2>
				</div>
			</div>

			<div id="notifications" class="row">

				<div class="col-md-6">

					<?php include_once("./includes/msg-exito.php"); ?>

					<?php include_once("./includes/errors.php"); ?>

					<form 
						id="form_sumate" 
						method="post" 
						action="./php/validate-form-contacto.php">

		        <input type="hidden" name="origin" value="Formulario de Sumate">

		          <div id="sending_form" class="transition">
		            <div class="spinner-border text-warning" role="status">
		              <span class="visually-hidden">Enviando...</span>
		            </div>
		          </div>

		          <div class="mb-3">
		            <label for="name" class="form-label">Nombre</label>
		            <input type="text" class="form-control" name="name" id="name" value="<?= $name ?>" aria-describedby="nameHelp">
		          </div>

		          <div class="mb-3">
		            <label for="email" class="form-label">Email</label>
		            <input type="email" class="form-control" name="email" id="email" value="<?= $email ?>" aria-describedby="emailHelp">
		          </div>

		          <div class="mb-3">
		            <label for="phone" class="form-label">Teléfono</label>
		            <input type="text" class="form-control" name="phone" id="phone" value="<?= $phone ?>" aria-describedby="phoneHelp">
		          </div>  

		          <div class="mb-3">
							  <label for="comments" class="form-label">Mensaje</label>
							  <textarea class="form-control" name="comments" rows="3"></textarea>
							</div>

							<div class="content_btn">
		          	<button 
		          		id="send" 
		          		class="btn btn-primary btn_contact" 
		          		type="button" 
		          		onclick="submitFormContacto('form_sumate')">Enviar
		          	</button>
							</div>

		      </form>

				</div>

				<div class="col-md-6 imagen_equipo">
					<img class="img-fluid" src="./img/sumate/wg-grupo.jpg" alt="icono grupo de trabajo wg seguros">
				</div>
			</div>

		</section>
		<!-- Formulario end -->

		<!-- Caracteristicas -->
		<section class="container caracteristicas">

			<div class="row">
				<div class="col-md-12">
					<h3>¿Por qué ser parte del equipo de productores y productoras de WG?</h3>
				</div>
			</div>

			<div class="row">

				<div class="col-md-6">
					<div class="content">
						<img class="img-fluid" src="./img/sumate/icono-plataforma-online.png" alt="icono plataforma online">
						<div>
							<h3>Plataforma Online</h3>
							<p>Una plataforma para conectarte virtualmente con nuestros asesores.</p>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="content">
						<img class="img-fluid" src="./img/sumate/icono-capacitacion.png" alt="icono capacitacion">
						<div>
							<h3>Capacitación</h3>
							<p>Brindamos capacitaciones de valor a nuestros productores.</p>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="content">
						<img class="img-fluid" src="./img/sumate/icono-respaldo.png" alt="icono respaldo">
						<div>
							<h3>Respaldo</h3>
							<p>Ofrecemos el respaldo que el productor necesita para vincularse.</p>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="content">
						<img class="img-fluid" src="./img/sumate/icono-estrategia.png" alt="icono estrategia online">
						<div>
							<h3>Estrategia</h3>
							<p>Para mejorar tu rentabilidad y el servicio que ofrecés a tu cartera.</p>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="content">
						<img class="img-fluid" src="./img/sumate/icono-asesoramiento.png" alt="icono asesoramiento">
						<div>
							<h3>Asesoramiento</h3>
							<p>Te asesoramos para que crezcas como productor.</p>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="content">
						<img class="img-fluid" src="./img/sumate/icono-coworking.png" alt="icono coworking">
						<div>
							<h3>Coworking</h3>
							<p>Ofrecemos un espacio de coworking.</p>
						</div>
					</div>
				</div>

			</div>
					
		</section>
		<!-- Caracteristicas end -->		

	</section>
	<!-- Sumate end -->

	<!-- Newsletter -->
	<?php include_once("./includes/newsletter.php"); ?>

	</section>

	<!-- Footer -->
	<?php include_once("./includes/footer.php"); ?>

	<script type="text/javascript" src="./node_modules/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="./node_modules/aos/dist/aos.js"></script>
	<script src="https://www.google.com/recaptcha/api.js?render=<?= RECAPTCHA_KEY_SITE ?>"></script>
	<script type="text/javascript" src="js/app.js"></script>
	<script type="text/javascript" src="js/contactos.js"></script>

</body>

</html>