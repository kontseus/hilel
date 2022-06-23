<?php

namespace App\Classes;

use App\Interfaces\Payment;

class CreditCardPayment implements Payment
{
    public function pay(): string
    {
        return "|-Result of the CreditCardPayment-|";
    }
}