<?php

include "Prototype.php";

class ConcretePrototype implements Prototype
{
    private $_name;

    public function __construct($name)
    {
        $this->_name = $name;
    }
 
    public function setName($name)
    {
        $this->_name = $name;
    }
 
    public function getName()
    {
        return $this->_name;
    }

    public function shallowCopy()
    {
        return clone $this;
    }

    public function deepCopy()
    {
        $obj = serialize($this);
        $cloneObj = unserialize($obj);
        return $cloneObj;
    }
}
