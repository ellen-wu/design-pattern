package memento;

public class Client {
    public static void main(String[] args) {
        CareTaker taker = new CareTaker();

        Emp emp = new Emp("ellen", 28, 800);

        System.out.println("第一次打印对象：" + emp.getName() + "，年龄：" + emp.getAge() + "，工资：" + emp.getSalary());

        // 备忘一次
        taker.setMemento(emp.memento());

        emp.setAge(30);
        emp.setName("haha");
        emp.setSalary(1000);

        System.out.println("第二次打印对象：" + emp.getName() + "，年龄：" + emp.getAge() + "，工资：" + emp.getSalary());

        emp.recovery(taker.getMemento());

        System.out.println("第三次打印对象：" + emp.getName() + "，年龄：" + emp.getAge() + "，工资：" + emp.getSalary());

    }
}
