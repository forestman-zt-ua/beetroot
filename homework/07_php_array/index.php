<?php

$name = 'Yaroslav';
$surname = 'Lisovyi';
$languages = [               //array language
        '1'=>'English',
        '2'=>'Ukrainian',
        '3'=>'Spanish',
        '4'=>'Polish',
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>07_php_array</title>
    <style>
    </style>
<body>
<div>
    <form>
        <div id="app">
            <form id="auth" action="" method="get">
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
                    <label>
                        <select name="language">
                            <option value="1"> <?php
                                foreach ($languages as $val => $lang) {
                                    echo "<option value=\"$val\">$lang</option>";//change language
                                } ?>
                        </select>
                    </label>
                </div>
            </form>
        </div>
    </form>
</div>
</body>
</html>