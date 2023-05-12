<?php

$title = 'Products lists';
$products = ['iphone', 'ipad', 'laptop', 'macbook', 'speaker'];
$owner = 'admin';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1><?= $title; ?></h1>

    <ul>
        <?php foreach ($products as $product) : ?>
            <?php if ($owner === 'admin') : ?>
                <li>
                    <span>
                        <?= $product; ?>
                    </span>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</body>

</html>