<?php
class AdminDao{
    private $pdo;

    public function __construct(){
        include 'conexion.php';
        $this->pdo=$pdo;
    }

    public function login($administrador){
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
    }
}

?>