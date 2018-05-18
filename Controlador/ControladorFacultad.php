<?php 
	
	require_once '../Modelo/DAO/FacultadDAO.php';

	if(isset($_POST['tipo'])){

		if($_POST['tipo'] == 'listar'){
			$facultadDAO = new FacultadDAO();
			$array_facultad = $facultadDAO->listarFacultad();
			$html = "";
			if($array_facultad != 0){

				foreach ($array_facultad as $row) {
				$html .= '<tr>
							<td id="idFacultad">'.$row['idFacultad'].'</td>
				            <td><a class="editar" href="#modal2"><i class="material-icons">edit</i></a><a class="borrar"><i class="material-icons">delete</i></a></td>
				          </tr>';
				
				}

				echo $html;
			}else{
				echo 'No hay datos';
			}
			

		}

		if($_POST['tipo'] == 'agregar'){
			$facultadDAO = new FacultadDAO();
			$facultad = $_POST['idFacultad'];
			$errores = $facultadDAO->crearFacultad($facultad);
			if($errores == 0){
				echo 'Error';
			}
		

		}

		if($_POST['tipo'] == 'eliminar'){
			$facultadDAO = new FacultadDAO();
			$id = $_POST['idFacultad'];
			$errores = $facultadDAO->borrarFacultad($id);
			if($errores == 0){
				echo 'Error';
			}
		

		}

		if($_POST['tipo'] == 'editar'){
			$facultadDAO = new FacultadDAO();
			$id = $_POST['idFacultad'];
			$nombreEditar = $_POST['nombreEditar'];
			$errores = $facultadDAO->editarFacultad($id, $nombreEditar);
			if($errores == 0){
				echo 'Error';
			}
		

		}



	}


 ?>