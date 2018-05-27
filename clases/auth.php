<?php

class Auth{

  public function __construct(){

    session_start();

    if (isset($_COOKIE['id']) && !$this->estaLogueado()) { //Si hay COOKIE y no esta loguado
        $this->logueo($_COOKIE);
    }
  }


  public function logueo($usuario){

   $_SESSION['id'] = $usuario['id'];
   header('location: perfilDeUsuario.php');
   exit;
  }


  public function estaLogueado(){
    return isset($_SESSION['id']);
  }


}





 ?>
