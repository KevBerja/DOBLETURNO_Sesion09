<?php

if(!class_exists('bd')){
  include 'bd.php';
}

class login extends bd
{
    public function loginUser($user,$pass)
    {
      $cadenaSQL="SELECT userID, email, username, password, role FROM Usuarios WHERE username='$user' AND password='$pass'";
      $result=$this->connection->query($cadenaSQL);
      while($usuario = $result->fetch_assoc())
      {
        if($usuario["role"]=="usuario") {
          return 1;
        } else if ($usuario["role"]=="admin") {
          return 2;
        }
      }
      return 0;
    }

    public function getIDUser($user)
    {
      $mysqli=new mysqli("localhost","root","dobleturno","dobleturno");
      $cadenaSQL = "SELECT userID FROM Usuarios WHERE username='$user'";
      $result=$mysqli->query($cadenaSQL);
      $rows=$result->num_rows;
      $userID;
      if($rows > 0) {
		  $row = $result->fetch_assoc();
        $userID = $row['userID'];
        return $userID;
      }
      return -1;
    }
}
?>
