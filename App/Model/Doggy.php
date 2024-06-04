<?php

declare(strict_types=1);

namespace App\Model;

use App\Model\Dog;

class Doggy extends Dog
{
    public function eat(): void
    {
        echo "doggy eat";
    }

    public function sleep(): void
    {
        echo "Zzzz ass";
    }

    public function makeSound(): void
    {
        echo "bark bark barky";
    }
}