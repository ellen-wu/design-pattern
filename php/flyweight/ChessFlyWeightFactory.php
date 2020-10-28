<?php


class ChessFlyWeightFactory
{
    private static $map;

    public static function getChess($color)
    {
        $flag = false;
        
        if (isset(self::$map[$color])) {
            return self::$map[$color];
        } else {
            $cfw = new ConcreteChess($color);
            self::$map[$color] = $cfw;

            return $cfw;
        }
    }
}
