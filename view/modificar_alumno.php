<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
</head>
<body>

<h2>Modificar alumno</h2>

<?php
include '../model/conexion.php';
$id=$_GET['id_alumno'];
//echo $id;
//Recuperar informacion
$query="SELECT nom_alumno, email_alum FROM tbl_alumno WHERE id_alumno=$id";
$sentencia=$pdo->prepare($query);
$sentencia->execute();
$alumno=$sentencia->fetch(PDO::FETCH_ASSOC);
//print_r($persona);
?>

<form action="actualizar_alumno.php" method="POST">
  <label>Nombre alumno: </label><br>
  <input type="text" name="nom_alumno" value="<?php echo $alumno['nom_alumno'];?>"><br>
  <label>Email del alumno: </label><br>
  <input type="text" name="email_alum" value="<?php echo $alumno['email_alum'];?>"><br>
  <label>Nombre Asignatura: </label><br>
  <input type="text" name="nom_asig_nota"><br>
  <label>Notas: </label><br>
  <input type="text" name="nota">
  <input type="hidden" name="id" value="<?php echo $id;?>"><br>
  <input type="submit" value="Submit">
</form> 

</body>
</html>