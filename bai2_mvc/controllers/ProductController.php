<?php
//ham danhsachproduct
require_once "models/Product.php";
function listProduct(){
//    return "Danh sach sam pham";
    //goi model
    $products = getProduct();
    include_once "views/product/listproduct.php";

}
function addProduct() {
    return "them san pham";
}
function removeProduct() {
    deleteProduct();
    header("location: ?url=/");
    die();
}

?>