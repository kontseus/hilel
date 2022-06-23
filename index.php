<?php

use App\Classes\CreditCardCreator;
use App\Classes\Pay;
use App\Classes\PayPalCreator;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once  __DIR__ . '/vendor/autoload.php';


function clientCode(Pay $pay){
    echo $pay->processPayment();
}

echo "Created with fabric method PayPal \n";
clientCode(new PayPalCreator());
echo'<br>';
echo "Created with fabric method CreditCard \n";
clientCode(new CreditCardCreator());
