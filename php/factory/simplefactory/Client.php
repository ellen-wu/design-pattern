<?php

include 'CarFactory.php';


$obj = CarFactory::createCar("audi");

$obj->run();

echo '<br/>';

$obj2 = CarFactory::createCar("byd");

$obj2->run();
