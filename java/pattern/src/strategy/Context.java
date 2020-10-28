package strategy;

/**
 * 负责和具体的策略交互
 * 这样的话，具体的算法的调用和客户端分离了，使得算法可以独立与客户端独立的变化
 * 如果使用spring的依赖注入功能，还可以通过配置文件，动态的注入不同的策略对象，动态切换不同算法
 */
public class Context {
    // 当前采用的算法对象
    private Strategy strategy;

    // 可以用构造器来注入
    public Context(Strategy strategy) {
        this.strategy = strategy;
    }

    // 可以通过set方法来注入
    public void setStrategy(Strategy strategy) {
        this.strategy = strategy;
    }

    public void printPrice(double s) {
        System.out.println("您的报价：" + strategy.getPrice(s));
    }
}
