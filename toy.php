<?php
class Toy{
    private $name;
    private $materials;
    private $dayOfProduction;

    public function __construct($name, $materials, $dayOfProduction){
        $this -> name = $name;
        $this -> materials = $materials;   
        $this -> dayOfProduction = $dayOfProduction;       
    }

    // Name
    public function getName(){
        return $this -> name;
    }
    public function setName($name){
        return $this -> name = $name;
    }
    // Materials
    public function getMaterials(){
        return $this -> materials;
    }
    public function setMaterials($materials){
        return $this -> materials = $materials;
    }
    // Day Of Production
    public function getDayOfProduction(){
        return $this -> dayOfProduction;
    }
    public function setDayOfProduction($dayOfProduction){
        return $this -> dayOfProduction = $dayOfProduction;
    }
}
?>