<?php

/**
 * 汽车座椅
 */

interface Seat
{
    public function massage();
}

/**
 * 高级车的座椅
 */
class LuxurySeat implements Seat {
    public function massage()
    {
        echo '可以按摩';
    }
}


class LowSeat implements Seat {
    public function massage()
    {
        echo '硬座';
    }
}


