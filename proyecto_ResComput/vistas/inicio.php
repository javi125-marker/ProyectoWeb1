<?php 
	session_start();
	if(isset($_SESSION['usuario'])){
		
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<?php require_once "menu.php"; ?>
	<link rel="stylesheet" type="text/css" href= "../css/estilo-fondoimg.css">
</head>
<body>

	<div class="contenedor-principal">
		
	</div>

</body>
</html>
<?php 
	}else{
		header("location:../index.php");
	}
 ?>