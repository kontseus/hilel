<?php

namespace App\Classes;

use App\Interfaces\Car;

class LuxCreator extends Taxi
{
    public function getCarCost(): Car
    {
        return new LuxCar;
    }
    public function getCarType(): Car
    {
        return new LuxCar;
    }
}
