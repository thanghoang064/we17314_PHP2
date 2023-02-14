<?php
//điều chỉnh kết nối db ở đây
const DBNAME = "we17316";
const DBUSER = "root";
const DBPASS = "";
const DBCHARSET = "utf8";
const DBHOST = "127.0.0.1";
// tất cả những cái gì chung của dự án sẽ viết vào đây
const BASE_URL = "http://localhost:8888/we17314_PHP2/base_mvc/";

function delete_session() {
    unset($_SESSION['errors']);
    unset($_SESSION['success']);
}