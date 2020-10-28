package builder;

public class SzAirShipBuilder implements AirShipBuilder {
    @Override
    public OrbitaModule builderOrbitaModule() {
        System.out.println("构建轨道舱");
        return new OrbitaModule("神州轨道舱");
    }

    @Override
    public Engine builderEngine() {
        System.out.println("构建发动机");
        return new Engine("神州发动机");
    }

    @Override
    public EscapeTower builderEscapeTower() {
        System.out.println("构建逃逸塔");
        return new EscapeTower("神州逃逸塔");
    }
}
