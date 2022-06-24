<?php

use App\Classes\Taxi;
use App\Classes\EconomCreator;
use App\Classes\StandardCreator;
use App\Classes\LuxCreator;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once  __DIR__ . '/vendor/autoload.php';

/*
Построить систему такси.
Клиентский код должен вызывать тип доставки, который в свою очередь будет отдавать машину соотвествующего типа, у которой будет 2 метода (вывод модели машины и вывод цены).
Всего будет 3 типа такси:
Эконом
Стандарт
Люкс
*/

function clientCode(Taxi $taxi){
    echo $taxi->process();
}

echo "Clients order Econom \n";
clientCode(new EconomCreator());
echo'<br>';
echo "Clients order Standard \n";
clientCode(new StandardCreator());
echo'<br>';
echo "Clients order Lux \n";
clientCode(new LuxCreator());
