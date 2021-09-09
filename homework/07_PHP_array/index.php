<?php

$name = 'Yaroslav';
$Surname = 'Lisovyi';
$language = array('English', 'Ukrainian', 'Spanish', 'Polish');

?>
<!DOCTYPE html>
<html>
<head>
    <title>06_PHP_variable</title>
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
                    <input type="text" name="name" id="name" autofocus value="<?php
                    echo $name; ?>">
                </div>
                <div>
                    <label for="surname">Surname:</label>
                    <input type="text" name="surname" id="surname" autofocus value="<?php
                    echo $Surname; ?>">
                </div>
                <div>
                    <label for="language">Change language:</label>
                    <select name="language">
                        <option value="1"> <?php
                            echo $language[0]; ?></option>
                        <option value="2"> <?php
                            echo $language[1]; ?></option>
                        <option value="3"> <?php
                            echo $language[2]; ?></option>
                        <option value="4"> <?php
                            echo $language[3]; ?></option>
                    </select>
                </div>
            </form>
        </dib>
    </form>
</div>
</body>
</head>
</html>