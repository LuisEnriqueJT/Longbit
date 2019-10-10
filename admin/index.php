<?php
	session_start();
	require '../php/Funciones.php';

	$obj = new Funciones();

	if(isset($_POST['user'],$_POST['pass'])){
		//checar si el usuario existe
		$checar = $obj->LogIn($_POST['user'],$_POST['pass']);
		
		//echo print_r($checar);
		
		//INICIA SESION
		if($checar){
			$_SESSION['admin']=$checar['admin_id'];
			header('Location: publicacion.php');
		}
	}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Admin panel</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Turret+Road&display=swap" rel="stylesheet">

</head>
<body>
	
	<!--:::::::::::::::::::::::ENCABEZADO::::::::::::::::::::::::: -->
	<div class="container-fluid encabezado">
		<div class="row">
			<h1 class="pl-3 pt-2">LongBit</h1>
		</div>
		<div>
			<h4 class="pl-4">Sistema de gestion de contenidos</h4>
		</div>
	</div>
	<!--::::::::::::::::::::::FIN ENCABEZADO:::::::::::::::::::::::-->

	<div class="container cuerpo">
		<h2 class="p-3">Admin panel</h2>
		<form action="" method="post">
			<input type="text" placeholder="User" name="user" class="form-control" />
			<br>
			<input type="password" placeholder="Password" name="pass" class="form-control" />
			<input type="submit" value="Iniciar Sesion" class="btn btn-info pull-right" style="margin-top: 20px;">
		</form>
	</div>

<script src="../js/jquery-3.3.1.slim.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>