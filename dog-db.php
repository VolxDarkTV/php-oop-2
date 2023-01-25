<?php
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