<?php

declare(strict_types=1);

namespace App\Model;

use App\Interface\AnimalInterface;

class Bird implements AnimalInterface
{
    public function eat(): void
    {
        echo "bird eat";
    }

    public function sleep(): void
    {
        echo "Zzzz";
    }

    public function makeSound(): void
    {
        echo "zsdasd";
    }
}