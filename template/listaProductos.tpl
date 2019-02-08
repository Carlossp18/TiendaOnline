<!doctype html>
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
            <p>Hola <a>{$user}</a></p>
        </div>
        <div>
            {foreach from=$productos item=producto}
                <div>
                    {foreach from=$producto item=p}



                    {/foreach}
                </div>
            {/foreach}

        </div>
    </body>
</html>