<?php


$fileName = 'userLogin.php';
include($fileName);
$userInfFilter = [];
foreach ($userInfArray as $value) {
    if (iconv_strlen($value['Password']) < 8) {
        $userInfFilter[] = $value;
    }
}
