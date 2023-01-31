<?php
//class cha
class ConNguoi {
    public $chan;
    public $tay;
    public $mat;
    public $mui;//biến của class
    //hàm khởi tạo class cha
    public function __construct($chan,$tay,$mat,$mui)
    {
        $this->chan = $chan;
        $this->tay = $tay;
        $this->mat = $mat;
        $this->mui = $mui;
    }

    public function an() {
       echo "Ăn bằng mồm";
    }
    public function setChan($chan) {
        $this->chan = $chan;
    }
}
// khi class con chưa có hàm khởi tạo thì class con sẽ auto nhận hàm khởi tạo từ class cha
class NguoiLon extends ConNguoi {

    public $longNach;
    //phương thức khởi tạo
    public function __construct($chan,$tay,$mat,$mui,$longNach)
    {

        parent::__construct($chan,$tay,$mat,$mui); // gọi hàm khởi tạo của tk class cha
        $this->longNach = $longNach;
    }

    public function di() {
        echo "Đi bằng ".$this->chan."Chân"."tay".$this->tay."<br>";
        echo "Lông nách".$this->longNach;
    }
    public function noi() {

    }
}
class TreCon extends ConNguoi {

    public function bo() {
        echo "bò bằng ".$this->chan."chân".$this->tay. " tay";
    }
}
$nl1 = new NguoiLon(1,2,3,4,5);//nó sẽ nhận hàm khởi tạo từ cha
//$nl1->an();
$nl1->di();
//$tc1 = new TreCon();
//$tc1->bo();
//$tc1->an();

//sử dụng parent contruct để set giá trị cho các thuộc tính cha
//khai báo 1 class ConNguoi bao gồm các thuộc tính sau :
//hoten,namsinh,diachi,sodienthoai,email
//định nghĩa phương thức tính tuổi trong class tuổi = năm hiện tại - năm sinh
//tạo class SinhVien kế thừa từ class ConNguoi và class SinhVien có thuộc tính
//diemtoan,diemly,diemhoa
//có phương thức tính điểm TB = (toán + lý + hóa)/3
//tạo phương thức hiển thị thông tin sinh viên gồm hoten-sodienthoai-tuổi-điểmTB
//tạo class GiangVien kế thừa từ class ConNguoi có thuộc tính lương cơ bản,số giờ dạy
//tạo phương thức tính tổng lương = lương cơ bản * số giờ dạy
//tạo phương thức hiển thị thông tin giảng viên gồm hoten-sodienthoai-tuổi-Tổng lương