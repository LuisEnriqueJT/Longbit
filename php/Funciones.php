<?php
	require 'init.php';

	class Funciones{
		
		public function getPublicaciones(){
			global $pdo;

			$query = $pdo->prepare("SELECT * FROM blog");
			$query->execute();

			return $query->fecthALL();
		}
				
	}
?>