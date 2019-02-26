<!doctype html>
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
                    Hola, <a>{$user}</a> 
                    <input type="submit" name="submit" value="desconectar">
                </p>
            </form>
        </div>
        <div id="shopCart">
            Hola que tal loco
        </div>
        {if $carro}
            {include file="carrito.tpl"}
        {/if}
        <div class="cuadro">
            {foreach from=$productos item=producto}
                <form action="productos.php" method="POST">
                    <input type="hidden" name="cod[cod]" value="{$producto['cod']}">
                    <input type="hidden" name="cod[PVP]" value="{$producto['PVP']}">
                    <input type="hidden" name="cod[name]" value="{$producto['nombre_corto']}">
                    <div>
                        {foreach from=$producto item=p}
                            {$p}
                        {/foreach}
                    </div>
                    <input type="submit" name="submit" value="Anadir">
                </form>
            {/foreach}
        </div>
    </body>
</html>