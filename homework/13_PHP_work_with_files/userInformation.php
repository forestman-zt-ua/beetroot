<?php

$fileName = 'user.json';
if (!file_exists($fileName)) {
    die("Файл $fileName відсутній");
}
$userInf = file_get_contents($fileName);
if (!$userInf) {
    die("Помилка читання $fileName");
}
try {
    $userInfArray = json_decode($userInf, true, 512, JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
}

