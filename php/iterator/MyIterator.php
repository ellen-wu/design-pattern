<?php

/**
 * 实现php的 Iterator 接口
 */
class MyIterator implements Iterator
{
    private $items;

    public function __construct(&$data)
    {
        $this->items = $data;
    }

    public function current()
    {
        return current($this->items);
    }

    public function key()
    {
        return key($this->items);
    }

    public function next()
    {
        next($this->items);
    }

    public function rewind()
    {
        reset($this->items);
    }
    
    public function valid()
    {
        return ($this->current() !== false);
    }
}


