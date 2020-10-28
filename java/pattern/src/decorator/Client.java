package decorator;

public class Client {
    public static void main(String[] args) {
        Car car = new Car();

        car.move();

        System.out.println("增加新功能，飞行。。。。");

        FlyCar flyCar = new FlyCar(car);
        flyCar.move();

        System.out.println("增加新功能，水上漂。。。。");
        WaterCar waterCar = new WaterCar(flyCar);

        waterCar.move();
    }
}
