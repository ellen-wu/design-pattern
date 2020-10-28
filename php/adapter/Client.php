<?php

include 'Target.php';
include 'Adaptee.php';
include 'Adapter.php';
include 'Adapter2.php';


// 类适配器
$a = new Adapter();

$a->handleReq();


echo  '<hr/>';

// 对象适配器
$a2 = new Adapter2(new Adaptee());

$a2->handleReq();

