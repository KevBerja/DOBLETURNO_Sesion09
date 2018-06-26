<?php

include 'Models/bd.php';

$email = $_POST['email'];

    $delUser = mysqli_query($connection, "DELETE FROM usuarios WHERE email ='".$email."'");

        if(!$delUser){
            echo "No se ha podido eliminar el usuario." . mysql_error();
            $connection->close();
            exit;
        }

    $con->close();
?>