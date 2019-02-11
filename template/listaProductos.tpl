<!doctype html>
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
                    Hola, <a>{$user}</a> 
                    <input type="submit" name="submit" value="desconectar">
                </p>
            </form>
        </div>
        <div id="shopCart">
            Hola que tal loco
        </div>
        <div class="cuadro">
            {foreach from=$productos item=producto}
                <form action="productos.php" method="POST">
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