<html lang ="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"></link>
	<script src="jQuery/jquery-3.3.1.min.js"></script>
	<script src="jQuery/login.js"></script>
	<title>DOBLETURNO APP</title>
</head>
<div class="col-md-6 col-md-offset-3" id="contenido">
		<br/><h1>Welcome to the DOBLETURNO APP</h1><br/>
		<form id="formSignIn" role="form" action="PHP/Controllers/loguer.php" method="POST">
		<h2>Login</h2><br/>
		  <div class="form-group">
		    <label for="username">Username</label>
		    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
		  </div>
		  <div class="form-group">
		    <label for="password">Password</label>
		    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
		  </div>
		  <button type="submit" class="btn btn-primary">Sign In</button>
		  <button type="button" class="btn btn-default" onclick = "location='indexRegister.php'">Sign Up</button>
		</form>
				</div>
			</div>
		</div>
	</body>
</html>