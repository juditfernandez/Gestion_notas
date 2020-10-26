<?php
  require_once '../model/alumnoDAO.php';
  $alumno = new AlumnoDao();
  $alumno->insertar();

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
</head>
<body>

<h2>Crear alumno</h2>

<form action="crear_alumno.php" method="POST">
  <label>Nombre:</label><br>
  <input type="text" name="nom_alumno" required><br>
  <label>Apellido 1:</label><br>
  <input type="text" name="apellido_alum" required><br>
  <label>Apellido 2:</label><br>
  <input type="text" name="apellido2_alum"><br><br>
  <label>Grupo:</label><br>
  <input type="text" name="grupo_alum"><br><br>
  <label>Email:</label><br>
  <input type="email" name="email_alum" required><br>
  <label>Contraseña:</label><br>
  <input type="password" name="password_alum" required><br>
  <input type="submit" value="Submit">

</form> 

</body>
</html>