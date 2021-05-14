<?php

class ProductModel extends DB
{
    public function getAll()
    {
        $sql = "SELECT * FROM `Product`";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function add($product)
    {
        $sql = "INSERT INTO Product(`product_Name`,`product_Line`,`price`,`quantity`, `created`, `description`) VALUES (:product_Name,:product_Line,:price,:quantity, :created, :description)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(':product_Name', $product->productName);
        $statement->bindParam(':product_Line', $product->productLine);
        $statement->bindParam(':price', $product->price);
        $statement->bindParam(':quantity', $product->quantity);
        $statement->bindParam(':created', $product->created);
        $statement->bindParam(':description', $product->description);
        return $statement->execute();

    }

    public function edit($product, $code)
    {
        var_dump($product, $code);
        $sql = "UPDATE Product SET `product_Name` = :product_Name, `product_Line` = :product_Line, `price` = :price, `quantity` = :quantity, `created` = :created, `description`= :description WHERE code = :code";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(':product_Name', $product->productName);
        $statement->bindParam(':product_Line', $product->productLine);
        $statement->bindParam(':price', $product->price);
        $statement->bindParam(':quantity', $product->quantity);
        $statement->bindParam(':created', $product->created);
        $statement->bindParam(':description', $product->description);
        $statement->bindParam(':code', $code);
        $statement->execute();
    }

    public function get($code)
    {
        $sql = "SELECT * FROM Product WHERE code = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $code);
        $statement->execute();
        $row = $statement->fetch();
        return $row;
    }

    public function search($productName)
    {
        $sql = "SELECT * FROM `Product` WHERE `product_Name` LIKE '%$productName%'";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $row = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }

    public function delete($code)
    {
        $sql = "DELETE FROM Product WHERE code = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $code);
        return $statement->execute();
    }

}

?>
