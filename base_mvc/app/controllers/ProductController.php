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
    public function addProduct() {
        //test route xem đã nhảy vào đấy chưa
       return $this->render('product.add');
    }
    public function postProduct() {
        //khi người dùng click vào nút add
        if (isset($_POST['add'])) {
            //khởi tạo 1 mảng lỗi = mảng rỗng
            //reset lại toàn bộ phần lỗi  và thành
            delete_session();
            $error = [];
            //nếu như bỏ trống tên SP
            if (empty($_POST['ten_sp'])) {
                $error[] = "Bạn không được để trống tên sản phẩm";
            }
            if (empty($_POST['don_gia'])) {
                $error[] = "Bạn không được để trống đơn giá";
            }
            if (count($error)>0) {
                $_SESSION['errors'] = $error;
                //nhảy veè trang add-product
                header('location:'.BASE_URL.'add-product');die;
            } else {
                $result = $this->product->addProduct(NULL,$_POST['ten_sp'],$_POST['don_gia']);
                if ($result) {
                    $_SESSION['success'] = "Thêm sản phẩm thành công";
                    header('location:'.BASE_URL.'add-product');die;
                }
            }

        }
    }
}