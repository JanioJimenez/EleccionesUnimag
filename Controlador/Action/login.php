<?php

require ("../../Modelo/DAO/UsuarioDAO.php");

	if(isset($_POST['usuario'])){
		$username = $_POST['usuario'];
		$password = $_POST['clave'];

		$usuarioDAO = new UsuarioDAO();
		$usuarios = $usuarioDAO->Login($username,$password);

		if($usuarios == 0){
			echo "<h2>Error de usuario o contraseña!</h2>";
			echo "<h3><a href='/eleccionesUnimag/'>Volver a Intentarlo</a></h3>";

		}else{

			session_start();

			foreach ($usuarios as $u) {
				$fila=$u;		
			};

			if($fila['roles_idroles']== '1'){
				$_SESSION['usuario'] = 'administrador';
				header("Location:../../Vista/Usuarios/usuarios.php");
			}else if($fila['roles_idroles']== '2'){
				$_SESSION['usuario'] = 'Jurado';
				header("Location:../../Vista/listaVotante.html");
			}else if($fila['roles_idroles'] == '3')	{
                $_SESSION['usuario'] = 'Usuario';
				header("Location:../../Vista/eleccion.php");
				header("Location:../../Vista/organos/tarjetonAcademico.php");
            }	
		
					

		}

	}

?>