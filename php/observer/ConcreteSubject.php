<?php

class ConcreteSubject extends Subject
{
    private $state;

    public function getState()
    {
        return $this->state;
    }

    public function setState($state)
    {
        $this->state = $state;

        // 目标对象 值发生了变化 通知所有观察者
        $this->notifyAllObserver();
    }
}
