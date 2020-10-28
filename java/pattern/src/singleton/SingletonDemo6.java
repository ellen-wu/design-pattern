package singleton;

import java.io.ObjectOutputStream;
import java.io.ObjectStreamException;
import java.io.Serializable;

/**
 * 懒汉式
 */
public class SingletonDemo6 implements Serializable {
    private static SingletonDemo6 instance;

    // 私有化构造器
    private SingletonDemo6() {
        if (instance != null) {
            // 避免反序列化漏洞
            throw new RuntimeException();
        }
    }

    // 延时加载 问题：资源利用率高了。但是每次调用getInstance方法都要同步，并发效率较低
    public static synchronized SingletonDemo6 getInstance() {
        if (instance == null) {
            instance = new SingletonDemo6();
        }

        return instance;
    }

    // 反序列化时，如果定义了readResolve则直接返回此方法指定的对象。而不需要单独再创建对象！
    private Object readResolve() throws ObjectStreamException {
        return instance;
    }
}
