<?php 
include_once '../database/databaseConnection.php';

class ProductRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConenction;
        $this->connection = $conn->startConnection();
    }


    function insertProduct($product){

        $conn = $this->connection;

        $code = $product->getCode();
        $name = $product->getName();
        $image = $product->getImage();
        $description = $product->getDescription();
        $price = $product->getPrice();
       

        $sql = "INSERT INTO product (code, name, image, description, price) VALUES (?,?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$code,$name,$image,$description,$price]);

        echo "<script> alert('Product has been inserted successfully!'); </script>";

    }

    function getAllProducts(){
        $conn = $this->connection;

        $sql = "SELECT * FROM product";

        $statement = $conn->query($sql);
        $products = $statement->fetchAll();

        return $products;
    }

    function getProductByCode($code){
        $conn = $this->connection;

        $sql = "SELECT * FROM product WHERE code='$code'";

        $statement = $conn->query($sql);
        $product = $statement->fetch();

        return $product;
    }

    function updateProduct($code,$name,$image,$description,$price){
         $conn = $this->connection;

         $sql = "UPDATE product SET name=?, image=?, description=? price=? WHERE code=?";

         $statement = $conn->prepare($sql);

         $statement->execute([$name,$image,$price,$description,$code]);

         echo "<script>alert('Update was successful'); </script>";
    } 

    function deleteProduct($code){
        $conn = $this->connection;
        
        $sql = "DELETE FROM product WHERE code=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$code]);

        echo "<script>alert('Delete was successful'); </script>";
   } 
}


?>