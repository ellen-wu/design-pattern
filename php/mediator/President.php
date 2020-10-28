<?php

class President implements Mediator
{
    private $map;

    public function register($dname, $d)
    {
        $this->map[$dname] = $d;
    }

    public function command($dname)
    {
        $d = $this->map[$dname];
        $d->selfAction();
    }
}


