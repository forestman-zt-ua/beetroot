<?php




/**
 * @throws Exception
 */
function userGet(string  $fileName) :array
{
    if (!file_exists($fileName)) {
        throw new Exception("Файл '$fileName' відсутній");
    }
    $userInfo = file_get_contents($fileName);
    if (!$userInfo) {
        throw new Exception("Помилка читання '$fileName'");
    }
    try {
        $userInfo = json_decode($userInfo, true, 512, JSON_THROW_ON_ERROR);
    } catch (JsonException $e) {
        throw new Exception('Error processing ');
    }
    return ($userInfo);
}




