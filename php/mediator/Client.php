<?php

include 'Department.php';
include 'Development.php';
include 'Finacial.php';
include 'Market.php';
include 'Mediator.php';
include 'President.php';

/**
 * 中介者模式
 * 
 * 如果一个系统中对象之间的联系呈为网状结构，对象之间存在大量多对多关系，将导致关系及其复杂，这些对象成为“同事对象”
 * 我们可以引入一个中介者对象，使各个同事对象只跟中介者对象打交道，将复杂的网络结构化解为星状结构
 *
 * 
 */

$mediator = new President();

$m = new Market($mediator);

$d = new Development($mediator);

$f = new Finacial($mediator);

$m->selfAction();

$m->outAction();
