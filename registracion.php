<?php
require_once("soporte.php");

if (!$db->conexion()) {
  header("location: migracion.php");
}

if($auth->estaLogueado()){

 header("location:perfilDeUsuario.php");
 exit;
}
// Inicializacion de variables de la registracion
$nombre = '';
$apellido = '';
$number = '';
$direccion = "";
$email = "";
$password = "";
$rpassword= "";

// Inicializacion de array de errores
$errores = [];


// Persistimos la informacion del usuario en la registracion
if ($_POST) {

	$nombre = trim($_POST["nombre"]);
  $apellido = trim($_POST["apellido"]);
  $number = trim($_POST["number"]);
  $direccion = trim($_POST["direccion"]);
  $email = trim($_POST["email"]);

  $errores = $validator->validar($db, 'foto');

  if (empty ($errores)){
   $errores = $db->guardarImagen("foto");
  }

  if (empty ($errores)) {
	 $extension = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
	 $foto = 'foto-perfil/' . $email . '.' . $extension; //guardo el directorio en la variable $foto

	 $usuario = new User($_POST["nombre"],
	  									 $_POST["apellido"],
											 $_POST["number"],
											 $_POST["direccion"],
											 $_POST["email"],
											 $_POST["password"],
											 $foto);

	 $usuarioGuardado = $db->guardarUsuario($usuario, $db); //devuelve un usuario como array
                                                          //$usuario y $db son objetos

   // var_dump($usuarioGuardado); exit;

	 $auth->logueo($usuarioGuardado['id']);

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
			<div class="col-md-12 col-lg-12 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row d-flex justify-content-around">
							<div class="col-xs-6">

							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">


								<form id="register-form"  method="post" enctype="multipart/form-data" role="form">

                  <div class="form-group">
                      <label for="nombre"><strong>Nombre:</strong></label>
                      <input class="form-control" type="text" name="nombre" value="<?=$nombre?>">
                      <?php if (isset($errores["nombre"])): ?>
        								<span style="color:#dd2222;">
                          <b class="ion-alert-circled"></b>
                          <?=$errores["nombre"];?>
                        </span>
                      <?php endif; ?>
                  </div>
                    <br>
                  <div class="form-group">
                    <label for="apellido"><strong>Apellido:</strong></label>
                    <input class="form-control" type="text" name="apellido" value="<?=$apellido?>">
                    <?php if (isset($errores["apellido"])): ?>
                      <span style="color: #dd2222;">
                        <b class="ion-alert-circled"></b>
                        <?=$errores["apellido"];?>
                      </span>
                    <?php endif; ?>
                  </div>
                    <br>
                  <div class="form-group">
                    <label for='password'><strong>Teléfono de Contacto:</strong></label>
                    <input class="form-control" type="text" name='number' value="<?=$number?>">
                    <?php if (isset($errores["number"])): ?>
                      <span style="color: #dd2222;">
                        <b class="ion-alert-circled"></b>
                        <?=$errores["number"];?>
                      </span>
                    <?php endif; ?>
                  </div>
                    <br>
                  <div class="form-group">
                    <label for='username'><strong>Domicilio:</strong></label>
                    <input class="form-control" type='text' name='direccion'value="<?=$direccion?>">
                    <?php if (isset($errores["direccion"])): ?>
                      <span style="color: #dd2222;">
                        <b class="ion-alert-circled"></b>
                        <?=$errores["direccion"];?>
                      </span>
                    <?php endif; ?>
                  </div>
                    <br>
                  <div class="form-group">
                      <label for="email"><strong>E-mail:</strong></label>
                      <input class="form-control" type="email" name="email" value="<?=$email?>">
                      <?php if (isset($errores["email"])): ?>
        								<span style="color: #dd2222;">
                          <b class="ion-alert-circled"></b>
                          <?=$errores["email"];?>
                        </span>
                      <?php endif; ?>
                  </div>
                  <div class="form-group">
                      <label for="contraseña"><strong>Contraseña:</strong></label>
                      <input class="form-control" type="password" name="password">
                      <?php if (isset($errores["password"])): ?>
        								<span style="color: #dd2222;">
                          <b class="ion-alert-circled"></b>
                          <?=$errores["password"];?>
                        </span>
                      <?php endif; ?>
                  </div>

                  <div class="form-group">
                      <label for="contraseña"><strong>Confirmar Contraseña:</strong></label>
                      <input class="form-control" type="password" name="rpassword">
                  </div>

                  <div class="form-group">
                      <label for="contraseña"><strong>Elegi tu foto de perfil</strong></label>
                      <input class="form-control" type="file" name="foto">
                      <?php if (isset($errores["foto"])): ?>
        								<span style="color:#dd2222;">
                          <b class="ion-alert-circled"></b>
                          <?=$errores["foto"];?>
                        </span>
                      <?php endif; ?>
                  </div>

                    <br>
                  <div class="form-group">
                    <button class="btn btn-success" type="submit"><strong>Registrame</strong></button>
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
