package templatemethod;

public class Client {
    public static void main(String[] args) {
        BankTemplate bankTemplate = new DrawMoney();

        bankTemplate.process();

        // 采用匿名内部类
        BankTemplate bankTemplate1 = new BankTemplate() {
            @Override
            public void transact() {
                System.out.println("我要存钱");
            }
        };

        bankTemplate1.process();

    }
}

class DrawMoney extends BankTemplate {

    @Override
    public void transact() {
        System.out.println("我要取款");
    }
}