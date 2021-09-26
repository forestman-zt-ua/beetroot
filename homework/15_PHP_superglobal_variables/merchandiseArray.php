<?php


/**
 * @param string $fileName
 * @return array
 * @throws Exception
 */
function merchandiseGet(string $fileName): array
{
    if (!file_exists($fileName)) {
        throw new Exception("Файл '$fileName' відсутній");
    }
    $merchandiseInfo = file_get_contents($fileName);
    if (!$merchandiseInfo) {
        throw new Exception("Помилка читання '$fileName'");
    }
    try {
        $merchandiseInfo = json_decode($merchandiseInfo, true, 512, JSON_THROW_ON_ERROR);
    } catch (JsonException $e) {
        throw new Exception('Error processing ');
    }
    return ($merchandiseInfo);
}




