package observer2;

import java.util.Observable;

/**
 * 目标对象
 */
public class ConcreteSubject extends Observable {
    private int state;

    public void set(int s) {
        // 目标对象发生改变
        state = s;

        // 表示目标对象已经做了更改
        setChanged();
        // 通知所有观察者
        notifyObservers(state);
    }

    public int getState() {
        return state;
    }

    public void setState(int state) {
        this.state = state;
    }
}
