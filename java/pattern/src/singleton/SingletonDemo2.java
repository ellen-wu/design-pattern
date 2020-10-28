package singleton;

/**
 * 懒汉式
 */
public class SingletonDemo2 {
    private static SingletonDemo2 instance;

    // 私有化构造器
    private SingletonDemo2() {}

    // 延时加载 问题：资源利用率高了。但是每次调用getInstance方法都要同步，并发效率较低
    public static synchronized SingletonDemo2 getInstance() {
        if (instance == null) {
            instance = new SingletonDemo2();
        }

        return instance;
    }
}
