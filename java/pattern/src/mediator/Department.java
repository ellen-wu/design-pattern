package mediator;

// 同事类的接口
public interface Department {
    // 做部门的事情
    void selfAction();
    // 向总经理发送申请
    void outAction();
}
