<?php
	session_start();

	//checa si la sesione esta iniciada
	if (isset($_SESSION['admin'])){
		require '../php/Funciones.php';
		$obj = new Funciones();

		if (isset($_POST['titulo'], $_POST['contenido'],$_SESSION['admin'])) {
			$subir = $obj->subirPublicacion($_POST['titulo'], $_POST['contenido'],$_SESSION['admin']);

			if($subir == true){
				echo '<span class="alert alert-success">Articulo dado de alta</span>';
			}
		}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Subir Nueva Publicacion</title>
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
	<div class="container">
		<form action="" method="post">
			<h2>Nueva publicacion</h2>
			<input type="text" name="titulo" placeholder="titulo" class="form-control" />
			<br>
			<textarea name="contenido" cols="30" rows="10" class="form-control" placeholder="contenido"></textarea>
			<input type="submit" class="btn btn-info pull-right" value="Subir">
		</form>
	</div>
</body>
</html>

<?php }else{ header('Location: index.php');} ?>