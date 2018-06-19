<?php 
session_start(); 
?>
<html lang ="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"></link>
	<script src="jQuery/jquery-3.3.1.min.js"></script>
	<script src="jQuery/login.js"></script>
	<title>DOBLETURNO APP</title>
</head>
<div class="container">
<div class="row">
<div class="col-md-6">
		<h2>Login</h2>
		<form role="form" name="login" action="PHP/loguer.php" method="POST">
		  <div class="form-group">
		    <label for="username">Username</label>
		    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
		  </div>
		  <div class="form-group">
		    <label for="password">Password</label>
		    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
		  </div>

		  <button type="submit" class="btn btn-primary">Login</button>
		  <button type="button" class="btn btn-default" onclick = "location='indexRegister.php'">Register</button>
		</form>
				</div>
			</div>
		</div>
	</body>
</html>