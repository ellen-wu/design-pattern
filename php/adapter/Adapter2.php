<?php

/**
 * 对象适配器
 */
class Adapter2 implements Target
{
    private $adapter;

    public function __construct($adapter)
    {
        $this->adapter = $adapter;
    }

    public function handleReq()
    {
        $this->adapter->request();
    }
}
