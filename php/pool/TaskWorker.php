<?php


class TaskWorker
{
    private $createTime;

    public function __construct()
    {
        $this->createTime = time();
    }
}
