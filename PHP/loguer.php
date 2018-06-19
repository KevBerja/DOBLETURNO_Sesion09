<?php
include 'login.php';

$user=$_POST["username"];
$pass=$_POST["password"];
$login = new login();
$resultadoUser = $login->loginUser($user,$pass);
$resultadoID = $login->getIDUser($user,$pass);

session_start();

$_POST["resultado"]=$resultado;
if($resultadoUser==0)
{
	echo "Login error. Please, try again.";

}
else if($resultadoUser==1)
{
  $_SESSION['ID']=$resultadoID;
  $_SESSION['username']=$user;
	header('Location: ../indexUsuario.html');


}
else
{
  $_SESSION['ID']=$resultadoID;
  $_SESSION['username']=$user;
  header('Location: ../indexAdmin.html');
}
?>