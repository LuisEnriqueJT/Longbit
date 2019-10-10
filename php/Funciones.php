<?php
	require 'init.php';

	class Funciones{
		
		//Para seleccionar los registros de una tabla
		public function getPublicaciones(){
			global $pdo;

			$query = $pdo->prepare("SELECT * FROM blog");
			$query->execute();

			return $query->fetchALL();
		}

	}
?>