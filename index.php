<?php

require_once  __DIR__ . '/vendor/autoload.php';

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\MainController;
use App\Http\Helpers\ImageHelper;
use App\Models\Order;
use App\Models\User;
use App\Models\Product;


echo '<pre>';
new DashboardController();
new OrdersController();
new MainController();

new ImageHelper();

new Order();
new Product();
new User();

new Test();
echo '</pre>';
