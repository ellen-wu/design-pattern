<?php

/**
 * 命令的发起者
 */
class Invoke
{
    // 也可以通过容器List<Command>容纳很多命令对象，进行批处理。数据库底层的事务管理就是类似的结构
    private $command;

    public function __construct($c)
    {
        $this->command = $c;
    }

    /**
     * 业务方法，用于调用命令类的方法
     */
    public function call()
    {
        $this->command->execute();
    }
}
