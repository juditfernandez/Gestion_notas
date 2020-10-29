<?php
require_once '../model/notaDAO.php';
$id_alumno=$_POST['id'];
$alumno=new NotaDao();
$alumno->modificarNotas($id_alumno);
header('location: mostrar_alumnos.php');
include '../model/conexion.php';

/* if ($name == "") {
    $query="UPDATE tbl_persona SET email_persona=$email WHERE id_persona=$id;";
    $sentencia=$pdo->prepare($query);
    $sentencia->execute();
} elseif ($name == "") {
    $query="UPDATE tbl_persona SET nombre_persona=$name WHERE id_persona=$id;";
    $sentencia=$pdo->prepare($query);
    $sentencia->execute();
} else {
    $query="UPDATE tbl_persona SET nombre_persona=$name, email_persona=$email WHERE id_persona=$id;";
    $sentencia=$pdo->prepare($query);
    $sentencia->execute();

} */


/*$query="UPDATE tbl_alumno SET nom_alumno=? , email_alum=? WHERE id_alumno=?;";
$sentencia=$pdo->prepare($query);
$sentencia->bindParam(1,$alumno);
$sentencia->bindParam(2,$email);
$sentencia->bindParam(3,$id);
$sentencia->execute();*/

//$id_alumno = $pdo->lastInsertId();



?>