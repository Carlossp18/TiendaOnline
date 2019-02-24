<?php

require_once './PDF.php';
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
    if (isset($_POST['submit'])) {
        Cesta::$cesta = $_SESSION['cesta'];
        Cesta::$total = $_SESSION['total'];
        switch ($_POST['submit']) {
            case 'Anadir':
                $item = $_POST['cod'];
                Cesta::anadirProducto($item);
                $plantilla->assign('cesta', Cesta::$cesta);
                $plantilla->assign('total', Cesta::$total);
                $plantilla->display("carrito.tpl");
                $_SESSION['cesta'] = Cesta::$cesta;
                $_SESSION['total'] = Cesta::$total;
                break;
            case 'eliminar':
                $code = $_POST['clave'];
                Cesta::eliminarProducto($code);
                $plantilla->assign('cesta', Cesta::$cesta);
                $plantilla->assign('total', Cesta::$total);
                $plantilla->display("carrito.tpl");
                $_SESSION['cesta'] = Cesta::$cesta;
                $_SESSION['total'] = Cesta::$total;
                break;
            case "vaciar":
                Cesta::vaciar();
                $plantilla->assign('cesta', Cesta::$cesta);
                $plantilla->assign('total', Cesta::$total);
                $_SESSION['cesta'] = Cesta::$cesta;
                $_SESSION['total'] = Cesta::$total;
                break;
        }
    }
} else {
    $msj = "Ha de autenticarse primero.";
    $plantilla->assign('msj', $msj);
    header("Location:index.php?msj=$msj");
}
?>


