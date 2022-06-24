<?php

namespace App\Classes;

use App\Interfaces\Car;

class EconomCar implements Car
{
    public function carCost(): string
    {
        return "|-Cost of this taxi type is 10 uah -|";
    }

    public function carModel(): string
    {
        return "|-Car type is Zhiguli -|";
    }
}
