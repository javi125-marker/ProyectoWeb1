<?php

require_once "clases/Conexion.php";
$obj = new conectar();
$conexion = $obj->conexion();

$sql = "SELECT * FROM usuarios WHERE email='admin'";
$result = mysqli_query($conexion, $sql);
$validar = 0;
if (mysqli_num_rows($result) > 0) {
	$validar = 1;
}
?>


<!DOCTYPE html>
<html>

<head>
	<link href="./librerias/login/stylesLogin.css" rel="stylesheet">
	<script src="librerias/jquery-3.2.1.min.js"></script>
	<script src="js/funciones.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<title>Login</title>
</head>

<body>
	<div class="sidenav">
		<div class="login-main-text">
			<h2>THOTH<br> TECH STORE</h2>
			<p>Login to access.</p>
			<p>Por cuestiones academicas</p>
			<p>Usuario: admin</p>
			<p>Password: admin</p>
		</div>
	</div>
	<div class="main">
		<div class="col-md-6 col-sm-12">
			<div class="login-form">
				<form id="frmLogin">
					<div class="form-group">
						<label class="text-white">Usuario</label>
						<input type="text" class="form-control input-sm" placeholder="Usuario" name="usuario" id="usuario">
					</div>
					<div class="form-group">
						<label class="text-white">Contraseña</label>
						<input type="password" name="password" id="password" class="form-control" placeholder="Contraseña">
					</div>
					<p></p>
					<span class="btn btn-primary btn-sm" id="entrarSistema">Ingresar</span>

					<!--Validamos si el usuario es el correcto-->
					<?php if (!$validar) :  ?>
						<a href="registro.php" class="btn btn-danger">Registar</a>
					<?php endif; ?>
				</form>
			</div>
		</div>
	<div class="col-sm-4"></div>
</body>

</html>

<!--Validación de ingreso del usuario al sistema-->
<script type="text/javascript">
	$(document).ready(function() {
		$('#entrarSistema').click(function() {

			vacios = validarFormVacio('frmLogin');

			if (vacios > 0) {
				alert("Debes llenar todos los campos!!");
				return false;
			}

			datos = $('#frmLogin').serialize();
			$.ajax({
				type: "POST",
				data: datos,
				url: "procesos/regLogin/login.php",
				success: function(r) {

					if (r == 1) {
						window.location = "vistas/inicio.php";
					} else {
						alert("No es posible iniciar sesión  :(");
					}
				}
			});
		});
	});
</script>