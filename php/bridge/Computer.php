<?php

/**
 * 销售的电脑类型
 * 台式机
 * 笔记本
 */
class Computer
{
    protected $brand;

    public function __construct($brand)
    {
        $this->brand = $brand;
    }

    public function sale()
    {
        $this->brand->sale();
    }
}


class Desktop extends Computer
{
    public function sale()
    {
        $this->brand->sale();
        echo '销售台式机', PHP_EOL;
    }
}


class Laptop extends Computer
{
    public function sale()
    {
        $this->brand->sale();
        echo '销售笔记本', PHP_EOL;
    }
}

