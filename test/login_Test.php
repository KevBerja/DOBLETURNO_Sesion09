<?php
use PHPUnit\Framework\TestCase;
require_once "PHP/Models/login.php";

final class login_Test extends TestCase
{
	private $log;
/**
* @before
*/
public function setUp(){
   $this->log = new login();
}
/**
* @test
*/
public function loginUserTest(){
  $user = "jjcanada";
  $pass = "jjcanada";
  
  $resultado = $this->log->loginUser($user,$pass);
  $this->assertEquals(1,$resultado);
}

/**
* @test
*/
public function loginAdminTest(){
  $user = "admin";
  $pass = "admin";
  
  $resultado = $this->log->loginUser($user,$pass);
  $this->assertEquals(2,$resultado);
}

/**
* @test
*/
public function loginPassUserError(){
    $user = "kevin";
    $pass = "incorrecta";
    
    $resultado = $this->log->loginUser($user,$pass);
    $this->assertEquals(0,$resultado);
}

/**
* @test
*/
public function loginPassAdminError(){
  $user = "admin";
  $pass = "incorrecta";
  
  $resultado = $this->log->loginUser($user,$pass);
  $this->assertEquals(0,$resultado);
}

/**
* @test
*/
public function getIDTest(){
  $user = "admin";

  $resultado = $this->log->getIDUser($user);
  $this->assertEquals(1,$resultado);
  }
  
/**
* @test
*/
public function getIDErrorTest(){
  $user = "manoli";

  $resultado = $this->log->getIDUser($user);
  $this->assertEquals(-1,$resultado);
  }
}
