<?php

/**
 * 房间对象
 * 这里的上下文对象 可以理解成房间
 */

class Context
{
    private $state;

    public function setState($state)
    {
        echo '修改状态', PHP_EOL;

        $this->state = $state;

        $this->state->handle();
    }
}

