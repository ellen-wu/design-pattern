<?php

/**
 * 汽车引擎
 */

interface Engine
{
    public function run();
    public function start();
}

/**
 * 高级车的引擎
 */
class LuxuryEngine implements Engine {
    public function run()
    {
        echo '转速快';
    }

    public function start()
    {
        echo  '启动快！可以自动启停！';
    }
}


class LowEngine implements Engine {
    public function run()
    {
        echo '转速慢';
    }

    public function start()
    {
        echo  '启动慢！';
    }
}


