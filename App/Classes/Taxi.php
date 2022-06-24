<?php

namespace App\Classes;

use App\Interfaces\Car;

abstract class Taxi
{
    public abstract function getCarType(): Car;
    public abstract function getCarCost(): Car;

    public function process(): string
    {
        $payment = $this->getCarCost();
//        $this->carCost = 'Generated bill for ' . $payment->carCost();
//        $this->carType = 'Car type ' . $payment->carModel();
        $result = 'Generated bill for ' . $payment->carCost() . "\n" . 'Car type ' . $payment->carModel();


        return $result;
    }
}
