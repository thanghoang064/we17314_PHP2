<?php
namespace App\Models;
class Product extends BaseModel {
    protected $table = "product";
    //xây dựng hàm lấy danh sách sản phẩm
    public function getProduct() {
        $sql = "select * from $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    //xây dựng hàm thêm sản phẩm
    public function addProduct($id,$ten_sp,$gia) {
        $sql = "insert into $this->table values (?,?,?)";
        $this->setQuery($sql);
        return $this->execute([$id,$ten_sp,$gia]);
    }
}