<?php

$email = $_POST['email'];
$username = $_POST['usuario'];
$password = $_POST['contra'];

//Arreglos a usar
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

//Generando respuesta
if(empty($errores)) {
	$con = mysqli_connect("localhost", "root", "", "DOBLETURNO");
	$result = mysqli_query($con, "INSERT Usuarios(email, username, password, activo, role) VALUES('".$email."', '".$username."', '".$password."', '1', 'usuario')");
	$datos['exito'] = true;
	$datos['mensaje'] = 'El registro se ha realizado correctamente.';
} else {
	$datos['exito'] = false;
	$datos['errores'] = $errores;
}

//Dar respuesta
echo json_encode($datos);

?>