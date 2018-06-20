<?php

include 'conexion_BD.php';


class registerUser extends conexion_BD
{
    public function addUser($email,$username,$password,$activo,$role,$fechaCreacion)
    {
      $cadenaSQL = "INSERT INTO Usuarios (username, email, password, activo, role, fechaCreacion) VALUES ('$email','$username','$password','$activo', '$role', '$fechaCreacion')";
      $resultadoUser = $this->connection->query($cadenaSQL);

    }

    public function userIsExists($user)
    {
      $cadenaSQL = "SELECT * FROM Usuarios WHERE username='$user'";
      $resultadoUser = $this->connection->query($cadenaSQL);

      while($usuario = $resultadoUser->fetch_assoc()){
        return 0;
      }
      return 1;
    }
}
?>
