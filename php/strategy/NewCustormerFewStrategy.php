<?php

class NewCustormerFewStrategy implements Strategy
{
    public function getPrice($standerPrice)
    {
        echo '新客户小批量需求，不打折', PHP_EOL;
        return $standerPrice;
    }
}
