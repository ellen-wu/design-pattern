<?php


class Development implements Department
{
    // 持有中介者（总经理）的引用
    private $mediator;

    public function __construct($m)
    {
        $m->register('development', $this);
        $this->mediator = $m;
    }

    /**
     * 做部门的事情
     * @return [type] [description]
     */
    public function selfAction()
    {
        echo '专心科研，开发项目', PHP_EOL;
    }

    /**
     * 向总经理发送申请
     * @return [type] [description]
     */
    public function outAction()
    {
        echo '汇报工作！没钱了，需要资金支持！', PHP_EOL;
    }
}
