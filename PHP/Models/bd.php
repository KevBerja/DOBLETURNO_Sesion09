<?php
    
class bd{

  protected $connection;

  public function __construct()
  {
    $server = "localhost";
    $userDB = "root";
    $passwordDB = "dobleturno";
    $db = "dobleturno";

    $this->connection = new mysqli($server, $userDB, $passwordDB, $db);  
  }

}
?>
