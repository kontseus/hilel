<?php

namespace App\Classes;

use App\Interfaces\Payment;

class PayPalCreator extends Pay
{
    public function getPaymentMethod(): Payment
    {
        return new PayPalPayment;
    }
}