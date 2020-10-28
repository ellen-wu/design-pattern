<?php

/**
 * 总经理
 */
class GeneralManager extends Leader
{
    public function handleRequest($request)
    {
        if ($request->getLeaveDays() < 30) {
            echo '员工：' . $request->getEmpName() . '，请假天数：' . $request->getLeaveDays() . '，理由：' .
                $request->getReason(), PHP_EOL;

            echo '总经理：' . $this->name . '审批通过', PHP_EOL;
        } else {
            echo '请假天数过长，不通过！', PHP_EOL;
        }
    }
}
