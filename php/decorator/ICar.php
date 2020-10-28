<?php

/**
 * 抽象构件
 */
interface ICar
{
    public function move();
}

/**
 * 具体构件对象（真实对象）
 */
class Car implements ICar
{
    public function move()
    {
        echo '陆地上跑', PHP_EOL;
    }
}

/**
 * Decorator 装饰角色
 */
class SuperCar implements ICar
{
    protected $iCar;

    public function __construct($car)
    {
        $this->iCar = $car;
    }

    public function move()
    {
        $this->iCar->move();
    }
}

/**
 * ConcreteDecorator具体装饰角色
 */
class FlyCar extends SuperCar
{
    public function fly()
    {
        echo '天上飞', PHP_EOL;
    }

    public function move()
    {
        $this->iCar->move();

        $this->fly();
    }
}



/**
 * ConcreteDecorator具体装饰角色
 */
class WaterCar extends SuperCar
{
    public function water()
    {
        echo '水上漂', PHP_EOL;
    }

    public function move()
    {
        $this->iCar->move();

        $this->water();
    }
}



/**
 * ConcreteDecorator具体装饰角色
 */
class AICar extends SuperCar
{
    public function autoMove()
    {
        echo '智能驾驶，自动在陆地上跑！', PHP_EOL;
    }

    public function move()
    {
        $this->iCar->move();

        $this->autoMove();
    }
}
