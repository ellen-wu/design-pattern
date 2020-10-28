package factory.simplefactory;

public class Client {
    public static void main(String[] args) {
        Car c1 = CarFactory.createCar("audi");
        Car c2 = CarFactory.createCar("byd");

        c1.run();
        c2.run();
    }
}
