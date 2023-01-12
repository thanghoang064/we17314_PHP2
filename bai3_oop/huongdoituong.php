<?php
// khai báo class
class SinhVien {
    //đây là thuộc tính -> hay còn được gọi biến
    public $tenSV;// biến tenSV của class
    public $maSV;
    public $namSinh;
    //phương thức khởi tạo (hàm khởi tạo có tham số truyền vào )
    public function __construct($tenSV,$maSV,$namSinh)
    {
        $this->tenSV = $tenSV;
        $this->maSV = $maSV;
        $this->namSinh = $namSinh;
    }

    //đây là phương thức set Tên SV
    public function setTenSV($tenSV){ //biến tenSV của tham số
        $this->tenSV = $tenSV; // set giá trị cho biến tên SV
    }
    public function setMaSV($maSV) {
        $this->maSV = $maSV;
    }
    public function setNamSinh($namSinh) {
        $this->namSinh = $namSinh;
    }
    //đây là phương thức -> hay còn được gọi là hàm
    public function hienThiThongTinSV() {
        return "Tên SV ".$this->tenSV."Mã SV ".$this->maSV."năm sinh".$this->namSinh;

    }
}
//khởi tạo đối tượng (Cứ có new thì được gọi là khởi tạo đối tượng)
$sv1 = new SinhVien("Thắng","PH123456",1996);
//$sv1->setTenSV("Trường");
//$sv1->setNamSinh(2003);
//$sv1->setMaSV("PH123456");
echo $sv1->hienThiThongTinSV();
//làm tương tự với maSV , năm sinh
//$sv2 = new SinhVien;
//làm tương tự với SV2
//tạo class GiangVien gồm thuộc tính maGV,tenGV,namSinh,luongCB,soGioDay
//xây dựng 1 hàm tạo có tham số cho các thuộc tính trên
// xây dựng các hàm set cho từng thuộc tính trên
//xây dựng 1 phương thức tính tuổi (Có trả về ) = năm hiện tại - năm sinh
//xây dựng 1 phương thức tính lương (Cả trả về) = lương cơ bản * số giờ dạy
//xây dựng 1 phương thức hiển thị thông tin giảng viên gồm: maGV-TenGV-Tuổi-Lương
//khởi tạo 2 giảng viên và gọi phương thức hiển thị thông tin giảng viên
?>