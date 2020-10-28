<?php

include 'Star.php';
include 'ProxyStar.php';
include 'RealStar.php';

/**
 * 这里模拟的是经纪人与明星
 * @var RealStar
 */
$real = new RealStar();

$proxy = new ProxyStar($real);

$proxy->confer();
$proxy->signContract();
$proxy->bookTicket();
$proxy->sing();
$proxy->collectMoney();
