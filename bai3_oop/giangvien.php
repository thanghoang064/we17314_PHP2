<?php
class GiangVien {
    public  $maGV;
    public $tenGV;
    public $luongCB;
    public $soGioDay;
    public $namSinh;
    public function __construct($maGV,$tenGV,$luongCB,$soGioDay,$namSinh)
    {
        $this->maGV = $maGV;
        $this->tenGV = $tenGV;
        $this->luongCB = $luongCB;
        $this->soGioDay = $soGioDay;
        $this->namSinh = $namSinh;
    }
    public function tinhTuoi() {
        return date('Y') - $this->namSinh;
    }
    public function tinhLuong() {

    }
    public function hienThi() {
        echo $this->tenGV."-".$this->tinhTuoi();
    }
}
$gv1 = new GiangVien("GV001","HQT",10000,5,1996);
$gv1->hienThi();
?>