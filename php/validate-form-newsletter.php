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

	if($datos['success'] == 1 && $datos['score'] >= 0.5){

		// Verificamos si hay errores en el formulario

	  if (!emailCheck($_POST['email_newsletter'])){
	    $errors_newsletter['email'] = 'Ingresa un email válido.';
	    $email_newsletter = $_POST['email_newsletter'];
	  } else {
	    $email_newsletter = $_POST['email_newsletter'];
	  }

	  if (!isset($errors_newsletter)) {

	  	$email_not_found_in_database = $db->getRepoNewsletter()->searchEmailInBDD( 'newsletter', $_POST['email_newsletter']);

	  	// Verificamos que la casilla no este cargada ya en la base de datos
	  	if ( $email_not_found_in_database ) {

		  	//grabamos en la base de datos
			  $save = $db->getRepoNewsletter()->saveNewsletterInBDD($_POST);

			  $app = new App;

			  // Registramos en Perfit el contacto
		  	$app->registerEmailNewsletterInPerfit(API_KEY_PERFIT, LIST_PERFIT, '', $_POST['email_newsletter']);
		  	
		  	//Enviamos los mails al cliente y usuario
			  $sendEmails = $app->prepareEmailNewsletterToClient($_POST);
			  
			  if ($sendEmails) {
			    $msg_newsletter = 'Gracias por tu suscripción';
			    $url = explode("?",$_SERVER['HTTP_REFERER']);

			    header("Location: " . $url[0] ."?msg_newsletter=". urlencode($msg_newsletter) . "#msg_newsletter" );

			  } else {

			    exit('Error al enviar la consulta, por favor intente nuevamente');

			  }

	  	} else {

	  		$url = explode("?",$_SERVER['HTTP_REFERER']);

		  	header("Location: " . $url[0] . "?" . http_build_query( array( "errors_newsletter[email_register]" => 'Esta casilla de email ya se encuentra registrada.', "email_newsletter" => $email_newsletter ) ) . "#error_newsletter" );

		  	exit;

	  	}

	  } else {

	  	$url = explode("?",$_SERVER['HTTP_REFERER']);

	  	header("Location: " . $url[0] . "?" . http_build_query( array( "errors_newsletter[email_register]" => $errors_newsletter['email'], "email_newsletter" => $email_newsletter ) ) . "#error_newsletter" );

	  	exit;

	  }
	  
  } else {

  	$url = explode("?",$_SERVER['HTTP_REFERER']);

  	header("Location: " . $url[0] . "?" . http_build_query( array( "errors_newsletter[recaptcha]" => 'Error al validar el recaptcha... intente nuevamente por favor' ), $email_newsletter ) . "#error_newsletter" );

  	exit;

	} 