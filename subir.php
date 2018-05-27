<?php

  isset($_POST){
    guardarArchivo();

  }


  function guardarArchivo(){
    if($_FILES["archivo"]["error"] ===  UPLOAD_ERR_OK){
      $nombre = $_FILES["archivo"]["name"];
      $archivo = $_FILES["archivo"]["temp_name"];
      $ext = pathinfo($nombre, PATHINFO_EXTENSION);

      $miArchivo = dirname(__FILE__);
      $miArchivo = $miArchivo . "/foto-perfil/" . $nombre . $exit;

      move_uploaded_file($archivo, $miArchivo);

      $seSubio = "El archivo se subió correctamente";
    }
  }












 ?>
