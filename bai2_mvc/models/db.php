<?php
const DBNAME = "we17314";
const DBUSER = "root";
const DBPASS = "";
const DBCHARSET = "utf8";
const DBHOST = "127.0.0.1";

// tạo kết nối từ project php sang mysql
function getConnect(){
    $connect = new PDO("mysql:host=" . DBHOST
        . ";dbname=" . DBNAME
        . ";charset=" . DBCHARSET,
        DBUSER,
        DBPASS
    );
    return $connect;
}
// nếu như dùng để lấy danh sách thì sẽ truyền true còn truyền false thì
//sẽ chạy được các câi truy vấn như thêm sửa xóa
function getData($query, $getAll = true){
    $conn = getConnect();

    $stmt = $conn->prepare($query);
    $stmt->execute();
    if($getAll){
        return $stmt->fetchAll();
    }

    return $stmt->fetch();
}
?>