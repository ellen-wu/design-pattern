package strategy;

public class OldCustormerFewStrategy implements Strategy {
    @Override
    public double getPrice(double stardarPrice) {
        System.out.println("打八五折");
        return stardarPrice * 0.85;
    }
}
