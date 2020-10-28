<?php

/**
 * 汽车座椅
 */

interface Tyre
{
    public function revolve();
}

/**
 * 高级车的座椅
 */
class LuxuryTyre implements Tyre {
    public function revolve()
    {
        echo '耐磨损';
    }
}


class LowTyre implements Tyre {
    public function revolve()
    {
        echo '磨损快';
    }
}


