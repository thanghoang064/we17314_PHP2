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

}