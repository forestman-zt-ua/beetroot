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
    <title>Document</title>
</head>
<body>
<div>
    <form>
        <dib id="app">
            <form action="GET">
                <div>
                    <label for="url">url:</label>
                    <input type="text" required name="url" id="url" autofocus>
                    <?php
                    var_dump(parse_url($url));
                    var_dump($query);
                    ?>
                </div>
            </form>
        </dib>
    </form>
</div>
</body>
</body>
</html>
