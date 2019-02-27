<?php
/* Smarty version 3.1.33, created on 2019-02-27 09:38:58
  from '/var/www/TiendaOnline/template/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c764ca2a9f511_82487070',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a2d2ae91eb535da35635ae7bd44821ce626a9e1' => 
    array (
      0 => '/var/www/TiendaOnline/template/login.tpl',
      1 => 1551175711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c764ca2a9f511_82487070 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="estilos.css">
    </head>
    <body>
        <h2><?php echo $_smarty_tpl->tpl_vars['msj']->value;?>
</h2>
        <div>
            <form action="index.php" method="POST">
                <fieldset>
                    <p><label for="user">Usuario &nbsp</label><input type="text" name="user" /></p>
                    <p><label for="pass">Contraseña &nbsp</label><input type="password" name="pass" /></p>
                    <input type="submit" name="submit" value="login">
                </fieldset>
            </form>
        </div>
    </body>
</html><?php }
}
