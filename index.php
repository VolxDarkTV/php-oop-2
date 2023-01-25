<?php
include("dog.php");
include("cat.php");
include("food.php");


// Food
$foods = [
    new Food("Croccantissimi", "pane - carne - 55% acqua minerale", "10-06-2036"),
    new Food("Croccantini", "pane - carne - 70% acqua minerale", "10-06-2026"),
];

foreach ($foods as $food){
    echo "<h1>" . $food -> getName() . "</h1>" . "<span>" . $food -> getIngredients() . "</span>" 
    . "<span>" . $food -> getExpirationDate() . "</span>";
}

// Dog
$dogs = [
    new Dog("Alano", "27-05-2021"), 
    new Dog("Corso", "27-05-2009"), 
    new Dog("Labrador", "27-05-2011"), 
    new Dog("Maremmano", "27-05-2019")
];

foreach ($dogs as $dog){
    echo "<h1>" . $dog -> getCategory() . "</h1>" . "<span>" . $dog -> getDateOfBirth() . "</span>";
}

// Cat
$cats = [
    new Cat("Siamese", "27-05-2021"), 
    new Cat("Certosino", "27-05-2009"), 
    new Cat("Balinese", "27-05-2011"), 
    new Cat("Persiano", "27-05-2019")
];

foreach ($cats as $cat){
    echo "<h1>" . $cat -> getCategory() . "</h1>" . "<span>" . $cat -> getDateOfBirth() . "</span>";
}
?>