<?php

$users = [];
$users["1"] = ["name" => "Anton", "email" => "anton@gmail.com"];
$users["5"] = ["name" => "Test", "email" => "test@test.com"];
$users["4"] = ["name" => "vasy", "email" => "vasy@gmail.com"];
$users["3"] = ["name" => "yriy", "email" => "yriy@gmail.com"];
$users["2"] = ["name" => "gus", "email" => "gus@gmail.com"];
echo("кількість користувачів " . (count($users)) .  PHP_EOL);
krsort($users);
echo 'Sorted array: ' . PHP_EOL;
var_dump($users) . PHP_EOL;
$minId = end($users);
$almostMinId = prev($users);
$maxId = reset($users);
$almostMaxId = next($users);
echo PHP_EOL . "------------------------------------------------------------" . PHP_EOL;
var_dump(compact('minId', 'almostMinId', 'maxId', 'almostMaxId'));
echo PHP_EOL;
$minIn = array_search($minId, $users, true);
unset($users[$minIn]);

var_dump($users);

