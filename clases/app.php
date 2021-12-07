<?php
//incluimos la clase PHPMailer
require_once( __DIR__ . '/../vendor/autoload.php' );

use \DrewM\MailChimp\MailChimp;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

  class App 
    {

      function sendmail($setFromEmail, $setFromName, $addReplyToEmail, $addReplyToName, $addAddressEmail, $addAddressName, $subject, $template){

        //Create a new PHPMailer instance
        $mail = new PHPMailer;
        
        if (ENVIRONMENT === 'local') {

          $mail->isSendmail();

        } else {

          // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
          // $mail->SMTPDebug = 4;
          $mail->isSMTP();
          $mail->Host       = SMTP;
          $mail->SMTPAuth   = true; 
          $mail->Username   = USERNAME; 
          $mail->Password   = PASSWORD; 
          $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;  
          $mail->Port       = EMAIL_PORT;
          $mail->CharSet    = EMAIL_CHARSET;
          $mail->SMTPOptions = array(
              'ssl' => array(
                  'verify_peer' => false,
                  'verify_peer_name' => false,
                  'allow_self_signed' => true
              )
          );

        }

        //Establecer desde donde será enviado el correo electronico
        $mail->setFrom($setFromEmail, $setFromName);
        //Establecer una direccion de correo electronico alternativa para responder
        $mail->addReplyTo($addReplyToEmail, $addReplyToName);
        //Establecer a quien será enviado el correo electronico
        $mail->addAddress($addAddressEmail, $addAddressName);
        //Establecer el asunto del mensaje
        $mail->Subject = $subject;
        //convertir HTML dentro del cuerpo del mensaje
        $mail->msgHTML($template);
          //send the message, check for errors
        if (!$mail->send()) {
          return false;
        } else {
          return true;
        }

      }

      function prepareEmailNewsletterToClient($post) {

        $template_user = file_get_contents( __DIR__ . '/../includes/emails/newsletter/newsletter-to-user.php');
        $template_client = file_get_contents( __DIR__ . '/../includes/emails/newsletter/newsletter-to-client.php');
        
        //configuro las variables a remplazar en el template
        $vars = array(
          '{email}',
          '{facebook}',
          '{instagram}',
          '{linkedin}',
          '{name_client}',
          '{email_client}',
          '{tel_client}',
          '{wap_client}',
          '{date}',
          '{base}'
        );

        $values = array( 
          $post['email_newsletter'],
          RRSS_FACEBOOK,
          RRSS_INSTAGRAM,
          RRSS_LINKEDIN,
          NAME_CLIENT,
          EMAIL_CLIENT,
          TEL_CLIENT,
          WAP_CLIENT,
          date('d-m-Y'),
          BASE 
        );

        //Remplazamos las variables por las marcas en los templates
        $template_user = str_replace($vars, $values, $template_user);
        $template_client = str_replace($vars, $values, $template_client);

        // Enviar mail al usuario
        $send = $this->sendmail(
          EMAIL_CLIENT, // Remitente 
          NAME_CLIENT, // Nombre Remitente 
          EMAIL_CLIENT, // Responder a:
          NAME_CLIENT, // Remitente al nombre: 
          $post['email_newsletter'], // Destinatario 
          $post['email_newsletter'], // Nombre del destinatario
          'Registro Exitoso!', // Asunto 
          $template_user // Template usuario
        );

        // Enviar mail al Cliente
        $send = $this->sendmail(
          $post['email_newsletter'], // Remitente 
          $post['email_newsletter'], // Nombre Remitente 
          $post['email_newsletter'], // Responder a:
          $post['email_newsletter'], // Remitente al nombre: 
          EMAIL_CLIENT, // Destinatario 
          NAME_CLIENT, // Nombre del destinatario
          'Un nuevo usuario se regitro en tu newsletter.', // Asunto 
          $template_client // Template usuario
        );

        return $send;

      }

      function prepareEmailSegurosLifeToClient($post) {

        $template_user = file_get_contents( __DIR__ . '/../includes/emails/seguros_vida/seguros_vida-to-user.php');
        $template_client = file_get_contents( __DIR__ . '/../includes/emails/seguros_vida/seguros_vida-to-client.php');
        
        //configuro las variables a remplazar en el template
        $vars = array(
          '{email}',
          '{facebook}',
          '{instagram}',
          '{linkedin}',
          '{name_client}',
          '{email_client}',
          '{tel_client}',
          '{wap_client}',
          '{origin}',
          '{seguro}',
          '{edad}',
          '{provincia}',
          '{localidad}',
          '{ingresos}',
          '{nombre_user}',
          '{telefono}',
          '{fecha}',
          '{base}'
        );

        $values = array( 
          $post['email'],
          RRSS_FACEBOOK,
          RRSS_INSTAGRAM,
          RRSS_LINKEDIN,
          NAME_CLIENT,
          EMAIL_CLIENT,
          TEL_CLIENT,
          WAP_CLIENT,
          $post['origin'],
          $post['seguro'],
          $post['age'],
          $post['province'],
          $post['locality'],
          $post['income'],
          $post['name'],
          $post['phone'],
          date('d-m-Y'),
          BASE 
        );

        //Remplazamos las variables por las marcas en los templates
        $template_user = str_replace($vars, $values, $template_user);
        $template_client = str_replace($vars, $values, $template_client);

        // Enviar mail al usuario
        $send = $this->sendmail(
          EMAIL_CLIENT, // Remitente 
          NAME_CLIENT, // Nombre Remitente 
          EMAIL_CLIENT, // Responder a:
          NAME_CLIENT, // Remitente al nombre: 
          $post['email'], // Destinatario 
          $post['name'], // Nombre del destinatario
          'Envio Exitoso!', // Asunto 
          $template_user // Template usuario
        );

        // Enviar mail al Cliente
        $send = $this->sendmail(
          $post['email'], // Remitente 
          $post['email'], // Nombre Remitente 
          $post['email'], // Responder a:
          $post['email'], // Remitente al nombre: 
          EMAIL_CLIENT, // Destinatario 
          NAME_CLIENT, // Nombre del destinatario
          'Pedido de cotizacion Seguros de Vida.', // Asunto 
          $template_client // Template usuario
        );

        return $send;

      }

      function prepareEmailSegurosAuto($post) {

        $template_user = file_get_contents( __DIR__ . '/../includes/emails/seguros_auto/seguros_auto-to-user.php');
        $template_client = file_get_contents( __DIR__ . '/../includes/emails/seguros_auto/seguros_auto-to-client.php');
        
        //configuro las variables a remplazar en el template
        $vars = array(
          '{email}',
          '{facebook}',
          '{instagram}',
          '{linkedin}',
          '{name_client}',
          '{email_client}',
          '{tel_client}',
          '{wap_client}',
          '{origin}',
          '{seguro}',
          '{year}',
          '{marca}',
          '{modelo}',
          '{age}',
          '{provincia}',
          '{localidad}',
          '{nombre_user}',
          '{email}',
          '{telefono}',
          '{fecha}',
          '{base}'
        );

        $values = array( 
          $post['email'],
          RRSS_FACEBOOK,
          RRSS_INSTAGRAM,
          RRSS_LINKEDIN,
          NAME_CLIENT,
          EMAIL_CLIENT,
          TEL_CLIENT,
          WAP_CLIENT,
          $post['origin'],
          $post['seguro'],
          $post['year'],
          $post['marca'],
          $post['modelo'],
          $post['age'],
          $post['province'],
          $post['locality'],
          $post['name'],
          $post['email'],
          $post['phone'],
          date('d-m-Y'),
          BASE 
        );

        //Remplazamos las variables por las marcas en los templates
        $template_user = str_replace($vars, $values, $template_user);
        $template_client = str_replace($vars, $values, $template_client);

        // Enviar mail al usuario
        $send = $this->sendmail(
          EMAIL_CLIENT, // Remitente 
          NAME_CLIENT, // Nombre Remitente 
          EMAIL_CLIENT, // Responder a:
          NAME_CLIENT, // Remitente al nombre: 
          $post['email'], // Destinatario 
          $post['name'], // Nombre del destinatario
          'Envio Exitoso!', // Asunto 
          $template_user // Template usuario
        );

        // Enviar mail al Cliente
        $send = $this->sendmail(
          $post['email'], // Remitente 
          $post['email'], // Nombre Remitente 
          $post['email'], // Responder a:
          $post['email'], // Remitente al nombre: 
          EMAIL_CLIENT, // Destinatario 
          NAME_CLIENT, // Nombre del destinatario
          'Pedido de cotizacion Seguros de Auto.', // Asunto 
          $template_client // Template usuario
        );

        return $send;

      }

      function prepareEmailSegurosAgroToClient($post) {

        $template_user = file_get_contents( __DIR__ . '/../includes/emails/seguros_agro/seguros_agro-to-user.php');
        $template_client = file_get_contents( __DIR__ . '/../includes/emails/seguros_agro/seguros_agro-to-client.php');
        
        //configuro las variables a remplazar en el template
        $vars = array(
          '{email}',
          '{facebook}',
          '{instagram}',
          '{linkedin}',
          '{name_client}',
          '{email_client}',
          '{tel_client}',
          '{wap_client}',
          '{origin}',
          '{seguro}',
          '{actividad}',
          '{hectarias}',
          '{provincia}',
          '{localidad}',
          '{nombre_user}',
          '{telefono}',
          '{fecha}',
          '{base}'
        );

        $values = array( 
          $post['email'],
          RRSS_FACEBOOK,
          RRSS_INSTAGRAM,
          RRSS_LINKEDIN,
          NAME_CLIENT,
          EMAIL_CLIENT,
          TEL_CLIENT,
          WAP_CLIENT,
          $post['origin'],
          $post['seguro'],
          $post['activity'],
          $post['hectares'],
          $post['province'],
          $post['locality'],
          $post['name'],
          $post['phone'],
          date('d-m-Y'),
          BASE 
        );

        //Remplazamos las variables por las marcas en los templates
        $template_user = str_replace($vars, $values, $template_user);
        $template_client = str_replace($vars, $values, $template_client);

        // Enviar mail al usuario
        $send = $this->sendmail(
          EMAIL_CLIENT, // Remitente 
          NAME_CLIENT, // Nombre Remitente 
          EMAIL_CLIENT, // Responder a:
          NAME_CLIENT, // Remitente al nombre: 
          $post['email'], // Destinatario 
          $post['name'], // Nombre del destinatario
          'Envio Exitoso!', // Asunto 
          $template_user // Template usuario
        );

        // Enviar mail al Cliente
        $send = $this->sendmail(
          $post['email'], // Remitente 
          $post['name'], // Nombre Remitente 
          $post['email'], // Responder a:
          $post['name'], // Remitente al nombre: 
          EMAIL_CLIENT, // Destinatario 
          NAME_CLIENT, // Nombre del destinatario
          'Pedido de cotizacion Seguros Agro.', // Asunto 
          $template_client // Template usuario
        );

        return $send;

      }

      function prepareEmailSegurosPatrimoniales($post) {

        $template_user = file_get_contents( __DIR__ . '/../includes/emails/seguros_patrimoniales/seguros_patrimoniales-to-user.php');
        $template_client = file_get_contents( __DIR__ . '/../includes/emails/seguros_patrimoniales/seguros_patrimoniales-to-client.php');
        
        //configuro las variables a remplazar en el template
        $vars = array(
          '{email}',
          '{facebook}',
          '{instagram}',
          '{linkedin}',
          '{name_client}',
          '{email_client}',
          '{tel_client}',
          '{wap_client}',
          '{origin}',
          '{seguro}',
          '{plan}',
          '{nombre_user}',
          '{telefono}',
          '{fecha}',
          '{base}'
        );

        $values = array( 
          $post['email'],
          RRSS_FACEBOOK,
          RRSS_INSTAGRAM,
          RRSS_LINKEDIN,
          NAME_CLIENT,
          EMAIL_CLIENT,
          TEL_CLIENT,
          WAP_CLIENT,
          $post['origin'],
          $post['seguro'],
          $post['plan'],
          $post['name'],
          $post['phone'],
          date('d-m-Y'),
          BASE 
        );

        //Remplazamos las variables por las marcas en los templates
        $template_user = str_replace($vars, $values, $template_user);
        $template_client = str_replace($vars, $values, $template_client);

        // Enviar mail al usuario
        $send = $this->sendmail(
          EMAIL_CLIENT, // Remitente 
          NAME_CLIENT, // Nombre Remitente 
          EMAIL_CLIENT, // Responder a:
          NAME_CLIENT, // Remitente al nombre: 
          $post['email'], // Destinatario 
          $post['name'], // Nombre del destinatario
          'Envio Exitoso!', // Asunto 
          $template_user // Template usuario
        );

        // Enviar mail al Cliente
        $send = $this->sendmail(
          $post['email'], // Remitente 
          $post['email'], // Nombre Remitente 
          $post['email'], // Responder a:
          $post['email'], // Remitente al nombre: 
          EMAIL_CLIENT, // Destinatario 
          NAME_CLIENT, // Nombre del destinatario
          'Pedido de cotizacion Seguros Patrimoniales.', // Asunto 
          $template_client // Template usuario
        );

        return $send;

      }

      function prepareEmailFormContacto($post) {

        $template_user = file_get_contents( __DIR__ . '/../includes/emails/contacts/contacts-to-user.php');
        $template_client = file_get_contents( __DIR__ . '/../includes/emails/contacts/contacts-to-client.php');
        
        //configuro las variables a remplazar en el template
        $vars = array(
          '{email}',
          '{facebook}',
          '{instagram}',
          '{linkedin}',
          '{name_client}',
          '{email_client}',
          '{tel_client}',
          '{wap_client}',
          '{origin}',
          '{nombre_user}',
          '{telefono}',
          '{comentarios}',
          '{fecha}',
          '{base}'
        );

        $values = array( 
          $post['email'],
          RRSS_FACEBOOK,
          RRSS_INSTAGRAM,
          RRSS_LINKEDIN,
          NAME_CLIENT,
          EMAIL_CLIENT,
          TEL_CLIENT,
          WAP_CLIENT,
          $post['origin'],
          $post['name'],
          $post['phone'],
          $post['comments'],
          date('d-m-Y'),
          BASE 
        );

        //Remplazamos las variables por las marcas en los templates
        $template_user = str_replace($vars, $values, $template_user);
        $template_client = str_replace($vars, $values, $template_client);

        // Enviar mail al usuario
        $send = $this->sendmail(
          EMAIL_CLIENT, // Remitente 
          NAME_CLIENT, // Nombre Remitente 
          EMAIL_CLIENT, // Responder a:
          NAME_CLIENT, // Remitente al nombre: 
          $post['email'], // Destinatario 
          $post['name'], // Nombre del destinatario
          'Envio Exitoso!', // Asunto 
          $template_user // Template usuario
        );

        // Enviar mail al Cliente
        $send = $this->sendmail(
          $post['email'], // Remitente 
          $post['email'], // Nombre Remitente 
          $post['email'], // Responder a:
          $post['email'], // Remitente al nombre: 
          EMAIL_CLIENT, // Destinatario 
          NAME_CLIENT, // Nombre del destinatario
          'Nueva consulta formulario web.', // Asunto 
          $template_client // Template usuario
        );

        return $send;

      }

      function registerEmailNewsletterInPerfit($api, $list, $name = null, $email) {

        $perfit = new PerfitSDK\Perfit( ['apiKey' => $api ] );
        $listId = $list;

        if ( !isset($name) ) {
          $name = '';
        } 

        $userPerfit = $perfit->get('/contacts/' .$email); // BUSCAR usuario

        if (!$userPerfit->success) { // Si no se encuentra en la base de datos cargarlo
          $response = $perfit->post('/lists/' .$listId. '/contacts', 
            [
              'firstName' => $name, 
              'email' => $email,
            ]
          );
        }

      }

      function registerEmailContactsInPerfit($api, $list, $post) {

        if ( !isset($post['seguro']) ) {
          $seguro = '';
        } else {
          $seguro = $post['seguro'];
        }

        $perfit = new PerfitSDK\Perfit( ['apiKey' => $api ] );
        $listId = $list;

        $userPerfit = $perfit->get('/contacts/' . $post['email']); // BUSCAR usuario

        if (!$userPerfit->success) { // Si no se encuentra en la base de datos cargarlo
          $response = $perfit->post('/lists/' .$listId. '/contacts', 
            [
              'firstName' => $post['name'], 
              'email' => $post['email'],
              'customFields' => 
                [
                  [
                    'id' => 11, 
                    'value' => $seguro
                  ]
                ]
            ]
          );
        }

      }

  }

?>