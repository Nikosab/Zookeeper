<?php

require 'vendor/autoload.php';

use Zookeeper\Animal;
use Zookeeper\Food;
use Zookeeper\Zookeeper;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('zookeeper');
$log->pushHandler(new StreamHandler('zookeeper.log', Logger::DEBUG));

$zookeeper = new Zookeeper();

$dog = new Animal('Dog', 'meat');
$cat = new Animal('Cat', 'fish');

$zookeeper->addAnimal($dog);
$zookeeper->addAnimal($cat);

$dog->play();
$dog->feed(new Food('meat'));

$log->info('Dog played and fed', ['happiness' => $dog->getHappiness(), 'foodReserve' => $dog->getFoodReserve()]);

var_dump($zookeeper->getAnimals());