<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once  __DIR__ . '/vendor/autoload.php';

?>

<a href="/"> Index page </a><hr>
<a href="/forms/create.php"> HW part #1 Create table if not exists </a><hr>
<a href="/forms/insert.php"> HW part #2 Insert into `users` </a><hr>
<a href="/forms/select.php"> HW part #3 Get User data by id </a><hr>
<a href="/forms/delete.php"> HW part #4 Delete from `users` by id </a><hr>
