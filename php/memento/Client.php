<?php

include 'Emp.php';
include 'EmpMemento.php';
include 'CareTaker.php';

$taker = new CareTaker();

$emp = new Emp('ellen', 28, 8000);

echo '第一次打印对象:', $emp->getName(), '，年龄：', $emp->getAge(), '，工资：', $emp->getSalary(), PHP_EOL;

// 备忘一次
$taker->setMemento($emp->memento());

$emp->setAge(30);
$emp->setName("haha");
$emp->setSalary(1000);

echo '第二次打印对象：', $emp->getName(), '，年龄：', $emp->getAge(), '，工资：', $emp->getSalary(), PHP_EOL;

$emp->recovery($taker->getMemento());

echo '第三次打印对象：', $emp->getName(), '，年龄：', $emp->getAge(), '，工资：', $emp->getSalary(), PHP_EOL;
