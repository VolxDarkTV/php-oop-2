<?php
include("dog.php");
include("cat.php");
include("food.php");
include("toy.php");

class Products{
    private $name;
    private $description;

    public function __construct($name, $description){
        $this -> setName($name);
        $this -> setDescription($description);
    }

    // Name
    public function getName(){
        return $this -> name;
    }
    public function setName($name){
        return $this -> name = $name;
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
    new Products("Osso di Gomma", "giocattolo adatto a tutti i cuccioli"),
    new Products("Osso di plastica", "giocattolo adatto a i cuccioli di almeno 1 anno"),
];
foreach($products as $product){
    echo "<span>" . $product -> getName() . "</span> <br>"
    . "<span>" . $product -> getDescription() . "</span> <br>";
}







// Toy
echo "<br><br><br><br> Toys <br><br>";
include("toy-db.php");

// Dog
echo "<br><br><br><br> DOG";
include("dog-db.php");

// Cat
echo "<br><br><br><br> CAT";
include("cat-db.php");

// Food
echo "<br><br><br><br> FOOD";
include("food-db.php")
?>