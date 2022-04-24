<?php
include_once '../repository/productRepository.php';
include_once '../models/product.php';

if(isset($_POST['registerBtn'])){
    if(empty($_POST['name']) || empty($_POST['image']) || empty($_POST['description']) ||
    empty($_POST['price'])){
        echo "Fill all fields!";
    }else{
        $name = $_POST['name'];
        $image = $_POST['image'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $code = rand(000000,999999);

        $product  = new Product($code,$name,$image,$description,$price);
        $productRepository = new ProductRepository();

        $productRepository->insertProduct($product);


    }
}



?>