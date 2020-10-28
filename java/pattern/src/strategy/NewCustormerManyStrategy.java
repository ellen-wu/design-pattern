package strategy;

public class NewCustormerManyStrategy implements Strategy {
    @Override
    public double getPrice(double stardarPrice) {
        System.out.println("打九折");
        return stardarPrice * 0.9;
    }
}
