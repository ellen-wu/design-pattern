package observer;

import java.util.ArrayList;
import java.util.List;

public class Subject {
    protected List<Observer> list = new ArrayList<>();

    public void registerObserver(Observer observer) {
        list.add(observer);
    }
    public void removeObserver(Observer observer) {
        list.remove(observer);
    }

    // 通知所有观察者 更新状态
    public void notifyAllObserver() {
        for (Observer observer : list) {
            observer.update(this);
        }
    }
}
