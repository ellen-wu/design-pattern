package factory.factorymethod;

public class Audi implements Car {
    @Override
    public Byd run() {
        System.out.println("奥迪再跑！");
        return null;
    }
}
