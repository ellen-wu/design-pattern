package chainofresponsibility;

/**
 * 抽象类
 */
public abstract class Leader {
    protected String name;
    // 责任链后继对象
    protected Leader nextLeader;

    public Leader(String name) {
        this.name = name;
    }

    public Leader getNextLeader() {
        return nextLeader;
    }
    // 设置责任链后继对象
    public void setNextLeader(Leader nextLeader) {
        this.nextLeader = nextLeader;
    }

    // 处理请求的核心的业务方法
    public abstract void handleRequet(LeaveRequest request);
}
