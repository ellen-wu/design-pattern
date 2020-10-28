package singleton;

/**
 * 双重检测锁实现
 *
 * 由于JVM底层内部模型原因，偶尔会出问题。不建议使用
 */
public class SingletonDemo3 {
    private SingletonDemo3() {}

    private static SingletonDemo3 instance = null;

    public static SingletonDemo3 getInstance() {
        if (instance == null) {
            SingletonDemo3 sc;
            synchronized (SingletonDemo3.class) {
                sc = instance;
                if (sc == null) {
                    synchronized (SingletonDemo3.class) {
                        if (sc == null) {
                            sc = new SingletonDemo3();
                        }
                    }
                    instance = sc;
                }
            }
        }

        return instance;
    }
}
