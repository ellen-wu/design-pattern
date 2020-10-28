package factory.abstractfactory;

public class Client {
    public static void main(String[] args) {
        CarFactory factory = new LuxuryFactory();
        Engine e = factory.createEngine();

        e.run();
        e.start();
    }
}
