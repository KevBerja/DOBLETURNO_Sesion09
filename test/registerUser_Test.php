<?php
use PHPUnit\Framework\TestCase;
require_once "php/models/registerUser.php";

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
  $activo="1";
  $role = 'usuario';
  $year = date("y");
  $month = date("m");
  $day = date("d");
  $fechaCreacion = $year."-".$month."-".$day;

  $userAdd = $this->user->addUser($email,$username,$password,$activo,$role,$fechaCreacion);
  $userAdd = $this->user->userIsExists($username);

  $this->assertEquals(0,$userAdd);
}
}