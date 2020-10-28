package observer;

public class ObserverA implements Observer {
    // myState需要跟目标对象的state值保持一致
    private int myState;

    @Override
    public void update(Subject s) {
        myState = ((ConcreteSubject) s).getState();
    }

    public int getMyState() {
        return myState;
    }

    public void setMyState(int myState) {
        this.myState = myState;
    }
}
