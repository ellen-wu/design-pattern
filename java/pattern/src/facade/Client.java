package facade;

public class Client {
    public static void main(String[] args) {

        // 不是用外观模式
//        Step1 s1 = new Step1();
//        s1.register();
//        Step2 s2 = new Step2();
//        s2.register();
//        Step3 s3 = new Step3();
//        s3.register();

        // 使用外观模式
        new RegisterFacade().register();
    }
}
