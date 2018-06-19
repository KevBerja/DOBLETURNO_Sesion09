<html lang ="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"></link>
	<script src="jQuery/jquery-3.3.1.min.js"></script>
	<script src="jQuery/register.js"></script>
	<title>Register</title>
</head>
<body>
	<div class="col-md-6 col-md-offset-3" id="contenido">
		<form id="formularioRegistro" role="form" action="PHP/register.php" method="POST">
			<h1>Register a new user</h1>
			<br></br>
			<div class="form-group">
			    <label for="txtEmail">Email</label>
			    <input type="text" class="form-control" id="email" name="emailR" placeholder="Username"">
		  	</div>
			  	<div class="form-group">
			    <label for="txtUsuario">Username</label>
			    <input type="text" class="form-control" id="username" name="usernameR" placeholder="Enter username">
		  	</div>
			  	<div class="form-group">
			    <label for="txtPassword">Password</label>
			    <input type="password" class="form-control" id="password" name="passwordR" placeholder="Enter password">
		  	</div>
	  		<button type="submit" class="btn btn-primary">Register</button>
	  		<button type="button" class="btn btn-default" onclick = "location='index.php'">Back</button>
		</form>
</div>
</body>
</html>