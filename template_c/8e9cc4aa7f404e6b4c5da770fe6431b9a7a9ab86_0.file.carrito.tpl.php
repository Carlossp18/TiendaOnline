<?php
/* Smarty version 3.1.33, created on 2019-02-25 00:24:51
  from 'C:\xampp\htdocs\TiendaOnline\template\carrito.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7327c3b8ca50_35440723',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e9cc4aa7f404e6b4c5da770fe6431b9a7a9ab86' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TiendaOnline\\template\\carrito.tpl',
      1 => 1551050679,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7327c3b8ca50_35440723 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
    #cesta{
        border-radius: 15px;
        background-color: rgba(0, 0, 0, 0.9);
        position: absolute;
        top: 70px;
        left: 75%;
        width: 25%;
        padding: 10px 0px 10px 10px;
    }

    table{
        color: white;
    }
    .inter{
        border: 1px dashed white;
    }

    th, td{
        padding-right: 50px;
    }
    .total{
        border-top: 1px solid white;
        text-align: right;
    }

</style>
<div id="cesta">
    <table>
        <tr>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Precio</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cesta']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
            <form action="productos.php" method="POST">
                <tr>
                <input type="hidden" name="clave" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <td><input type="submit" name="submit" value="eliminar"></td>
                </tr>

            </form>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <tr><td class="total">TOTAL</td><td class="total" colspan="2"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 €</td><td class="total"></td></tr>
    </table>
    <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
        <input name="cmd" type="hidden" value="_cart" />
        <input type="hidden" name="upload" value="1">
        <input name="business" type="hidden" value="csperez97-facilitator@gmail.com" />

        <input name="shopping_url" type="hidden" value="http://tienda/index.php" />
        <input name="currency_code" type="hidden" value="EUR" />
        <input name="return" type="hidden" value="http://manuel.infenlaces.com/dwes/TiendaPagar/pago_realizado.php" />
        <input name="notify_url" type="hidden" value="http://manuel.infenlaces.com/dwes/TiendaPagar/paypal_ipn.php" />
        <input name="rm" type="hidden" value="2" />
        <?php $_smarty_tpl->_assignInScope('count', 1);?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cesta']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
            <input type="hidden" name="item_name_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['cesta']->value[$_smarty_tpl->tpl_vars['key']->value]['name'];?>
">
            <input type="hidden" name="quantity_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['cesta']->value[$_smarty_tpl->tpl_vars['key']->value]['cantidad'];?>
">
            <input type="hidden" name="amount_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['cesta']->value[$_smarty_tpl->tpl_vars['key']->value]['pvp'];?>
">
            <?php $_smarty_tpl->_assignInScope('count', $_smarty_tpl->tpl_vars['count']->value+1);?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <input type="submit" name="submit" value="pagar">
    </form>
    <form method="POST" action="productos.php">
        <input type="submit" name="submit" value="vaciar">
    </form>
    <form method="POST" action="imprimir.php">
        <input type="submit" name="submit" value="pdf">
    </form>
</div><?php }
}
