<?php

abstract class Leader
{
    protected $name;
    // 责任链后继对象
    protected $nextLeader;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getNextLeader()
    {
        return $this->nextLeader;
    }

    /**
     * 设置责任链后继对象
     * @param [type] $nextLeader [description]
     */
    public function setNextLeader($nextLeader)
    {
        $this->nextLeader = $nextLeader;
    }

    public abstract function handleRequest($request);
}
