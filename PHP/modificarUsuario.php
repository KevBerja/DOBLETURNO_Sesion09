<?php
    include("conexion.php");
    $email = $_POST['email'];
    $nombre = $_POST['nombre'];
    $contra = $_POST['contra'];
    $activo = $_POST['activo'];
    $userID = $_POST['ID'];

        $modUser = mysqli_query($con, "UPDATE usuarios SET email = '".$email."', nombre = '', contra = '', activo = '' WHERE userID = '".$userID."'");

            if(!$modUser){
                echo "No se ha podido modificar el usuario." . mysql_error();
                $con->close();
                exit;
            }

        $con->close();
?>