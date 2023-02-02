<?php
//interface không phải là class
//trong interface chỉ có phương thức trìu tượng cho nên ko cần phải dùng
//từ khóa abtract ở đầu
interface DiChuyen {
    function chay(); //đây là phương thức trìu tượng trong interface
}
//
//đối với interface phải dùng từ khóa là implements
class ConCho implements DiChuyen {
    public function chay()
    {
        echo "Con chó chạy bằng 4 chân";
    }
}
class Oto implements DiChuyen {
    public function chay()
    {
       echo "Ô tô chạy bằng 4 bánh" ;
    }
}
$cc = new ConCho();
$cc->chay();
