<?php

include 'Brand.php';
include 'Computer.php';

/**
 * 这里是模拟的销售电脑 电脑有台式机笔记本 有品牌联想戴尔
 * 
 * 桥接模式 主要用于处理多层继承结构，处理多维度变化的场景，将各个维度设计成独立的集成结构，使各个维度可以独立的扩展在抽象层建立关联
 * 
 */

// 销售联想笔记本

$c = new Laptop(new Lenovo());
$c->sale();
