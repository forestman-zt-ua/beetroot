<?php


$users = [];
$users["39"] = ["name" => "Anton", "email" => "anton@gmail.com", "language" => "ru"];
$users["2"] = ["name" => "Test", "email" => "test@test.com", "language" => "en"];
$users["111111"] = ["name" => "vasy", "email" => "vasy@gmail.com", "language" => "ru"];
$users["46"] = ["name" => "yriy", "email" => "yriy@gmail.com", "language" => "ru"];
$users["8"] = ["name" => "gus", "email" => "gus@gmail.com", "language" => "ua"];
$users["10"] = ["name" => "gus", "email" => "gus@gmail.com", "language" => "de"];
$users["45"] = ["name" => "gus", "email" => "gus@gmail.com", "language" => "ru"];
$users["1299"] = ["name" => "gus", "email" => "gus@gmail.com", "language" => "ua"];
$hellow = [
    "ua" => "Доброго дня!",
    "ru" => "Привет!",
    "en" => "Hi!",
    "de" => "Hallo!",
    "fr" => "Bonjour!",
];
ksort($users);
$minId = reset($users);
$maxId = end($users);
if ($maxId["language"] === $minId["language"] and $maxId["language"] === "ua" and $minId["language"] === "ua") {
    echo $hellow["ua"];
} elseif ($maxId["language"] === $minId["language"] and $maxId["language"] === "en" and $minId["language"] === "en") {
    echo $hellow["en"];
} elseif ($maxId["language"] === $minId["language"] and $maxId["language"] === "de" and $minId["language"] === "de") {
    echo $hellow["de"];
} elseif ($maxId["language"] === $minId["language"] and $maxId["language"] === "ru" and $minId["language"] === "ru") {
    echo $hellow["ru"];
} elseif ($maxId["language"] === $minId["language"] and $maxId["language"] === "fr" and $minId["language"] === "fr") {
    echo $hellow["fr"];
} elseif ($maxId["language"] !== $minId["language"] and (($minId["language"] === "ua" and $maxId["language"] === "ru") or
        ($minId["language"] === "ru" and $maxId["language"] === "ua"))) {
    echo($hellow['ru'] . "\n" . $hellow["ua"]);
} elseif ($maxId["language"] !== $minId["language"] and (($minId["language"] === "ua" and $maxId["language"] === "fr") or
        ($minId["language"] === "fr" and $maxId["language"] === "ua"))) {
    echo($hellow['fr'] . "\n" . $hellow["ua"]);
} elseif ($maxId["language"] !== $minId["language"] and (($minId["language"] === "ua" and $maxId["language"] === "de") or
        ($minId["language"] === "de" and $maxId["language"] === "ua"))) {
    echo($hellow['de'] . "\n" . $hellow["ua"]);
} elseif ($maxId["language"] !== $minId["language"] and (($minId["language"] === "ua" and $maxId["language"] === "en") or
        ($minId["language"] === "en" and $maxId["language"] === "ua"))) {
    echo($hellow['en'] . "\n" . $hellow["ua"]);
} elseif ($maxId["language"] !== $minId["language"] and (($minId["language"] === "en" and $maxId["language"] === "ru") or
        $minId["language"] === "ru" and $maxId["language"] === "en")) {
    echo($hellow['en'] . "\n" . $hellow["ru"]);
} elseif ($maxId["language"] !== $minId["language"] and (($minId["language"] === "en" and $maxId["language"] === "fr") or
        $minId["language"] === "fr" and $maxId["language"] === "en")) {
    echo($hellow['en'] . "\n" . $hellow["fr"]);
} elseif ($maxId["language"] !== $minId["language"] and (($minId["language"] === "en" and $maxId["language"] === "de") or
        $minId["language"] === "de" and $maxId["language"] === "en")) {
    echo($hellow['en'] . "\n" . $hellow["de"]);
} elseif ($maxId["language"] !== $minId["language"] and (($minId["language"] === "de" and $maxId["language"] === "ru") or
        $minId["language"] === "ru" and $maxId["language"] === "de")) {
    echo($hellow['de'] . "\n" . $hellow["ru"]);
} elseif ($maxId["language"] !== $minId["language"] and (($minId["language"] === "de" and $maxId["language"] === "fr") or
        $minId["language"] === "fr" and $maxId["language"] === "de")) {
    echo($hellow['de'] . "\n" . $hellow["fr"]);
} elseif ($maxId["language"] !== $minId["language"] and (($minId["language"] === "fr" and $maxId["language"] === "ru") or
        $minId["language"] === "ru" and $maxId["language"] === "fr")) {
    echo($hellow['de'] . "\n" . $hellow["fr"]);
} else {
    echo("Це капець!");
}


