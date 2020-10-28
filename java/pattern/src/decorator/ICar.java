package decorator;

/**
 * 抽象构件
 */
public interface ICar {
    void move();
}

/**
 * 具体构件对象（真实对象）
 */
class Car implements ICar {

    @Override
    public void move() {
        System.out.println("陆地上跑");
    }
}

/**
 * Decorator 装饰角色
 */
class SuperCar implements ICar {
    protected ICar car;

    public SuperCar(ICar car) {
        this.car = car;
    }

    @Override
    public void move() {
        car.move();
    }
}


/**
 * ConcreteDecorator具体装饰角色
 */
class FlyCar extends SuperCar {

    public FlyCar(ICar car) {
        super(car);
    }

    public void fly() {
        System.out.println("天上飞！");
    }

    @Override
    public void move() {
        super.move();
        fly();
    }
}



/**
 * ConcreteDecorator具体装饰角色
 */
class WaterCar extends SuperCar {

    public WaterCar(ICar car) {
        super(car);
    }

    public void swim() {
        System.out.println("水上漂！");
    }

    @Override
    public void move() {
        super.move();
        swim();
    }
}


/**
 * ConcreteDecorator具体装饰角色
 */
class AICar extends SuperCar {

    public AICar(ICar car) {
        super(car);
    }

    public void autoMove() {
        System.out.println("智能驾驶，自动在陆地上跑！");
    }

    @Override
    public void move() {
        super.move();
        autoMove();
    }
}
