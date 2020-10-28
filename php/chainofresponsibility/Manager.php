<?php

/**
 * 经理
 */
class Manager extends Leader
{
    public function handleRequest($request)
    {
        if ($request->getLeaveDays() < 10) {
            echo '员工：' . $request->getEmpName() . '，请假天数：' . $request->getLeaveDays() . '，理由：' .
                $request->getReason(), PHP_EOL;

            echo '经理：' . $this->name . '审批通过', PHP_EOL;
        } else {
            if ($this->nextLeader != null) {
                $this->nextLeader->handleRequest($request);
            }
        }
    }
}
