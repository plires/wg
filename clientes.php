<?php require ('includes/config.inc.php'); ?>

<?php 
	$current = 'clientes'; 
	$current_sub = ''; 
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Tag Manager Head -->
	<?php include_once("./includes/tag_manager_head.php"); ?>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Seccion sobre clientes. Conocenos, Seguros de Agro, Patrimoniales y Vida">
	<title>WGSA Seguros de Agro, Patrimoniales y Vida - Clientes</title>

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

	<!-- Contenido Clientes -->
	<section id="content" class="transition seguro_vida quienes_somos clientes">

		<!-- Header -->
		<section class="container-fluid p-0 header">
			<img class="img-fluid" src="./img/clientes/slide-clientes.jpg" alt="slide wgsa seguros seguros - clientes">
			<h1>Clientes</h1>
		</section>
		<!-- Header end -->

		<!-- Seguros Patrimoniales -->
		<section class="container seguros_patrimoniales">
			<div class="row">
				<div class="col-md-12">
					<h2>Seguros Patrimoniales</h2>

					<h3>Cereales Bahía Blanca</h3>
					<p>
						(Asegurado Integral: Flota, Automotor, Integrales de Comercio, ART, Ap, Granizo y Vida).
					</p>

					<h3>Productos de los Andes, Quesos Trelau, Tremag y Ar Desia</h3>
					<p>
						(Asegurado Integral : Flota Automotor, Vehículos Particulares, Integrales de Comercio, Rc, ART, Vida).
					</p>

					<h3>Beconst Constructora Vial</h3>
					<p>
						(Asegurado Integral: Flota Automotor, Seguro Técnico, AP, ART, Integral de Comercio, RC, Cauciones, Vida).
					</p>

					<h3>Lugracom SRL</h3>
					<p>
						(Asegurado Integral: Flota Automotor, AP, ART, Integral de Comercio, RC, Autos Particulares, Combinados Familiar, Embarcaciones de placer, Vida).
					</p>

					<h3>Herfei SRL</h3>
					<p>
						(Asegurado Integral: Flota Automotor, AP, ART, Integral de Comercio, RC, Autos particulares, Combinados Familiar, Vida)
					</p>
				</div>
			</div>

			<div class="row line">

				<div class="col-md-4">
					<img class="img-fluid" src="./img/clientes/icono-clientes.png" alt="icono clientes seguros patrimoniales">
					<p id="pat_clientes" class="numero">0</p>				
					<p class="tag">clientes</p>				
				</div>

				<div class="col-md-4">
					<img class="img-fluid" src="./img/clientes/icono-companias.png" alt="icono compañias seguros patrimoniales">
					<p id="pat_options" class="numero">0</p>				
					<p class="tag">options (vida)</p>				
				</div>

			</div>

		</section>
		<!-- Seguros Patrimoniales end -->

		<!-- Seguros de vida -->
		<section class="container seguros_vida">

			<div class="row">
				<div class="col-md-12">
					<h2>Seguros de Vida</h2>
					<h3>Speedagro</h3>
					<h3>Sarapura</h3>
				</div>
			</div>

			<div class="row line">

				<div class="col-md-4">
					<img class="img-fluid" src="./img/clientes/icono-polizas.png" alt="icono polizas seguros de vida">
					<p id="vid_polizas" class="numero">0</p>				
					<p class="tag">pólizas</p>				
				</div>

				<div class="col-md-4">
					<img class="img-fluid" src="./img/clientes/icono-options.png" alt="icono options seguros de vida">
					<p id="vid_options" class="numero">0</p>				
					<p class="tag">options (vida)</p>				
				</div>

				<div class="col-md-4">
					<img class="img-fluid" src="./img/clientes/icono-invest.png" alt="icono invest seguros de vida">
					<p id="vid_invest" class="numero">0</p>				
					<p class="tag">invest (ahorro)</p>				
				</div>

			</div>

		</section>
		<!-- Seguros de vida end -->

		<!-- Seguros Agricolas -->
		<section class="container seguros_agricolas">
			<div class="row">
				<div class="col-md-12">
					<h2>Seguros Agrícolas</h2>
					<h3>Agro Redes SRL</h3>
					<h3>Capelle Hnos SA</h3>
					<h3>Administración Diego Arroquy</h3>
					<h3>Oscar Gallo y Cia SRL</h3>
					<h3>Don Osvaldo SA</h3>
					<h3>Arnoldo Mazzino SAAYC</h3>
				</div>
			</div>

			<div class="row line">

				<div class="col-md-4">
					<img class="img-fluid" src="./img/clientes/icono-asegurados.png" alt="icono asegurados seguros agricolas">
					<p id="agr_asegurados" class="numero">0</p>				
					<p class="tag">asegurados</p>				
				</div>

				<div class="col-md-4">
					<img class="img-fluid" src="./img/clientes/icono-mas-clientes.png" alt="icono mas clientes seguros agricolas">
					<p id="agr_clientes" class="numero">0</p>				
					<p class="tag">clientes</p>				
				</div>

				<div class="col-md-4">
					<img class="img-fluid" src="./img/clientes/icono-mas-polizas.png" alt="icono polizas seguros agricolas">
					<p id="agr_polizas" class="numero">0</p>				
					<p class="tag">pólizas</p>				
				</div>

			</div>

		</section>
		<!-- Seguros Agricolas end -->

		<!-- Testimonios -->
		<section class="container-fluid testimonios p-0">
			
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Algunos de nuestros clientes</h2>
					</div>
				</div>
			</div>

			<div class="container-fluid bg">

				<div class="container">

					<div class="row">
						<div class="col-md-12">
							<div id="carouselTestimonios" class="carousel slide" data-bs-ride="carousel">
							  <div class="carousel-inner">

							    <div class="carousel-item text-center active">
							    	<div class="row">
							    		<div class="col-10 offset-1 col-md-6 offset-md-3">
									      <p>
									      	"...nos dá soporte y asesora en todo lo referente a los riesgos agropecuarios que lleva nuestra actividad, con coberturas específicas, tecnificadas y adaptadas muchas veces a nuestros sistemas, además de proveer todas las líneas de seguros y con las aseguradoras líderes y de máxima calificación de Argentina, obviamente en un nivel adecuado de costos y condiciones."
									      </p>
									      <h5>Agro Redes</h5>
							    		</div>
							    	</div>
							    </div>

							    <div class="carousel-item text-center">
							    	<div class="row">
							    		<div class="col-10 offset-1 col-md-6 offset-md-3">
									      <p>
									      	"...Es una compañía con muy buenos precios y con un grupo de personas que trabajan muy bien, con muy buena predisposición . Además resuelven cualquier consulta de una forma sencilla y rápida.."
									      </p>
									      <h5>Patrimoniales</h5>
							    		</div>
							    	</div>
							    </div>

							    <div class="carousel-item text-center">
							    	<div class="row">
							    		<div class="col-10 offset-1 col-md-6 offset-md-3">
									      <p>
									      	"...Adrian es un excelente Asesor de Seguros, me ha brindado una asesoría dedicada sobre el paquete de Vida que se aplicaba a mi necesidad actual y todo lo hizo personalmente yo no tuve que moverme de mi casa. Gracias Adrian Anselmi!!!"
									      </p>
									      <h5>Vida</h5>
							    		</div>
							    	</div>
							    </div>

							  <button class="carousel-control-prev" type="button" data-bs-target="#carouselTestimonios" data-bs-slide="prev">
							    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
							    <span class="visually-hidden">Previous</span>
							  </button>
							  <button class="carousel-control-next" type="button" data-bs-target="#carouselTestimonios" data-bs-slide="next">
							    <span class="carousel-control-next-icon" aria-hidden="true"></span>
							    <span class="visually-hidden">Next</span>
							  </button>
							</div>

						</div>
					</div>

				</div>

			</div>
		</section>
		<!-- Testimonios end -->

	</section>
	<!-- Clientes end -->

	</section>

	<!-- Footer -->
	<?php include_once("./includes/footer.php"); ?>

	<script type="text/javascript" src="./node_modules/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="./node_modules/aos/dist/aos.js"></script>
	<!-- CountUP (efecto JS para numeros) -->
  <script src="js/countUp.min.js"></script>
	<script type="text/javascript" src="js/clientes.js"></script>
	<script type="text/javascript" src="js/app.js"></script>

</body>

</html>