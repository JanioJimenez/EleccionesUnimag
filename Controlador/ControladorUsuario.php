<?php 
	
	require_once '../Modelo/DAO/UsuarioDAO.php';

	if(isset($_POST['tipo'])){

		if($_POST['tipo'] == 'listar'){
			$usuarioDAO = new UsuarioDAO();
			$array_usuario = $usuarioDAO->listarUsuarios();
			$html = "";
			if($array_usuario != 0){

				foreach ($array_usuario as $row) {
				$html .= '<tr>
							<td id="id">'.$row['id'].'</td>
							<td id="nombre">'.$row['nombre'].' </td>
							<td id="apellido">'.$row['apellido'].' </td>
				            <td id="codigo">'.$row['codigo'].' </td>
				            <td id="pass">'.$row['pass'].' </td>
							<td id="idRol">'.$row['idRol'].' </td>
							<td id="idEstado">'.$row['idEstado'].' </td>
							<td id="idMesa">'.$row['idMesa'].' </td>
							<td id="idFacultad">'.$row['idFacultad'].' </td>
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
					$html .= '<option value="'.$row['idRol'].'">'.$row['descripcion'].'</option>';
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
					$html .= '<option value="'.$row['idRol'].'">'.$row['descripcion'].'</option>';
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
			$nombre = $_POST['nombre'];
			$apellido = $_POST['apellido'];
			$codigo = $_POST['codigo'];
			$pass = $_POST['pass'];
			$idRol = $_POST['idRol'];
			$idEstado = $_POST['idEstado'];
			$idMesa = $_POST['idMesa'];
			$idFacultad = $_POST['idFacultad'];
			
			$errores = $usuarioDAO->crearUsuarios($nombre,$apellido,$codigo,$pass,$idRol,$idEstado,$idMesa,$idFacultad);
			if($errores == 0){
				echo 'Error';
			}
		

		}
		
		if($_POST['tipo'] == 'eliminar'){
			$usuarioDAO = new UsuarioDAO();
			$idUsuario = $_POST['id'];
			$errores = $usuarioDAO->borrarUsuarios($id);
			if($errores == 0){
				echo 'Error';
			}
		

		}

		if($_POST['tipo'] == 'editar'){
			$usuarioDAO = new UsuarioDAO();
			$idUsuario = $_POST['idUsuario'];
			$nombreEditar = $_POST['nombreEditar'];
			$apellidoEditar = $_POST['apellidoEditar'];
			$codigoEditar = $_POST['codigoEditar'];
			$passEditar = $_POST['passEditar'];
			$idRolEditar = $_POST['idRolEditar'];
			$idEstadoEditar = $_POST['idEstadoEditar'];
			$idMesaEditar = $_POST['idMesaEditar'];
			$idFacultadEditar = $_POST['idFacultadEditar'];
			$errores = $usuarioDAO->editarUsuarios($id, $nombreEditar,$apellidoEditar,$codigoEditar,$passEditar,$idRolEditar,$idEstadoEditar,$idMesaEditar,$idFacultadEditar);
			if($errores == 0){
				echo 'Error';
			}
		

		}



	}


 ?>