<?php
/* Smarty version 3.1.33, created on 2019-02-24 20:35:03
  from 'C:\xampp\htdocs\TiendaOnline\template\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c72f1e7addef0_38856709',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '550a936dfb7eabe83b45471b846d8edbc5bc9724' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TiendaOnline\\template\\login.tpl',
      1 => 1551035333,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c72f1e7addef0_38856709 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <style>
            fieldset {
                min-width: 150px;
                display: inline-block;
                margin: auto;
            }
            fieldset input{
                float: right;
            }
            fieldset label{
                padding-top: 50px;
            }
        </style>
    </head>
    <body>
        <h2><?php echo $_smarty_tpl->tpl_vars['msj']->value;?>
</h2>
        <form action="index.php" method="POST">
            <fieldset>
                <p><label for="user">Usuario &nbsp</label><input type="text" name="user" /></p>
                <p><label for="pass">Contraseña &nbsp</label><input type="password" name="pass" /></p>
                <input type="submit" name="submit" value="login">
            </fieldset>
        </form>
    </body>
</html><?php }
}
