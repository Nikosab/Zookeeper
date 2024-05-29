<?php

namespace Zookeeper;

class Zookeeper {
    private $animals = [];

    public function addAnimal(Animal $animal) {
        $this->animals[] = $animal;
    }

    public function getAnimals() {
        return $this->animals;
    }

    public function findAnimalByName($name) {
        foreach ($this->animals as $animal) {
            if ($animal->getName() === $name) {
                return $animal;
            }
        }
        return null;
    }
}