<?php

class FreeState implements State
{
    public function handle()
    {
        echo '房间空闲，暂无入住', PHP_EOL;
    }
}
