<?php

include '../model/conexion.php';

$alumno=$_POST['nom_alumno'];
$email=$_POST['email_alum'];
$id=$_POST['id'];

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
$nota=$_POST['nota'];
$nom_asig=$_POST['nom_asig_nota'];

$query="UPDATE tbl_notas INNER JOIN tbl_notas ON tbl_notas.id_alumnos = tbl_alumnos.id_alumnos"; 
$sentencia=$pdo->prepare($query);
$sentencia->bindParam(1,$nota);
$sentencia->bindParam(2,$nom_asig);
$sentencia->bindParam(3,$id);
$sentencia->execute();
$pdo->commit();
header('Location: mostrar_alumnos.php');





?>