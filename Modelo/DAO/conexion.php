<?php 

	
   	class Conexion{

		protected $db;

		public function Conexion(){
			try{
				$this->db= new PDO('mysql:host=localhost; dbname=bd_elecciones','root','');
				$this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				$this->db->exec('SET CHARACTER SET utf8');
				//echo 'EXITO!!';
				return $this->db;
			}catch(Exception $e){
				echo 'ERROR EN LA LINEA'. $this->e->getLine();
			}
		}
	}



    /*
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bd_elecciones";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    */
?>