<?php


/**
 * @param array $order
 * @return array
 * @throws Exception
 */

function orderSession(array $order): array
{
    if (!empty($_GET)) {
        $_SESSION = $_GET;
    }
    throw new Exception('Hellow!');
}
