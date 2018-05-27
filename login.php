<?php
	require_once('soporte.php');

	if ($auth->estaLogueado()) {
		header('location: perfilDeUsuario.php');
		exit;
	}

	$email = '';

	$errores = [];

	// Si envían algo por $_POST
	if ($_POST) {
		$email = trim($_POST['email']);

		$errores = $validator->validarLogin($db);

		if (empty($errores)) {
			$usuario = $db->existeEmail($email);

			$auth->logueo($usuario);

			// Seteo la cookie
			if (isset($_POST["remember"])) {
	        setcookie('id', $usuario->getId(), time() + 3600 * 24 * 30);
	      }

			header('location: perfilDeUsuario.php');
			exit;
		}
	}
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Do+Hyeon" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Gaegu" rel="stylesheet">
      <link rel="stylesheet" href="css/styles.css">
    <title>Registración</title>
  </head>
  <body>
<header>
  <?php
  require_once("includes/header-nav.php");
   ?>
</header>

<div class="login">

<div class="container">
    	<div class="row ">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row d-flex justify-content-around">
							<div class="col-xs-6">
								<a href="login.php"onclick="showlogin()" class="active" id="login-form-link">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="registracion.php" onclick="showRegister()" id="register-form-link">Registrate</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" method="post" enctype="multipart/form-data" role="form"  style="display: block;">
									<div class="form-group">
										<input type="text" name="email"tabindex="1" class="form-control" placeholder="Email" value="<?=$email?>">
										<?php if (isset($errores['email'])): ?>
											<span style="color: red;">
										 	<b class="ion-alert-circled"></b>
												<?=$errores['email'];?>
											</span>
										<?php endif; ?>
									</div>
									<div class="form-group">
										<input type="password" name="password"tabindex="2" class="form-control" placeholder="Contraseña" value="">
										<?php if (isset($errores["password"])): ?>
											<span style="color: red;">
												<b class="ion-alert-circled"></b>
												<?=$errores["password"];?>
											</span>
										<?php endif; ?>
									</div>
									<div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember">
										<label for="remember"> Recordame </label>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Iniciar Sesión">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="" tabindex="5" class="forgot-password">¿Olvidaste tu contraseña?</a>
												</div>
											</div>
										</div>
									</div>
								</form>

<?php
require_once("./includes/footer.php");
?>

<!-- Jquery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!--bootstrap  -->
<script src="js/bootstrap.min.js"></script>

</body>
</html>
