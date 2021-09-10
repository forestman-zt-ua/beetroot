<?php

$url = $_GET['url'];
$query = ['query'=>parse_url($url,PHP_URL_QUERY)];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>07_php_array</title>
    <style>
    </style>
</head>
<body>
<div>
    <form>
        <div id="app">
            <form id="auth" action="" method="get">
                <div>
                    <label for="url">url:</label>
                    <input type="text" required name="url" id="url" autofocus>
                    <?php
                    var_dump(parse_url($url));
                    var_dump($query);
                    ?>
                </div>
            </form>
        </div>
    </form>
</div>
</body>
</html>