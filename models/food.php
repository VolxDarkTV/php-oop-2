<?php
class Food{
    private $name;
    private $ingredients;
    private $expirationDate;

    public function __construct($name, $ingredients, $expirationDate){

        $this -> setName($name);
        $this -> setIngredients($ingredients);
        $this -> setExpirationDate($expirationDate);

    }

     // Name
    public function getName(){
        return $this -> name;
    }
    public function setName($name){
        return $this -> name = $name;
    }
    // Ingredients
    public function getIngredients(){
        return  $this -> ingredients;
    }
    public function setIngredients($ingredients){
        return  $this -> ingredients = $ingredients;
    }
    // Expiration Date
    public function getExpirationDate(){
        return $this -> expirationDate;
    }
    public function setExpirationDate($expirationDate){
        return $this -> expirationDate = $expirationDate;
    }
    

}
?>
<?php
$firstDate  = new DateTime(date('d-m-Y', time()));
$secondDate = new DateTime("2020-03-04");
$diff = $firstDate->diff($secondDate);

echo $diff->y . " year, " . $diff->m." months and ".$diff->d." day "; 
// Total amount of days
echo $diff->days . " days <br><br><br>";
?>
