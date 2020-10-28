<?php

class AirShip
{
    // 轨道舱
    private $orbitaModule;
    // 发动机
    private $engine;
    // 逃逸塔
    private $escapeTower;

    public function getOrbitaModule() {
        return $this->orbitaModule;
    }

    public function setOrbitaModule($orbitaModule) {
        $this->orbitaModule = $orbitaModule;
    }

    public function getEngine() {
        return $this->engine;
    }

    public function setEngine($engine) {
        $this->engine = $engine;
    }

    public function getEscapeTower() {
        return $this->escapeTower;
    }

    public function setEscapeTower($escapeTower) {
        $this->escapeTower = $escapeTower;
    }
}


class OrbitaModule {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }
}


class Engine {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }
}


class EscapeTower {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }
}




