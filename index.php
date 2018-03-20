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
<div class="row">
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

<!-- Sucursales -->
<div class="row d-flex flex-wrap">

  <div class="card col-xs-12 col-sm-4 col-md-4 col-lg-6 col-xl-6">
  <div class="card-body">
    <h4 class="card-title">Microcentro</h4>
    <img src="images/sucursal1.jpg" class="img-fluid" alt="">
    <p class="card-text">
      <ul>
          <li>Direccion</li>
          <li>Telefono</li>
          <li><a href="#!" class="card-link alling">Como llegar?</a></li>
      </ul>
    </p>
  </div>
</div>

  <div class="card col-xs-12 col-sm-4 col-md-4 col-lg-6 col-xl-6">
  <div class="card-body">
    <h4 class="card-title">Belgrano</h4>
    <img src="images/sucursal5.jpg" class="img-fluid" alt="">
    <p class="card-text">
      <ul>
        <li>Direccion</li>
        <li>Telefono</li>
        <li><a href="#!" class="card-link">Como llegar?</a></li>
      </ul>
    </p>
  </div>
</div>

  <div class="card col-xs-12 col-sm-4 col-md-4 col-lg-6 col-xl-6">
  <div class="card-body">
    <h4 class="card-title">Recoleta</h4>
    <img src="images/sucursal3.jpg" class="img-fluid" alt="">
    <p class="card-text">
      <ul>
        <li>Direccion</li>
        <li>Telefono</li>
        <li><a href="#!" class="card-link">Como llegar?</a></li>
      </ul>
    </p>
  </div>
  </div>

  <div class="card col-xs-12 col-sm-4 col-md-4 col-lg-6 col-xl-6">
  <div class="card-body">
    <h4 class="card-title">Palermo</h4>
    <img src="images/sucursal4.jpg" class="img-fluid" alt="">
    <p class="card-text">
      <ul>
        <li>Direccion</li>
        <li>Telefono</li>
        <li><a href="#!" class="card-link">Como llegar?</a></li>
      </ul>
    </p>
  </div>
  </div>

</div>

<footer>


</footer>
    <!-- Jquery -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!--bootstrap  -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
