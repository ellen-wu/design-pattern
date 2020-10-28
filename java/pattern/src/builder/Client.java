package builder;

public class Client {
    public static void main(String[] args) {
        AirShipDirector director = new SzAirShipDirector(new SzAirShipBuilder());

        AirShip ship = director.directorAirShip();

        System.out.println(ship.getEngine());
    }
}
