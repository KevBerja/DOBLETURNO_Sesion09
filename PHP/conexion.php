<?php
    $con = mysqli_connect("localhost", "root", "", "DOBLETURNO");

    if(!$con){
        echo "No se ha podido conectar correctamente con la BD." . mysql_error();
        exit;
    }
?>