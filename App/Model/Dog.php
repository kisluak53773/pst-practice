<?php

declare(strict_types=1);

namespace App\Model;

use App\Interface\AnimalInterface;

class Dog implements AnimalInterface
{
    public function eat(): void
    {
        echo "dog eat";
    }

    public function sleep(): void
    {
        echo "Zzzz";
    }

    public function makeSound(): void
    {
        echo "Bark bark";
    }
}