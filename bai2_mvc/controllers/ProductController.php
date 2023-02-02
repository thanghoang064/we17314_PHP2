<?php
//ham danhsachproduct
require_once "models/Product.php";
class ProductController
{
    function listProduct()
    {
//    return "Danh sach sam pham";
        //goi model
        $product = new Product();
        $products = $product->getProduct();

        include_once "views/product/listproduct.php";

    }

    function addProduct()
    {
        return "them san pham";
    }

    function removeProduct()
    {
        $product = new Product();
        $product->deleteProduct();
        header("location: ?url=/");
        die();
    }
}

?>