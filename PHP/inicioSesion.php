<?php

include("conexion.php");

$u = $_POST['usuariolg'];
$p = $_POST['passlg'];

$usuarios = mysqli_query($con, "SELECT username, password, activo, role FROM Usuarios WHERE username = '".$u."' AND password = '".$p."'");

if($usuarios->num_rows == 1){
	$datos = $usuarios->fetch_assoc();
	echo json_encode(array('Error' => false, 'tipo' => $datos['role']));
} else {
	echo json_encode(array('Error' => true));
}

$con->close();
?>