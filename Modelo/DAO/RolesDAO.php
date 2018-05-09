<?php 

	include 'Conexion.php';

	class RolesDAO extends Conexion{

		public function RolesDAO(){
			$this->db=parent::Conexion();
		}



		public function listarRoles(){
			$sql = "SELECT * FROM roles";
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

		public function editarRoles($idRoles,$rol){
			try{
				$sql = "UPDATE roles SET role = ? WHERE idroles = ?";
				$consulta = $this->db->prepare($sql);
				$resultado = $consulta->execute(array($rol,$idRoles));
				return 1;
			}catch (PDOException $e){
				return 0;
			}

			$consulta->closeCursor();

		}

		public function borrarRoles($idRoles){
			try{
				$sql = "DELETE FROM roles WHERE idroles = ?";
				$consulta = $this->db->prepare($sql);
				$resultado = $consulta->execute(array($idRoles));
				return 1;
			}catch (PDOException $e){
				return 0;
			}

			$consulta->closeCursor();

		}

		public function crearRoles($role){
			try{
				$sql = "INSERT INTO roles VALUES(NULL,?)";
				$consulta = $this->db->prepare($sql);
				$resultado = $consulta->execute(array($role));
				return 1;
			}catch (PDOException $e){
				return 0;
			}

			$consulta->closeCursor();

		}





	}

 ?>