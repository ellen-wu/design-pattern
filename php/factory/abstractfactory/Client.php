<?php

/**
 * 这里有“产品族”的概念
 *
 * 这里只是举例
 *
 * 汽车的 引擎 座椅 轮胎
 * 高级汽车使用 高级引擎 高级座椅 高级轮胎
 * 一般汽车使用 普通引擎 普通座椅 普通轮胎
 * 
 */
include 'LuxuryFactory.php';

$obj = new LuxuryFactory();

$engine = $obj->createEngine();

$engine->start();
$engine->run();
