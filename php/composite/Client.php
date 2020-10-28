<?php

include 'Component.php';
include 'AbstractFile.php';

/**
 * 这里模拟的 “杀毒”
 *
 * 把部分和整体的关系用树形结构来表示，从而使客户端可以使用统一的方式处理部分对象和整体对象
 *
 */

$f1 = new Folder("我的收藏");

$f2 = new ImageFile("avator.jpg");
$f3 = new TextFile("my.txt");

$f1->add($f2);
$f1->add($f3);

$f11 = new Folder("电影");

$f4 = new VideoFile("我是传奇.mp4");
$f5 = new VideoFile("变形精钢.mp4");

$f11->add($f4);
$f11->add($f5);

$f1->add($f11);

$f1->killVirus();
