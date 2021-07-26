<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Contacto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:300,400,700%7CPoppins:300,400,500,700,900">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="">
  </head>
  <body>
    <?php include("preloader.php")?>
    <div class="page">
      <?php include("header.php")?>
      <section class="section section-intro context-dark">
        <div class="intro-bg" style="background: url(images/intro-bg-1.jpg) no-repeat;background-size:cover;background-position: top center;"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-8 text-center">
              <h1 class="font-weight-bold wow fadeInLeft">Contacto</h1>
              <p class="intro-description wow fadeInRight">Si deseas realizar una cotización escríbenos tus datos y nosotros te contactaremos, también puedes encontrar nuestros datos de contacto en la parte superior e inferior de la página.</p>
            </div>
          </div>
        </div>
      </section>

      <!--Mailform-->
      <section class="section section-md">
        <div class="container">
          <!--RD Mailform-->
          <div class="row justify-content-center">
            <div class="col-xl-6 col-md-8 col-12">

              <form class="rd-mailform text-left" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                <div class="form-wrap">
                  <label class="form-label" for="contact-name">Nombre<span class="req-symbol">*</span></label>
                  <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                </div>
                <div class="form-wrap">
                  <label class="form-label" for="contact-phone">Teléfono<span class="req-symbol">*</span></label>
                  <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@Required @PhoneNumber">
                </div>
                <div class="form-wrap">
                  <label class="form-label" for="contact-email">Correo<span class="req-symbol">*</span></label>
                  <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Required @Email">
                </div>
                <div class="form-wrap">
                  <label class="form-label label-textarea" for="contact-message">Mensaje<span class="req-symbol">*</span></label>
                  <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                </div>
                <!--Google captcha SCRT: 6LeGwqsbAAAAAMhmEttRoO-KIwxPaDYR7CSQD88k-->
                <div class="form-wrap text-left form-validation-left">
                  <div class="recaptcha" id="captcha1" data-sitekey="6LeGwqsbAAAAANSztlwJBeyjsQEC4YdnyKn0_EHE"></div>
                </div>
                <div class="form-button group-sm text-center text-lg-left">
                  <button class="button button-primary" type="submit">Enviar</button>
                </div>
              </form>
              
            </div>
          </div>
        </div>
      </section>

      <!--Google Map-->
      <section class="section">
        <!--Please, add the data attribute data-key="YOUR_API_KEY" in order to insert your own API key for the Google map.-->
        <!--Please note that YOUR_API_KEY should replaced with your key.-->
        <!--Example: <div class="google-map-container" data-key="YOUR_API_KEY">-->
        <div id="mapid">
        </div>
      </section>
      <?php include("footer.php")?>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/map.js"></script>
  </body>
</html>