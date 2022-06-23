<?php

namespace App\Classes;

use App\Interfaces\Payment;

class CreditCardCreator extends Pay
{
    public function getPaymentMethod(): Payment
    {
        return new CreditCardPayment;
    }
}