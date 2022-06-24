<?php

namespace App\Classes;

use App\Interfaces\Car;

class StandardCreator extends Taxi
{
    public function getCarCost(): Car
    {
        return new StandardCar;
    }
    public function getCarType(): Car
    {
        return new StandardCar;
    }
}
