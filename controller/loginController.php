<?php
include '../model/administrador.php';
include '../model/adminDAO.php';
if (isset($_POST['email'])) {
    $administrador = new Administrador($_POST['email'], md5($_POST['passwd']));
    $adminDAO = new AdminDAO();
    if($adminDAO->login($administrador)){
        echo 'Excelente';
        header("location:../view/mostrar_alumnos.php");
    }else {
        header('Location: ../view/vista_login.html');
    }
}else {
    header('Location: ../view/vista_login.html');
}