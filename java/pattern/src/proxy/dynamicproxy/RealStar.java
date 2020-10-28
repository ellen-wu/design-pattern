package proxy.dynamicproxy;

public class RealStar implements Star {
    @Override
    public void confer() {
        System.out.println("真实角色，面谈");
    }

    @Override
    public void signContract() {
        System.out.println("真实角色，签合同");
    }

    @Override
    public void bookTicket() {
        System.out.println("真实角色，订票");
    }

    @Override
    public void sing() {
        System.out.println("真实角色，唱歌");
    }

    @Override
    public void collectMoney() {
        System.out.println("真实角色，收钱");
    }
}
