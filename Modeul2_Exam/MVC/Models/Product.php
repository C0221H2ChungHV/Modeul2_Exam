<?php
class Product {
    public $productName;
    public $productLine;
    public $price;
    public $quantity;
    public $created;
    public $description;
    public function __construct($productName, $productLine, $price, $quantity, $description)
    {
        $this->productName = $productName;
        $this->productLine = $productLine;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->created = date('Y/m/d');
        $this->description = $description;
    }
}
