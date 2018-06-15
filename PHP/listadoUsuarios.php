<?php

$con = mysqli_connect("localhost", "root", "", "DOBLETURNO");

$usuarios = mysqli_query($con, "SELECT * FROM usuarios");

$datos = $usuarios -> fetch_all();

echo json_encode($datos);
<html>
<head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"></link>
        <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
        <title>Listado Usuarios</title>
    </head>

    <body>
        <h1>
            Administrador
        </h1>

        <div class="container">
            <h2>Listado de usuarios</h2>
            <p>Aquí aparecerá la información de los usuarios registrados:</p>            
            <table class="table table-striped" name="tablaUsuarios">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Apellidos</th>
                  <th>Email</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>John</td>
                  <td>Doe</td>
                  <td>john@example.com</td>
                </tr>
                <tr>
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
          </div>
    </body>

$con->close();

?>