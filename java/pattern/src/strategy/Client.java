package strategy;

public class Client {
    public static void main(String[] args) {
        Strategy s1 = new OldCustormerManyStrategy();

        Context c = new Context(s1);

        c.printPrice(999);
    }
}
