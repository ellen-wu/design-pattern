<?php

include 'Strategy.php';
include 'OldCustormerFewStrategy.php';
include 'OldCustormerManyStrategy.php';
include 'NewCustormerFewStrategy.php';
include 'NewCustormerManyStrategy.php';
include 'Content.php';

/**
 * 策略模式（strategy）
    场景
        某个市场人员接到单后的报价策略（CRM系统中常见问题）。报价策略很复杂，可以简单作如下分类
            普通客户小批量报价
            普通客户大批量报价
            老客户小批量报价
            老客户大批量报价

        具体选用哪个报价策略，者需要根据实际情况来确定。这时候，我们采用策略模式即可

    策略模式
        策略模式对应于解决某一个问题的算法族，允许用户从该算法族中任选一个算法解决问题，同事可以方便的更换算法或增加新的算法。并且由客户端决定调用哪种算法

    本质
        分离算法，选择实现
 */

$s = new OldCustormerManyStrategy();

$c = new Content($s);

$c->printPrice(999);




// 如果不使用策略模式，可以使用if else实现 实现比较容易，一般开发人员思路
// 假如，类型特别多，算法比较复杂，整个条件语句代码变得很长，难于维护
// 如果要新增类型，就需要频繁修改此处代码
function getPrice($type, $price) {
    if ($type == "普通客户小批量报价") {
        echo "不打折，原价", PHP_EOL;
        return $price;
    } elseif ($type == "普通客户大批量报价") {
        echo "打九折", PHP_EOL;
        return $price * 0.9;
    } elseif ($type == "老客户小批量报价") {
        echo "打八五折", PHP_EOL;
        return $price * 0.85;
    } elseif ($type == "老客户大批量报价") {
        echo "打八折", PHP_EOL;
        return $price * 0.8;
    }

    return $price;
}
