<?php
require_once '../model/alumnoDAO.php';

try { 

    $id_alumno=$_GET['id_alumno'];
    $alumno = new AlumnoDao();
    $alumno->eliminar($id_alumno);
    /*$query2="DELETE FROM tbl_alumno WHERE id_alumno = ? ";
    $sentencia2=$pdo->prepare($query2);
    $sentencia2->bindParam(1,$id);
    $sentencia2->execute();*/

    /*$query="DELETE FROM tbl_alumno WHERE id_alumno = ? ";
    $sentencia=$pdo->prepare($query);
    $sentencia->bindParam(1,$id);
    $sentencia->execute();*/

header('Location: mostrar_alumnos.php');
} catch (Exception $ex) {
    /* Reconocer un error y no hacer los cambios */
    $pdo->rollback();
    echo $ex->getMessage();
   
}

?>