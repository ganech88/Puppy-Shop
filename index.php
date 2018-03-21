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
  <header class="header" >
    <?php
      require_once("includes/header-nav.php");
    ?>
  </header>

<!-- Carousel -->
<div class="row margen">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img class="d-block w-100" src="images/banner.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/banner2.jpg" alt="Second slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="contenedor">

  <div class="barraTitulo">
      <h3>Nuestros Clientes</h3>
  </div>

  <div class="row d-flex flex-wrap justify-content-center">

    <div class="card col-xs-12 col-sm-5">
    <div class="card-body">
      <h4 class="card-title">Rolo</h4>
      <img src="images/perro1.jpg" class="img-fluid" alt="">
    </div>
  </div>

    <div class="card col-xs-12 col-sm-5">
    <div class="card-body">
      <h4 class="card-title">Tristán</h4>
      <img src="images/gato2.jpg" class="img-fluid" alt="">
    </div>
  </div>

    <div class="card col-xs-12 col-sm-5">
    <div class="card-body">
      <h4 class="card-title">Rómulo</h4>
      <img src="images/perro2.jpg" class="img-fluid" alt="">
    </div>
    </div>

    <div class="card col-xs-12 col-sm-5">
    <div class="card-body">
      <h4 class="card-title">Napoleón</h4>
      <img src="images/gato3.jpg" class="img-fluid" alt="">
    </div>
    </div>

    <div class="card col-xs-12 col-sm-5">
    <div class="card-body">
      <h4 class="card-title">Hércules</h4>
      <img src="images/perro3.jpg" class="img-fluid" alt="">
    </div>
    </div>

    <div class="card col-xs-12 col-sm-5">
    <div class="card-body">
      <h4 class="card-title">Camilo</h4>
      <img src="images/perro4.jpg" class="img-fluid" alt="">
    </div>
    </div>

    <div class="card col-xs-12 col-sm-5">
    <div class="card-body">
      <h4 class="card-title">Pinky y Cerebro</h4>
      <img src="images/gato5.jpg" class="img-fluid" alt="">
    </div>
    </div>

    <div class="card col-xs-12 col-sm-5">
    <div class="card-body">
      <h4 class="card-title">Simba</h4>
      <img src="images/perro6.jpg" class="img-fluid" alt="">
    </div>
    </div>

  </div>

</div>

<?php
require_once("./includes/footer.php");
?>

    <!-- Jquery -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!--bootstrap  -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
