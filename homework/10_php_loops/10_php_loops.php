<?php

$users = [];
$users["39"] = ["name" => "Anton", "email" => "anton@gmail.com", "language" => "en"];
$users["2"] = ["name" => "Test", "email" => "test@test.com", "language" => "ru"];
$users["111111"] = ["name" => "vasy", "email" => "vasy@gmail.com", "language" => "fr"];
$users["46"] = ["name" => "yriy", "email" => "yriy@gmail.com", "language" => "ru"];
$users["8"] = ["name" => "gus", "email" => "gus@gmail.com", "language" => "ua"];
$users["10"] = ["name" => "gus", "email" => "gus@gmail.com", "language" => "de"];
$users["45"] = ["name" => "gus", "email" => "gus@gmail.com", "language" => "ru"];
$users["1299"] = ["name" => "gus", "email" => "gus@gmail.com", "language" => "ua"];

foreach ($users as $key => $user) {
//   var_dump($user);
//   var_dump($users["$key"]);
    $sameName["$key"] = array_intersect($user, $users["$key"]);

//   var_dump($sameName);
    if ($user === $sameName) {
        $sameName1["$key"] = $user;
//        var_dump($sameName1);
    }
}
//var_dump($sameName1);
foreach ($users as $key => $lang) {
//    var_dump($lang);
    switch ($lang) {
        case  $lang["language"] === "ua";
            $userLanguageUa[] = $lang;
            break;
        case  $lang["language"] === "en";
            $userLanguageEn[] = $lang;
            break;
        case  $lang["language"] === "fr";
            $userLanguageFr[] = $lang;
            break;
        case  $lang["language"] === "de";
            $userLanguageDe[] = $lang;
            break;
        case  $lang["language"] === "ru";
            $userLanguageRu[] = $lang;
            break;
    }
}
    var_dump($userLanguageUa );
    var_dump($userLanguageRu );
    var_dump($userLanguageDe );
    var_dump($userLanguageEn );
    var_dump($userLanguageFr );
foreach ($users as $key => $value){
//       var_dump($newArray);
    $newArray["$key"] = $value;
}
//var_dump($newArray);
//var_dump($users);



