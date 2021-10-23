<?php

include_once(ROOT . '/components/Db.php');

class User
{

    public static function register($name, $email, $password)
    {
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO user (name, email, password) '
            . 'VALUES (:name, :email, :password)';


        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        return $result->execute();
    }


    public static function edit($id, $name, $password)
    {
        $db = Db::getConnection();


        $sql = "UPDATE user 
            SET name = :name, password = :password 
            WHERE id = :id";

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        return $result->execute();
    }


    public static function checkUserData($email, $password)
    {
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM user WHERE email = :email AND password = :password';


        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_INT);
        $result->bindParam(':password', $password, PDO::PARAM_INT);
        $result->execute();


        $user = $result->fetch();

        if ($user) {
            return $user['id'];
        }
        return false;
    }
}
