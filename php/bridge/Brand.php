<?php

/**
 * 销售的电脑品牌
 */
interface Brand
{
    public function sale();
}

class Lenovo implements Brand
{
    public function sale()
    {
        echo '销售联想电脑', PHP_EOL;
    }
}

class Dell implements Brand
{
    public function sale()
    {
        echo '销售戴尔电脑', PHP_EOL;
    }
}


