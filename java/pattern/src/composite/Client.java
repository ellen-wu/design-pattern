package composite;

public class Client {
    public static void main(String[] args) {
        AbstractFile f2,f3,f4,f5,f6;
        Folder f1 = new Folder("我的收藏");
        f2 = new ImageFile("avator.jpg");
        f3 = new TextFile("my.txt");

        f1.add(f2);
        f1.add(f3);

        Folder f11 = new Folder("电影");
        f4 = new VideoFile("我是传奇.mp4");
        f5 = new VideoFile("海上钢琴师.avi");

        f11.add(f4);
        f11.add(f5);

        f1.add(f11);

        f1.killVirus();
    }
}
