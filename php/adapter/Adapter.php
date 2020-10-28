<?php

/**
 * 类适配器
 */
class Adapter extends Adaptee implements Target
{
    public function handleReq()
    {
        $this->request();
    }
}



