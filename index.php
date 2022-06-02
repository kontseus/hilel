<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Models\User;

try {
    $user = new User(15, 'pas123');
    echo $user->getUserData();
} catch (Exception $e) {
    die($e->getMessage() . ' on line ' . $e->getLine() . ' in file ' . $e->getFile());
}
