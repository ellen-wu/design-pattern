<?php

/**
 * 去银行办理业务模板
 */
abstract class BankTemplate
{
    /**
     * 具体方法
     * @return [type] [description]
     */
    public function takeNumber()
    {
        echo '取号排队', PHP_EOL;
    }

    /**
     * 具体办理的业务 钩子方法
     * @return [type] [description]
     */
    abstract public function transact();

    public function evalution()
    {

        echo '反馈评分', PHP_EOL;
    }

    /**
     * 模板方法
     */
    public function process()
    {
        $this->takeNumber();
        $this->transact();
        $this->evalution();
    }
}
