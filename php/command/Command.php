<?php

interface Command
{
    public function execute();
}


class ConcreteCommand implements Command
{
    private $receiver;

    public function __construct($r)
    {
        $this->receiver = $r;
    }

    public function execute()
    {
        // 命令真正执行前或后，执行相关的处理！
        $this->receiver->action();
    }
}

