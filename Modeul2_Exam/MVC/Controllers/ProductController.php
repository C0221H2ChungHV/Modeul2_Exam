<?php

class ProductController extends Router
{
    public function displaylist()
    {
        $result = $this->model("ProductModel")->getAll();
        $this->view("ViewList", $result);
    }

    public function delete($code)
    {
       $result = $this->model('ProductModel')->delete($code);
            header('Location: index.php/?url=ProductController/displaylist');

    }

    public function update($code)
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $product = $this->model("ProductModel")->get($code);
            $this->view("update", ['product' => $product]);
        } else {
            $product = new Product($_POST['product_Name'], $_POST['product_Line'], $_POST['price'], $_POST['quantity'], $_POST['description']);
            $this->model("ProductModel")->edit($product, $code);
            header('Location: index.php/?url=BlogController/displaylist');
        }
    }

    public function addProduct()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $product = new Product($_POST['product_Name'], $_POST['product_Line'], $_POST['price'], $_POST['quantity'], $_POST['description']);
            $result = $this->model("ProductModel")->add($product);
        }
        $this->view("addproduct");
    }

    public function searchProduct()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $search = $_POST["product_Name"];
            $result = $this->model("ProductModel")->search($search);
            $this->view("ViewList", $result);
        }

    }
}
