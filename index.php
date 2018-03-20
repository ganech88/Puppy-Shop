<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
      <link rel="stylesheet" href="css/styles.css">
    <title>Home</title>
  </head>
  <body>
<header>
<?php
require_once("includes/header-nav.php");
?>
</header>




<div class="row d-flex flex-wrap">
  <div class="card col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
  <div class="card-body">
    <h4 class="card-title">Microcentro</h4>
    <img src="images/cabin.png" class="img-fluid" alt="">
    <p class="card-text">
      <ul>
          <li>Direccion</li>
          <li>Telefono</li>
          <li><a href="#!" class="card-link alling">Como llegar?</a></li>
      </ul>

    </p>

  </div>
</div>

<div class="card col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
<div class="card-body">
  <h4 class="card-title">Belgrano</h4>
  <img src="images/cabin.png" class="img-fluid" alt="">
  <p class="card-text">
    <ul>
        <li>Direccion</li>
        <li>Telefono</li>


    </ul>
  </p>
  <a href="#!" class="card-link">Como llegar?</a>
</div>
</div>

<div class="card col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
<div class="card-body">
  <h4 class="card-title">Recoleta</h4>
  <img src="images/cabin.png" class="img-fluid" alt="">
  <p class="card-text">
    <ul>
        <li>Direccion</li>
        <li>Telefono</li>


    </ul>
  </p>
  <a href="#!" class="card-link">Como llegar?</a>
</div>
</div>


  <div class="card col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
    <div class="card-body">
  <h4 class="card-title">Palermo</h4>
  <img src="images/cabin.png" class="img-fluid" alt="">
  <p class="card-text">
    <ul>
        <li>Direccion</li>
        <li>Telefono</li>


    </ul>
  </p>
  <a href="#!" class="card-link">Como llegar?</a>

    </div>
  </div>



</div>

<footer class="footer text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Atención al cliente</h4>
          <p class="lead mb-0">Línea gratuita:
          <br> 4809-8888 / 0810-333-5456</p>
      </div>

      <div class="col-md-4">
          <h4 class="text-uppercase mb-4">Seguinos</h4>
          <div class="img">
            <img src="images/facebook.png" class="img-fluid" alt="">
          </div>
          <div class="img">
            <img src="images/twitter.png" class="img-fluid" alt="">
          </div>
          <div class="img">
            <img src="images/Instagram.png" class="img-fluid" alt="">
          </div>

          <!-- <p class="lead mb-0">Freelance is free and open source landing page theme created to
          <a href="http://startbootstrap.com">your free personal use</a>.</p> -->
      </div>
      <div class="col-md-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Suscribíte a nuestro newsletter</h4>
          <label> Dejanos tu correo electrónico para recibir todas las ofertas y promociones antes que nadie
          </label>
          <div class="actions">
              <input type="text" name="email" placeholder="Ingresá tu correo" title="Ingresá tu correo" class="input-text required-entry validate-email">
              <button type="submit" class="button" onclick="xt_click(this,'C','14','footer::newsletter::subscribe::ok','N')">
              </button>
          </div>
      </div>
      <div class="container">
          <p class="m-0 text-center text-red">Copyright © Unsere Website 2018</p>
      </div>
    </div>
  </div>

</footer>


    <!-- Jquery -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!--bootstrap  -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

  <!-- <button type="submit" class="button" onclick="xt_click(this,'C','14','footer::newsletter::subscribe::ok','N')"> -->
