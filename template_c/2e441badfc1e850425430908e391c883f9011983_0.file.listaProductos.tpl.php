<?php
/* Smarty version 3.1.33, created on 2019-02-08 10:23:24
  from '/var/www/TiendaOnline/template/listaProductos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5d4a8c209982_24801518',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e441badfc1e850425430908e391c883f9011983' => 
    array (
      0 => '/var/www/TiendaOnline/template/listaProductos.tpl',
      1 => 1549617803,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5d4a8c209982_24801518 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <style>
            body{
                margin: 0;
            }

            #welcome{
                width: 100%;
                height: 50px;
                background-color: bisque;
            }

            #welcome p{
                padding-left: 10px;
                top: 0;
                padding-top: 15px;
            }

            #welcome a{
                color: purple;
            }
        </style>
    </head>
    <body>
        <div id="welcome">
            <p>Hola <a><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</a></p>
        </div>
        <div>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
                <div>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['producto']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>



                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </div>
    </body>
</html><?php }
}
