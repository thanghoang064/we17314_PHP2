<?php
$url = isset($_GET['url']) == true ? $_GET['url'] : "/";
switch ($url) {
    case '/':
        //dieu huong ve trang danh sach san pham
        require_once 'controllers/ProductController.php';
        $productController = new ProductController();
        echo $productController->listProduct();
        break;
//    case 'add-product':
//        require_once 'controllers/ProductController.php';
//        echo addProduct();
//        break;
//    case 'remove-product':
//        //dieu huong ve controller xoa san pham
//        require_once 'controllers/ProductController.php';
//        echo removeProduct();
//        break;
}
//btvn
// tao 1 bang nhan vien gom id,tennv,luong
// hien thi ra danh sach nhan vien
//xoa nhan vien
//them nhan vien
//sua nhan vien
//su dung truc tiep tren mo hinh mvc
?>