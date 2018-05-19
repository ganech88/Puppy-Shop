<?php

class Auth{

  public function __construct(){
    session_start();

    if (isset($_COOKIE['id']) && !$this->estaLogueado()) { //Si hay COOKIE y no esta loguado
        $this->loguear($_COOKIE['id']);
    }
  }


  public function loguear($usuarioId){
    $_SESSION['id'] = $usuarioId;
    header('location:perfilDeUsuario.php');
    exit;
  }


  public function estaLogueado(){
    return isset($_SESSION['id']);
  }


}





 ?>
