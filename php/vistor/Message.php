<?php

interface Message
{
    public function msg($visitor);
}

class PushMessage implements Message
{
    public function msg($visitor)
    {
        echo '推送服务启动';
        $visitor->pushMsg($this);
    }
}

class SendMessage implements Message
{
    public function msg($visitor)
    {
        echo '短信服务启动';
        $visitor->sendMsg($this);
    }
}

