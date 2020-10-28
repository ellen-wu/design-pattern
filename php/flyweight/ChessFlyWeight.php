<?php

/**
 * 享元类
 *
 * 围棋 棋子颜色
 */
interface ChessFlyWeight
{
    public function setColor($color);
    public function getColor();

    public function display($coordinate);
}

/**
 * 具体享元类
 */
class ConcreteChess implements ChessFlyWeight
{
    private $color;

    public function __construct($color)
    {
        $this->color = $color;
    }
    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function display($coordinate)
    {
        echo "棋子颜色：", $this->color, PHP_EOL;
        echo "棋子位置：", $coordinate->getX(), "---", $coordinate->getY();
    }
}
