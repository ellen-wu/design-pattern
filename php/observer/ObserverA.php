<?php


class ObserverA implements Observer
{
    // myState需要跟目标对象的state值保持一致
    private $myState;

    public function update($state)
    {
        $this->myState = $state->getState();
    }

    public function getMyState()
    {
        return $this->myState;
    }

    public function setMyState($state)
    {
        $this->myState = $state;
    }
}

