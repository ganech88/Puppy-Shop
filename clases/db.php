<?php
require_once 'user.php';

abstract class DB {
  public abstract function existeMail($mail);
  public abstract function traerTodos();
  public abstract function guardarUsuario(User $usuario, DB $db);

}

 ?>