package singleton;

/**
 * 静态内部类实现方式
 *
 */
public class SingletonDemo4 {
    private static class SingletonInstance {
        private static final SingletonDemo4 instance = new SingletonDemo4();
    }

    public static SingletonDemo4 getInstance() {
        return SingletonInstance.instance;
    }

    private SingletonDemo4() {}
}
