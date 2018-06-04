<?php
	$status = '';

	if ($_POST) {
		if ( isset($_POST['base']) ) {
			try {
				$dsn = 'mysql:host=localhost; port=3306; charset=utf8';
			  $db_user = 'root';
			  $db_pass = '';
				$db = new PDO($dsn, $db_user, $db_pass);

				$stmp = $db->prepare("CREATE DATABASE puppy_shop_db");
				$stmp->execute();
				$status = 'Se creó la Base de Datos exitosamente';
			} catch (PDOException $e) {
				//$status = $e->getMessage();
				$status = "No se pudo conectar con el servidor, intente más tarde.";
			}
		}

		if ( isset($_POST['tabla']) ) {
			try {
				$dsn = 'mysql:host=localhost; dbname=puppy_shop_db; port=3306; charset=utf8';
			  $db_user = 'root';
			  $db_pass = '';
				$db = new PDO($dsn, $db_user, $db_pass);

				$query = "
					CREATE TABLE `puppy_shop_db`.`usuarios` (
					`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
					`nombre` VARCHAR(50) NOT NULL,
					`apellido` VARCHAR(50) NOT NULL,
					`telefono` INT NULL,
					`domicilio` VARCHAR(50) NULL,
					`email` VARCHAR(50) NOT NULL,
					`password` VARCHAR(100) NOT NULL,
					`foto` VARCHAR(50) NOT NULL,
					PRIMARY KEY (`id`)
				)";

				$stmp = $db->prepare($query);
				$stmp->execute();

				$status = 'Se creó la tabla exitosamente';
			} catch (PDOException $e) {
				//$status = $e->getMessage();
				$status = "Base de datos inexistente. Por favor, crea primero la Base de Datos.";
			}
		}

		if ( isset($_POST['migrar']) ) {
			try {
				$dsn = 'mysql:host=localhost; dbname=puppy_shop_db; port=3306; charset=utf8';
			  $db_user = 'root';
			  $db_pass = '';
				$db = new PDO($dsn, $db_user, $db_pass);

				$todosLosUsuarios = file_get_contents('baseUsuario.json');
				$usuariosArray = explode(PHP_EOL, $todosLosUsuarios);
				array_pop($usuariosArray);

				foreach ($usuariosArray as $unUsuario) {
					$elUsuario = json_decode($unUsuario);

					$query = "INSERT INTO usuarios(nombre, apellido, telefono, domicilio, email, password, foto) VALUES (:nombre, :apellido, :telefono, :domicilio, :email, :password, :foto)";

					$stmp = $db->prepare($query);

					$stmp->bindValue(':nombre', $elUsuario->nombre, PDO::PARAM_STR);
					$stmp->bindValue(':apellido', $elUsuario->apellido, PDO::PARAM_STR);
					$stmp->bindValue(':telefono', $elUsuario->number, PDO::PARAM_INT);
					$stmp->bindValue(':domicilio', $elUsuario->direccion, PDO::PARAM_STR);
					$stmp->bindValue(':email', $elUsuario->email, PDO::PARAM_STR);
					$stmp->bindValue(':password', $elUsuario->password, PDO::PARAM_STR);
					$stmp->bindValue(':foto', $elUsuario->foto, PDO::PARAM_STR);
					$stmp->execute();
				}

				header("location: index.php");
			} catch (PDOException $e) {
				//$status = $e->getMessage();
				$status = "Tabla inexistente. Por favor, crea primero la tabla";
			}
		}
	}

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
		<title>migracion</title>
	</head>
	<body>

		<div class="container">
			<div class="barraTitulo">
	      <h2>Antes de ingresar, debes crear una Base de Datos:</h2>
	    </div>
			<br><br>
      <form method="post">
        <div class="row d-flex">
              <div class="col-xs-12 col-md-4 text-center">
                <button class="btn btn-success" type="submit" name="base"><strong>Crear Base de Datos</strong></button>
              </div>
              <div class="col-xs-12 col-md-4 text-center">
                <button class="btn btn-success" type="submit" name="tabla"><strong>Crear Tabla</strong></button>
              </div>
              <div class="col-xs-12 col-md-4 text-center">
                <button class="btn btn-success" type="submit"name="migrar"><strong>Migrar Datos</strong></button>
              </div>
          </div>
      </form>

			<br><br><br><br>

			<span style="color: #dd2222;">
				<h6 class="text-center"><?= $status ?></h6>
			</span>

		</div>

    <!-- Jquery -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!--bootstrap  -->
    <script src="js/bootstrap.min.js"></script>
  </body>
	</html>
