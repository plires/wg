<?php require ('includes/config.inc.php'); ?>

<?php 
	$current = 'home'; 
	$current_sub = ''; 
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Tag Manager Head -->
	<?php include_once("./includes/tag_manager_head.php"); ?>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Seguros de Agro, Patrimoniales y Vida">
	<title>WGSA Seguros de Agro, Patrimoniales y Vida - Home</title>

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

	<!-- Contenido HOME -->
	<section id="content" class="transition home">

		<!-- Slide -->
		<section id="slide_home" class="carousel slide" data-bs-ride="carousel">
		  
		  <div class="carousel-inner">
		    
		    <div class="carousel-item active">
		      <img id="slide_1" src="#" class="d-block w-100" alt="seguros wgsa">
	      		<div class="container datos">
		      		<div class="row w-100">
				      	<div class="col-md-12">
				      		<h1>Seguros de <br>tus decisiones</h1>
				      		<p>Mucho más que un <br>broker de seguros.</p>
				      		<a href="./quienes-somos.php" class="btn btn-primary">Quiénes Somos</a>
				      	</div>
			      	</div>
		      	</div>
		    </div>

		    <div class="carousel-item">
		      <img id="slide_2" src="#" class="d-block w-100" alt="seguros wgsa patrimonial">
		      <div class="container datos other_background">
	      		<div class="row">
			      	<div class="col-md-12">
			      		<p class="title">SEGURO PATRIMONIAL</p>
			      		<h2>Tu casa es más <br>cómoda, asegurada.</h2>
			      		<p>Encontrá la alternativa para vos.</p>
			      		<a href="./seguro-patrimoniales.php" class="btn btn-primary">Quiero mi Seguro</a>
			      	</div>
		      	</div>
	      	</div>
		    </div>

		    <div class="carousel-item">
		      <img id="slide_3" src="#" class="d-block w-100" alt="seguros wgsa seguro agricola">
		      <div class="container datos other_background">
	      		<div class="row">
			      	<div class="col-md-12">
			      		<p class="title">SEGURO AGRÍCOLA</p>
			      		<h2>Cuando tu campo está <br>asegurado, podés sembrar tranquilo.</h2>
			      		<p>Conocé la tranquilidad de sembrar sin problemas.</p>
			      		<a href="./seguro-agricola.php" class="btn btn-primary">Quiero mi Seguro</a>
			      	</div>
		      	</div>
	      	</div>
		    </div>

		    <div class="carousel-item">
		      <img id="slide_4" src="#" class="d-block w-100" alt="seguros wgsa seguro de vida">
		      <div class="container datos other_background">
	      		<div class="row">
			      	<div class="col-md-12">
			      		<p class="title">SEGURO DE VIDA</p>
			      		<h2>Lo que mas valorás, <br>está en buenas manos.</h2>
			      		<p>Conocé la tranquilidad de tener un seguro de vida</p>
			      		<a href="./seguro-vida.php" class="btn btn-primary">Quiero mi Seguro</a>
			      	</div>
		      	</div>
	      	</div>
		    </div>

		  </div>

		  <button class="carousel-control-prev" type="button" data-bs-target="#slide_home" data-bs-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Previous</span>
		  </button>
		  <button class="carousel-control-next" type="button" data-bs-target="#slide_home" data-bs-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Next</span>
		  </button>
		</section>
		<!-- Slide end -->

		<!-- Categorias -->
		<section class="categorias">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h3>Conocé nuestros seguros</h3>
					</div>
				</div>

				<div class="row">

					<div class="col-xs-12 col-sm-6 col-lg-4">
						<a class="transition" href="seguro-vida.php">
							<h4 class="transition">Vida</h4>
							<img class="transition img-fluid" src="./img/home/seguro-vida.png" alt="seguros de vida">
						</a>
					</div>

					<div class="col-xs-12 col-sm-6 col-lg-4">
						<a class="transition" href="seguro-agricola.php">
							<h4 class="transition">Agro</h4>
							<img class="transition img-fluid" src="./img/home/seguro-agro.png" alt="seguros de agro">
						</a>
					</div>

					<div class="col-xs-12 col-sm-6 col-lg-4">
						<a class="transition" href="seguro-autos.php">
							<h4 class="transition">Auto</h4>
							<img class="transition img-fluid" src="./img/home/seguro-auto.png" alt="seguros de auto">
						</a>
					</div>

					<div class="col-xs-12 col-sm-6 col-lg-4">
						<a class="transition" href="seguros-patrimoniales-hogar.php">
							<h4 class="transition">Hogar</h4>
							<img class="transition img-fluid" src="./img/home/seguro-casa.png" alt="seguros de casa">
						</a>
					</div>

					<div class="col-xs-12 col-sm-6 col-lg-4">
						<a class="transition" href="seguros-patrimoniales-movilidad.php">
							<h4 class="transition">Movilidad</h4>
							<img class="transition img-fluid" src="./img/home/seguro-bicicleta.png" alt="seguros de bicicleta">
						</a>
					</div>

					<div class="col-xs-12 col-sm-6 col-lg-4">
						<a class="transition" href="seguros-patrimoniales-robo-via-publica.php">
							<h4 class="transition">Robo en<br>Vía Pública</h4>
							<img class="transition img-fluid" src="./img/home/seguro-robo.png" alt="seguros de robo">
						</a>
					</div>

					<div class="col-xs-12 col-sm-6 col-lg-4">
						<a class="transition" href="seguros-patrimoniales-notebook.php">
							<h4 class="transition">Notebook</h4>
							<img class="transition img-fluid" src="./img/home/seguro-notebook.png" alt="seguros de notebook">
						</a>
					</div>

					<div class="col-xs-12 col-sm-6 col-lg-4">
						<a class="transition" href="seguros-patrimoniales-accidentes-domesticos.php">
							<h4 class="transition">Accidentes<br>personales<br><span>domésticos</span></h4>
							<img class="transition img-fluid" src="./img/home/seguro-domesticos.png" alt="seguros de domesticos">
						</a>
					</div>

					<div class="col-xs-12 col-sm-6 col-lg-4">
						<a class="transition" href="./seguro-patrimoniales.php">
							<h4 class="transition">Otros <br>patrimoniales</h4>
							<img class="transition img-fluid" src="./img/home/seguro-patrimoniales.png" alt="seguros de patrimoniales">
						</a>
					</div>

				</div>

			</div>
		</section>
		<!-- Categorias end -->

		<!-- Pasos -->
		<?php include_once("./includes/pasos.php"); ?>

		<!-- Newsletter -->
		<?php include_once("./includes/newsletter.php"); ?>

	</section>
	<!-- Contenido HOME end -->

	</section>

	<!-- Footer -->
	<?php include_once("./includes/footer.php"); ?>

	<script type="text/javascript" src="./node_modules/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="https://www.google.com/recaptcha/api.js?render=<?= RECAPTCHA_KEY_SITE ?>"></script>
	<script type="text/javascript" src="./node_modules/aos/dist/aos.js"></script>
	<script type="text/javascript" src="js/app.js"></script>

</body>

</html>