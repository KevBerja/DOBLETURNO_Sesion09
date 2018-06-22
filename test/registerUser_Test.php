<?php
use PHPUnit\Framework\TestCase;
require_once "PHP/Models/registerUser.php";

final class registerUser_Test extends TestCase
{
	private $user;
/**
* @before
*/
public function setUp(){
   $this->user=new registerUser();
}
/**
* @test
*/
public function test_addUser(){
  $email = "user@user.com";
  $username = "user";
  $password = "user";
  $activo = "1";
  $role = 'usuario';
  $year = date("y");
  $month = date("m");
  $day = date("d");
  $fechaCreacion = $year."-".$month."-".$day;

  $userAdd = $this->user->addUser($email,$username,$password,$activo,$role,$fechaCreacion);
  $userAdd = $this->user->userIsExists($username);

  //If the test fails, it is because the user exists
  $this->assertEquals(0,$userAdd);
  }
  
/**
* @test
*/
public function test_addUserExists(){
  $email = "jjcanada@ual.es";
  $username = "jjcanada";
  $password = "jjcanada";
  $activo = "1";
  $role = 'usuario';
  $year = date("y");
  $month = date("m");
  $day = date("d");
  $fechaCreacion = $year."-".$month."-".$day;

  $userAdd = $this->user->userIsExists($email);

  $this->assertEquals(1,$userAdd);
  }
}