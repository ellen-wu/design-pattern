<?php

include 'AirShipDirector.php';

class SzAirShipDirector implements AirShipDirector
{
    private $builder;

    public function __construct($builder)
    {
        $this->builder = $builder;
    }

    public function directorAirShip()
    {
        $e = $this->builder->builderEngine();
        $om = $this->builder->builderOrbitaModule();
        $et = $this->builder->builderEscapeTower();

        // 装配成飞船对象
        $ship = new AirShip();

        $ship->setEngine($e);
        $ship->setOrbitaModule($om);
        $ship->setEscapeTower($et);

        return $ship;
    }
}