<?php

include 'ICar.php';

$car = new Car();

$car->move();

$flyCar = new FlyCar($car);

$flyCar->move();

$waterCar = new WaterCar($flyCar);
$waterCar->move();
