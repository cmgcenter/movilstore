<?php
  
  if(isset($_POST['wannaBeDevs']))
  {
    //require_once ROOT.THIRDPARTY_PATH.'email/forms/contact.php';
  }



?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?php echo $data['title']; ?></title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo UNDER_CONSTRUCTION_ASSETS; ?>img/favicon.png" rel="icon">
  <link href="<?php echo UNDER_CONSTRUCTION_ASSETS; ?>img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo UNDER_CONSTRUCTION_ASSETS;?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo UNDER_CONSTRUCTION_ASSETS;?>vendor/icofont/icofont.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo UNDER_CONSTRUCTION_ASSETS;?>css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: ComingSoon - v2.0.0
  * Template URL: https://bootstrapmade.com/comingsoon-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center">

      <h1>Games, Apps & Assets (AGA inc)</h1>
      <h2>Estamos Trabajando Mucho para llevarles a una tienda de Juegos, Aplicaciones Y Assets Muy Pronto</h2>
      <div class="countdown d-flex justify-content-center" data-count="2020/12/30">
        <div>
          <h3>%D</h3>
          <h4>Days</h4>
        </div>
        <div>
          <h3>%H</h3>
          <h4>Hours</h4>
        </div>
        <div>
          <h3>%M</h3>
          <h4>Minutes</h4>
        </div>
        <div>
          <h3>%S</h3>
          <h4>Seconds</h4>
        </div>
      </div>

      <div class="subscribe">
        <h4>Suscribete Para que Te llegue Notificiones A Tu Correo</h4>
        <form action="forms/notify.php" method="post" role="form" class="php-email-form">
          <div class="subscribe-form">
            <input required="true" type="email" name="email"><input type="submit" value="Subscribe">
          </div>
          <div class="mt-2">
            <div class="loading">Sending.....</div>
            <div class="error-message"></div>
            <div class="sent-message">Recibiras las notificaciones a tu Correo! Gracias</div>
          </div>
        </form>
      </div>

      <div class="social-links text-center">
        <a href="https://twitter.com/cristmartn" target="_blank" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-youtube"></i></a>
        <a href="#" class="linkedin"><i class="icofont-github"></i></a>
      </div>

    </div>
  </header><!-- End #header -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6">
            <h2>Que Podras Hacer En Esta Tienda</h2>
            <h3>Antes de Todo, Dejame Decirte que esta tienda estará horientada a Desarrolladores Y Estudios Independientes, De Tal Forma que gran Parte de lo que vas a encontrar en esta tienda sera Gratis O De Codigo Abierto.</h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              <h3>Que Vas A Encontrar En esta Tienda</h3>
            </p>
            <ul>
              <li><i class="icofont-check"></i> Juegos Multi Plataforma Gratis y De Paga</li>
              <li><i class="icofont-check"></i> Aplicaciones Multi Plataforma Gratis y de Paga</li>
              <li><i class="icofont-check"></i> Assets Para Juegos o Aplicaciones</li>
              <li><i class="icofont-check"></i> Templates De Juegos y Aplicaciones</li>
              <li><i class="icofont-check"></i> Entre muchas Cosas Mas...</li>
            </ul>
            <p class="font-italic">
              Entre las muchas novedades que deseamos implementar para los desarrolladores, habilitaremos un SDK que tendra Sistema de estadisticas, Sistema De Publicidad Propio y de Terceros, Sistema de Usuarios, Sistema De puntos. 
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Quieres Ser Desarrollador En AGA</h2>
          <h3>Contactanos</h3>
        </div>

        <div class="row justify-content-center">

          <div class="col-lg-10">

            <!-- <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="icofont-google-map"></i>
                  <h4>Location:</h4>
                  <p>A108 Adam Street<br>New York, NY 535022</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="icofont-envelope"></i>
                  <h4>Email:</h4>
                  <p>info@example.com<br>contact@example.com</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="icofont-phone"></i>
                  <h4>Call:</h4>
                  <p>+1 5589 55488 51<br>+1 5589 22475 14</p>
                </div>
              </div>
            </div> -->

          </div>

        </div>

        <div class="row  justify-content-center">
          <div class="col-lg-10">
            <form action="#" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input required="true" type="text" name="name" class="form-control" id="name" placeholder="Ingresa tu Nombre Completo" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input required="true" type="email" class="form-control" name="email" id="email" placeholder="Ingresa Tu Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Que Deseas Desarrollar" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Cuentanos Sobre ti"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button name="wannaBeDevs" id="wannaBeDevs" type="submit">Solicitar</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>ComingSoon</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/comingsoon-free-html-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End #footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo UNDER_CONSTRUCTION_ASSETS;?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo UNDER_CONSTRUCTION_ASSETS;?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo UNDER_CONSTRUCTION_ASSETS;?>vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?php echo UNDER_CONSTRUCTION_ASSETS;?>vendor/php-email-form/validate.js"></script>
  <script src="<?php echo UNDER_CONSTRUCTION_ASSETS;?>vendor/jquery-countdown/jquery.countdown.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo UNDER_CONSTRUCTION_ASSETS;?>js/main.js"></script>

</body>

</html>