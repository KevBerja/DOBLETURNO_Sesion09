<!DOCTYPE html>
<html lang ="es">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
		<title>Listado Usuarios</title>
	</head>

	<body>
		<div class="container">
			<h2>Listado de usuarios</h2>
			<p>Aquí aparecerá la información de los usuarios registrados:</p>            
			<table class="table table-striped" name="tablaUsuarios">
			  <thead>
				<tr>
				  <th>ID</th>
				  <th>Nombre usuario</th>
				  <th>Email</th>
				  <th>Contraseña</th>
				  <th>Rol</th>
				  <th>Activo</th>
				</tr>
			  </thead>
			  <tbody>
				<tr>
					<td>1</td>
				  <td>John</td>
				  <td>john@example.com</td>
				  <td>asdf</td>
				  <td>usuario</td>
				  <td>1</td>
				</tr>
				<tr>
					<td>1</td>
				  <td>Mary</td>
				  <td>Moe</td>
				  <td>mary@example.com</td>
				</tr>
				<tr>
				  <td>July</td>
				  <td>Dooley</td>
				  <td>july@example.com</td>
				</tr>
			  </tbody>
			</table>
			<button type="button" class="btn btn-default" onclick = "location='indexAdmin.php'">Volver</button>
		</div>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>            
</html>