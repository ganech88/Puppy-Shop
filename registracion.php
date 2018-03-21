<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
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
								<a href="#"onclick="showlogin()" class="active" id="login-form-link">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="#" onclick="showRegister()" id="register-form-link">Register</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="https://phpoll.com/login/process" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Usuario" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Contraseña">
									</div>
									<div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
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
													<a href="https://phpoll.com/recover" tabindex="5" class="forgot-password">Olvidaste tu contraseña?</a>
												</div>
											</div>
										</div>
									</div>
								</form>

								<form id="register-form" action="https://phpoll.com/register/process" method="post" role="form" style="display: none;">

                  <div class="form-group">
                      <label for="nombre"><strong>Nombre:</strong></label>
                      <input class="form-control" type="text" name="nombre" id="nombre">
                  </div>
                    <br>
                  <div class="form-group">
                    <label for="apellido"><strong>Apellido:</strong></label>
                    <input class="form-control" type="text" name="apellido" id="apellido">
                  </div>
                    <br>
                  <div class="form-group">
                    <label for='password'><strong>Teléfono de Contacto:</strong></label>
                    <input class="form-control" type="text" name='number' id='number'>
                  </div>
                    <br>
                  <div class="form-group">
                    <label for='username'><strong>Domicilio:</strong></label>
                    <input class="form-control" type='text' name='direccion' id='direccion'>
                  </div>
                    <br>
                  <div class="form-group">
                      <label for="email"><strong>E-mail:</strong></label>
                      <input class="form-control" type="email" name="email" id="email">
                  </div>
                  <div class="form-group">
                      <label for="Nombre_de_Usuario"><strong>Nombre de Usuario:</strong></label>
                      <input class="form-control" type="text" name="Nombre_de_Usuario" id="Nombre_de_Usuario">
                  </div>
                  <div class="form-group">
                      <label for="contraseña"><strong>Contraseña:</strong></label>
                      <input class="form-control" type="password" name="conraseña" id="contraseña">
                  </div>

                    <br>
                  <div class="form-group">
                    <button class="btn btn-success" type="submit"><strong>Registrarme</strong></button>
                  </div>
                    <!-- </fieldset> -->
                    </form>

							</div>
						</div>
					</div>
				</div>
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
    <script>
      function showRegister() {
        $("#login-form").hide();
        $("#register-form").show();
      }
      function showlogin(){
        $("#register-form").hide ();
        $("#login-form").show();
      }
    </script>
  </body>
</html>
