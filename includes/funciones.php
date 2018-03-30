<?php

session_start();

// Chequeo previo de cookie en el cliente, para ver si se loguea el usuario.
if (isset($_COOKIE['id'])) {
  $_SESSION['id'] = $_COOKIE['id'];

}

function crearUsuario($data, $imagen) {
	$usuario = [
		'id' => traerUltimoID(),
		'name' => $data['name'],
		'email' => $data['email'],
		'pass' => password_hash($data['pass'], PASSWORD_DEFAULT),
		'foto' => 'img/' . $data['email'] . '.' . pathinfo($_FILES[$imagen]['name'], PATHINFO_EXTENSION)
		];

  return $usuario;
}

function validar($data, $archivo) {
		$errores = [];

		$name = trim($_POST['name']);
		$email = trim($_POST['email']);
		$pass = trim($_POST['pass']);
		$rpass = trim($_POST['rpass']);

    if ($name == '') { // Si el nombre está vacio
      $errores['name'] = "Completa tu nombre";
    }

    if ($email == '') { // Si el email está vacio
      $errores['email'] = "Completa tu email";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      // Si el email no es un formato valido
      $errores['email'] = "Por favor ingresa un mail verdadero";
    } elseif (existeEmail($email)) { // Si el email ya está registrado vacio
      $errores['email'] = "Este email ya existe";
    }

    if ($pass == '' || $rpass == '') { // Si la contraseña o repetir contraseña está(n) vacio(s)
      $errores['pass'] = "Por favor completa tu password";
    } elseif ($pass != $rpass) {
      $errores['pass'] = "Tus contraseñas no coinciden";
    }

    if ($_FILES[$archivo]['error'] != UPLOAD_ERR_OK) { // Si no subieron ninguna imagen
      $errores['foto'] = "Por favor carga una foto";
    }

    return $errores;
  }

 ?>
