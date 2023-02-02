<?php
namespace NSP1;
class GiangVien {
    public $tenGv;
    public $maGv;
    public $luongcoban;

    public function __construct($tenGv,$maGv,$luongcoban)
    {
        $this->tenGV = $tenGv;
        $this->maGV = $maGv;
        $this->luongcoban = $luongcoban;
    }

    public function hienThiGV() {
        echo "Tên Gv".$this->tenGV."Mã GV".$this->maGV."Lương cơ bản".$this->luongcoban;
    }
}
class SinhVien {

}