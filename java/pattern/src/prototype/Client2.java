package prototype;

import java.util.Date;

/**
 * 原型模式 深复制
 */
public class Client2 {
    public static void main(String[] args) throws CloneNotSupportedException {
        Date date = new Date(121212212L);
        Sheep2 s1 = new Sheep2("Lili", date);

        // 实现深复制，s2的birthday是一个新对象
        Sheep2 s2 = (Sheep2) s1.clone();

        System.out.println(s1);
        System.out.println(s1.getSname());
        System.out.println(s1.getBirthday());

        date.setTime(23232323232223L);
        System.out.println(s1.getBirthday());

        System.out.println(s2);
        System.out.println(s2.getSname());
        System.out.println(s2.getBirthday());

    }
}
