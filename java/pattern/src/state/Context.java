package state;

/**
 * 房间对象
 * 这里的上下文对象 可以理解成房间
 */
public class Context {
    private State state;

    public void setState(State state) {
        System.out.println("修改状态");
        this.state = state;

        this.state.handle();
    }
}
