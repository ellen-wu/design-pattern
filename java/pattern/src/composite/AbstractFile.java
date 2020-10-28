package composite;

import java.util.ArrayList;
import java.util.List;

/**
 * 抽象构件
 */
public interface AbstractFile {
    void killVirus(); // 杀毒
}

class ImageFile implements AbstractFile {

    private String name;

    public ImageFile(String name) {
        this.name = name;
    }

    @Override
    public void killVirus() {
        System.out.println("对图像文件：" + name + "，进行查杀！");
    }
}


class TextFile implements AbstractFile {

    private String name;

    public TextFile(String name) {
        this.name = name;
    }

    @Override
    public void killVirus() {
        System.out.println("对文本文件：" + name + "，进行查杀！");
    }
}


class VideoFile implements AbstractFile {

    private String name;

    public VideoFile(String name) {
        this.name = name;
    }

    @Override
    public void killVirus() {
        System.out.println("对视频文件：" + name + "，进行查杀！");
    }
}

class Folder implements AbstractFile {

    private String name;
    // 定义容器，用来存放本容器构件下的子节点
    private List<AbstractFile> list = new ArrayList<AbstractFile>();

    public Folder(String name) {
        this.name = name;
    }

    public void add(AbstractFile file) {
        list.add(file);
    }


    public void remove(AbstractFile file) {
        list.remove(file);
    }

    public AbstractFile getChild(int index) {
        return list.get(index);
    }

    @Override
    public void killVirus() {
        System.out.println("文件夹：" + name + "，进行查杀！");

        for (AbstractFile file: list) {
            file.killVirus();
        }
    }
}