<?php


class Finacial implements Department
{
    // 持有中介者（总经理）的引用
    private $mediator;

    public function __construct($m)
    {
        $m->register('finacial', $this);
        $this->mediator = $m;
    }

    /**
     * 做部门的事情
     * @return [type] [description]
     */
    public function selfAction()
    {
        echo '我在整理财务报表!', PHP_EOL;
    }

    /**
     * 向总经理发送申请
     * @return [type] [description]
     */
    public function outAction()
    {
        echo '汇报工作！资金充足，可以考虑新的方向', PHP_EOL;
    }
}
