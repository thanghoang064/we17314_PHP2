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
    //xây dựngh hàm lấy chi tiết sản phẩm
    public function getDetailProduct($id){
        $sql = "SELECT * FROM $this->table where id = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }
    //xây dựngh hàm update sản phẩm
    public function updateProduct($id,$ten_sp,$gia) {
        $sql = "update $this->table set ten_sp = ?,gia = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute([$ten_sp,$gia,$id]);
    }
    //xây dựng hàm delete sản phẩm
    public function deleteProduct($id) {
        $sql = "DELETE FROM $this->table where id = ?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }

}