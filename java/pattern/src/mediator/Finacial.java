package mediator;

public class Finacial implements Department {
    // 持有中介者（总经理）的引用
    private Mediator m;

    public Finacial(Mediator m) {
        this.m = m;
        m.register("finacial", this);
    }

    @Override
    public void selfAction() {
        System.out.println("我在整理财务报表！");
    }

    @Override
    public void outAction() {
        System.out.println("汇报工作！资金充足，可以考虑新的方向");
    }
}
