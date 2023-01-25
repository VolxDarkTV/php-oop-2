<?php
include("dog.php");
include("cat.php");
include("food.php");
include("toy.php");

class Products{
    private $name;
    private $price;
    private $description;

    public function __construct($name, $price, $description){
        $this -> setName($name);
        $this -> setPrice($price);
        $this -> setDescription($description);
    }

    // Name
    public function getName(){
        return $this -> name;
    }
    public function setName($name){
        return $this -> name = $name;
    }
    // Price
    public function getPrice(){
        return $this -> price;
    }
    public function setPrice($price){
        return $this -> price = $price;
    }
    // Description
    public function getDescription(){
        return $this -> description;
    }
    public function setDescription($description){
        return $this -> description = $description;
    }
}



$products = [
    new Products("Osso di Gomma", 50 . "$", "giocattolo adatto a tutti i cuccioli"),
    new Products("Osso di plastica", 40 . "$", "giocattolo adatto a i cuccioli di almeno 1 anno"),
];
foreach($products as $product){
    echo "<span>" . $product -> getName() . "</span> <br>"
    . "<span>" . $product -> getPrice() . "</span> <br>"
    . "<span>" . $product -> getDescription() . "</span> <br>";
}



include("db.php");
?>