<?php

include_once '../../index.php';

use App\Models\DataBase;


$db = new DataBase();
$db->delete($_POST['checkboxvar']);
?>

<h4>You`ve deleted Users with id = <?= implode(', ', $_POST['checkboxvar']) ?></h4>
