<?php

class BookedState implements State
{
    public function handle()
    {
        echo '房间已预定', PHP_EOL;
    }
}
