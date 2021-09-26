<?php


require_once('merchandiseArray.php');
require_once('orderSession.php');
session_start();
try {
    $merchandiseGet = merchandiseGet('merchandise.json');
    $order = orderSession($_GET);
} catch (Exception $a) {
    echo $a->getMessage();
}
var_dump($_SESSION);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="product-item">
    <form action="" method="GET">
        <div class="product-list">
            <h3><?php
                print_r($merchandiseGet['0']['name']); ?></h3>
            <span class="price"><?php
                print_r($merchandiseGet['0']['coast'] . '$'); ?></span>
            <span class="quantity">Available for order : <?php
                print_r($merchandiseGet['0']['quantity']); ?></span>
            <label for="quantity"></label>
            <input autofocus id="quantity" name="<?php
            print_r($merchandiseGet['0']['name']); ?>" type="text" value="">
            <!--            <p><input type="submit" value="Order"></p>-->
        </div>
        <div class="product-list">
            <h3><?php
                print_r($merchandiseGet['1']['name']); ?></h3>
            <span class="price"><?php
                print_r($merchandiseGet['1']['coast'] . '$'); ?></span>
            <span class="quantity">Available for order : <?php
                print_r($merchandiseGet['1']['quantity']); ?></span>
            <label for="quantity"></label>
            <input autofocus id="quantity" name="<?php
            echo($merchandiseGet['1']['name']); ?>" type="text" value="">
            <!--            <p><input type="submit" value="Order"></p>-->
        </div>
        <div class="product-list">
            <h3><?php
                print_r($merchandiseGet['2']['name']); ?></h3>
            <span class="price"><?php
                print_r($merchandiseGet['2']['coast'] . '$'); ?></span>
            <span class="quantity">Available for order : <?php
                print_r($merchandiseGet['2']['quantity']); ?></span>
            <label for="quantity"></label>
            <input autofocus id="quantity" name="<?php
            print_r($merchandiseGet['2']['name']); ?>" type="text" value="">
            <!--            <p><input type="submit" value="Order"></p>-->
        </div>
        <div class="product-list">
            <h3><?php
                print_r($merchandiseGet['3']['name']); ?></h3>
            <span class="price"><?php
                print_r($merchandiseGet['3']['coast'] . '$'); ?></span>
            <span class="quantity"> Available for order : <?php
                print_r($merchandiseGet['3']['quantity']); ?></span>
            <label for="quantity"></label>
            <input autofocus id="quantity" name="<?php
            print_r($merchandiseGet['3']['name']); ?>" type="text" value="">
            <p><input type="submit" value="Order"></p>
        </div>

</div>
</body>
</html>
