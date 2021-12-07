<?php

	include('functions.php');
  include('../includes/config.inc.php');
  include('../clases/app.php');
  
  require_once("../clases/repositorioSQL.php");

  $db = new RepositorioSQL();

	$token = $_POST['token'];
	$action = $_POST['action'];

	$cu = curl_init();
	curl_setopt($cu, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
	curl_setopt($cu, CURLOPT_POST, 1);
	curl_setopt($cu, CURLOPT_POSTFIELDS, http_build_query(array('secret' => RECAPTCHA_KEY_SECRET, 'response' => $token)));
	curl_setopt($cu, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($cu);
	curl_close($cu);

	$datos = json_decode($response, true);

	$errors = [];

	if($datos['success'] == 1 && $datos['score'] >= 0.5){

		// Verificamos si hay errores en el formulario

	  if (emptyInput($_POST['seguro'])) {
	    $errors['seguro'] = 'Elegí el Seguro que Querés.';
	    $seguro = $_POST['seguro'];
	  } else {
	    $seguro = $_POST['seguro'];
	  }

	  if (emptyInput($_POST['hectares'])) {
	    $errors['age'] = 'Indicá las hectarias.';
	    $hectares = $_POST['hectares'];
	  } else {
	    $hectares = $_POST['hectares'];
	  }

	  if (emptyInput($_POST['activity'])) {
	    $errors['activity'] = 'Seleccioná una actividad.';
	    $activity = $_POST['activity'];
	  } else {
	    $activity = $_POST['activity'];
	  }

	  if (emptyInput($_POST['province'])) {
	    $errors['province'] = 'Seleccioná una provincia.';
	    $province = $_POST['province'];
	  } else {
	    $province = $_POST['province'];
	  }

	  if (emptyInput($_POST['locality'])) {
	    $errors['locality'] = 'Seleccioná una localidad.';
	    $locality = $_POST['locality'];
	  } else {
	    $locality = $_POST['locality'];
	  }

	  if (emptyInput($_POST['name'])) {
	    $errors['name'] = 'Seleccioná un nombre.';
	    $name = $_POST['name'];
	  } else {
	    $name = $_POST['name'];
	  }

	  if (!emailCheck($_POST['email'])) {
	    $errors['email'] = 'Ingresa un email válido.';
	    $email = $_POST['email'];
	  } else {
	    $email = $_POST['email'];
	  }

	  if (emptyInput($_POST['phone'])) {
	    $errors['phone'] = 'Seleccioná un teléfono.';
	    $phone = $_POST['phone'];
	  } else {
	    $phone = $_POST['phone'];
	  }

	  if ( count($errors) == 0 ) {

	  	//grabamos en la base de datos
		  $save = $db->getRepoContacts()->saveContactAgroInBDD($_POST);

		  $app = new App;

		  // Registramos en Perfit el contacto
		  $app->registerEmailContactsInPerfit(API_KEY_PERFIT, LIST_PERFIT_SEGUROS, $_POST);

	  	//Enviamos los mails al cliente y usuario
		  $sendEmails = $app->prepareEmailSegurosAgroToClient($_POST);
		  
		  $url = explode("?",$_SERVER['HTTP_REFERER']);

		  if ($sendEmails) {
		    
		    $msg_seguros = 'Gracias por tu consulta, en breve nos contactaremos';
		    header("Location: " . $url[0] ."?msg_seguros=". urlencode($msg_seguros) . "#formulario" );

		  } else {

		    header("Location: " . $url[0] . "?" . http_build_query( array( "errors[send]" => 'La consulta fue registrada, sin embargo no puderon enviarse los correos de agradecimiento. Si tiene alguna duda vuelva a contactarse por favor' ), $email ) . "#formulario" );

		  }

	  } else {

	  	$url = explode("?",$_SERVER['HTTP_REFERER']);

	  	header("Location: " . $url[0] . "?" . http_build_query( array( 
	  		"errors" => $errors, 
	  		"seguro" => $seguro,
	  		"activity" => $activity,
	  		"hectares" => $hectares,
	  		"province" => $province,
	  		"locality" => $locality,
	  		"name" => $name,
	  		"email" => $email,
	  		"phone" => $phone,
		 	) ) . "#formulario" );

	  	exit;

	  }
	  
  } else {

  	$url = explode("?",$_SERVER['HTTP_REFERER']);

  	header("Location: " . $url[0] . "?" . http_build_query( array( "errors[recaptcha]" => 'Error al validar el recaptcha... intente nuevamente por favor' ), $email ) . "#formulario" );

  	exit;

	} 