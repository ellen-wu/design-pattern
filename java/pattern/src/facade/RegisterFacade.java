package facade;

public class RegisterFacade {
    public void register() {
        Step1 s1 = new Step1();
        s1.register();
        Step2 s2 = new Step2();
        s2.register();
        Step3 s3 = new Step3();
        s3.register();
    }
}
