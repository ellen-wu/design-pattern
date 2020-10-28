<?php

// include 'CarFactory.php';

// include 'Engine.php';
// include 'Seat.php';
// include 'Tyre.php';

class LowFactory implements CarFactory
{
    public function createEngine()
    {
        return new LowEngine();
    }

    public function createSeat()
    {
        return new LowSeat();
    }

    public function createTyre()
    {
        return new LowTyre();
    }
}

