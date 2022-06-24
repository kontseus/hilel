<?php

namespace App\Classes;

use App\Interfaces\Car;

class StandardCar implements Car
{
    public function carCost(): string
    {
        return "|-Cost of this taxi type is 20 uah -|";
    }

    public function carModel(): string
    {
        return "|-Car type is Toyota -|";
    }
}
