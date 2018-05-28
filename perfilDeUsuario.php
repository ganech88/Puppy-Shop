<?php
	require_once('soporte.php');

	if (!$auth->estaLogueado()) {
		header('location:login.php');
		exit;
	}

	$usuario = $db->traerId($_SESSION['id']);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
			<link rel="stylesheet" href="css/bootstrap.min.css">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
			<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Do+Hyeon" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Gaegu" rel="stylesheet">
			<link rel="stylesheet" href="css/styles.css">
		<title>Perfil del usuario</title>
	</head>
	<body>
		<header class="header" >
	    <?php
	      require_once("includes/header-nav.php");
	    ?>
	  </header>
		<div class="margen">

		      <div class="barraTitulo texto-bienvenida">
		<div class="container">
			<h1>Bienvenido <?=$usuario->getNombre()?> a PuppyShop</h1>
			<img class="img-rounded" src="<?=$usuario->getFoto()?>" width="200">
			<br><br>
			<a class="btn btn-warning" href="logout.php">Cerrar sesion </a>
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
