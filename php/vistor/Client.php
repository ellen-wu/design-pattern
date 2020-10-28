<?php

include 'Message.php';
include 'ServiceVisitor.php';
include 'ObjectStructure.php';

/**
 * 访问者模式
 * 开发中的场景（应用访问非常窄，了解即可）
 *
 * 角色
 *     抽象访问者角色(Visitor)：为该对象结构(ObjectStructure)中的每一个具体元素提供一个访问操作接口。该操作接口的名字和参数标识了 要访问的具体元素角色。这样访问者就可以通过该元素角色的特定接口直接访问它。
        具体访问者角色(ConcreteVisitor)：实现抽象访问者角色接口中针对各个具体元素角色声明的操作。
        抽象节点（Node）角色：该接口定义一个accept操作接受具体的访问者。
        具体节点（Node）角色：实现抽象节点角色中的accept操作。
        对象结构角色(ObjectStructure)：这是使用访问者模式必备的角色。它要具备以下特征：能枚举它的元素；可以提供一个高层的接口以允许该访问者访问它的元素；可以是一个复合（组合模式）或是一个集合，如一个列表或一个无序集合(在PHP中我们使用数组代替，因为PHP中的数组本来就是一个可以放置任何类型数据的集合)
 */

$obj = new ObjectStructure();

$obj->attach(new PushMessage());
$obj->attach(new SendMessage());

$obj->accept(new Aliyun());
$obj->accept(new Jiguang());

