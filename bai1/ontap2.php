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

//hienthithongtin("Thắng",1996,"Số 9 TVB");
function tinhdiemTB($diem1,$diem2) {
    return ($diem1 + $diem2)/2;
}
function xepLoai($diem1,$diem2) {
    $diemTB = tinhdiemTB($diem1,$diem2);
    if ($diemTB >=5) {
        return "Đạt";
    } else {
        return "Ko đạt";
    }

}
function hienthithongtinsinhvien($masv,$tensv,$namsinh,$diemmon1,$diemmon2,$diachi) {
    return $masv."-".$tensv."-".tinhTuoi($namsinh).
        "-".tinhdiemTB($diemmon1,$diemmon2)."-".xepLoai($diemmon1,$diemmon2);
}
echo hienthithongtinsinhvien("PH111","Huy",2003,7.5,8.5,"TVB");
// xây dựng 1 hàm hiển thị thông tin giảng viên (có trả về/K trả về) gồm các tham số truyền vào
// magv,tengv,namvaotruong,luongcoban,sogioday
//yêu cầu xây dựng hàm tính thâm niên = năm hiện tại - năm vào trường (Có trả về)
// xây dựng hàm tổng lương = luongcoban *sogioday;
//yêu cầu hiển thị ra tổng lương,mãGV ,Tên GV ,thâm niên
