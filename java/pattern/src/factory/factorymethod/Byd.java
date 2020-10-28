package factory.factorymethod;

public class Byd implements Car {
    @Override
    public Byd run() {
        System.out.println("比亚迪再跑！");
        return null;
    }
}
