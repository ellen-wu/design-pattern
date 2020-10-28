<?php

class ObjectStructure
{
    private $elements = [];

    public function attach($element)
    {
        $this->elements[] = $element;
    }

    public function detach($element)
    {
        foreach ($this->elements as $k => $e) {
            if ($e == $element) {
                unset($this->elements[$k]);
            }
        }
    }

    public function accept($vistor)
    {
        foreach ($this->elements as $e) {
            $e->msg($vistor);
        }
    }
}
