package prototype;

import java.io.*;
import java.util.Date;

/**
 * 原型模式 深复制
 */
public class Client3 {
    public static void main(String[] args) throws CloneNotSupportedException, IOException, ClassNotFoundException {
        Date date = new Date(121212212L);
        Sheep s1 = new Sheep("Lili", date);

        System.out.println(s1);
        System.out.println(s1.getSname());
        System.out.println(s1.getBirthday());

        ByteArrayOutputStream bos = new ByteArrayOutputStream();
        ObjectOutputStream oos = new ObjectOutputStream(bos);
        oos.writeObject(s1);
        byte[] bytes = bos.toByteArray();

        ByteArrayInputStream bis = new ByteArrayInputStream(bytes);
        ObjectInputStream ois = new ObjectInputStream(bis);

        Sheep s2 = (Sheep) ois.readObject();

        date.setTime(23232323232223L);
        System.out.println(s1.getBirthday());

        System.out.println(s2.getBirthday());

    }
}
