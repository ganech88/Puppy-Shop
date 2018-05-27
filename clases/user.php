<?php

	class Usuario {
		private $id;
		private $nombre;
    private $apellido;
    private $number;
    private $direccion;
		private $email;
		private $password;
		private $foto;

// Cuando se llame a la clase usuario llama al Constructor.
//No agrego el ID porque la base de datos se encarga de él, se encarga de generarlo.
//Cada vez que yo haga NEW user, ésto es lo que él está esperando. Por eso escribo lo siguiente:

		public function __construct ($nombre, $apellido,$number,$direccion, $email, $password, $foto) {
			$this->nombre = $nombre;  //$this->nombre será igual a lo que me llegue por $nombre
      $this->apellido = $apellido;
      $this->number = $number;
      $this->direccion = $direccion;
			$this->email = $email;
			$this->password = $password;
			$this->foto = $foto;
		}
// como los atributos son PRIVATE, debo setearlos con los métodos setter y getter.
//Set, 'establece', le 'asigna' un valor inicial al atributo; mientras que get obtiene (return) el valor ya asignado a un atributo para utilizarlo para "x" método.

		public function crearUsuario(DB $db) {
			return [
				'id' => $db->traerUltimoID(),
				'nombre' => $this->nombre,
				'apellido' => $this->apellido,
				'number' => $this->number,
				'direccion' => $this->direccion,
				'email' => $this->email,
				'password' => $this->setPassword($this->password),
				'foto' => $this->foto
			];

		}

		public function setnombre($nombre) {
					$this->nombre = $nombre;
		}
		public function getNombre() {
					return $this->nombre;
		}
		public function setApellido($apellido) {
					$this->apellido = $apellido;
		}
		public function getApellido() {
					return $this->apellido;
		}
		public function getId() {
					return $this->id;
		}
		public function setId($id) {
					$this->id = $id;
		}
		public function setNumber($number) {
					$this->number = $number;
		}
		public function getNumber() {
					return $this->number;
		}
		public function setDireccion($direccion) {
					$this->direccion = $direccion;
		}
		public function getDireccion() {
					return $this->direccion;
		}
		public function getEmail() {
					return $this->email;
		}
		public function setEmail($email) {
					$this->email = $email;
 		}
		public function getPassword() {
					return $this->password;
		}
		public function setPassword($password) {
					return password_hash($password, PASSWORD_DEFAULT);
		}
//si lo hacemos más arriba, se va a hashear varias veces y el usuario no va a poder entrar.

//no hacemos un setFoto, xq en este punto no quiero cambiarle la img al usuario.

		public function getFoto() {
			return $this->foto;
		}



 ?>
