<?php
require_once "models/db.php";
class Product extends DB
{
    function getProduct()
    {
        $sql = "select * from product";
        return $this->getData($sql);
    }

    function deleteProduct()
    {
        $id = $_GET['id'];
        $sql = "delete from product where id = $id";
        $this->getData($sql, false);
    }
}