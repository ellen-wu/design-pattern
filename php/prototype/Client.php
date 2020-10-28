<?php

include 'ConcretePrototype.php';


class Client
{
    public $name;
}


$c1 = new Client();
$c1->name = 'ellen';

$p1 = new ConcretePrototype($c1);
$clone1 = $p1->shallowCopy();

var_dump($p1->getName());

echo "<br/>";
var_dump($clone1->getName());

$c1->name = 'haha';

echo "<br/>";
var_dump($p1->getName());

echo "<br/>";
var_dump($clone1->getName());

echo "<br/>";
echo '<hr/>';




$c1 = new Client();
$c1->name = 'ellen';

$p1 = new ConcretePrototype($c1);
$clone1 = $p1->deepCopy();

var_dump($p1->getName());

echo "<br/>";
var_dump($clone1->getName());

$c1->name = 'haha';

echo "<br/>";
var_dump($p1->getName());

echo "<br/>";
var_dump($clone1->getName());

