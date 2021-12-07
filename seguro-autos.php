<?php require ('includes/config.inc.php'); ?>
<?php require ('clases/selects.php'); ?>

<?php 
	$current = 'seguros'; 
	$current_sub = 'patrimonial'; 
?>

<?php

	/* Creo los array para formar los select */
	$selects = new Selects();
	$segurosVida = $selects->getValues('seguros_vida.json');
	$provinces = $selects->getValues('provincias.json');
	$genders = $selects->getValues('sexos.json');
	$incomes = $selects->getValues('ingresos.json');

	if (isset($_GET['year'])) {
    $year = $_GET['year'];
  } else {
    $year = '';
  }
  
  if (isset($_GET['marca'])) {
    $marca = $_GET['marca'];
  } else {
    $marca = '';
  }

  if (isset($_GET['modelo'])) {
    $modelo = $_GET['modelo'];
  } else {
    $modelo = '';
  }

  if (isset($_GET['age'])) {
    $age = $_GET['age'];
  } else {
    $age = '';
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
			<img class="img-fluid" src="./img/seguro-auto/slide-seguro-auto.jpg" alt="slide wgsa seguros seguros de vida">
			<div class="content_h1">
				<h1>Seguro<br>AUTOS</h1>
				<p>
					Tu vehículo en manos <br>que te generan confianza.
				</p>
			</div>
		</section>
		<!-- Header end -->

		<!-- Formulario -->
		<section id="formulario" data-aos="fade-up" class="container formulario">
			<div class="row">

				<div class="col-lg-6 datos">

					<p class="intro">
						Por que sabemos que cada vehículo es único, también lo son nuestras pólizas, a la medida de tus necesidades. 
					</p>
					
					<ul id="myUL">
					  
					  <li class="caret_first transition"><span class="caret transition">Responsabilidad Civil</span>
					    <ul class="nested transition">
					      <li><span class="caret transition">Plan A</span>
					        <ul class="nested transition">
					        	<h4>COBERTURA</h4>
					        	<li class="individual">&bull; Responsabilidad Civil ($10.000.000)</li>
					        	<li class="individual">&bull; Cobertura automática en países limítrofe <br>
					        		(sin costo ni previo aviso, durante toda la vigencia de la póliza)
					        	</li>
					        </ul>
					      </li>  
					    </ul>
					  </li>

					  <li class="caret_first transition"><span class="caret transition">Todo Total</span>
					    <ul class="nested transition">

					      <li><span class="caret transition">Plan B</span>
					        <ul class="nested transition">
					        	<h4>COBERTURA</h4>
					        	<li class="individual">&bull; Responsabilidad Civil ($10.000.000)</li>
										<li class="individual">&bull; Incendio Total</li>
										<li class="individual">&bull; Robo/Hurto Total</li>
										<li class="individual">&bull; Daños totales por accidentes</li>
										<li class="individual">&bull; Cobertura automática en países limítrofe <br>
											(sin costo ni previo aviso, durante toda la vigencia de la póliza)
										</li>
					        </ul>
					      </li>

					      <li><span class="caret transition">Plan B1 + Cristales (BC)</span>
					        <ul class="nested transition">
					        	<h4>COBERTURA</h4>
					        	<li class="individual">&bull; Responsabilidad Civil ($10.000.000)</li>
										<li class="individual">&bull; Incendio Total</li>
										<li class="individual">&bull; Robo/Hurto Total</li>
										<li class="individual">&bull; Cobertura automática en países limítrofe <br>
											(sin costo ni previo aviso, durante toda la vigencia de la póliza)
										</li>
										<li class="individual">&bull; Cristales con límite ($7.500)</li>
					        </ul>
					      </li>

					      <li><span class="caret transition">Plan B1 + Cristales y Granizo (BG)</span>
					        <ul class="nested transition">
					        	<h4>COBERTURA</h4>
					        	<li class="individual">&bull; Responsabilidad Civil ($10.000.000)</li>
										<li class="individual">&bull; Incendio Total</li>
										<li class="individual">&bull; Robo/Hurto Total</li>
										<li class="individual">&bull; Cobertura automática en países limítrofe <br>
											(sin costo ni previo aviso, durante toda la vigencia de la póliza)
										</li>
										<li class="individual">&bull; Cristales con límite ($7.500)</li>
										<li class="individual">&bull; Daño parcial por granizo con límite ($7.500)</li>
					        </ul>
					      </li> 

					    </ul>
					  </li>

					  <li class="caret_first transition"><span class="caret transition">Terceros Completo</span>
					    <ul class="nested transition">

					      <li><span class="caret transition">Plan C</span>
					        <ul class="nested transition">
					        	<h4>COBERTURA</h4>
					        	<li class="individual">&bull; Responsabilidad Civil ($10.000.000)</li>
										<li class="individual">&bull; Incendio Total</li>
										<li class="individual">&bull; Robo/Hurto Total</li>
										<li class="individual">&bull; Robo/Hurto Parcial</li>
										<li class="individual">&bull; Daños totales por accidentes</li>
										<li class="individual">&bull; Cobertura automática en países limítrofe 
											(sin costo ni previo aviso, durante toda la vigencia de la póliza)
										</li>
					        </ul>
					      </li>

					      <li><span class="caret transition">Plan C Classic (CC)</span>
					        <ul class="nested transition">
					        	<h4>COBERTURA</h4>
					        	<li class="individual">&bull; Responsabilidad Civil ($10.000.000)</li>
										<li class="individual">&bull; Incendio Total</li>
										<li class="individual">&bull; Incendio Parcial</li>
										<li class="individual">&bull; Robo/Hurto Total</li>
										<li class="individual">&bull; Robo/Hurto Parcial  (solo al amparo del robo total)</li>
										<li class="individual">&bull; Daños totales por accidentes</li>
										<li class="individual">&bull; Cobertura automática en países limítrofe 
											(sin costo ni previo aviso, durante toda la vigencia de la póliza)
										</li>
					        </ul>
					      </li>

					      <li><span class="caret transition">Plan C + Cristales (CL)</span>
					        <ul class="nested transition">
					        	<h4>COBERTURA</h4>
					        	<li class="individual">&bull; Responsabilidad Civil ($10.000.000)</li>
										<li class="individual">&bull; Incendio Total</li>
										<li class="individual">&bull; Incendio Parcial</li>
										<li class="individual">&bull; Robo/Hurto Total</li>
										<li class="individual">&bull; Robo/Hurto Parcial</li>
										<li class="individual">&bull; Daños totales por accidentes</li>
										<li class="individual">&bull; Cobertura automática en países limítrofe 
											(sin costo ni previo aviso, durante toda la vigencia de la póliza)
										</li>
										<li class="individual">&bull; Cristales con límite ($7.500)</li>
					        </ul>
					      </li>

					      <li><span class="caret transition">Plan C + Cristales y Granizo (CM)</span>
					        <ul class="nested transition">
					        	<h4>COBERTURA</h4>
					        	<li class="individual">&bull; Responsabilidad Civil ($10.000.000)</li>
										<li class="individual">&bull; Incendio Total</li>
										<li class="individual">&bull; Incendio Parcial</li>
										<li class="individual">&bull; Robo/Hurto Total</li>
										<li class="individual">&bull; Robo/Hurto Parcial</li>
										<li class="individual">&bull; Daños totales por accidentes</li>
										<li class="individual">&bull; Cobertura automática en países limítrofe 
											(sin costo ni previo aviso, durante toda la vigencia de la póliza)
										</li>
										<li class="individual">&bull; Cristales (sin límite hasta la suma asegurada del vehículo)</li>
										<li class="individual">&bull; Daño parcial por granizo ($25.000)</li>
					        </ul>
					      </li>

					      <li><span class="caret transition">Plan C Premium (CP)</span>
					        <ul class="nested transition">
					        	<h4>COBERTURA</h4>
					        	<li class="individual">&bull; Responsabilidad Civil ($10.000.000)</li>
										<li class="individual">&bull; Incendio Total</li>
										<li class="individual">&bull; Incendio Parcial</li>
										<li class="individual">&bull; Robo/Hurto Total</li>
										<li class="individual">&bull; Robo/Hurto Parcial</li>
										<li class="individual">&bull; Daños totales por accidentes</li>
										<li class="individual">&bull; Daño parcial al amparo del Robo/Hurto Total</li>
										<li class="individual">&bull; Cobertura automática en países limítrofe 
											(sin costo ni previo aviso, durante toda la vigencia de la póliza)
										</li>
										<li class="individual">&bull; Cristales (sin límite ni tope hasta la suma asegurada del vehículo)</li>
					        </ul>
					      </li>

					      <li><span class="caret transition">Plan C Premium + granizo (CPG)</span>
					        <ul class="nested transition">
					        	<h4>COBERTURA</h4>
					        	<li class="individual">&bull; Responsabilidad Civil ($10.000.000)</li>
										<li class="individual">&bull; Incendio Total</li>
										<li class="individual">&bull; Incendio Parcial</li>
										<li class="individual">&bull; Robo/Hurto Total</li>
										<li class="individual">&bull; Robo/Hurto Parcial</li>
										<li class="individual">&bull; Daños totales por accidentes</li>
										<li class="individual">&bull; Daño parcial al amparo del Robo/Hurto Total</li>
										<li class="individual">&bull; Cobertura automática en países limítrofe 
											(sin costo ni previo aviso, durante toda la vigencia de la póliza)
										</li>
										<li class="individual">&bull; Cristales (sin límite hasta la suma asegurada del vehículo)</li>
										<li class="individual">&bull; Granizo  (sin límite hasta la suma asegurada del vehículo)</li>
					        </ul>
					      </li>
					     
					    </ul>
					  </li>

					  <li class="caret_first transition"><span class="caret transition">Todo Riesgo</span>
					    <ul class="nested transition">

					      <li><span class="caret transition">Plan DV 2% (D2)</span>
					        <ul class="nested transition">
					        	<h4>COBERTURA</h4>
					        	<li class="individual">&bull; Responsabilidad Civil ($10.000.000)</li>
										<li class="individual">&bull; Incendio Total</li>
										<li class="individual">&bull; Incendio Parcial</li>
										<li class="individual">&bull; Robo/Hurto Total</li>
										<li class="individual">&bull; Robo/Hurto Parcial</li>
										<li class="individual">&bull; Daños totales por accidentes</li>
										<li class="individual">&bull; Daños parciales (Franquicia variable del 2% de la suma del vehículo en plaza al momento de siniestro. Mínimo $15.000)</li>
										<li class="individual">&bull; Daño parcial al amparo del Robo/Hurto Total</li>
										<li class="individual">&bull; Cobertura automática en países limítrofe 
											(sin costo ni previo aviso, durante toda la vigencia de la póliza)
										</li>
										<li class="individual">&bull; Cristales (sin límite hasta la suma asegurada del vehículo)</li>
					        </ul>
					      </li>

					      <li><span class="caret transition">Plan DV 4% (DV)</span>
					        <ul class="nested transition">
					        	<h4>COBERTURA</h4>
					        	<li class="individual">&bull; Responsabilidad Civil ($10.000.000)</li>
										<li class="individual">&bull; Incendio Total</li>
										<li class="individual">&bull; Incendio Parcial</li>
										<li class="individual">&bull; Robo/Hurto Total</li>
										<li class="individual">&bull; Robo/Hurto Parcial</li>
										<li class="individual">&bull; Daños totales por accidentes</li>
										<li class="individual">&bull; Daños parciales (Franquicia variable del 4% de la suma del vehículo en plaza al </li>momento de siniestro. Mínimo $15.000)
										<li class="individual">&bull; Daño parcial al amparo del Robo/Hurto Total</li>
										<li class="individual">&bull; Cobertura automática en países limítrofe 
											(sin costo ni previo aviso, durante toda la vigencia de la póliza)
										</li>
										<li class="individual">&bull; Cristales (sin límite hasta la suma asegurada del vehículo)</li>
					        </ul>
					      </li>

					      <li><span class="caret transition">Plan DV 6% (DV6)</span>
					        <ul class="nested transition">
					        	<h4>COBERTURA</h4>
					        	<li class="individual">&bull;Responsabilidad Civil ($10.000.000)</li>
										<li class="individual">&bull;Incendio Total</li>
										<li class="individual">&bull;Incendio Parcial</li>
										<li class="individual">&bull;Robo/Hurto Total</li>
										<li class="individual">&bull;Robo/Hurto Parcial</li>
										<li class="individual">&bull;Daños totales por accidentes</li>
										<li class="individual">&bull;Daños parciales (Franquicia variable del 6% de la suma del vehículo en plaza al </li>momento de siniestro. Mínimo $15.000)
										<li class="individual">&bull;Daño parcial al amparo del Robo/Hurto Total</li>
										<li class="individual">&bull;Cobertura automática en países limítrofe 
											(sin costo ni previo aviso, durante toda la vigencia de la póliza)
										</li>
										<li class="individual">&bull;Cristales (sin límite ni tope hasta la suma asegurada del vehículo)</li>
					        </ul>
					      </li> 

					    </ul>
					  </li>

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
            action="./php/validate-form-seguros-auto.php" 
            class="needs-validation" 
            novalidate>

						<input type="hidden" name="origin" value="Seguros de Autos">
						<input type="hidden" name="seguro" value="Autos">

						<h4>Cotizá tu seguro ahora</h4>

						<div class="tab transition">

							<div class="mb-3">
							  <label for="year" class="form-label">Año</label>
							  <input 
							  	oninput="this.className = 'form-control'"
							  	type="number" 
							  	value="<?= $year ?>" 
							  	class="form-control" 
							  	name="year" 
							  	placeholder="ej: 2016">
							</div>

							<div class="mb-3">
							  <label for="marca" class="form-label">Marca</label>
							  <input 
							  	oninput="this.className = 'form-control'"
							  	type="text" 
							  	value="<?= $marca ?>" 
							  	class="form-control" 
							  	name="marca" 
							  	placeholder="ej: Chevrolet">
							</div>

							<div class="mb-3">
							  <label for="modelo" class="form-label">Modelo y versión</label>
							  <input 
							  	oninput="this.className = 'form-control'"
							  	type="text" 
							  	value="<?= $modelo ?>" 
							  	class="form-control" 
							  	name="modelo" 
							  	placeholder="ej: Prisma LTZ">
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
							  <label for="age" class="form-label">Edad</label>
							  <input 
							  	oninput="this.className = 'form-control'"
							  	type="number" 
							  	value="<?= $age ?>" 
							  	class="form-control" 
							  	name="age" 
							  	placeholder="ej: 42">
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
					        1. ¿Qué documentación necesito para circular?
					      </button>
					    </h2>
					    <div id="pta_1" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionPreguntas">
					      <div class="accordion-body">
					          Licencia de conducir correspondiente al tipo de vehículo. <br>
					          DNI o cédula de identidad. <br>
					          Cédula verde. <br>
					          Cédula azul, en caso de circular en un vehículo que no sea de su propiedad y que la cédula verde se encuentre vencida. <br>
					          Oblea de RTO (Revisión Técnica Obligatoria) o VTV (Verificación Técnica Vehicular). <br>
					          Comprobante de póliza de seguro obligatorio vigente: la tarjeta plástica provista por Zurich constituye prueba suficiente de la vigencia del seguro obligatorio y por ello no es necesario presentar el recibo de pago del premio. Así lo establece la normativa vigente, a la que se hace referencia en el texto impreso en dicha tarjeta. En caso de optar por circular con la póliza de seguro, entonces sí deberá exhibirse el comprobante de pago del premio.
					      </div>
					    </div>
					  </div>

					  <div class="accordion-item">
					    <h2 class="accordion-header" id="headingTwo">
					      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pta_2" aria-expanded="false" aria-controls="pta_2">
					        2. ¿Estoy cubierto aunque no haya pagado la primera cuota de la póliza?
					      </button>
					    </h2>
					    <div id="pta_2" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionPreguntas">
					      <div class="accordion-body">
					        Estás cubierto desde el momento en que contratás la póliza hasta las 00:00 hs. de la fecha de vencimiento de la primera cuota, dado que la vigencia se respetará independientemente de tener la primera cuota pagada. De todas formas, las cuotas de tu seguro se facturarán siempre dentro de la vigencia de la póliza. de conducir correspondiente al tipo de vehículo.
					      </div>
					    </div>
					  </div>

					  <div class="accordion-item">
					    <h2 class="accordion-header" id="headingThree">
					      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pta_3" aria-expanded="false" aria-controls="pta_3">
					        3. Si me roban el auto y aún no terminé de pagar todas las cuotas, ¿tendré que pagar el total del premio de la póliza?
					      </button>
					    </h2>
					    <div id="pta_3" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionPreguntas">
					      <div class="accordion-body">
					        Si se tiene contratada una póliza de vigencia mensual, sólo se deberá pagar hasta el mes en el cual ocurrió el siniestro, no deberás pagar la totalidad de la anualidad. En caso de contratar una póliza de vigencia semestral deberás pagar desde la fecha de ocurrido el siniestro, las cuotas adeudadas hasta la finalización del contrato.
					      </div>
					    </div>
					  </div>

					  <div class="accordion-item">
					    <h2 class="accordion-header" id="headingThree">
					      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pta_4" aria-expanded="false" aria-controls="pta_4">
					        4. ¿Necesito hacer algún pago o aviso extra si viajo al exterior con el auto?
					      </button>
					    </h2>
					    <div id="pta_4" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionPreguntas">
					      <div class="accordion-body">
					        No. La cobertura será automática en la Argentina y en países limítrofes, por lo que no es necesario dar previo aviso a la Compañía para estar cubierto. El costo tampoco variará. Recordá que cuando viajes al exterior es necesario llevar el certificado Mercosur color verde adjunto a tu póliza.
					      </div>
					    </div>
					  </div>

					  <div class="accordion-item">
					    <h2 class="accordion-header" id="headingThree">
					      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pta_5" aria-expanded="false" aria-controls="pta_5">
					        5. En caso de realizar una modificación a mi póliza, ¿cuánto tardará en llegarme la tarjeta plástica con mis datos modificados?
					      </button>
					    </h2>
					    <div id="pta_5" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionPreguntas">
					      <div class="accordion-body">
					        Aproximadamente una semana.
					      </div>
					    </div>
					  </div>

					  <div class="accordion-item">
					    <h2 class="accordion-header" id="headingThree">
					      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pta_6" aria-expanded="false" aria-controls="pta_6">
					        6. ¿Qué valor me pagan ante robo o destrucción total cubierto por mi póliza?
					      </button>
					    </h2>
					    <div id="pta_6" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionPreguntas">
					      <div class="accordion-body">
					        Es fundamental que verifiques en la póliza la cláusula que define el valor a pagar en caso de robo o destrucción del vehículo (valor asegurado o valor de reposición). Si el monto pactado en la póliza es “valor de reposición”, al momento del siniestro la aseguradora tomará como valor del vehículo el valor de venta al contado en plaza de un vehículo de igual marca, modelo, año y características, más los impuestos, tasas y contribuciones que pudieren corresponder. En ningún caso se podrá percibir una indemnización o monto mayor al daño efectivamente sufrido, con prescindencia del valor de la suma asegurada consignada en el frente de la póliza.
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

	<script>

		var toggler = document.getElementsByClassName("caret");
		var i;

		for (i = 0; i < toggler.length; i++) {
		  toggler[i].addEventListener("click", function() {
		    this.parentElement.querySelector(".nested").classList.toggle("active");
		    this.classList.toggle("caret-down");
		  });
		}

	</script>
</body>

</html>