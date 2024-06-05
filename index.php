<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

use App\Model\Cat;
use App\Model\Dog;
use App\Model\Bird;
use App\Model\Birdy;
use App\Model\Catty;
use App\Model\Doggy;

$animals = [
    new Cat(),
    new Dog(),
    new Bird(),
    new Catty(),
    new Doggy(),
    new Birdy(),
];

foreach ($animals as $animal) {
    echo get_class($animal) . PHP_EOL;
    $animal->eat();
    $animal->makeSound();
    $animal->sleep();
    echo PHP_EOL;
}