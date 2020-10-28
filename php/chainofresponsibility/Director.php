<?php

/**
 * 主任
 */
class Director extends Leader
{
    public function handleRequest($request)
    {
        if ($request->getLeaveDays() < 3) {
            echo '员工：' . $request->getEmpName() . '，请假天数：' . $request->getLeaveDays() . '，理由：' .
                $request->getReason(), PHP_EOL;

            echo '主任：' . $this->name . '审批通过', PHP_EOL;
        } else {
            if ($this->nextLeader != null) {
                $this->nextLeader->handleRequest($request);
            }
        }
    }
}
