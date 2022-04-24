<?php

class Product{
    private $code;
    private $name;
    private $image;
    private $description;
    private $price;


    function __construct($code,$name,$image,$description,$price){
            $this->code = $code;
            $this->name = $name;
            $this->image = $image;
            $this->description = $description;
            $this->price = $price;
    }


    function getCode(){
        return $this->code;
    }
    function getName(){
        return $this->name;
    }
    function getImage(){
        return $this->image;
    }
    function getDescription(){
        return $this->description;
    }
    function getPrice(){
        return $this->price;
    }
}

?>