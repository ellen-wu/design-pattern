<?php

include 'Coordinate.php';
include 'ChessFlyWeight.php';
include 'ChessFlyWeightFactory.php';

/**
 * 这里模拟的是围棋中的棋子
 * 棋子有只有2种颜色，不同的是位置
 * 位置不共享  棋子颜色共享
 */

$chess1 = ChessFlyWeightFactory::getChess("黑色");
$chess2 = ChessFlyWeightFactory::getChess("白色");

echo "增加外部状态的处理----<hr/>";

$chess1->display(new Coordinate(10, 10));
$chess2->display(new Coordinate(20, 15));
