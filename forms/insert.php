<?php

include_once '../index.php';

use App\Models\DataBase;

$db = new DataBase();
$columns = array_column($db->getColumnsName(), 'column');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert into table users</title>
</head>
<body>
    <form action="actions/insert.php" method="post">
        <h4>Please, fill all of the fields to insert into blog.users : </h4>
        <?php foreach($columns as $column) : ?>
        <?php $type = $column == 'age' ? 'number' : 'text' ?>
        <?php if ($column === 'id') continue; ?>
            <label>
                <input type="<?= $type ?>"
                       name="<?= $column; ?>"
                       placeholder="<?= $column; ?>"
                       required>
            </label>
        <?php endforeach; ?>
        <p><input type="submit" value="Insert into table 'users'"/></p>
    </form>
</body>
</html>
