<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
      <link rel="stylesheet" href="css/styles.css">
    <title>Sucursales</title>
  </head>

<body>

  <header>
    <?php
    require_once("includes/header-nav.php");
    ?>
  </header>

<!-- Sucursales -->

<div class="margen">

  <div class="barraTitulo">
    <h3>Nuestras Sucursales</h3>
  </div>

<div class="row d-flex flex-wrap justify-content-center">

  <div class="card col-xs-12 col-sm-5">
  <div class="card-body">
    <h4 class="card-title">Microcentro</h4>
    <img src="images/sucursal1.jpg" class="img-fluid" alt="">
    <p class="card-text">
      <ul>
          <li>Dirección: Av. del Libertador 2166, C1425AAU CABA</li>
          <li>Teléfono: 011 4806-0372</li>
          <li><a href="#!" class="card-link alling">¿Como llegar?</a></li>
      </ul>
    </p>
  </div>
</div>

  <div class="card col-xs-12 col-sm-5">
  <div class="card-body">
    <h4 class="card-title">Belgrano</h4>
    <img src="images/sucursal5.jpg" class="img-fluid" alt="">
    <p class="card-text">
      <ul>
        <li>Dirección: Av. Las Heras 3001/11, D1425CDN CABA </li>
        <li>Teléfono: 011 4809-1100</li>
        <br>
        <li><a href="#!" class="card-link">¿Como llegar?</a></li>
      </ul>
    </p>
  </div>
</div>

  <div class="card col-xs-12 col-sm-5">
  <div class="card-body">
    <h4 class="card-title">Recoleta</h4>
    <img src="images/sucursal3.jpg" class="img-fluid" alt="">
    <p class="card-text">
      <ul>
        <li>Dirección: Lavalle 458, C1425DNU CABA</li>
        <li>Teléfono: 011 4346-4800</li>
        <br>
        <li><a href="#!" class="card-link">¿Como llegar?</a></li>
      </ul>
    </p>
  </div>
  </div>

  <div class="card col-xs-12 col-sm-5">
  <div class="card-body">
    <h4 class="card-title">Palermo</h4>
    <img src="images/sucursal4.jpg" class="img-fluid" alt="">
    <p class="card-text">
      <ul>
        <li>Dirección: Peña 3176, C1425AVN CABA</li>
        <li>Teléfono: 011 4255 0349</li>
        <br>
        <li><a href="#!" class="card-link">¿Como llegar?</a></li>
      </ul>
    </p>
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
