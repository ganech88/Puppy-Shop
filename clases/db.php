<?php
require_once 'user.php';

abstract class DB {
  public abstract function existeEmail($email);
  public abstract function traerTodos();
  public abstract function guardarUsuario(User $usuario, DB $db);

}

 ?>
