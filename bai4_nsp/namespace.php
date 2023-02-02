<?php
include_once "nsp1.php";
include_once "nsp2.php";
$gv = new NSP1\GiangVien("huy","gv004",12000);
$gv->hienThiGV();
$gv1 = new NSP2\GiangVien("quang","gv001",2022);
$gv1->hienThiGV();
