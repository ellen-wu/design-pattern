package iterator;

public interface MyIterator {
    // 将游标指向第一个
    void first();
    // 将游标指向下一个
    void next();
    // 判断是否存在下一个
    boolean hasNext();
    boolean isFirst();
    boolean isLast();
    // 获取当前游标指向的对象
    Object getCurrentObj();
}
