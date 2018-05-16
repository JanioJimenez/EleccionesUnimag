<?php 
	class Candidato 
	{
		private $idUsuario;
		private $idFoto;
		private $voto;
		private $idModalidad;

		function __construct(){}

		public function getIdUsuario(){
			return $this->idUsuario;
		}

		public function setIdUsuario($idUsuario) {
			$this->idUsuario = $idUsuario;
		}

		public function getFoto(){
			return $this->foto;
		}

		public function setFoto($foto) {
			$this->foto = $foto;
		}

		public function getVoto() {
			return $this->$voto;
		}

		public function setVoto($voto) {
			$this->voto = $voto;
		}

		public function getIdModalidad() {
			return $this->$idModalidad;
		}

		public function setIdModalidad($idModalidad) {
			$this->idModalidad = $idModalidad;
		}
	}
?>