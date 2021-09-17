<?php


if (isset($_POST['login'])) {
    $login = $_POST["login"];
    $password = $_POST["password"];
}
$loginAndPassFile = file("passwd");
foreach ($loginAndPassFile as $value) {
    $loginPasswordArray = explode(" ", $value);
    $loginForTest = trim($loginPasswordArray["0"]);
    $passwordForTest = trim($loginPasswordArray["1"]);
    if ($login === $loginForTest && $password === $passwordForTest) {
        file_put_contents((string)$login, $login . " " . date("m.d.y H:i:s") . PHP_EOL, FILE_APPEND);
        echo "Hi, $login !!!!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>11_php</title>
    <style>
    </style>
<body>
        <div>
            <form action="" method="post">
                    <label for="login"> Login: </label>
                    <input type="text" name="login" required id="login" autofocus value="">
                </div>
                <div>
                    <label for="password">Password:</label>
                    <label for="password"></label><input type="password" name="password" required id="password"
                                                         autofocus
                                                         value="">
                    <p><input type="submit"></p>
                </div>
        </form>
</body>
</html>