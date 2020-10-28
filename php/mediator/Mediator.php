<?php

interface Mediator
{
    public function register($dname, $d);

    public function command($dname);
}

