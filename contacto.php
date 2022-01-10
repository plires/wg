<?php require ('includes/config.inc.php'); ?>

<?php 
	$current = 'contacto'; 
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
	<section id="content" class="transition patrimoniales_enlatados contacto">

		<!-- Header -->
		<section class="container-fluid p-0 header">
			<div data-aos="fade-right" class="content_h1">
				<img class="img-fluid" src="./img/contacto/contacto.png" alt="contacto wg seguros">
				<h1>Estamos para <br>ayudarte</h1>
			</div>
		</section>
		<!-- Header end -->

		<!-- Planes -->
		<section class="container datos_contacto">

			<div class="row">

				<div class="col-12">
					<h2>Contactanos y resolveremos tus dudas</h2>
				</div>

				<div class="col-md-6 mapa_datos">

					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.9040289749646!2d-58.38873874005045!3d-34.60658824066427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccac47f0ead8b%3A0x889ce834dcea4fbc!2sTte.%20Gral.%20Juan%20Domingo%20Per%C3%B3n%201558%2C%20C1042%20CABA!5e0!3m2!1ses-419!2sar!4v1641822864259!5m2!1ses-419!2sar" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

					<div class="datos">
						<a 
							class="transition direccion" 
							target="_blank" 
							rel="noopener noreferrer" 
							href="https://goo.gl/maps/BB25oyFv2sQdyZys8">Teniente Gral Perón 1558 piso 7 (CABA)
						</a>

						<a 
							class="transition direccion" 
							target="_blank" 
							rel="noopener noreferrer" 
							href="https://goo.gl/maps/fdpvMJG6XRoqjcz88">Teniente Uriburu 288, Trenque Lauquen.
						</a>

						<a 
							href="tel:1155163751"
							class="transition" 
							>2392-544127 - 11-55163751
						</a>
						
						<a 
							href="mailto:info@wgsa.com.ar" 
							class="transition" 
							target="_blank" 
							rel="noopener noreferrer">info@wgsa.com.ar							
						</a>
					</div>

					<div class="redes">
						<a class="transition" href="<?= RRSS_FACEBOOK ?>"><img class="transition img-fluid" src="./img/contacto/facebook.png" alt="facebook"></a>
						<a class="transition" href="<?= RRSS_LINKEDIN ?>"><img class="transition img-fluid" src="./img/contacto/linkedin.png" alt="linkedin"></a>
						<a class="transition" href="<?= RRSS_INSTAGRAM ?>"><img class="transition img-fluid" src="./img/contacto/instagram.png" alt="instagram"></a>
						<a class="transition" target="_blank" href="https://web.whatsapp.com/send?phone=5491155163751&text=Hola!%20Necesito%20hacer%20una%20consulta!"><img class="transition img-fluid" src="./img/contacto/whatsapp.png" alt="whatsapp"></a>
					</div>


				</div>

				<div class="col-md-6 form_contacto">

					<div id="notifications" class="row">
						<div class="com-md-12">
							<?php include_once("./includes/msg-exito.php"); ?>
						</div>

						<div class="com-md-12">
							<?php include_once("./includes/errors.php"); ?>
						</div>
					</div>

					<form 
						id="form_contacto" 
						method="post" 
						action="./php/validate-form-contacto.php">

		        <input type="hidden" name="origin" value="Formulario de Contactos">

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
		          		onclick="submitFormContacto('form_contacto')">Enviar
		          	</button>
							</div>

		      </form>

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
	<script type="text/javascript" src="js/app.js"></script>
	<script type="text/javascript" src="js/contactos.js"></script>

</body>

</html>