<?php

namespace App\Classes;

use App\Interfaces\Car;

class LuxCar implements Car
{
    public function carCost(): string
    {
        return "|-Cost of this taxi type is 40 uah -|";
    }

    public function carModel(): string
    {
        return "|-Car type is Maybach -|";
    }
}
