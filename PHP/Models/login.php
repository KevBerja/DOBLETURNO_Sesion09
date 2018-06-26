<?php

if(!class_exists('bd')){
  include 'bd.php';
}

class login extends bd
{
    public function loginUser($user,$pass)
    {
      $cadenaSQL="SELECT userID, email, username, password, activo, role FROM usuarios WHERE username='$user' AND password='$pass'";
      $result=$this->connection->query($cadenaSQL);
      while($usuario = $result->fetch_assoc())
      {
        if($usuario["role"]=="usuario" && $usuario["activo"]==1) {
            $year = date("y");
            $month = date("m");
            $day = date("d");
            $fechaAcceso = $year."-".$month."-".$day;
            $cadenaSQL2="UPDATE usuarios SET fechaUltimoAcceso = '$fechaAcceso' WHERE username = '$user'";
            $result2=$this->connection->query($cadenaSQL2);
          return 1;
        } else if ($usuario["role"]=="admin" && $usuario["activo"]==1) {
            $year = date("y");
            $month = date("m");
            $day = date("d");
            $fechaAcceso = $year."-".$month."-".$day;
            $cadenaSQL2="UPDATE usuarios SET fechaUltimoAcceso = '$fechaAcceso' WHERE username = '$user'";
            $result2=$this->connection->query($cadenaSQL2);
          return 2;
        }
      }
      return 0;
    }

    public function getIDUser($user)
    {
      $mysqli=new mysqli("localhost","root","dobleturno","dobleturno");
      $cadenaSQL = "SELECT userID FROM usuarios WHERE username='$user'";
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
