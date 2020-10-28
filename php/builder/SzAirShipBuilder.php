<?php

include 'AirShipBuilder.php';

class SzAirShipBuilder implements AirShipBuilder
{
    public function builderOrbitaModule()
    {
        echo '神州轨道舱';
        return new OrbitaModule('神州轨道舱');
    }

    public function builderEngine()
    {
        echo '构建发动机';
        return new Engine('神州发动机');
    }
    
    public function builderEscapeTower()
    {
        echo '构建逃逸塔';
        return new EscapeTower('神州逃逸塔');
    }
}

