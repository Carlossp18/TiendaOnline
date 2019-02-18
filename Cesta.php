<?php

/**
 * Description of Cesta
 *
 * @author alumno
 */
class Cesta {

    static public $cesta = [];

    public static function anadirProducto($producto) {
        var_dump($producto);
        /*        $cod = $producto['cod'];


          self::$cantidad[$cod] ++;
          self::$producto[$cod] = $producto;
         * */


        $cod = $producto['cod'];
        $pvp = $producto['PVP'];
        if (self::comprobarProducto($cod)) {
            self::$cesta[$cod]['cantidad'] += 1;
            self::$cesta[$cod]['pvp'] = $pvp * self::$cesta[$cod]['cantidad'];
        } else {
            self::$cesta[$cod]['cantidad'] = 1;
            self::$cesta[$cod]['pvp'] = $pvp;
        }
    }

    private static function comprobarProducto($cod) {
        if (isset(self::$cesta[$cod]))
            return true;
        else
            return false;
    }

}
