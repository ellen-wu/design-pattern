package adapter;

/**
 * 被适配的类
 * （相当于PS/2键盘）
 * PS/2 转 USB
 */
public class Adaptee {
    public void request() {
        System.out.println("可以完成客户请求需要的功能！");
    }
}
