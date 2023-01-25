<?php
$toys = [
    new Toy("Bone", "Copped Bones and 30% Water", "01/04/2023")
];
foreach($toys as $toy){
    echo "<span>" . $toy -> getName() . "</span> <br>"
    . "<span>" . $toy -> getMaterials() . "</span> <br>" 
    . "<span>" . $toy -> getDayOfProduction() . "</span> <br>";
}
?>