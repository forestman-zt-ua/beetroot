<?php

$date = '31-12-2020';
echo(date('Y-m-d',strtotime($date)));
//$dateArray = explode("-", $date);
//$dateOut = implode(
//    ".",
//    array_merge(
//        array_slice($dateArray, 2, 3),
//        array_merge(array_slice($dateArray, 1, 1), array_merge(array_slice($dateArray, 0, 1)))
//    )
//);
//echo $dateOut;