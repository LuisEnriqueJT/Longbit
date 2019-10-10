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

		public function getPublicacion($blog_id){
			global $pdo;

			$query = $pdo->prepare("
				SELECT 
				blog.*,
				admins.usuario 
				FROM blog 

				INNER JOIN admins 
				ON blog.admin_id = admins.admin_id 

				WHERE blog_id = :blog_id
			");

			$query->execute(['blog_id'=>$blog_id]);

			return $query->fetch();
		}

		public function logIn($user, $pass){
			global $pdo;

			$query=$pdo->prepare("
				SELECT *
				FROM admins
				WHERE usuario = :user AND pass = :pass
			");

			$query->execute([
				'user'=>$user,
				'pass'=>$pass
			]);

			return $query->fetch();
		}
	}
?>