<?php

/**
 * 封装请假的基本信息
 */
class LeaveRequest
{
    private $empName;
    private $leaveDays;
    private $reason;


    public function __construct($empName, $leaveDays, $reason)
    {
        $this->empName = $empName;
        $this->leaveDays = $leaveDays;
        $this->reason = $reason;
    }

    public function getEmpName()
    {
        return $this->empName;
    }
    public function setEmpName($empName)
    {
        $this->empName = $empName;
    }

    public function getLeaveDays()
    {
        return $this->leaveDays;
    }
    public function setLeaveDays($leaveDays)
    {
        $this->leaveDays = $leaveDays;
    }

    public function getReason()
    {
        return $this->reason;
    }
    public function setReason($reason)
    {
        $this->reason = $reason;
    }
}
