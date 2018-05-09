<?php 
	
	require_once '../Modelo/DAO/UsuarioDAO.php';

	if(isset($_POST['tipo'])){

		if($_POST['tipo'] == 'listar'){
			$conductoresDAO = new UsuarioDAO();
			$array_usuario = $conductoresDAO->listarUsuarios();
			$html = "";
			if($array_usuario != 0){

				foreach ($array_usuario as $row) {
				$html .= '<tr>
							<td id="idUsuario">'.$row['idUsuario'].'</td>
							<td id="nombre1">'.$row['nombre1'].' </td>
							<td id="nombre2">'.$row['nombre2'].' </td>
							<td id="apellido1">'.$row['apellido1'].' </td>
							<td id="apellido2">'.$row['apellido2'].' </td>
							<td id="email">'.$row['email'].' </td>
				            <td id="codigo">'.$row['codigo'].' </td>
				            <td id="pass">'.$row['pass'].' </td>
				            <td id="roles_idroles">'.$row['roles_idroles'].' </td>
				            <td><a class="editar" href="#modal2"><i class="material-icons">edit</i></a><a class="borrar"><i class="material-icons">delete</i></a></td>
				          </tr>';
				
				}

				echo $html;
			}else{
				echo 'No hay datos';
			}
			

		}

		if($_POST['tipo'] == 'listarRoles'){
			$userDAO = new UsuarioDAO();
			$array = $userDAO->listarRoles();
			$html = " ";
			if($array != 0){

				$html = '<i class="material-icons prefix">account_circle</i>
					<select  id="selectRoles" required>
						<option value="" disabled selected>Escoje una opcion</option>';
				$contador = 1;
				foreach ($array as $row){
					$html .= '<option value="'.$row['idroles'].'">'.$row['role'].'</option>';
					$contador++;
				}

				$html .= '</select>
						  <label>Rol</label>';

				echo $html;
			}else{
				echo 'No hay datos';
			}
		}

		if($_POST['tipo'] == 'listarRolesEditar'){
			$userDAO = new UsuarioDAO();
			$array = $userDAO->listarRoles();
			$html = " ";
			if($array != 0){

				$html = '<i class="material-icons prefix">account_circle</i>
					<select  id="selectRolesEditar" required>
						<option value="" disabled selected>Escoje una opcion</option>';
				$contador = 1;
				foreach ($array as $row){
					$html .= '<option value="'.$row['idroles'].'">'.$row['role'].'</option>';
					$contador++;
				}

				$html .= '</select>
						  <label>Rol</label>';

				echo $html;
			}else{
				echo 'No hay datos';
			}
		}

		if($_POST['tipo'] == 'agregar'){
			$usuarioDAO = new UsuarioDAO();
			$nombre1 = $_POST['nombre1'];
			$nombre2 = $_POST['nombre2'];
			$apellido1 = $_POST['apellido1'];
			$apellido2 = $_POST['apellido2'];
			$email = $_POST['email'];
			$codigo = $_POST['codigo'];
			$pass = $_POST['pass'];
			$rol = $_POST['rol'];
			$errores = $usuarioDAO->crearUsuarios($nombre1,$nombre2,$apellido1,$apellido2,$email,$codigo,$pass,$rol);
			if($errores == 0){
				echo 'Error';
			}
		

		}
		
		if($_POST['tipo'] == 'eliminar'){
			$usuarioDAO = new UsuarioDAO();
			$idUsuario = $_POST['idUsuario'];
			$errores = $usuarioDAO->borrarUsuarios($idUsuario);
			if($errores == 0){
				echo 'Error';
			}
		

		}

		if($_POST['tipo'] == 'editar'){
			$usuarioDAO = new UsuarioDAO();
			$idUsuario = $_POST['idUsuario'];
			$nombre1Editar = $_POST['nombre1Editar'];
			$nombre2Editar = $_POST['nombre2Editar'];
			$apellido1Editar = $_POST['apellido1Editar'];
			$apellido2Editar = $_POST['apellido2Editar'];
			$emailEditar = $_POST['emailEditar'];
			$codigoEditar = $_POST['codigoEditar'];
			$passEditar = $_POST['passEditar'];
			$rolEditar = $_POST['rolEditar'];
			$errores = $usuarioDAO->editarUsuarios($idUsuario, $nombre1Editar,$nombre2Editar,$apellido1Editar,$apellido2Editar, $emailEditar, $codigoEditar,$passEditar,$rolEditar);
			if($errores == 0){
				echo 'Error';
			}
		

		}



	}


 ?>