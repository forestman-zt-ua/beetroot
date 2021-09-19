<?php

$password = 'Qwert';
if (iconv_strlen($password) > 7 && iconv_strlen($password) < 12) {
    echo('Пароль коректний');
} else {
    echo('Зміни пароль');
}

