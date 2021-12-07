<?php

  if (isset($_GET['email_newsletter'])) {
    $email_newsletter = $_GET['email_newsletter'];
  } else {
    $email_newsletter = '';
  }

  if (isset($_GET['errors_newsletter'])) {
    $errors_newsletter = $_GET['errors_newsletter'];
  } else {
    $errors_newsletter = [];
  }

  if (isset($_GET['msg_newsletter'])) {
    $msg_newsletter = $_GET['msg_newsletter'];
  }  

?>

<!-- Newsletter -->
<section class="newsletter container">
  <div class="row">
    <div class="col-md-12">

      <!-- Msg Exito Newsletter -->
      <?php if (isset($msg_newsletter)): ?>

        <div id="msg_newsletter" class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>¡Recibido!</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          <ul style="padding: 0;">
            <li>- <?php echo $msg_newsletter; ?></li>
          </ul>
        </div>

      <?php endif ?>
      <!-- Msg. Exito Newsletter end -->

      <!-- Errores Formulario -->
      <?php if (isset($errors_newsletter) && !empty($errors_newsletter) ): ?>

        <div id="error_newsletter" class="alert alert-danger alert-dismissible fade show" role="alert">
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          <ul style="padding: 0;">

            <?php foreach ($errors_newsletter as $error): ?>
              <li>- <?= $error ?> </li>
            <?php endforeach ?>

          </ul>
        </div>

      <?php endif ?>
      <!-- Errores Formulario end -->

      <div class="row">
        
        <div class="col-md-4">
          <p>Suscribite al NEWSLETTER <br>y enterate de todas las novedades.</p>
        </div>

        <div class="col-md-8">

          <form 
            id="form-newsletter" 
            method="post" 
            action="./php/validate-form-newsletter.php" 
            class="needs-validation" 
            novalidate>

            <input type="hidden" name="origin" value="newsletter">

            <div class="row">

              <div class="col-sm-9">
                <input 
                  required                  
                  type="email" 
                  class="form-control" 
                  name="email_newsletter" 
                  value="<?= $email_newsletter ?>" 
                  placeholder="Email">

                <div class="invalid-feedback">
                  Por favor ingresá tu email
                </div>                

              </div>

              <div class="col-sm-3">
                <button 
                  id="send_newsletter" 
                  onclick="verifyRecaptcha('form-newsletter', '<?= RECAPTCHA_KEY_SITE ?>', 'validarNewsletter' )" 
                  type="button" 
                  class="btn btn-primary w-100">Suscribirse
                </button>
              </div>
            </div>
          </form>
        </div>

      </div>

    </div>
  </div>
</section>
<!-- Newsletter end -->