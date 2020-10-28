<?php

include 'AudiFactory.php';
include 'BydFactory.php';

/**
 * 工厂方法 会生成太多的类
 */

$obj = (new AudiFactory())->createCar();
$obj2 = (new BydFactory())->createCar();


$obj->run();

echo '<br/>';

$obj2->run();


