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

      $usuarios = $this->traerTodos(); //$usuarios es de tipo array

      foreach ($usuarios as $unUsuario) {
        if ($unUsuario->getEmail() == $email) {
          return $unUsuario;
        }
      }

       return false;
    }

    public function traerTodos(){
      $stmp = $this->conexion()->prepare("SELECT * FROM usuarios");
      $stmp->execute();
      $resultados = $stmp->fetchAll(PDO::FETCH_ASSOC);
      $finales = [];
      foreach ($resultados as $unUsuario) {
        $usuario = new User($unUsuario["nombre"], $unUsuario["apellido"], $unUsuario["telefono"], $unUsuario["domicilio"], $unUsuario["email"], $unUsuario["password"], $unUsuario["foto"]);
        $usuario->setId($unUsuario["id"]);
        $finales[] = $usuario;
      }
      return $finales; //$resultados es de tipo array, no es un objeto
    }

    public function guardarUsuario(User $usuario, DB $db){

      $usuarioCreado = $usuario->crearUsuario($db);

			$query = "INSERT INTO usuarios(nombre, apellido, telefono, domicilio, email, password, foto) VALUES (:nombre, :apellido, :telefono, :domicilio, :email, :password, :foto)";

      $stmp = $this->conexion()->prepare($query);

      $stmp->bindValue(':nombre', $usuarioCreado['nombre'], PDO::PARAM_STR);
      $stmp->bindValue(':apellido', $usuarioCreado['apellido'], PDO::PARAM_STR);
      $stmp->bindValue(':telefono', $usuarioCreado['number'], PDO::PARAM_INT);
      $stmp->bindValue(':domicilio', $usuarioCreado['direccion'], PDO::PARAM_STR);
      $stmp->bindValue(':email', $usuarioCreado['email'], PDO::PARAM_STR);
      $stmp->bindValue(':password', $usuarioCreado['password'], PDO::PARAM_STR);
      $stmp->bindValue(':foto', $usuarioCreado['foto'], PDO::PARAM_STR);

      $stmp->execute();

      return $usuarioCreado; //tipo Array
    }

    public function guardarImagen($laImagen){

      $errores = [];

      if($_FILES[$laImagen]['error'] == UPLOAD_ERR_OK){
        $nombreArchivo = $_FILES[$laImagen]['name'];
        $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
        $archivoFisico = $_FILES[$laImagen]['tmp_name'];

        if ($extension == 'jpg' || $extension == 'png' || $extension == 'jpeg') {
          $direFisica = dirname(__FILE__);
          $rutaFinal = $direFisica . '/../foto-perfil/' . $_POST['email'] . '.' . $extension;
          move_uploaded_file($archivoFisico, $rutaFinal);
        } else {
          $errores['foto'] = 'el formato no es correcto';
          }
      } else {
        $errores['foto'] = 'No se subió el archivo';
       }

     return $errores;
    }

    public function traerUltimoID(){
      $usuarios = $this->traerTodos();
      $id = count($usuarios);
      return $id + 1;
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
