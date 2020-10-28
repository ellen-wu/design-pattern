<?php

class OldCustormerManyStrategy implements Strategy
{
    public function getPrice($standerPrice)
    {
        echo '老客户大批量需求，打八折', PHP_EOL;
        return $standerPrice * 0.8;
    }
}
