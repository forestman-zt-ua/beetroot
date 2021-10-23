<?php

include_once(ROOT . '/models/Product.php');

// робота з товарами
class Product
{

    const SHOW_BY_DEFAULT = 6;


    public static function getProducts($count = self::SHOW_BY_DEFAULT)
    {
        $db = Db::getConnection();


        $sql = 'SELECT id, name, price, is_new FROM product '
            . 'WHERE status = "1" ORDER BY id DESC '
            . 'LIMIT :count';


        $result = $db->prepare($sql);
        $result->bindParam(':count', $count, PDO::PARAM_INT);

        $result->setFetchMode(PDO::FETCH_ASSOC);


        $result->execute();


        $i = 0;
        $productsList = array();
        while ($row = $result->fetch()) {
            $products[$i]['id'] = $row['id'];
            $products[$i]['name'] = $row['name'];
            $products[$i]['price'] = $row['price'];
            $products[$i]['is_new'] = $row['is_new'];
            $i++;
        }
        return $products;
    }
}
