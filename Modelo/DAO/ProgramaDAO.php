<?php 

	include 'Conexion.php';

	class ProgramaDAO extends Conexion{

		public function ProgramaDAO(){
			$this->db=parent::Conexion();
		}

		public function listarPrograma(){
			$sql = "SELECT * FROM programa";
			$consulta = $this->db->prepare($sql);
			$resultado = $consulta->execute();
			$programa = $consulta->fetchall(PDO::FETCH_ASSOC);

			if($programa == true){
				return $programa;
			}else{
				return 0;
			}

			$consulta->closeCursor();

		}

		public function listarFacultad(){
			$sql = "SELECT * FROM facultad";
			$consulta = $this->db->prepare($sql);
			$resultado = $consulta->execute();
			$facultad = $consulta->fetchall(PDO::FETCH_ASSOC);

			if($facultad == true){
				return $facultad;
			}else{
				return 0;
			}

			$consulta->closeCursor();

		}

		public function editarPrograma($idPrograma,$nombre,$facultad){
			try{
				$sql = "UPDATE programa SET nombre = ?, facultad_id = ? WHERE idPrograma = ?";
				$consulta = $this->db->prepare($sql);
				$resultado = $consulta->execute(array($nombre,$facultad,$idPrograma));
				return 1;
			}catch (PDOException $e){
				return 0;
			}

			$consulta->closeCursor();

		}

		public function borrarPrograma($idPrograma){
			try{
				$sql = "DELETE FROM programa WHERE idPrograma = ?";
				$consulta = $this->db->prepare($sql);
				$resultado = $consulta->execute(array($idPrograma));
				return 1;
			}catch (PDOException $e){
				return 0;
			}

			$consulta->closeCursor();

		}

		public function crearPrograma($nombre,$facultad){
			try{
				$sql = "INSERT INTO programa VALUES(NULL,?,?)";
				$consulta = $this->db->prepare($sql);
				$resultado = $consulta->execute(array($nombre,$facultad));
				return 1;
			}catch (PDOException $e){
				return 0;
			}

			$consulta->closeCursor();

		}

	}

 ?>