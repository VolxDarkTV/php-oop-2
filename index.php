<?php
class Dog {
    private $category;
    private $date_of_birth;

    public function __construct($category, $date_of_birth){
        $this -> setCategory($category);
        $this -> setCategory($date_of_birth);

    }

    public function getCategory(){
        return $this -> category;
    }
    public function setCategory(){
        return $this -> category;
    }

}

class Cat{

}

class Toys{

}

$dog = new Dog("Alano", "27-05-2021");

?>