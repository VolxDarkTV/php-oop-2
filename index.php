<?php
class Category{
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
        $this -> name = $name;
    }
    // Description
    public function getDescription(){
        return $this -> description;
    }
    public function setDescription($description){
        $this -> description = $description;
    }

    // getHtml CATEGORY
    public function getHtml(){
        return "<b>Product:</b> " . $this -> getName() . "<br>"
            . "<b>Description:</b> " . $this -> getDescription();
    }
}
class Product{
    private $name;
    private $price;
    private $weight;
    private Category $category;

    public function __construct($name, $price, $weight, $category){
        $this -> setName($name);
        $this -> setPrice($price);
        $this -> setWeight($weight);
        $this -> setCategory($category);
    }

    // Name
    public function getName(){
        return $this -> name;
    }
    public function setName($name){
        $this -> name = $name;
    }
    // Price
    public function getPrice(){
        return $this -> price;
    }
    public function setPrice($price){
        $this -> price = $price;
    }
    // Weight
    public function getWeight(){
        return $this -> weight;
    }
    public function setWeight($weight){
        $this -> weight = $weight;
    }
    // Category
    public function getCategory(){
        return $this -> category;
    }
    public function setCategory($category){
        $this -> category = $category;
    }


    // getHtml PRODUCT
    public function getHtml(){
        return $this -> getName() . "<br>"
                . $this -> getPrice() . "<br>"
                . $this -> getWeight() . "<br>"
                . $this -> getCategory() -> getHtml();
    }
}

class Food extends Product{
    private $expDate;
    
    public function __construct($name, $price, $weight, $category, $expDate){

        parent :: __construct($name, $price, $weight, $category);

        $this -> setExpDate($expDate); 
    }

    // ExpDate
    public function getExpDate(){
        return $this -> expDate;
    }
    public function setExpDate($expDate){
        $this -> expDate = $expDate;
    }

    // getHtml FOOD
    public function getHtml(){
        return parent :: getHtml() . "<br>" 
                . $this -> getExpDate() . "<br>";
    }
}

class Toy extends Product{
    private $materials;

    public function __construct($name, $price, $weight, $category, $materials){

        parent :: __construct($name, $price, $weight, $category);

        $this -> setMaterials($materials);
    }

    // Materials
    public function getMatirials(){
        return $this -> materials;
    }
    public function setMaterials($materials){
        $this -> materials = $materials;
    }

    // getHtml TOY
    public function getHtml(){
        return parent :: getHtml() . "<br>" 
                . $this -> getMatirials() . "<br>";
    }
}

class Kennel extends Product{
    private $size;

    public function __construct($name, $price, $weight, $category, $size){

        parent :: __construct($name, $price, $weight, $category);

        $this -> setSize($size);
    }

    // Size
    public function getSize(){
        return $this -> size;
    }
    public function setSize($size){
        $this -> size = $size;
    }


    public function getHtml(){
        return parent :: getHtml() . "<br>"
                . $this -> getSize() . "<br>";
    }
}

// Instance

        // CATEGORY
    $nullCategory = new Category(null, null);
            // DOG
    $dogCategory = new Category("Dog 1", "desc Dog 1");
            // CAT
    $catCategory = new Category("Cat 1", "desc Cat 1");

        // PRODUCT
    $product = new Product("Treats 1", 10 . "$", 200 . "g", $catCategory);

        // FOOD
    $food = new Food("Bone 1", 10 . "$", 200 . "g", $dogCategory, "2026-02-02");

        // TOY
    $toy = new Toy("Ball 1", 5 . "$", 10 . "g", $dogCategory, "plastic");

        // KENNEL
    $kennel = new Kennel("DogHouse", 120 . "$", 20 . "kg", $dogCategory, "20x20");
// echo $dogCategory -> getHtml();
// echo "<br>";
// echo "<br>";
// echo $product -> getHtml();
// echo "<br>";
// echo "<br>";
echo $food -> getHtml();
echo "<br>";
echo "<br>";
echo $toy -> getHtml();
echo "<br>";
echo "<br>";
echo $kennel -> getHtml();

?>