<?php 
	class Estado
	{
		private $idEstado;
		private $descripcion;

		public function __construct() {}

		public function getIdEstado() {
			return $this->$idEstado;
		}

		public function setIdEstado($idEstado) {
			$this->idEstado = $idEstado;
		}

		public function getDescripcion() {
			return $this->$descripcion;
		}

		public function setDescripcion($descripcion) {
			$this->descripcion = $descripcion;
		}
	}
 ?>