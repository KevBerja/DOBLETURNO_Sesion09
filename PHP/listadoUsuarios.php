<?php
include("Models/bd.php");

    $usuarios = mysqli_query($con, "SELECT * FROM usuarios");

    $datos = $usuarios -> fetch_all();

    //echo json_encode($datos);

    $con->close();
?>