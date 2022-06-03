<?php

include_once '../index.php';

use App\Models\DataBase;


$db = new DataBase();
$userDatas = $db->selectData();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete by user id</title>
</head>

<form method='post' id='userData' action='actions/delete.php'>
    <div>
        <?php foreach($userDatas as $key => $data) : ?>
            <label>User id <?= $data['id'] ?></label>
            <label>
                <input type="checkbox" name='checkboxvar[]' value="<?= $data['id'] ?>">
            </label><br>
        <?php endforeach; ?>
    </div>
    <div>
        <button type="submit" style="background-color: red">Delete User data</button>
    </div>
</form>
