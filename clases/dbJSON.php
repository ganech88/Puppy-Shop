<?php

require_once 'db.php';


class dbJSON extends DB {

  private $archivo;

  public function __construct(){
    $this->archivo = "baseUsuario.json";
  }

  public function existeMail($mail){

    $usuarios = $this->traerTodos();

    foreach ($usuarios as $unUsuario) {
      if ($unUsuario->getEmail() == $email) {
        return $unUsuario;
      }
    }

     return false;
  }

  public function traerTodos(){

    $todosJSON = file_get_contents($this->archivo);
    // Esto me arma un array con todos los usuarios
    $usuariosArray = explode(PHP_EOL, $todosJSON);

    array_pop($usuariosArray);

    $todosPHP = [];
    // Recorremos el array y generamos por cada usuario un array del usuario
    foreach ($usuariosArray as $usuario) {
      $usuarioJSON = json_decode($usuario, true);
      $usuario = new User($usuarioJSON["nombre"],
                          $usuarioJSON["apellido"],
                          $usuarioJSON["number"],
                          $usuarioJSON["direccion"],
                          $usuarioJSON["email"],
                          $usuarioJSON["password"],
                          $usuarioJSON["foto"]
                          );

      $usuario->setId($usuarioJSON["id"]);
      $todosPHP[] = $usuario;
    }

   return $todosPHP;
  }

  public function guardarUsuario(User $usuario, DB $db){

    $usuarioCreado = $usuario->crearUsuario($db);

    $usuarioJSON = json_encode($usuarioCreado);

    file_put_contents($this->archivo, $usuarioJSON . PHP_EOL, FILE_APPEND);

    return $usuarioCreado;
  }

  public function traerUltimoID(){

    $usuarios = $this->traerTodos();

    if (count($usuarios) == 0){
      return 1;
    }

    $ultimo = array_pop($usuarios);

    $id = $ultimo->getId();

    return $id + 1;
  }

  public function guargarImagen($laImagen){

    $errores = [];

    if($_FILES[$laImagen]['error'] == UPLOAD_ERR_OK){
      $nombreArchivo = $_FILES[$laImagen]['name'];
      $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
      $archivoFisico = $_FILES[$laImagen]['tmp_name'];

      if ($extension == 'jpg' || $extension == 'png' || $extension == 'jpeg') {
        $direFisica = dirname(__FILE__);
        $rutaFinal = $direFisica . '/foto-perfil/' . $_POST['email'] . '.' . $extension;
        move_uploaded_file($archivoFisico, $rutaFinal);
      } else {
        $errores['imagen'] = 'el formato no es correcto';
        }
    } else {
      $errores['imagen'] = 'No se subio el archivo';
     }

   return $errores;
  }

  public function traerId($id){
    $usuarios = $this->traerTodos();

    foreach ($usuarios as $usuario) {
      if($usuario->getId() == $id){
        return $usuario;
      }
    }

   return false;
  }


}


 ?>
