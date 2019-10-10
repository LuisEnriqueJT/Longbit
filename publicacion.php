<?php
	require 'php/Funciones.php';

	$obj = new Funciones();
	/*Obtener registros, la variable $publicaciones recibe 
	las publicaciones almacenadas en el return de la funcion 
	getPublicaciones() en php/Funciones.php*/
	$publicacion = $obj->getPublicacion($_GET['blog_id']);
	//echo '<pre>',print_r($publicaciones),'</pre>';
	//exit();

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title><?php echo $publicacion['titulo'];?></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Turret+Road&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css">

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
		<h2 class="p-3"><?php echo $publicacion['titulo'];?></h2>
			<div class="row">
				<div class="col-lg-12">
					<?php echo $publicacion['contenido'];?>
					<p>Publicado por: <strong><?php echo $publicacion['usuario']; ?><strong></p>
				</div>
			</div>
	</div>

<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>