package singleton;

import java.util.concurrent.CountDownLatch;

public class Client3 {
    public static void main(String[] args) throws Exception {

        long start = System.currentTimeMillis();

        int threadNum = 10;
        final CountDownLatch countDownLatch = new CountDownLatch(threadNum);

        for (int i = 0; i < threadNum; i++) {
            new Thread(new Runnable() {
                @Override
                public void run() {
                    for (int i = 0; i < 100000; i++) {
                        Object o = SingletonDemo1.getInstance();
                    }

                    countDownLatch.countDown();
                }
            }).start();
        }

        // main线程阻塞，直到计数器变为0，才会继续往下执行！
        countDownLatch.await();

        long end = System.currentTimeMillis();

        System.out.println("总耗时：" + (end - start));
    }
}
