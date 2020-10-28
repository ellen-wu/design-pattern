<?php

include 'CarFactory.php';

include 'Engine.php';
include 'Seat.php';
include 'Tyre.php';

class LuxuryFactory implements CarFactory
{
    public function createEngine()
    {
        return new LuxuryEngine();
    }

    public function createSeat()
    {
        return new LuxurySeat();
    }

    public function createTyre()
    {
        return new LuxuryTyre();
    }
}

