package builder;

public class SzAirShipDirector implements AirShipDirector {
    private AirShipBuilder builder;

    public SzAirShipDirector(AirShipBuilder builder) {
        this.builder = builder;
    }

    @Override
    public AirShip directorAirShip() {
        Engine e = builder.builderEngine();
        OrbitaModule om = builder.builderOrbitaModule();
        EscapeTower et = builder.builderEscapeTower();

        // 装配成飞船对象
        AirShip ship = new AirShip();

        ship.setEngine(e);
        ship.setOrbitaModule(om);
        ship.setEscapeTower(et);

        return ship;
    }
}
