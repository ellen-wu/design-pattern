<?php

class CareTaker
{
    private $memento;

    public function getMemento()
    {
        return $this->memento;
    }

    public function setMemento($memento)
    {
        $this->memento = $memento;
    }
}

