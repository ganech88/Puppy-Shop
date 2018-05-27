<?php

require_once 'db.php';

class Validator {


  function validar(DB $db, $archivo) {
		$errores = [];

		$nombre = trim($_POST["nombre"]);
    $apellido = trim($_POST["apellido"]);
    $number = trim($_POST["number"]);
    $direccion = trim($_POST["direccion"]);
		$email = trim($_POST["email"]);
		$password = trim($_POST["password"]);
		$rcontra = trim($_POST["rpassword"]);

    if ($nombre == "") { // Si el nombre está vacio
      $errores["nombre"] = "Completa tu nombre";
    }

    if ($apellido == "") { // Si el apellido está vacio
      $errores["apellido"] = "Completa tu apellido";
    }

    if ($number== "") { // Si el telefono esta vacio
      $errores["number"] = "Completa tu telefono";
    }

    if ($direccion == "") { // Si la direccion esta vaca
      $errores["direccion"] = "Completa tu direccion";
    }

    if ($email == "") { // Si el email está vacio
      $errores["email"] = "Completa tu email";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      // Si el email no es un formato valido
      $errores["email"] = "Por favor ingresa un mail verdadero";
    } elseif ($db->existeEmail($email)) { // Si el email ya está registrado vacio
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


 public function validarLogin(DB $db){
   $arrayADevolver = [];
   $email = trim($_POST['email']);
   $password = trim($_POST['password']);

   if ($email == '') {
     $arrayADevolver['email'] = 'Completá tu email';
   } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
     $arrayADevolver['email'] = 'Poné un formato de email válido';
   } elseif (!$usuario = $db->existeEmail($email)) {
     $arrayADevolver['email'] = 'Este email no está registrado';
   } else {

      if (!password_verify($password, $usuario->getPassword())) {
         $arrayADevolver['password'] = "Credenciales incorrectas";
       }
    }

   return $arrayADevolver;
 }


}

?>
