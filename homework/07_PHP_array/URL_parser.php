<?php

$url = $_GET;
$query = array('query' => parse_url($url['URL'], PHP_URL_QUERY));

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
                    <label for="URL">URL:</label>
                    <input type="text" name="URL" id="URL" autofocus>
                    <?php
                    var_dump(parse_url($url['URL']));
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
