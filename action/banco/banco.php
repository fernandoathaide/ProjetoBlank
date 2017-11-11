<?php	
	class Banco{
		private $con;
		public function getConexao(){	
			try {
				$con = new PDO('mysql:host=localhost:3306;dbname=db_blank','root','senac');
				$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$con->exec("set names utf8");
				return $con;
			}catch(PDOException $e) {	
				header("location: ../index.php?msn=b");
			}
		}
	}
?>


