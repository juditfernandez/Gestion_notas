<?php
require_once '../model/administrador.php';
session_start();
if (!isset($_SESSION['administrador'])) {
    header('Location:../view/vista_login.html');
}
echo '<div class="logo"><h1>Bienvenido '.$_SESSION['administrador']->getEmail().'</h1><h1 style="float: right;"><a href="../controller/logoutController.php">Logout</a></h1></div>';