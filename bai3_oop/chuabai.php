<?php
class ConNguoi {
    public $hoTen;
    public $namSinh;
    public $diaChi;
    public $soDienThoai;
    public $email;

    public function __construct($hoTen,$namSinh,$diaChi,$soDienThoai,$email)
    {
        $this->hoTen = $hoTen;
        $this->namSinh = $namSinh;
        $this->diaChi = $diaChi;
        $this->soDienThoai = $soDienThoai;
        $this->email = $email;
    }
    public function hienThiThongTin() {
        echo $this->hoTen."-".$this->namSinh.
            "-".$this->diaChi."-".$this->soDienThoai."-".$this->email;
    }
}
class GiangVien extends ConNguoi {
    public $luongCoban;
    public $soGioDay;
    public function __construct($hoTen,$namSinh,$diaChi,$soDienThoai,$email,$luongCoban,$soGioDay)
    {
        parent::__construct($hoTen,$namSinh,$diaChi,$soDienThoai,$email);
        $this->luongCB = $luongCoban;
        $this->soGioDay = $soGioDay;
    }

    public function hienThiGiangVien() {
        $this->hienThiThongTin();
    }
}
//khi khởi tạo đối tượn thì sẽ auto gọi hàm construct
$cn = new GiangVien("Văn A",1997,"số 9 tvb","0987654","abc@gmail.com");
$cn->hienThiGiangVien();

?>