<?php

include 'Audi.php';
include 'Byd.php';


class CarFactory
{
    public static function createCar($type = '')
    {
        if ($type == 'audi') {
            return new Audi();
        } elseif ($type == 'byd') {
            return new Byd();
        } else {
            return null;
        }
    }
}
