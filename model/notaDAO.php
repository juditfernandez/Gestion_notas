<?php
    require_once 'notas.php';
    class NotaDao {
        public function __construct(){
            include 'conexion.php';
        }
        public function modificarNotas($id_alumno){
            include 'conexion.php';
            $pdo->beginTransaction();
            $query = "INSERT INTO `tbl_notas`(`nom_asig_nota`, `id_alumno`, `nota`) VALUES ('Matematicas',?,NULL), ('Fisica',?,NULL), ('Programacion',?,NULL);";
            $sentencia = $pdo->prepare($query);
            $sentencia->bindParam(1,$id_alumno);
            $sentencia->bindParam(2,$id_alumno);
            $sentencia->bindParam(3,$id_alumno);
            $sentencia->execute();
    
            $query1 = "UPDATE tbl_notas SET `nota` = ? WHERE nom_asig_nota = 'Matematicas' AND id_alumno = ?";
            $sentencia1=$pdo->prepare($query1);
            $notamate=$_POST['notamate'];
            $sentencia1->bindParam(1,$notamate);
            $sentencia1->bindParam(2,$id_alumno);
            $sentencia1->execute();
    
            $query2 = "UPDATE tbl_notas SET `nota` = ? WHERE nom_asig_nota = 'Fisica' AND id_alumno = ?";
            $notafisi=$_POST['notafisi'];
            $sentencia2=$pdo->prepare($query2);
            $sentencia2->bindParam(1,$notafisi);
            $sentencia2->bindParam(2,$id_alumno);
            $sentencia2->execute();
    
            $query3 = "UPDATE tbl_notas SET `nota` = ? WHERE nom_asig_nota = 'Programacion' AND id_alumno = ?";
            $notapro=$_POST['notapro'];
            $sentencia3=$pdo->prepare($query3);
            $sentencia3->bindParam(1,$notapro);
            $sentencia3->bindParam(2,$id_alumno);
            $sentencia3->execute();
    
            $pdo->commit();
        }
    }

?>