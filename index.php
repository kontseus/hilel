<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\MainController;
use App\Http\Helpers\ImageHelper;
use App\Models\Order;
use App\Models\User;
use App\Models\Product;

spl_autoload_register(function ($class) {
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $class).'.php';
    if (file_exists($file)) {
        require_once $file;
        return true;
    }
    die('There is no such class called ' . $class);
});

echo '<pre>';
$dashboardController = new DashboardController();
$ordersController = new OrdersController();
$mainController = new MainController();

$imageHelper = new ImageHelper();

$user = new Order();
$product = new Product();
$order = new User();

$undefined = new Test();
echo '</pre>';
