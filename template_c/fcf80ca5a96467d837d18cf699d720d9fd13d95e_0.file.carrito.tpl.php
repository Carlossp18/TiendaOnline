<?php
/* Smarty version 3.1.33, created on 2019-02-18 12:07:51
  from '/var/www/TiendaOnline/template/carrito.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6a92073f5fa4_71214770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcf80ca5a96467d837d18cf699d720d9fd13d95e' => 
    array (
      0 => '/var/www/TiendaOnline/template/carrito.tpl',
      1 => 1550488062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6a92073f5fa4_71214770 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
    #cesta{
        border-radius: 15px;
        background-color: yellow;
        position: absolute;
        top: 70px;
        left: 75%;
        width: 25%;
        height: 200px;
        padding: 10px;
    }
</style>
<div id="cesta">
    Holaaaaaaaaaaaaaaa
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cesta']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['item']->value;?>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
