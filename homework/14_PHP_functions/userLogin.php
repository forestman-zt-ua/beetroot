<?php


$fileName = 'user.json';
function userGet($fileName)
{
    if (!file_exists($fileName)) {
        die("Файл $fileName відсутній");
    }
    $userInfo = file_get_contents($fileName);
    if (!$userInfo) {
        die("Помилка читання $fileName");
    }
    try {
        return json_decode($userInfo, true, 512, JSON_THROW_ON_ERROR);
    } catch (JsonException $e) {
    }
}

$userInfoArray  = userGet($fileName);
$login = 'Sam';//$_POST["login"] ?? null;
$password = '1234567';//$_POST["password"] ?? null;
function userCheck($login, $password, $userInfoArray)
{

    $isLoggedIn = false;
    foreach ($userInfoArray as $value) {
        if ($login === $value['Login'] && $password === $value['Password']) {
            $isLoggedIn = true;
            return $value;
        }
    }
    if (!$isLoggedIn) {
        die ('Login or password incorrect');
    }




}

$isLogged = userCheck($login, $password, $userInfoArray);
print_r($isLogged);

