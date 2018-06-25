<?php

include 'Models/bd.php';

$email = $_POST['email'];
$username = $_POST['usuario'];
$password = $_POST['contra'];
$rol = $_POST['rol'];

//Array a usar
$errores = array();
$datos = array();

//Validamos los parametros
if (empty($_POST['email'])) {
	$errores['email'] = 'Se requiere especificar un email'; 
} else {
	$email = $_POST['email'];
}

if (empty($_POST['usuario'])) {
	$errores['usuario'] = 'Se requiere especificar un nombre de usuario'; 
} else {
	$username = $_POST['usuario'];
}

if (empty($_POST['contra'])) {
	$errores['contra'] = 'Establezca una contraseña'; 
} else {
	$password = $_POST['contra'];
}

if (empty($_POST['rol'])) {
	$errores['rol'] = 'Rol desconocido'; 
} else {
	$rol = $_POST['rol'];
}

//Generando respuesta
if(empty($errores)) {
	$result = mysqli_query($con, "INSERT INTO usuarios (email, username, password, activo, role) VALUES('".$email."', '".$username."', '".$password."', 1, '".$rol."')");
	$datos['exito'] = true;
	$datos['mensaje'] = 'El registro se ha realizado correctamente.';
} else {
	$datos['exito'] = false;
	$datos['errores'] = $errores;
}

//Dar respuesta
echo json_encode($datos);

?>