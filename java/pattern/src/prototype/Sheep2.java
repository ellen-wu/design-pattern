package prototype;

import java.util.Date;

public class Sheep2 implements Cloneable {
    private String sname;
    private Date birthday;

    public Sheep2(String sname, Date birthday) {
        this.sname = sname;
        this.birthday = birthday;
    }

    @Override
    protected Object clone() throws CloneNotSupportedException {
        // 直接调用Object的clone方法
        Object obj = super.clone();

        // 添加如下代码实现 深复制
        Sheep2 s = (Sheep2) obj;
        // 属性也克隆
        s.birthday = (Date) this.birthday.clone();

        return obj;
    }

    public String getSname() {
        return sname;
    }

    public void setSname(String sname) {
        this.sname = sname;
    }

    public Date getBirthday() {
        return birthday;
    }

    public void setBirthday(Date birthday) {
        this.birthday = birthday;
    }
}
