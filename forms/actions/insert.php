<?php

include_once '../../index.php';

use App\Models\DataBase;


$db = new DataBase();
$db->insertUser($_POST);
$addedData = $db->selectData($db->dbConnection->lastInsertId());
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert into table users result</title>
</head>
    <body>
        <h4> You`ve created user : </h4>
        <?php foreach($addedData[0] as $fieldName => $fieldValue) : ?>
            <p>
                <?= $fieldName . ' => ' . $fieldValue ?>
            </p>
        <?php endforeach; ?>
    </body>
</html>
