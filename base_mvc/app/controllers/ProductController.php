<?php
namespace App\Controllers;
use App\Models\Product;

class ProductController extends BaseController {
    public $product;
    public function __construct() {
//        echo "Test autoload";
        $this->product = new Product();
    }
    public function index() {
        $products =$this->product->getProduct();
        //đổ dữ liệu sang view blade
        return $this->render('product.index',compact('products'));
    }
}