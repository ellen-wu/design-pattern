<?php

/**
 * 同事类的接口
 */
interface Department
{
    /**
     * 做部门的事情
     * @return [type] [description]
     */
    public function selfAction();

    /**
     * 向总经理发送申请
     * @return [type] [description]
     */
    public function outAction();
}

