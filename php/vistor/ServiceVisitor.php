<?php

interface ServiceVisitor
{
    public function sendMsg($s);
    public function pushMsg($p);
}

class Aliyun implements ServiceVisitor
{
    public function sendMsg($s)
    {
        echo '阿里云发送短信', PHP_EOL;
    }

    public function pushMsg($p)
    {
        echo '阿里云推送短信', PHP_EOL;
    }
}


class Jiguang implements ServiceVisitor
{
    public function sendMsg($s)
    {
        echo '极光发送短信', PHP_EOL;
    }

    public function pushMsg($p)
    {
        echo '极光推送短信', PHP_EOL;
    }
}
