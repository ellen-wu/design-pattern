<?php

include 'Audi.php';
include 'CarFactory.php';

class AudiFactory implements CarFactory
{
    public function createCar()
    {
        return new Audi();
    }
}


