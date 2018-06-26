<?php

include 'Models/bd.php';
    
$usuarios = mysqli_query($connection, "SELECT * FROM usuarios");
$datos = $usuarios -> fetch_all();

//echo json_encode($datos);

$connection->close();
?>