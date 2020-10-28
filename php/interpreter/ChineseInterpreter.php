<?php

/**
 * 具体解释器,实现抽象解释器的抽象方法
 */
class ChineseInterpreter extends AbstractInterpreter
{
    public function interpret($content)
    {
        for ($i = 1; $i < count($content); $i++) {
            switch ($content[$i]) {
                case '0':
                    echo '没有人', PHP_EOL;
                    break;
                case '1':
                    echo '一个人', PHP_EOL;
                    break;
                case '2':
                    echo '两个人', PHP_EOL;
                    break;
                case '3':
                    echo '三个人', PHP_EOL;
                    break;
                case '4':
                    echo '四个人', PHP_EOL;
                    break;
                case '5':
                    echo '五个人', PHP_EOL;
                    break;
                case '6':
                    echo '六个人', PHP_EOL;
                    break;
                case '7':
                    echo '七个人', PHP_EOL;
                    break;
                case '8':
                    echo '八个人', PHP_EOL;
                    break;
                case '9':
                    echo '九个人', PHP_EOL;
                    break;
                
                default:
                    echo '其它', PHP_EOL;
                    break;
            }
        }
    }
}


class EnglishInterpreter extends AbstractInterpreter
{
    public function interpret($content)
    {
        for ($i = 1; $i < count($content); $i++) {
            switch ($content[$i]) {
                case '0':
                    echo 'This is nobody', PHP_EOL;
                    break;
                case '1':
                    echo 'This is one people', PHP_EOL;
                    break;
                case '2':
                    echo 'This is two people', PHP_EOL;
                    break;
                case '3':
                    echo 'This is three people', PHP_EOL;
                    break;
                case '4':
                    echo 'This is four people', PHP_EOL;
                    break;
                case '5':
                    echo 'This is five people', PHP_EOL;
                    break;
                case '6':
                    echo 'This is six people', PHP_EOL;
                    break;
                case '7':
                    echo 'This is seven people', PHP_EOL;
                    break;
                case '8':
                    echo 'This is eight people', PHP_EOL;
                    break;
                case '9':
                    echo 'This is nine people', PHP_EOL;
                    break;
                
                default:
                    echo 'others', PHP_EOL;
                    break;
            }
        }
    }
}

