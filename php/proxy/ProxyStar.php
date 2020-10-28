<?php

/**
 * 代理明星接口
 * 经纪人
 */
class ProxyStar implements Star
{
    private $star;

    public function __construct($star)
    {
        $this->star = $star;
    }

    // 面谈
    public function confer()
    {
        echo 'proxy.confer', PHP_EOL;
    }
    // 签合同
    public function signContract()
    {
        echo 'proxy.signContract', PHP_EOL;
    }
    // 订票
    public function bookTicket()
    {
        echo 'proxy.bookTicket', PHP_EOL;
    }
    // 唱歌 需要真实明星来唱歌
    public function sing()
    {
        $this->star->sing();
    }
    // 收钱
    public function collectMoney()
    {
        echo 'proxy.collectMoney', PHP_EOL;
    }
}
