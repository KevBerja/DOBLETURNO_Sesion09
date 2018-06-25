<?php

if(!class_exists('bd')){
  include 'bd.php';
}

class registerUser extends bd
{
    public function addUser($email,$username,$password,$activo,$role,$fechaCreacion)
    {
      $cadenaSQL = "INSERT INTO usuarios(email,username,password,activo,role,fechaCreacion) VALUES ('$email','$username','$password','$activo','$role','$fechaCreacion')";
      $resultadoUser = $this->connection->query($cadenaSQL);

    }

    public function userIsExists($user)
    {
      $cadenaSQL = "SELECT * FROM usuarios WHERE username='$user'";
      $resultadoUser = $this->connection->query($cadenaSQL);

      while($usuario = $resultadoUser->fetch_assoc()){
        return 0;
      }
      return 1;
    }
}
?>
