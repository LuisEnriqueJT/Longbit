<?php
	try{
		$pdo = new PDO('mysql:host=localhost;dbname=cms','root','');
	}catch (PDOException $e){
		echo "No se pudo conectar a la BD".$e;
	}
?>