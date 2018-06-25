<?php
include '../Models/registerUser.php';

$email=$_POST["emailR"];
$username=$_POST["usernameR"];
$password=$_POST["passwordR"];
$activo = 1;
$role = 'usuario';
$year = date("y");
$month = date("m");
$day = date("d");
$fechaCreacion = $year."-".$month."-".$day;

$registro = new registerUser();

$resultado = $registro->userIsExists($username);

if($resultado==0){
  echo "This user is already exists";

}else{
  $registro->addUser($email,$username,$password,$activo,$role,$fechaCreacion);
  echo "The user has been created successfully";
}

?>
