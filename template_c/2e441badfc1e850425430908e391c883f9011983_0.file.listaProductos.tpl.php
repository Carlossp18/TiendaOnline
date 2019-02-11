<?php
/* Smarty version 3.1.33, created on 2019-02-11 11:51:17
  from '/var/www/TiendaOnline/template/listaProductos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6153a581a1c3_20519942',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e441badfc1e850425430908e391c883f9011983' => 
    array (
      0 => '/var/www/TiendaOnline/template/listaProductos.tpl',
      1 => 1549882276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6153a581a1c3_20519942 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <style>
            body{
                margin: 0;
                background-color: lightgray;
                font-family: Arial;
            }

            #welcome{
                width: 100%;
                height: 70px;
                background-color: bisque;
            }

            #welcome input{
                padding: 5px;
                text-align: center;
                text-decoration: none;
                outline: none;
                color: #fff;
                background-color: #d13e3e;
                border: none;
                border-radius: 15px;
            }

            #hola{
                padding-top: 8px;
                float: right;
                margin-right: 20px;
            }

            #hola img{
                margin-right: 10px;
            }

            #logo{
                padding-top: 8px;
                float: left;
                margin-left: 20px;
                display: inline;
            }

            #welcome a{
                color: purple;
            }

            #shopCart{
                display: none;
            }

            #hola a:hover #shopCart{
                display: block;
                height: 600px;
                width: 30%;
                background-color: yellow;
                position: absolute;
                margin-left: 68%;
            }

            .cuadro{
                margin: auto;
                width: 50%;
                background:rgba(0,0,0,0.7);
                color: white; 
                padding: 20px;
                border-radius: 25px;
                margin-top: 20px;
                margin-bottom: 20px;

            }

            .cuadro div{
                padding-top: 5px;
                padding-bottom: 5px;
                width: 90%;
                display: inline-block;
            }

            .cuadro input{
                padding: 5px;
                margin: 5px;
                text-align: center;
                text-decoration: none;
                outline: none;
                color: #fff;
                background-color: #4CAF50;
                border: none;
                border-radius: 15px;
            }

        </style>
    </head>
    <body>
        <div id="welcome">
            <form action="index.php" method="POST">
                <p id="logo">TIENDAONLINE</p>
                <p id="hola">
                    <a><img align='middle' src="images/shop.png" alt="Smiley face" height="42" width="42" ></a>
                    Hola, <a><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</a> 
                    <input type="submit" name="submit" value="desconectar">
                </p>
            </form>
        </div>
        <div id="shopCart">
            Hola que tal loco
        </div>
        <div class="cuadro">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
                <form action="productos.php" method="POST">
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
