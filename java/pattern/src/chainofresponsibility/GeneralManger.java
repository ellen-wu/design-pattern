package chainofresponsibility;

/**
 * 主任类
 */
public class GeneralManger extends Leader {
    public GeneralManger(String name) {
        super(name);
    }

    @Override
    public void handleRequet(LeaveRequest request) {
        if (request.getLeaveDays() < 30) {
            System.out.println("员工：" + request.getEmpName() + "，请假天数：" + request.getLeaveDays() + "，理由：" + request.getReason());
            System.out.println("总经理：" + this.name + "，审批通过");
        } else {
            System.out.println("请假天数过长，不通过！");
        }
    }
}
