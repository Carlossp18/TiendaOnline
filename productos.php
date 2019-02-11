<?php

require_once "Smarty.class.php";
spl_autoload_register(function($clase) {
    require "$clase.php";
});
$plantilla = new Smarty();

$plantilla->template_dir = 'template/';
$plantilla->compile_dir = 'template_c/';

session_start();
if (isset($_SESSION['conexion']['user'])) {
    $user = $_SESSION['conexion']['user'];
    $plantilla->assign('user', $user);
    $bd = new BBDD();
    $productos = $bd->selectQuery("select cod, nombre_corto, PVP from producto");
    $plantilla->assign('productos', $productos);
    $plantilla->display("listaProductos.tpl");
} else {
    $msj = "Ha de autenticarse primero.";
    $plantilla->assign('msj', $msj);
    header("Location:index.php?msj=$msj");
}
?>


