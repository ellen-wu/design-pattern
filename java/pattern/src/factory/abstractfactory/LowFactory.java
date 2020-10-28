package factory.abstractfactory;

/**
 * 低端汽车
 */
public class LowFactory implements CarFactory {

    @Override
    public Engine createEngine() {
        return new LowEngine();
    }

    @Override
    public Seat createSeat() {
        return new LowSeat();
    }

    @Override
    public Tyre creatTyre() {
        return new LowTyre();
    }
}
