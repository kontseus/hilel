<?php

include_once '../index.php';

use App\Models\DataBase;

$db = new DataBase();
$userDatas = $db->selectData();
function userData($data)
{
    foreach($data as $key => $val){
        $res[] = $key . ': ' . $val;
    }

    return implode(',', $res);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Get by user id</title>
</head>

<form method='post' id='userData' action='actions/select.php'>
    <div>
        <?php foreach($userDatas as $key => $data) : ?>
            <label>User id <?= $data['id'] ?></label>
            <label>
                <input type="checkbox" name='checkboxvar[]' value="<?= userData($data); ?>">
            </label><br>
        <?php endforeach; ?>
    </div>
    <div>
        <button type="submit">Get User data</button>
    </div>
</form>
