<?php

session_start();

// Chequeo previo de cookie en el cliente, para ver si se loguea el usuario.
if (isset($_COOKIE['id'])) {
  $_SESSION['id'] = $_COOKIE['id'];

}
// Genero la funcion que crea el usuario.
function crearUsuario($data, $imagen) {
	$usuario = [
		"id" => traerUltimoID(),
		"nombre" => $data["nombre"],
    "apellido" => $data["apellido"],
    "number" => $data["number"],
    "direccion" => $data["direccion"],
		"email" => $data["email"],
    "username" => $data["username"],
		"password" => password_hash($data["password"], PASSWORD_DEFAULT),
		"foto" => 'foto-perfil/' . $data["email"] . '.' . pathinfo($_FILES[$imagen]["name"], PATHINFO_EXTENSION)
		];

  return $usuario;
}

function validar($data, $archivo) {
		$errores = [];

		$nombre = trim($_POST["nombre"]);
    $apellido = trim($_POST["apellido"]);
    $number = trim($_POST["number"]);
    $direccion = trim($_POST["direccion"]);
		$email = trim($_POST["email"]);
    $username = trim($_POST["username"]);
		$password = trim($_POST["password"]);
		$rcontra = trim($_POST["rpassword"]);

    if ($nombre == '') { // Si el nombre está vacio
      $errores["nombre"] = "Completa tu nombre";
    }

    if ($apellido == '') { // Si el apellido está vacio
      $errores["apellido"] = "Completa tu apellido";
    }

    if ($number== '') { // Si el telefono esta vacio
      $errores["number"] = "Completa tu telefono";
    }

    if ($direccion == '') { // Si la direccion esta vaca
      $errores["direccion"] = "Completa tu direccion";
    }

    if ($email == '') { // Si el email está vacio
      $errores["email"] = "Completa tu email";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      // Si el email no es un formato valido
      $errores["email"] = "Por favor ingresa un mail verdadero";
    } elseif (existeEmail($email)) { // Si el email ya está registrado vacio
      $errores["email"] = "Este email ya existe";
    }

    if ($password == '' || $rcontra == '') { // Si la contraseña o repetir contraseña está(n) vacio(s)
      $errores["password"] = "Por favor completa tu password";
    } elseif ($password != $rcontra) {
      $errores["password"] = "Tus contraseñas no coinciden";
    } elseif(strlen($password)<7){
     $errores["password"] = "Ingresa una contraseña con un minimo de 7 caracteres.";
   }

    if ($_FILES[$archivo]["error"] != UPLOAD_ERR_OK) { // Si no subieron ninguna imagen
      $errores["foto"] = "Por favor carga una foto";
    }



    return $errores;
  }

function traerTodos(){

$todosJSON = file_get_contents("baseUsuarios.json");

$usuariosArray = explode(PHP_EOL, $todosJSON);

array_pop($usuariosArray);

$todosPHP = [];

foreach ($usuariosArray as $usuarios) {

$todosPHP[] = json_decode($usuarios, true);

}
return $todosPHP;


}


function traerUltimoID(){

  $usuarios = traerTodos();

  if (count($usuarios) == 0) {
    return 1;
}
    $ultimo = array_pop($usuarios);
    $id = $ultimo["id"];
    return $id +1;


}

function existeEmail($email){
  $usuarios = traerTodos();
  foreach ($usuarios as $unUsuario) {

    if($unUsuario["email"] == $email){
      return $unUsuario;
    }

  }
    return false;
}


function guardarImagen($laImagen) {

  $errores = [];
  if ($_FILES[$laImagen]["error"] == UPLOAD_ERR_OK) {
    $nombreArchivo = $_FILES[$laImagen]["name"];
    $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
    $archivoFisico = $_FILES[$laImagen]["tmp_name"];

    if ($extension == "jpg" || $extension == "png" || $extension == "jpeg") {
      $direFisica = dirname(__FILE__);
      $rutaFinal = $direFisica . "/foto-perfil/" . $_POST['email'] . '.' . $extension;
      move_uploaded_file($archivoFisico, $rutaFinal);
    } else {
    $errores["imagen"] = "el formato no es correcto";
          }
   }else {
$errores["imagen"] = "No se subio el archivo";

  }

return $errores;

}

function guardarUsuario($data, $archivo){

  $usuario = crearUsuario($data, $archivo);

  $usuarioJSON = json_encode($usuario);

  file_put_contents('baseUsuarios.json', $usuarioJSON . PHP_EOL, FILE_APPEND);
  var_dump($usuarioJSON);exit;
  return $usuario;
}



function validarLogin($data) {
  $arrayADevolver = [];
  $email = trim($data['email']);
  $password = trim($data['password']);

  if ($email == '') {
    $arrayADevolver['email'] = 'Completá tu email';
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $arrayADevolver['email'] = 'Poné un formato de email válido';
  } elseif (!existeEmail($email)) {
    $arrayADevolver['email'] = 'Este email no está registrado';
  } else {

    $usuario = existeEmail($email);

      if (!password_verify($password, $usuario["password"])) {
        $arrayADevolver['password'] = "Credenciales incorrectas";
      }
  }

  return $arrayADevolver;
}


function logueo($usuario) {
  // Guardo en $_SESSION el ID del USUARIO
   $_SESSION['id'] = $usuario['id'];
  header('location: perfilDeUsuario.php');
  exit;
}

function estaLogueado() {
  return isset($_SESSION['id']);
}

function traerId($id){
  // me traigo todos los usuarios
  $usuarios = traerTodos();

  // Recorro el array de todos los usuarios
  foreach ($usuarios as $usuario) {
    if ($id == $usuario['id']) {
      return $usuario;
    }
  }

  return false;
}


 ?>
