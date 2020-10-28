package factory.abstractfactory;

public interface Tyre {
    void revolve();
}

class LuxuryTyre implements Tyre {

    @Override
    public void revolve() {
        System.out.println("耐磨损");
    }
}

class LowTyre implements Tyre {

    @Override
    public void revolve() {
        System.out.println("磨损快");
    }
}
