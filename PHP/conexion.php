<?php
    
class conexion {

  protected $connection;

  public function __construct()
  {
    $server = "localhost";
    $userDB = "root";
    $passwordDB = "";
    $db = "DOBLETURNO";

    $this->connection = new mysqli($server, $userDB, $passwordDB, $db);  
  }

}
?>