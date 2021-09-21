<?php


$fileName = 'userInformation.php';
require($fileName);
foreach ($userInfArray as $value) {
    if (iconv_strlen($value['Password']) < 8) {
        $userInfFilter[] = $value;
    }
}
