<?php

/**
 * 备忘录类
 */
class EmpMemento
{
    private $name;
    private $age;
    private $salary;

    public function __construct($emp)
    {
        $this->name = $emp->getName();
        $this->age = $emp->getAge();
        $this->salary = $emp->getSalary();
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function setSalary($salary) {
        $this->salary = $salary;
    }
}

