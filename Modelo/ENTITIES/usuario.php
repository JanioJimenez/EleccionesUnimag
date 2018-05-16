<?php 
	class Usuario {
		private $rol;
		private $id;
		private $nombre;
		private $apellido;
		private $email;
		private $pass;
		private $candidato;

		public function __construct(){}

		public function getRol() {
			return $this->rol;
		}

		public function setRol($rol) {
			$this->rol = $rol;
		}

		public function getId() {
			return $this->id;
		}

		public function setId($id) {
			$this->id = $id;
		}

		public function getNombre() {
			return $this->nombre;
		}

		public function setNombre($nombre) {
			$this->nombre = $nombre;
		}

		public function getApellido() {
			return $this->apellido;
		}

		public function setApellido($apellido) {
			$this->apellido = $apellido;
		}

		public function getEmail() {
			return $this->email;
		}

		public function setEmail($email) {
			$this->email = $email;
		}

		public function getPass() {
			return $this->pass;
		}

		public function setPass($pass) {
			$this->pass = $pass;
		}

		public function getCandidato() {
			return $this->candidato;
		}

		public function setCandidato($candidato) {
			$this->candidato = $candidato;
		}
	}
?>