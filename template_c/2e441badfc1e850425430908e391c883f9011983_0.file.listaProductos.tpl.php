<?php
/* Smarty version 3.1.33, created on 2019-02-27 09:59:22
  from '/var/www/TiendaOnline/template/listaProductos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c76516aa14229_88492696',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e441badfc1e850425430908e391c883f9011983' => 
    array (
      0 => '/var/www/TiendaOnline/template/listaProductos.tpl',
      1 => 1551257961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:carrito.tpl' => 1,
  ),
),false)) {
function content_5c76516aa14229_88492696 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="estilos.css">
    </head>
    <body>
        <div id="welcome">
            <form action="index.php" method="POST">
                <p id="logo">TIENDAONLINE</p>
                <p id="hola">
                    <a><img id="shopo" align='middle' src="images/shop.png" alt="Smiley face" height="42" width="42" ></a>
                    Hola, <a><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</a> 
                    <input type="submit" name="submit" value="desconectar">
                </p>
            </form>
        </div>
        <div id="shopCart">
            Hola que tal loco
        </div>
        <?php if ($_smarty_tpl->tpl_vars['carro']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender("file:carrito.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>
        <div class="cuadro">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
                <form action="productos.php" method="POST">
                    <input type="hidden" name="cod[cod]" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['cod'];?>
">
                    <input type="hidden" name="cod[PVP]" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['PVP'];?>
">
                    <input type="hidden" name="cod[name]" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre_corto'];?>
">
                    <div>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['producto']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
                            <?php echo $_smarty_tpl->tpl_vars['p']->value;?>

                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                    <input type="submit" name="submit" value="Anadir">
                </form>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </body>
</html><?php }
}
