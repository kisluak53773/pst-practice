<?php

declare(strict_types=1);

namespace App\Model;

use App\Model\Cat;

class Catty extends Cat
{
    public function eat(): void
    {
        echo "mew caty eat";
    }

    public function sleep(): void
    {
        echo "Zzzz zz";
    }

    public function makeSound(): void
    {
        echo "Mew mew catty";
    }
}