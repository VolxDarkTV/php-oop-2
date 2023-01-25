<?php
class Dog {
    private $category;
    private $dateOfBirth;

    public function __construct($category, $dateOfBirth){
        $this -> setCategory($category);
        $this -> setDateOfBirth($dateOfBirth);

    }

    // Category
    public function getCategory(){
        return $this -> category;
    }
    public function setCategory($category){
        return $this -> category = $category;
    }

    // DateOfBirth
    public function getDateOfBirth(){
        return $this -> dateOfBirth;
    }
    public function setDateOfBirth($dateOfBirth){
        return $this -> dateOfBirth = $dateOfBirth;
    }


}

// class Food{
//     private $name;
//     private $ingredients;
//     private $expiration_date;

    
// }

$dogs = [
    new Dog("Alano", "27-05-2021"), 
    new Dog("Corso", "27-05-2009"), 
    new Dog("Labrador", "27-05-2011"), 
    new Dog("Maremmano", "27-05-2019")
];

foreach ($dogs as $dog){
    echo "<h1>" . $dog -> getCategory() . "</h1>" . "<span>" . $dog -> getDateOfBirth() . "</span>";
}

?>