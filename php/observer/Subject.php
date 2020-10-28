<?php

class Subject
{
    protected $list = [];

    public function registerObserver($observer)
    {
        $this->list[] = $observer;
    }

    public function removeObserver($observer)
    {
        foreach ($this->list as $k => $v) {
            if ($v == $observer) {
                unset($this->list[$k]);
            }
        }
    }

    public function notifyAllObserver()
    {
        foreach ($this->list as $v) {
            $v->update($this);
        }
    }
}
