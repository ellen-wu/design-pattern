<?php

include 'Leader.php';
include 'LeaveRequest.php';
include 'Director.php';
include 'Manager.php';
include 'GeneralManager.php';

/**
 * 责任链模式
 * 这里例举的是请假
 * 3天以下，主任审批
 * 10天以内，经理审批
 * 30天以内，总经理审批
 * 超过30天，直接不通过
 * 
 * 
 */

$d = new Director("张三");
$m = new Manager("李四");
$g = new GeneralManager("王五");


$d->setNextLeader($m);
$m->setNextLeader($g);

$request = new LeaveRequest('Tom', 10, 'go home');

$d->handleRequest($request);

