<?php
class AlumnoDao{

    public function __construct(){
    }

    /*public function login($administrador){
        $query = "SELECT * FROM tbl_administrador WHERE email=? AND passwd=?";
        $sentencia=$this->pdo->prepare($query);
        $email=$administrador->getEmail();
        $psswd=$administrador->getPasswd();
        $sentencia->bindParam(1,$email);
        $sentencia->bindParam(2,$psswd);
        $sentencia->execute();
        $result=$sentencia->fetch(PDO::FETCH_ASSOC);
        $numRow=$sentencia->rowCount();
        if(!empty($numRow) && $numRow==1){
            $administrador->setEmail($result['Email']);
            $administrador->setId_admin($result['id_admin']);

            //Creamos la sesion
            session_start();
            $_SESSION['administrador']=$administrador;
            return true;
        }else {
            return false;
        }
    }*/

    public function mostrar() {
        include '../model/conexion.php';
        $query="SELECT * FROM tbl_alumno";
        $sentencia=$pdo->prepare($query);
        $sentencia->execute();
        $id_alumno=-1;
        $lista_alumno=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        //print_r($lista_persona);
        foreach($lista_alumno as $alumno) {
            if ($id_alumno==$alumno['id_alumno']) {
                //echo " , {$alumno['num_telefono']}";
                $id_alumno=-1;
                continue;
            } else {
                echo " </br>";
            }
            $id_alumno=$alumno['id_alumno'];
            echo "<div class='espacio'>";
            echo "<a href='modificar_alumno.php?id_alumno=$id_alumno'> Modificar </a> ";
            echo "<a href='eliminar_alumno.php?id_alumno=$id_alumno'> Eliminar </a>";
            echo "{$alumno['nom_alumno']} , ";
            echo "{$alumno['apellido_alum']} , ";
            echo "{$alumno['apellido2_alum']}<br></div>";
            $id_alumno=$alumno['id_alumno'];
        } 
    }
    public function filtrar(){
        include "../model/conexion.php";
        $query= "SELECT id_alumno, nom_alumno, apellido_alum, apellido2_alum
        FROM tbl_alumno
        WHERE nom_alumno LIKE '%{$_POST['nombre']}%'
        AND apellido_alum LIKE '%{$_POST['apellido1']}%'";
        $sentencia=$pdo->prepare($query);
        $sentencia->execute();
        $id_alumno=-1;
        $lista_alumno=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        //print_r($lista_persona);
        foreach($lista_alumno as $alumno) {
            if ($id_alumno==$alumno['id_alumno']) {
                //echo " , {$alumno['num_telefono']}";
                $id_alumno=-1;
                continue;
            } else {
                echo " </br>";
            }
            $id_alumno=$alumno['id_alumno'];
            echo "<a href='modificar_alumno.php?id_alumno=$id_alumno'> Modificar </a>";
            echo "<a href='eliminar_alumno.php?id_alumno=$id_alumno'> Eliminar </a>";
            echo "{$alumno['nom_alumno']} , ";
            echo "{$alumno['apellido_alum']} , ";
            echo "{$alumno['apellido2_alum']}<br>";
            $id_alumno=$alumno['id_alumno'];
        }
    }

    public function eliminar($id_alumno){
        include 'conexion.php';
        try{
            $pdo->beginTransaction();
            $select = "SELECT tbl_alumno.id_alumno, tbl_alumno.nom_alumno, tbl_alumno.apellido_alum, tbl_notas.nota  FROM tbl_alumno 
            INNER JOIN tbl_notas ON tbl_alumno.id_alumno=tbl_notas.id_alumno WHERE tbl_alumno.id_alumno= ?";
            $sente = $pdo->prepare($select);
            $sente->bindParam(1,$id_alumno);
            $sente->execute();
            if ($sente->rowCount() == 0) { 
            $delete = "DELETE FROM tbl_alumno WHERE id_alumno = ?";
            $sentencia=$pdo->prepare($delete);
            $sentencia->bindParam(1,$id_alumno);
            $sentencia->execute();
            $pdo->commit();
            } else {
        
                $delete1 = "DELETE FROM tbl_notas WHERE id_alumno = ?";
                $sentencia1=$pdo->prepare($delete1);
                $sentencia1->bindParam(1,$id_alumno);
                $sentencia1->execute();

                $delete2 = "DELETE FROM tbl_alumno WHERE id_alumno = ?";
                $sentencia2=$pdo->prepare($delete2);
                $sentencia2->bindParam(1,$id_alumno);
                $sentencia2->execute();
                $pdo->commit();
            }
        }catch (Exception $ex) {
        /* Reconocer un error y no hacer los cambios */
        $pdo->rollback();
        echo $ex->getMessage();
       
        }
    }

    public function insertar(){

        include '../model/conexion.php';
        try {

            //Comienza la transacción
            $pdo->beginTransaction(); 
            $query="INSERT INTO `tbl_alumno` (`id_alumno`, `nom_alumno`, `apellido_alum`, `apellido2_alum`, `grupo_alum`, `email_alum`, `password_alum`) VALUES (NULL,?,?,?,?,?,?);";
            $sentencia=$pdo->prepare($query);
            $nombre=$_POST['nom_alumno']; 
            $apellido=$_POST['apellido_alum']; 
            $apellido2=$_POST['apellido2_alum'];
            $grupo=$_POST['grupo_alum'];
            $email=$_POST['email_alum'];
            $pas=$_POST['password_alum']; 
             
            $sentencia->bindParam(1,$nombre);
            $sentencia->bindParam(2,$apellido);
            $sentencia->bindParam(3,$apellido2);
            $sentencia->bindParam(4,$grupo);
            $sentencia->bindParam(5,$email);
            $sentencia->bindParam(6,$pas);
        
                $sentencia->execute();
            $id_alumno = $pdo->lastInsertId();
    
            echo "todo bien";
            //hacer todas las sentencias a la vez
            $pdo->commit();
            header('location: mostrar_alumnos.php');
        } catch (Exception $ex) {
            /* Reconocer un error y no hacer los cambios */
            $pdo->rollback();
            echo $ex->getMessage();
           
        }
    }    
}   
?>