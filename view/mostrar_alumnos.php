<html>
  <head>
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
  </head>
</html>


<?php
require_once '../controller/sessionController.php';
$id_alumno = -1;
echo "<button><a href='Crear_alumno.html?id_alumno=$id_alumno'> Crear </a></button><br>";
?>

<html>
  <body>
    <form action="mostrar_alumnos.php" method="post">
      <label for="nombre">Nombre: </label><br>
      <input type="text" id="nombre" name="nombre"><br>
      <label for="apellido1">Primer apellido :</label><br>
      <input type="text" id="apellido1" name="apellido1"><br>
      <input type="submit" value="Buscar">
    </form>
  </body>
</html>



<?php
    require_once '../model/alumnoDAO.php';
    if(isset($_POST['nombre']) || isset($_POST['apellido1'])){
        $alumno=new AlumnoDao();
        $alumno->filtrar();
    }else{
        $alumno=new AlumnoDao();
        $alumno->mostrar();  
    }

    

?>
