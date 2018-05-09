<?php 

	include 'Conexion.php';

	class FacultadDAO extends Conexion{

		public function FacultadDAO(){
			$this->db=parent::Conexion();
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

		public function editarFacultad($id, $nombre){
			try{
				$sql = "UPDATE facultad SET nombre = ? WHERE id = ?";
				$consulta = $this->db->prepare($sql);
				$resultado = $consulta->execute(array($nombre,$id));
				return 1;
			}catch (PDOException $e){
				return 0;
			}

			$consulta->closeCursor();

		}

		public function borrarFacultad($id){
			try{
				$sql = "DELETE FROM facultad WHERE id = ?";
				$consulta = $this->db->prepare($sql);
				$resultado = $consulta->execute(array($id));
				return 1;
			}catch (PDOException $e){
				return 0;
			}

			$consulta->closeCursor();

		}

		public function crearFacultad($nombre){
			try{
				$sql = "INSERT INTO facultad VALUES(NULL,?)";
				$consulta = $this->db->prepare($sql);
				$resultado = $consulta->execute(array($nombre));
				return 1;
			}catch (PDOException $e){
				return 0;
			}

			$consulta->closeCursor();

		}





	}

 ?>