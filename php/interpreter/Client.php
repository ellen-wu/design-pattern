<?php

include 'Expression.php';
include 'AbstractInterpreter.php';
include 'ChineseInterpreter.php';
include 'Interpreter.php';

/**
 * 解释器模式
 * 是一种不常用的设计模式
        用于描述如何构成一个简单的语言解释器，主要用于使用面向对象语言开发的编译器和解释器设计
        当我们需要开发一种新语言时，可以考虑使用解释器模式
        尽量不要使用解释器模式，后期维护会有很大麻烦。在项目中，可以使用Jruby，Groovy、java的js引擎来替代解释器的作用，弥补java语言的不足
    
    角色：
    　　环境角色：定义解释规则的全局信息。
    　　抽象解释器：定义了部分解释具体实现，封装了一些由具体解释器实现的接口。
    　　具体解释器：实现抽象解释器的接口，进行具体的解释执行。

 */
$e = new Expression();

$e->content = ['Chinese', 3, 2, 4, 5, 8];

$i = new Interpreter($e);

$i->execute();


$e2 = new Expression();

$e2->content = ['English', 1, 3, 6, 8, 4];

$i2 = new Interpreter($e2);

$i2->execute();
