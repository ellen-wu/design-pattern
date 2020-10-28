<?php

class CheckedInState implements State
{
    public function handle()
    {
        echo '房间已入住，请勿打扰', PHP_EOL;
    }
}
