<?php

declare(strict_types=1);

namespace App\Model;

use App\Interface\AnimalInterface;

class Cat implements AnimalInterface
{
    public function eat(): void
    {
        echo "mew eat";
    }

    public function sleep(): void
    {
        echo "Zzzz";
    }

    public function makeSound(): void
    {
        echo "Mew mew";
    }
}