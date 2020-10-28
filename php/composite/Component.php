<?php

interface Component
{
    public function opration();
}

// 叶子组件
interface Leaf extends Component
{
}

// 容器组件
interface Composite extends Component
{
    public function opration();
    public function add($c);
    public function remove($c);

    public function getChild($index);
}
