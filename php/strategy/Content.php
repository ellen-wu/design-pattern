<?php

/**
 * 负责和具体的策略交互
 * 这样的话，具体的算法的调用和客户端分离了，使得算法可以独立与客户端独立的变化
 */
class Content
{
    // 当前采用的算法对象
    private $strategy;

    public function __construct($strategy)
    {
        $this->strategy = $strategy;
    }

    public function setStrategy($strategy)
    {
        $this->strategy = $strategy;
    }

    public function printPrice($standerPrice)
    {
        $price = $this->strategy->getPrice($standerPrice);

        echo '您的报价：', $price, PHP_EOL;
    }
}



