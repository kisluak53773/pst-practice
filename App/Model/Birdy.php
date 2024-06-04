<?php

declare(strict_types=1);

namespace App\Model;

use App\Model\Bird;

class Birdy extends Bird
{
    public function eat(): void
    {
        echo "birdy eat";
    }

    public function sleep(): void
    {
        echo "Zzzz zz";
    }

    public function makeSound(): void
    {
        echo "basd asd";
    }
}