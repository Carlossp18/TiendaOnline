<?php

require_once "Smarty.class.php";
spl_autoload_register(function($clase) {
    require "$clase.php";
});
$plantilla = new Smarty();

$plantilla->template_dir = 'template/';
$plantilla->compile_dir = 'template_c/';

if (isset($_GET['msj'])) {
    $msj = $_GET['msj'];
    $plantilla->assign('msj', $msj);
}

if (isset($_POST['submit'])) {
    session_start();
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $passC = md5($pass);
    $bd = new BBDD();
    if ($bd->existeValue("select count(name) from usuarios where name='$user' and password='$passC'")) {
        $_SESSION['conexion']['user'] = $user;
        header("Location:productos.php");
    } else {
        $msj = "Las creedenciales no son correctas";
        $plantilla->assign('msj', $msj);
        $plantilla->display("login.tpl");
    }
} else {
    $plantilla->display("login.tpl");
}
?>