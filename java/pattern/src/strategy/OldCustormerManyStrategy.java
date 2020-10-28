package strategy;

public class OldCustormerManyStrategy implements Strategy {
    @Override
    public double getPrice(double stardarPrice) {
        System.out.println("打八折");
        return stardarPrice * 0.8;
    }
}
