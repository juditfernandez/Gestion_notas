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
        // Recuperar información //
        $query="SELECT nom_alumno, apellido_alum, apellido2_alum, grupo_alum, email_alum, password_alum FROM tbl_alumno WHERE id_alumno=$id";
        $sentencia=$pdo->prepare($query);
        $sentencia->execute();
        $alumno=$sentencia->fetch(PDO::FETCH_ASSOC);
        //print_r($persona);
        ?>
        <form action="actualizar_alumno.php" method="post">
            <label for="nom_alumno">Nombre alumno:</label><br>
            <input type="text" id="nom_alum" name="nom_alum" value=<?php echo $alumno['nom_alumno']; ?>><br>
            <label for="apellido_alum">Primer apellido:</label><br>
            <input type="text" id="apellido_alum" name="apellido_alum" value=<?php echo $alumno['apellido_alum']; ?>><br>
            <label for="notamate">Nota Matematicas:</label><br>
            <input type="number" id="notamate" name="notamate"><br>
            <label for="notafisi">Nota Fisica:</label><br>
            <input type="number" id="notafisi" name="notafisi"><br>
            <label for="notapro">Nota Programacion:</label><br>
            <input type="number" id="notapro" name="notapro"><br>
            <input type="hidden" name="id" value="<?php echo $id; ?>"><br>
            <input type="submit" value="Insertar nota">
        </form>

</body>
</html>