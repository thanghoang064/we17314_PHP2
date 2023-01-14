<?php
//class cha
class ConNguoi {
    public $chan;
    public $tay;
    public $mat;
    public $mui;

    public function an() {
       echo "Ăn bằng mồm";
    }
    public function setChan($chan) {
        $this->chan = $chan;
    }
}
class NguoiLon extends ConNguoi {

    public $longNach;
    //phương thức khởi tạo
    public function __construct()
    {
    }

    public function di() {
        echo "Đi bằng ".$this->chan."Chân";
    }
    public function noi() {

    }
}
class TreCon extends ConNguoi {

    public function bo() {
        echo "bò bằng ".$this->chan."chân".$this->tay. " tay";
    }
}
$nl1 = new NguoiLon();
//$nl1->an();
$nl1->di();
$tc1 = new TreCon();
$tc1->bo();
//$tc1->an();

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