<?php 
	
	require_once '../Modelo/DAO/RolesDAO.php';

	if(isset($_POST['tipo'])){

		if($_POST['tipo'] == 'listar'){
			$rolesDAO = new RolesDAO();
			$array_rol = $rolesDAO->listarRoles();
			$html = "";
			if($array_rol != 0){

				foreach ($array_rol as $row) {
				$html .= '<tr>
							<td id="idroles">'.$row['idroles'].'</td>
				            <td id="rol">'.$row['role'].' </td>
				            <td><a class="editar" href="#modal2"><i class="material-icons">edit</i></a><a class="borrar"><i class="material-icons">delete</i></a></td>
				          </tr>';
				
				}

				echo $html;
			}else{
				echo 'No hay datos';
			}
			

		}

		if($_POST['tipo'] == 'agregar'){
			$rolesDAO = new RolesDAO();
			$rol = $_POST['rol'];
			$errores = $rolesDAO->crearRoles($rol);
			if($errores == 0){
				echo 'Error';
			}
		

		}

		if($_POST['tipo'] == 'eliminar'){
			$rolesDAO = new RolesDAO();
			$idroles = $_POST['idroles'];
			$errores = $rolesDAO->borrarRoles($idroles);
			if($errores == 0){
				echo 'Error';
			}
		

		}

		if($_POST['tipo'] == 'editar'){
			$rolesDAO = new RolesDAO();
			$idroles = $_POST['idroles'];
			$rolEditar = $_POST['rolEditar'];
			$errores = $rolesDAO->editarRoles($idroles, $rolEditar);
			if($errores == 0){
				echo 'Error';
			}
		

		}



	}


 ?>