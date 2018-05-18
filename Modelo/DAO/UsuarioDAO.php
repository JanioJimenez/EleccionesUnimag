<?php 

	include 'conexion.php';

	class UsuarioDAO extends Conexion{

		public function UsuarioDAO(){
			$this->db=parent::Conexion();
		}

		public function Login($username,$password){
			$sql = "SELECT * FROM usuario WHERE codigo=? AND pass=?";
			$consulta = $this->db->prepare($sql);
			$resultado = $consulta->execute(array($username,$password));
			$usuarios = $consulta->fetchall(PDO::FETCH_ASSOC);

			if($usuarios == true){
				return $usuarios;
			}else{
				return 0;
			}

			$consulta->closeCursor();

		}

		public function listarUsuarios(){
			$sql = "SELECT * FROM usuario";
			$consulta = $this->db->prepare($sql);
			$resultado = $consulta->execute();
			$usuar = $consulta->fetchall(PDO::FETCH_ASSOC);

			if($usuar == true){
				return $usuar;
			}else{
				return 0;
			}

			$consulta->closeCursor();

		}

		public function listarRoles(){
			$sql = "SELECT * FROM rol";
			$consulta = $this->db->prepare($sql);
			$resultado = $consulta->execute();
			$usuar = $consulta->fetchall(PDO::FETCH_ASSOC);

			if($usuar == true){
				return $usuar;
			}else{
				return 0;
			}

			$consulta->closeCursor();

		}

		public function editarUsuarios($id,$nombre,$apellido,$codigo,$pass,$idRol,$idEstado,$idMesa,$idFacultad){
			try{
				$sql = "UPDATE usuario SET nombre = ? apellido = ?, codigo = ?, pass = ?, idRol = ?, idEstado = ?, idMesa = ?, idFacultad = ? WHERE idUsuario = ?";
				$consulta = $this->db->prepare($sql);
				$resultado = $consulta->execute(array($nombre,$apellido,$codigo,$pass,$idRol,$idEstado,$idMesa,$idFacultad,$id));
				return 1;
			}catch (PDOException $e){
				return 0;
			}

			$consulta->closeCursor();

		}

		public function borrarUsuarios($id){
			try{
				$sql = "DELETE FROM usuario WHERE id = ?";
				$consulta = $this->db->prepare($sql);
				$resultado = $consulta->execute(array($id));
				return 1;
			}catch (PDOException $e){
				return 0;
			}

			$consulta->closeCursor();

		}

		public function crearUsuarios($nombre,$apellido,$codigo,$pass,$idRol,$idEstado,$idMesa,$idFacultad){
			try{
				$sql = "INSERT INTO usuario VALUES(NULL,?,?,?,?,?,?,?,?)";
				$consulta = $this->db->prepare($sql);
				$resultado = $consulta->execute(array($nombre,$apellido,$codigo,$pass,$idRol,$idEstado,$idMesa,$idFacultad));
				return 1;
			}catch (PDOException $e){
				return 0;
			}

			$consulta->closeCursor();

		}

	}

 ?>