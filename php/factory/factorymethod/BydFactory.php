<?php

include 'Byd.php';
// include 'CarFactory.php';

class BydFactory implements CarFactory
{
    public function createCar()
    {
        return new Byd();
    }
}


