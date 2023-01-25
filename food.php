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