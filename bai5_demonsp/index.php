<?php
//require_once "models/Product.php";
//require_once "models/Category.php";
//require_once "models/Customer.php";
//require_once "controllers/CategoryController.php";
//require_once "controllers/ProductController.php";
//require_once "controllers/CustomerController.php";
require_once "vendor/autoload.php";
use App\Controllers\ProductController;
use App\Controllers\CategoryController;
use App\Models\Category;
$productController = new ProductController();
$cate = new Category();
$cateController = new CategoryController();