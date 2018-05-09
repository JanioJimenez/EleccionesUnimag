<?php 
	
	require_once '../Modelo/DAO/ProgramaDAO.php';

	if(isset($_POST['tipo'])){

		if($_POST['tipo'] == 'listar'){
			$ProgramaDAO = new ProgramaDAO();
			$array_Programa = $ProgramaDAO->listarPrograma();
			$html = "";
			if($array_Programa != 0){

				foreach ($array_Programa as $row) {
				$html .= '<tr>
							<td id="idPrograma">'.$row['idPrograma'].'</td>
				            <td id="nombre">'.$row['nombre'].' </td>
				            <td id="facultad_id">'.$row['facultad_id'].' </td>
				            <td><a class="editar" href="#modal2"><i class="material-icons">edit</i></a><a class="borrar"><i class="material-icons">delete</i></a></td>
				          </tr>';
				
				}

				echo $html;
			}else{
				echo 'No hay datos';
			}
			

		}

		if($_POST['tipo'] == 'listarPrograma'){
			$programaDAO = new ProgramaDAO();
			$array = $programaDAO->listarFacultad ();
			$html = " ";
			if($array != 0){

				$html = '<i class="material-icons prefix">account_circle</i>
					<select  id="selectFacultad" required>
						<option value="" disabled selected>Escoje una opcion</option>';
				$contador = 1;
				foreach ($array as $row){
					$html .= '<option value="'.$row['id'].'">'.$row['nombre'].'</option>';
					$contador++;
				}

				$html .= '</select>
						  <label>Facultades</label>';

				echo $html;
			}else{
				echo 'No hay datos';
			}
		}

		if($_POST['tipo'] == 'listarFacultadEditar'){
			$programaDAO = new ProgramaDAO();
			$array = $programaDAO->listarFacultad();
            $html = " ";
            $idFac = $_POST['idFac'];
			if($array != 0){

				$html = '<i class="material-icons prefix">account_circle</i>
					<select  id="selectFacultadEditar" required>';
						//<option value="" disabled selected>Escoje una opcion</option>;
                $contador = 1;
                switch($idFac){
                    case 1:
                        $html .= '<option value="'.$idFac.'">Ciencias Basicas</option>';
                        break;
                    case 2:
                        $html .= '<option value="'.$idFac.'">Ciencias de la salud</option>';
                        break;
                    case 3:
                        $html .= '<option value="'.$idFac.'">Ciencias Empresariales y economicas</option>';
                        break;
                    case 4:
                        $html .= '<option value="'.$idFac.'">Humanidades</option>';
                        break;
                    case 5:
                        $html .= '<option value="'.$idFac.'">Ingenieria</option>';
                        break;
                    default:
                        break;
                }
				foreach ($array as $row){
					$html .= '<option value="'.$row['id'].'">'.$row['nombre'].'</option>';
					$contador++;
				}

				$html .= '</select>
						  <label>Facultades</label>';

				echo $html;
			}else{
				echo 'No hay datos';
			}
		}

		if($_POST['tipo'] == 'agregar'){
			$programaDAO = new ProgramaDAO();
			$nombre = $_POST['nombre'];
			$facultad = $_POST['facultad'];
			$errores = $programaDAO->crearPrograma($nombre, $facultad);
			if($errores == 0){
				echo 'Error';
			}
		

		}

		if($_POST['tipo'] == 'eliminar'){
			$programaDAO = new ProgramaDAO();
			$idPrograma = $_POST['idPrograma'];
			$errores = $programaDAO->borrarPrograma($idPrograma);
			if($errores == 0){
				echo 'Error';
			}
		

		}

		if($_POST['tipo'] == 'editar'){
			$programaDAO = new ProgramaDAO();
			$idPrograma = $_POST['idPrograma'];
			$nombreEditar = $_POST['nombreEditar'];
			$facultadEditar = $_POST['facultadEditar'];
			$errores = $programaDAO->editarPrograma($idPrograma, $nombreEditar, $facultadEditar);
			if($errores == 0){
				echo 'Error';
			}
		

		}



	}


 ?>