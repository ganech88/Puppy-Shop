<?php
  require_once 'db.php';

  class dbMYSQL extends DB {
    public function conexion(){
      $dsn = 'mysql:host=localhost; dbname=puppy_shop_db; port=3306; charset=utf8';
      $db_user = 'root';
      $db_pass = '';

      try {
        $db = new PDO($dsn, $db_user, $db_pass);
        return $db;
      } catch( PDOException $Exception ) {
        return false;
      }
    }
    public function existeEmail($email){

    }
    public function traerTodos(){
      $stmp = $this->conexion()->prepare("SELECT * FROM usuarios");
      $stmp->execute();
      $resultados = $stmp->fetchAll(PDO::FETCH_ASSOC);
      return $resultados;
    }
    public function guardarUsuario(User $usuario, DB $db){

    }
  }
