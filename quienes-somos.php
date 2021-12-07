<?php require ('includes/config.inc.php'); ?>

<?php 
	$current = 'quienes_somos'; 
	$current_sub = ''; 
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Tag Manager Head -->
	<?php include_once("./includes/tag_manager_head.php"); ?>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Seccion sobre nuestra empresa. Conocenos, Seguros de Agro, Patrimoniales y Vida">
	<title>WGSA Seguros de Agro, Patrimoniales y Vida - Quienes Somos</title>

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

	<!-- Contenido QUIENES SOMOS -->
	<section id="content" class="transition quienes_somos">

		<!-- Header -->
		<section class="container-fluid p-0 header">
			<img class="img-fluid" src="./img/quienes-somos/slide-quienes-somos.jpg" alt="slide wgsa seguros quienes somos">
			<h1>Quiénes <br>SOMOS</h1>
		</section>
		<!-- Header end -->

		<!-- Frase Inicial -->
		<section class="frase">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>WG nace de un grupo de profesionales con espíritu emprendedor.</h2>
						<p>
							Con amplia trayectoria en el mercado asegurador. Aquí se fusionan la experiencia de trabajo en un marco tradicional con un nuevo enfoque, más cálido y actual, en el que la excelencia y la comunicación con el cliente marcan la diferencia. 
						</p>

						<p>
							Ayudamos a los clientes a entender los riesgos y a protegerse de ellos,
							respondiendo a sus necesidades con compromiso. 
						</p>
					</div>
				</div>
			</div>
		</section>
		<!-- Frase Inicial end -->

		<!-- Valores -->
		<section class="valores">

			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h3>Valores</h3>
					</div>
				</div>
			</div>

			<div class="container-fluid p-0 valor">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="flecha_mobile"></div>
							<p>confianza</p>
						</div>
						<div class="col-md-3">
							<div class="flecha_mobile"></div>
							<p>simplicidad</p>
						</div>
						<div class="col-md-3">
							<div class="flecha_mobile"></div>
							<p>agilidad</p>
						</div>
						<div class="col-md-3">
							<div class="flecha_mobile"></div>
							<p>honestidad</p>
						</div>
					</div>
				</div>
			</div>

		</section>
		<!-- Valores end -->

		<!-- Que Nos Destaca -->
		<section class="destaca">
			<div class="container">

				<div class="row">
					<div class="col-md-12">
						<h3>Qué nos destaca</h3>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 content_destaca">
						<div class="imagen">
							<img class="img-fluid" src="./img/quienes-somos/asesoramiento.png" alt="slide wgsa seguros asesoramiento">
						</div>
						<div class="datos">
							<h4>Asesoramiento</h4>
							<p>
								Somos especialistas en ahorrarte tiempo y dinero, hacemos que tengas todo resuelto. Te ayudamos a entender y gestionar tu seguro. 
							</p>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 content_destaca">
						<div class="imagen">
							<img class="img-fluid" src="./img/quienes-somos/transparencia.png" alt="slide wgsa seguros transparencia">
						</div>
						<div class="datos">
							<h4>Transparencia y rapidez</h4>
							<p>
								Combinamos tecnología con calidez humana para brindarte soluciones inmediatas. Te cotizamos cientos de seguros para ofrecerte el mejor para vos, sin letra chica.
							</p>
						</div>
					</div>
				</div>

			</div>
		</section>
		<!-- Que Nos Destaca end -->

		<!-- Banner -->
		<section class="banner container-fluid">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p>Seguros de tus desiciones</p>
					</div>
				</div>
			</div>
		</section>
		<!-- Banner end -->

	</section>
	<!-- Contenido QUIENES SOMOS end -->

	</section>

	<!-- Footer -->
	<?php include_once("./includes/footer.php"); ?>

	<script type="text/javascript" src="./node_modules/aos/dist/aos.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
</body>

</html>