<?php

include 'Receiver.php';
include 'Command.php';
include 'Invoke.php';

/**
 * 命令模式
 * 结构
        Command抽象命令类
        ConcreteCommand具体命令类
        Invoker调用者/请求者
            请求的发送者，它通过过命令对象来执行请求。一个调用者并不需要在设计时确定其接收者，因此它只与抽象命令类之间存在关联。在程序运行时，将调用命令对象的execute()，间接调用接收者的相关操作
        Receiver接收者
            接收者执行与请求相关的操作，具体实现对请求的业务处理
            未抽象前，实际执行操作内容的对象
        Client
            在客户类中需要创建调用者对象、具体命令类对象，在创建具体命令对象时指定对应的接收者。发送者和接收者之间没有直接关系，都通过命令对象间接调用

 *
 */
$c = new ConcreteCommand(new Receiver());

$invoke = new Invoke($c);

$invoke->call();
