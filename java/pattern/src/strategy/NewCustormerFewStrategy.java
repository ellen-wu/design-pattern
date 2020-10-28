package strategy;

public class NewCustormerFewStrategy implements Strategy {
    @Override
    public double getPrice(double stardarPrice) {
        System.out.println("不打折，原价");
        return stardarPrice;
    }
}
