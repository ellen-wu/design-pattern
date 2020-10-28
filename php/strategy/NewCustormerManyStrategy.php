<?php

class NewCustormerManyStrategy implements Strategy
{
    public function getPrice($standerPrice)
    {
        echo '新客户大批量需求，打九折', PHP_EOL;
        return $standerPrice * 0.9;
    }
}
