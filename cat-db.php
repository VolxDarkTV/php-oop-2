<?php
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