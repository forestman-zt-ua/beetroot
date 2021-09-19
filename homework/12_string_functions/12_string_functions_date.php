<?php

$date = '31-12-2020';
$dateArray = explode("-", $date);
$dateOut = implode(
    ".",
    array_merge(
        array_slice($dateArray, 2, 3),
        array_merge(array_slice($dateArray, 1, 1), array_merge(array_slice($dateArray, 0, 1)))
    )
);
echo $dateOut;