<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

use App\Model\Cat;
use App\Model\Dog;
use App\Model\Bird;

$cat = new Cat();
$dog = new Dog();
$bird = new Bird();

$cat->eat();
$cat->makeSound();
$cat->sleep();

echo PHP_EOL;

$dog->eat();
$dog->makeSound();
$dog->sleep();

echo PHP_EOL;

$bird->eat();
$bird->makeSound();
$bird->sleep();

echo PHP_EOL;