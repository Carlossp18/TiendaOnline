<?php

/**
 * Description of Cesta
 *
 * @author alumno
 */
class Cesta {

    static public $cesta = [];
    static public $total;

    public static function anadirProducto($producto) {
        /*        $cod = $producto['cod'];


          self::$cantidad[$cod] ++;
          self::$producto[$cod] = $producto;
         * */


        $cod = $producto['cod'];
        $pvp = $producto['PVP'];
        $name = $producto['name'];
        if (self::comprobarProducto($cod)) {
            self::$cesta[$cod]['cantidad'] += 1;
            self::$cesta[$cod]['pvp'] = $pvp;
        } else {
            self::$cesta[$cod]['name'] = $name;
            self::$cesta[$cod]['cantidad'] = 1;
            self::$cesta[$cod]['pvp'] = $pvp;
        }
        self::$total += $pvp;
    }

    private static function comprobarProducto($cod) {
        if (isset(self::$cesta[$cod]))
            return true;
        else
            return false;
    }

    public static function eliminarProducto2($cod) {
        $cantidad = self::$cesta[$cod]['cantidad'];
        var_dump($cantidad);
        $pvp = self::$cesta[$cod]['pvp'];
        var_dump($pvp);
        $sum = $pvp * $cantidad;
        self::$total -= $sum;
        unset(self::$cesta["$cod"]);
    }

    public static function eliminarProducto($cod) {
        $cantidad = self::$cesta[$cod]['cantidad'];
        $pvp = self::$cesta[$cod]['pvp'];
        if ($cantidad == 1)
            unset(self::$cesta["$cod"]);
        else
            self::$cesta["$cod"]["cantidad"] -= 1;

        self::$total -= $pvp;
        if (self::$total < 0)
            self::$total = 0;
    }

    public static function vaciar() {
        self::$cesta = [];
        self::$total = 0;
    }

}
