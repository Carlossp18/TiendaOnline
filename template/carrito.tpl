<div id="cesta">
    <table>
        <tr>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Precio</th>
        </tr>
        {foreach from=$cesta item=item key=key}
            <form action="productos.php" method="POST">
                <tr>
                <input type="hidden" name="clave" value="{$key}">
                {foreach from=$item item=i}
                    <td>{$i}</td>
                {/foreach}
                <td><input type="submit" name="submit" value="eliminar"></td>
                </tr>

            </form>
        {/foreach}
        <tr><td class="total">TOTAL</td><td class="total" colspan="2">{$total} €</td><td class="total"></td></tr>
    </table>
    <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
        <input name="cmd" type="hidden" value="_cart" />
        <input type="hidden" name="upload" value="1">
        <input name="business" type="hidden" value="csperez97-facilitator@gmail.com" />

        <input name="shopping_url" type="hidden" value="http://localhost/TiendaOnline/producto.php" />
        <input name="currency_code" type="hidden" value="EUR" />
        <input name="return" type="hidden" value="http://localhost/TiendaOnline/producto.php" />
        <input name="notify_url" type="hidden" value="http://localhost/TiendaOnline/producto.php" />
        <input name="rm" type="hidden" value="2" />
        {assign var="count" value=1}
        {foreach from=$cesta item=item key=key}
            <input type="hidden" name="item_name_{$count}" value="{$cesta[$key]['name']}">
            <input type="hidden" name="quantity_{$count}" value="{$cesta[$key]['cantidad']}">
            <input type="hidden" name="amount_{$count}" value="{$cesta[$key]['pvp']}">
            {assign var="count" value=$count+1}
        {/foreach}

        <input type="submit" name="submit" value="pagar">
    </form>
    <form method="POST" action="productos.php">
        <input type="submit" name="submit" value="vaciar">
    </form>
    <form method="POST" action="imprimir.php">
        <input type="submit" name="submit" value="pdf">
    </form>
</div>