<?php

$name = 'Yaroslav';
$Surname = 'Lisovyi';

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
        <dib id = "app">
            <form action="GET">
                <div>
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" autofocus value="<?php echo $name;?>">
                </div>
                <div>
                    <label for="surname">Surname:</label>
                    <input type="text" name="surname" id="surname" autofocus value="<?php echo $Surname;?>">
                </div>
            </form>
        </dib>
    </form>
</div>
</body>
</head>
</html>