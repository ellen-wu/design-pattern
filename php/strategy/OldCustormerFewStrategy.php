<?php

class OldCustormerFewStrategy implements Strategy
{
    public function getPrice($standerPrice)
    {
        echo '老客户小批量需求，打八五折', PHP_EOL;
        return $standerPrice * 0.85;
    }
}
