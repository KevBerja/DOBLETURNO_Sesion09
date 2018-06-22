<?php
include '../Models/login.php';

$user=$_POST["username"];
$pass=$_POST["password"];
$login = new login();
$resultadoUser = $login->loginUser($user,$pass);
$resultadoID = $login->getIDUser($user);

session_start();

$_POST["resultadoUser"]=$resultadoUser;
if($resultadoUser==0)
{
	echo "Login error. Please, try again.";

}
else if($resultadoUser==1)
{
  $_SESSION['ID']=$resultadoID;
  $_SESSION['username']=$user;
	header('Location: ../../indexUsuario.php');


}
else
{
  $_SESSION['ID']=$resultadoID;
  $_SESSION['username']=$user;
  header('Location: ../../indexAdmin.php');
}
?>