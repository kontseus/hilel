<?php

namespace App\Classes;

use App\Interfaces\Car;

class EconomCreator extends Taxi
{
    public function getCarCost(): Car
    {
        return new EconomCar;
    }
    public function getCarType(): Car
    {
        return new EconomCar;
    }
}
