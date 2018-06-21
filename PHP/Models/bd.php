<?php
    
class bd{

  protected $connection;

  public function __construct()
  {
    $server = "localhost";
    $userDB = "root";
    $passwordDB = "dobleturno";
    $db = "DOBLETURNO";

    $this->connection = new mysqli($server, $userDB, $passwordDB, $db);  
  }

}
?>
