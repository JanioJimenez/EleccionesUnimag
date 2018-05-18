<?php 

	include 'Conexion.php';

	class RolesDAO extends Conexion{

		public function RolesDAO(){
			$this->db=parent::Conexion();
		}



		public function listarRoles(){
			$sql = "SELECT * FROM rol";
			$consulta = $this->db->prepare($sql);
			$resultado = $consulta->execute();
			$rol = $consulta->fetchall(PDO::FETCH_ASSOC);

			if($rol == true){
				return $rol;
			}else{
				return 0;
			}

			$consulta->closeCursor();

		}

		public function editarRoles($idRol,$descripcion){
			try{
				$sql = "UPDATE rol SET descripcion = ? WHERE idRol = ?";
				$consulta = $this->db->prepare($sql);
				$resultado = $consulta->execute(array($descripcion,$idRol));
				return 1;
			}catch (PDOException $e){
				return 0;
			}

			$consulta->closeCursor();

		}

		public function borrarRoles($idRol){
			try{
				$sql = "DELETE FROM rol WHERE idRol = ?";
				$consulta = $this->db->prepare($sql);
				$resultado = $consulta->execute(array($idRol));
				return 1;
			}catch (PDOException $e){
				return 0;
			}

			$consulta->closeCursor();

		}

		public function crearRoles($idRol){
			try{
				$sql = "INSERT INTO idRol VALUES(?,NULL)";
				$consulta = $this->db->prepare($sql);
				$resultado = $consulta->execute(array($idRol));
				return 1;
			}catch (PDOException $e){
				return 0;
			}

			$consulta->closeCursor();

		}





	}

 ?>