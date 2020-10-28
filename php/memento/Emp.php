<?php

/**
 * 源发器类
 */
class Emp
{
    private $name;
    private $age;
    private $salary;

    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    /**
     * 进行备忘操作，并返回备忘录对象
     * @return [type] [description]
     */
    public function memento()
    {
        return new EmpMemento($this);
    }

    /**
     * 进行数据恢复，恢复成指定备忘录的值
     * @param  [type] $memento [description]
     * @return [type]          [description]
     */
    public function recovery($memento)
    {
        $this->name = $memento->getName();
        $this->age = $memento->getAge();
        $this->salary = $memento->getSalary();
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

