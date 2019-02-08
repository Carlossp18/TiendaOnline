<!doctype html>
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
        <h2>{$msj}</h2>
        <form action="index.php" method="POST">
            <fieldset>
                <p><label for="lorem">Usuario &nbsp</label><input type="text" name="user" /></p>
                <p><label for="ipsum">Contraseña &nbsp</label><input type="text" name="pass" /></p>
                <input type="submit" name="submit" value="login">
            </fieldset>
        </form>
    </body>
</html>