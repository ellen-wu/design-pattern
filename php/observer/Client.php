<?php


include 'Observer.php';
include 'ObserverA.php';
include 'Subject.php';
include 'ConcreteSubject.php';

/**
 * 观察者模式
 */

// 目标对象
$subject = new ConcreteSubject();

// 创建多个观察者
$obs1 = new ObserverA();
$obs2 = new ObserverA();
$obs3 = new ObserverA();
$obs4 = new ObserverA();

// 将观察者添加到subject对象中
$subject->registerObserver($obs1);
$subject->registerObserver($obs2);
$subject->registerObserver($obs3);
$subject->registerObserver($obs4);


$subject->setState(3000);

echo $obs1->getMyState(), PHP_EOL;
echo $obs2->getMyState(), PHP_EOL;
echo $obs3->getMyState(), PHP_EOL;
echo $obs4->getMyState(), PHP_EOL;
