<?php

/**
 * 单例模式
 */
final class SingletonDemo1
{
    private static $instance;

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new SingletonDemo1();
        }
        return self::$instance;
    }

    /**
     * 防止被继承
     */
    private function __construct()
    {
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
}
