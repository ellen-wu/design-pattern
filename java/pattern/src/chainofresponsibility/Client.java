package chainofresponsibility;

public class Client {
    public static void main(String[] args) {
        Leader a = new Director("张三");
        Leader b = new Manager("李四");
        Leader c = new GeneralManger("王五");

        // 组织责任链对象的关系
        a.setNextLeader(b);
        b.setNextLeader(c);

        // 开始请假操作
        LeaveRequest request = new LeaveRequest("Tom", 10, "回家");

        a.handleRequet(request);
    }
}
