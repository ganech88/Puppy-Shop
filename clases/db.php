<?php
require_once 'user.php';

abstract class DB {
  public abstract function existeEmail($email);
  public abstract function traerTodos();
  public abstract function guardarUsuario(User $usuario, DB $db);
  // public abstract function guardarImagen($laImagen);
  // public abstract function traerUltimoID();
  // public abstract function traerId($id);

}

 ?>
