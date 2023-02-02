<?php
abstract class DongVat {
    //định nghĩa 1 phương thức trìu tượng (hàm  trìu tượng)
    //phương thức gì không định nghĩa được cụ thể thì ta cho nó thành trìu tượng
    abstract function chay();
}
class ConCho extends DongVat {
    public function chay()
    {
       echo "Con chó chạy bằng 4 chân";
    }
}
class ConNguoi extends DongVat {
    public function chay()
    {
        // TODO: Implement chay() method.
    }
}
$conCho = new ConCho();
$conCho->chay();
//tìm hiểu xem tại sao phải định nghĩa 1 phương thức abstract và phương thức đó có
// ý nghĩa gì
// kiểm tra điều chỉnh lại phiên bản xampp
// cài đặt composer
//xây dựng 1 class tính chu vi và diện tích hình chữ nhật
//xây dựng 1 class tính chu vi và diện tích hình vuông
//xây dựng 1 class tính chu vi và diện tích hình thang
// xây dựng 1 class trìu tượng và xác định những phương thức trìu tượng cho 3 class
// trên
?>