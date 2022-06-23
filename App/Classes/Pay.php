<?php

namespace App\Classes;

use App\Interfaces\Payment;

abstract class Pay
{
    public function __construct()
    {}

    public abstract function getPaymentMethod(): Payment;

    public function processPayment(): string
    {
        $payment = $this->getPaymentMethod();
        $result = 'Created payment for ' . $payment->pay();

        return $result;
    }
}