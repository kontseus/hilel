<h4> User data </h4>

<?php foreach($_POST['checkboxvar'] as $data) : ?>
    <p>
        <?= $data ?>
    </p>
<?php endforeach; ?>
