<?php
include("models/bd.php");
$email = $_POST['email'];

    $delUser = mysqli_query($con, "DELETE FROM usuarios WHERE email ='".$email."'");

        if(!$delUser){
            echo "No se ha podido eliminar el usuario." . mysql_error();
            $con->close();
            exit;
        }

    $con->close();
?>