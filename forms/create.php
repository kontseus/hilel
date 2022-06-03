<?php

/*
 * Будет выводить кнопку для создание таблицы users. Если таблица уже создана, то вместо кнопки выводим сообщение что данная таблица уже существует.
*/

include_once '../index.php';

use App\Models\DataBase;

$db = new DataBase();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Create table if not exists</title>
    </head>
    <body>
        <?php
        if(array_key_exists('createUsersTable', $_POST)) {
            $db->createTableUsers();
        }
        if ($db->tableExists('users')) : ?>
            <p>Table 'users' is already exists</p>
        <?php else : ?>
            <form method="post"><input type="submit" name="createUsersTable" value="Create table 'users'"/></form>
        <?php endif; ?>
    </body>
</html>
