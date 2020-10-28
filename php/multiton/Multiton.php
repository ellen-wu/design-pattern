<?php

class Multiton
{
    private $name;
    private static $instances = [];

    public static function getInstance($instanceName)
    {
        if (!isset(self::$instances[$instanceName])) {
            self::$instances[$instanceName] = new self($instanceName);
        }
        return self::$instances[$instanceName];
    }

    /**
     * 防止被继承
     */
    private function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * 防止创建副本
     * @return [type] [description]
     */
    private function __clone()
    {
    }

    /**
     * 防止反序列化
     */
    private function __wakeup()
    {
    }

    public function getName()
    {
        echo $this->name;
    }
}





