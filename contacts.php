<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Contacto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
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
              <p class="intro-description wow fadeInRight">Si deseas realizar una cotización contáctanos por los medios oficiales que aparecen a continuación.</p>
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

              <div>
                <a class="d-block offset-top-0" href="https://www.google.com/maps/place/TSCOM+tecnologia+en+sistemas+de+comunicacion/@19.2540234,-103.7269423,15z/data=!4m5!3m4!1s0x0:0xd6c949c3d443181e!8m2!3d19.2540075!4d-103.7269143">Rafaela Suárez #455, Col. Magisterial<span class="d-lg-block">Colima 28030, México</span></a><a class="d-inline-block" href="tel:+523123146309">+52 312 314 63 09</a>
                <ul>
                  <li>Lun-Vie:<span class="d-inline-block offset-left-10 text-black">9:00 AM - 5:00 PM</span></li>
                  <li>Sáb:<span class="d-inline-block offset-left-10 text-black">9:00 AM - 1:00 PM</span></li>
                </ul>
                <br>
                <a class="button-width-190 button-primary button-circle button-lg button offset-top-30" href="https://wa.me/523123028258?text=Hola.%20Me%20gustaría%20hablar%20con%20ustedes">Escribenos por Whatsapp!</a>
              </div>
              <!--  <form class="rd-mailform text-left" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
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
                <div class="form-wrap text-left form-validation-left">
                  <div class="recaptcha" id="captcha1" data-sitekey="6LeGwqsbAAAAANSztlwJBeyjsQEC4YdnyKn0_EHE"></div>
                </div>
                <div class="form-button group-sm text-center text-lg-left">
                  <button class="button button-primary" type="submit">Enviar</button>
                </div>
              </form> -->
              
            </div>
          </div>
        </div>
      </section>

      <!--Map-->
      <section class="section">
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