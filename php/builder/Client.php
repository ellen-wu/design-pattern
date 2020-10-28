<?php

/**
 * 建造者模式
 * 分离了对象子组件的单独构造（由Builder来负责）和装配（由Director负责）。从而可以构造出复杂的对象。这个模式适用于：某个对象的构建过程复杂的情况下使用。
 * 由于实现了构造和装配的解耦。不同的构造器，相同的装配。也可以做出不同的对象；相同的构建器，不同的装配顺序也可以做出不同对象。也就是实现了构建算法、装配算法的解耦，实现了更好的复用。
 */
include 'AirShip.php';
include 'SzAirShipBuilder.php';
include 'SzAirShipDirector.php';

$director = new SzAirShipDirector(new SzAirShipBuilder());

$ship = $director->directorAirShip();

var_dump($ship);

