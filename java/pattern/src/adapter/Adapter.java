package adapter;

/**
 * 适配器本身（类适配器）
 * Usb与ps/2的转接器
 */
public class Adapter extends Adaptee implements Target{
    @Override
    public void handleReq() {
        super.request();
    }
}
