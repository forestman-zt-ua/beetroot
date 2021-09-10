<?php

$name = 'Yaroslav';
$surname = 'Lisovyi';
$languages = [
        '1'=>'English',
        '2'=>'Ukrainian',
        '3'=>'Spanish',
        '4'=>'Polish',
];

?>
<!DOCTYPE html>
<html>
<head>
    <title>06_PHP_vargit iable</title>
    <style>
        .row {
            margin: 10px 0;
        }

    </style>
<body>
<div>
    <form>
        <dib id="app">
            <form action="GET">
                <div>
                    <label for="name">Name:</label>
                    <input type="text" name="name" required id="name" autofocus value="<?=
                    $name;?>">
                </div>
                <div>
                    <label for="surname">Surname:</label>
                    <input type="text" name="surname" required id="surname" autofocus value="<?=
                     $surname;?>">
                </div>
                <div>
                    <label for="language">Change language:</label>
                    <select name="language">
                        <option value="1"> <?php
                            foreach ($languages as $val => $lang) {
                                echo "<option value=\"$val\">$lang</option>";
                            } ?>
                    </select>
                </div>
            </form>
        </dib>
    </form>
</div>
</body>
</head>
</html>