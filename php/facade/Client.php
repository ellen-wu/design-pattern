<?php

include 'Step1.php';
include 'Step2.php';
include 'Step3.php';
include 'RegisterFacade.php';

/**
 * 门面模式  实质上就是封装
 */

// 不使用门面模式
$s1 = new Step1();
$s1->register();

$s2 = new Step2();
$s2->register();

$s3 = new Step3();
$s3->register();

// 使用门面模式
$facade = new RegisterFacade();

$facade->register();
