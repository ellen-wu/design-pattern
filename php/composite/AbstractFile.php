<?php

/**
 * 抽象构件
 */
interface AbstractFile
{
    public function killVirus(); // 杀毒
}

class ImageFile implements AbstractFile, Leaf
{
    private $name;
    
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function opration()
    {}

    public function killVirus()
    {
        echo '对图像文件：' . $this->name . '进行查杀！', PHP_EOL;
    }
}


class TextFile implements AbstractFile, Leaf
{
    private $name;
    
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function opration()
    {}

    public function killVirus()
    {
        echo '对文本文件：' . $this->name . '进行查杀！', PHP_EOL;
    }
}


class VideoFile implements AbstractFile, Leaf
{
    private $name;
    
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function opration()
    {}

    public function killVirus()
    {
        echo '对视频文件：' . $this->name . '进行查杀！', PHP_EOL;
    }
}

class Folder implements AbstractFile, Component
{
    private $name;

    private $arr = [];

    public function opration()
    {}
    
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function add($c)
    {
        $this->arr[] = $c;
    }

    public function remove($c)
    {
        foreach ($this->arr as $k => $v) {
            if ($c == $v) {
                unset($this->arr[$k]);
                break;
            }
        }
    }

    public function getChild($index)
    {
        return isset($this->arr[$index]) ? $this->arr[$index] : null;
    }

    public function killVirus()
    {
        echo '对文件夹：' . $this->name . '进行查杀！', PHP_EOL;

        foreach ($this->arr as $c) {
            $c->killVirus();
        }
    }
}