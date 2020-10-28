package prototype;

import java.util.Date;

/**
 * 浅克隆
 */
public class Client {
    public static void main(String[] args) throws CloneNotSupportedException {
        Date date = new Date(121212212L);
        Sheep s1 = new Sheep("Lili", date);

        System.out.println(s1);
        System.out.println(s1.getSname());
        System.out.println(s1.getBirthday());

        // 修改date后 会影响s2
        date.setTime(23232323232223L);

        Sheep s2 = (Sheep) s1.clone();
        System.out.println(s2);
        System.out.println(s2.getSname());
        System.out.println(s2.getBirthday());
    }
}
