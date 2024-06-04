<?php

declare(strict_types=1);

namespace App\Interface;

interface AnimalInterface
{
    public function eat(): void;
    public function sleep(): void;
    public function makeSound(): void;
}
