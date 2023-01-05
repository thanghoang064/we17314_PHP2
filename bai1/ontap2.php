<?php
//hàm có 2 loại
// có trả về

// không trả về
// tất cả những gì nằm trong ngoặc tròn được gọi là tham số
function hienthi($a,$b,$c = 9) {
    echo $a + $b + $c;
}
//hienthi(7,8,10);
// tạo 1 hàm có tham số truyền vào tên , năm sinh, địa chỉ
// hiển thị ra thông tin tên + tuổi + địa chỉ
// tuổi = năm hiện tại - năm sinh
// get current year in PHP
function tinhTuoi($namsinh) {
    return date("Y") - $namsinh;
}
function hienthithongtin ($ten,$namsinh,$diachi) {

    echo $ten."-".tinhTuoi($namsinh)."-".$diachi;
}
//xây dựng hàm không trả về hiển thị thông tin sinh viên gồm những tham số truyền vào
//masv,tensv,namsinh,diemmon1,diemmon2,diachi
// xay dung ham tinh tuoi co tra về
// xây dựng hàm xếp loại có trả về
//điểm TB = (diemmon1 + diemmon2) /2
// điểm TB >= 5 Đat
//điểm TB < 5 ko đạt
// hiển thị ra masv-tensv-diemtb-xeploai-diachi-tuoi

hienthithongtin("Thắng",1996,"Số 9 TVB");
