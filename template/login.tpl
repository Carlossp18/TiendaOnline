<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="estilos.css">
    </head>
    <body>
        <h2>{$msj}</h2>
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
</html>