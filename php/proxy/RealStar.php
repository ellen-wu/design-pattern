<?php

/**
 * 真实明星
 * 
 */
class RealStar implements Star
{
    // 面谈
    public function confer()
    {
        echo 'real.confer', PHP_EOL;
    }
    // 签合同
    public function signContract()
    {
        echo 'real.signContract', PHP_EOL;
    }
    // 订票
    public function bookTicket()
    {
        echo 'real.bookTicket', PHP_EOL;
    }
    // 唱歌
    public function sing()
    {
        echo '真实明星，唱歌！', PHP_EOL;
    }
    // 收钱
    public function collectMoney()
    {
        echo 'proxy.collectMoney', PHP_EOL;
    }
}
