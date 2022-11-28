<?php 
	session_start();
	require_once "../../clases/Conexion.php";
	require_once "../../clases/Usuarios.php";

	$obj= new usuarios();

	//Recibe los datos del formulario index
	$datos=array(

	$_POST['usuario'],
	$_POST['password']
	);

	
	//Manda a llamar la función loginUser
	echo $obj->loginUser($datos);

 ?>