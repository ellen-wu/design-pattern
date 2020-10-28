<?php

/**
 * 多例模式是指存在一个类有多个相同实例，而且该实例都是该类本身。多例类必须自己创建、股那里自己的实例，并向外界提供自己的实例
 *
 * 例如
 *     2个数据库连接器，比如一个Mysql，一个SQLite
 *     多个记录器（一个记录调试消息，一个记录错误）
 */
include 'Multiton.php';

$obj = Multiton::getInstance('mysql');

$obj2 = Multiton::getInstance('sqlite');

$obj->getName();

echo "<br/>";
$obj2->getName();
