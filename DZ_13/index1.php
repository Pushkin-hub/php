<?php
class Category {
    private $name;
    private $list_products;
    
    public function __construct($_name, $_list_products = []) {
        $this->name = $_name;
        $this->list_products = $_list_products;
    }
    
    public function getCategoryName() {
        return $this->name;
    }
    
    public function getCategoryProducts() {
        return $this->list_products;
    }
    
    public function addProduct($product) {
        $this->list_products[] = $product;
    }
}
