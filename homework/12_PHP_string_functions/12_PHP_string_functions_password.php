<?php

$password = 'Qwert';
$passwordLenght = iconv_strlen($password);
if ($passwordLenght > 7 && $passwordLenght < 12) {
    echo('Пароль коректний');
} else {
    echo('Зміни пароль');
}

