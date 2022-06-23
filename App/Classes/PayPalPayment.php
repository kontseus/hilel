<?php

namespace App\Classes;

use App\Interfaces\Payment;

class PayPalPayment implements Payment
{
    public function pay(): string
    {
        return "|-Result of the PayPalPayment-|";
    }
}