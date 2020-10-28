package factory.abstractfactory;

/**
 * 高端汽车
 */
public class LuxuryFactory implements CarFactory {

    @Override
    public Engine createEngine() {
        return new LuxuryEngine();
    }

    @Override
    public Seat createSeat() {
        return new LuxurySeat();
    }

    @Override
    public Tyre creatTyre() {
        return new LuxuryTyre();
    }
}
