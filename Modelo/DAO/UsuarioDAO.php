<?php 

	include 'conexion.php';

	class UsuarioDAO extends Conexion{

		public function UsuarioDAO(){
			$this->db=parent::Conexion();
		}

		public function Login($username,$password){
			$sql = "SELECT * FROM usuarios WHERE codigo=? AND pass=?";
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
			$sql = "SELECT * FROM usuarios";
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
			$sql = "SELECT * FROM roles";
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

		public function editarUsuarios($idUsuario,$nombre1,$nombre2,$apellido1,$apellido2,$email,$codigo,$pass,$rol){
			try{
				$sql = "UPDATE usuarios SET nombre1 = ?, nombre2 = ?, apellido1=?, apellido2=?, email=?, codigo= ?, pass = ?, roles_idroles = ? WHERE idUsuario = ?";
				$consulta = $this->db->prepare($sql);
				$resultado = $consulta->execute(array($nombre1,$nombre2,$apellido1,$apellido2,$email ,$codigo,$pass,$rol,$idUsuario));
				return 1;
			}catch (PDOException $e){
				return 0;
			}

			$consulta->closeCursor();

		}

		public function borrarUsuarios($idUsuario){
			try{
				$sql = "DELETE FROM usuarios WHERE idUsuario = ?";
				$consulta = $this->db->prepare($sql);
				$resultado = $consulta->execute(array($idUsuario));
				return 1;
			}catch (PDOException $e){
				return 0;
			}

			$consulta->closeCursor();

		}

		public function crearUsuarios($nombre1,$nombre2,$apellido1,$apellido2,$email,$codigo,$pass,$rol){
			try{
				$sql = "INSERT INTO usuarios VALUES(NULL,?,?,?,?,?,?,?,?)";
				$consulta = $this->db->prepare($sql);
				$resultado = $consulta->execute(array($nombre1,$nombre2,$apellido1,$apellido2,$email,$codigo,$pass,$rol));
				return 1;
			}catch (PDOException $e){
				return 0;
			}

			$consulta->closeCursor();

		}

	}

 ?>