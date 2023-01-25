<?php
$foods = [
    new Food("Croccantissimi", "pane - carne - 55% acqua minerale", "10-06-2036"),
    new Food("Croccantini", "pane - carne - 70% acqua minerale", "10-06-2026"),
];

foreach ($foods as $food){
    echo "<h1>" . $food -> getName() . "</h1>" . "<span>" . $food -> getIngredients() . "</span>" 
    . "<span>" . $food -> getExpirationDate() . "</span>";
}
?>