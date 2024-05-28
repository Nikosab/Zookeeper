<?php
namespace Zookeeper;

class Animal {
    private $name;
    private $happiness;
    private $foodPreference;
    private $foodReserve;

    public function __construct($name, $foodPreference) {
        $this->name = $name;
        $this->happiness = 50;
        $this->foodPreference = $foodPreference;
        $this->foodReserve = 100;
    }

    public function play() {
        $this->happiness += 10;
        $this->foodReserve -= 5;
    }

    public function work() {
        $this->happiness -= 10;
        $this->foodReserve -= 5;
    }

    public function feed($food) {
        if ($food->getType() === $this->foodPreference) {
            $this->foodReserve += 10;
        } else {
            $this->happiness -= 10;
            $this->foodReserve -= 10;
        }
    }

    public function pet() {
        $this->happiness += 5;
    }
}