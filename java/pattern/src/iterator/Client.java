package iterator;

public class Client {
    public static void main(String[] args) {
        ConcreteMyAggregate c = new ConcreteMyAggregate();
        c.addObject("aa");
        c.addObject("bb");
        c.addObject("cc");

        MyIterator i = c.createIterator();

        while (i.hasNext()) {
            System.out.println(i.getCurrentObj());
            i.next();
        }
    }
}
