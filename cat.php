<?php
class Cat {
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
?>