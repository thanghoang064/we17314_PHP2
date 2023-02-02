<?php
namespace NSP2;
class GiangVien {
    public $tenGv;
    public $maGv;
    public $namlamviec;

    public function __construct($tenGv,$maGv,$namlamviec)
    {
            $this->tenGV = $tenGv;
            $this->maGV = $maGv;
            $this->namlamviec = $namlamviec;
    }

    public function hienThiGV() {
        echo "Tên Gv".$this->tenGV."Mã GV".$this->maGV."Năm làm việc".$this->namlamviec;
    }
}