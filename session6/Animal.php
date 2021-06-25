<?php 

class Animal{

  public $name;
  protected $speed;
  protected $noOfLegs;

}

class Cat extends Animal{



  public function __construct($name){
   $this->name = $name;
  }
  
  public function setName(){
    $this->name = "Cat";
  }

}


class Dog extends Animal{

 

  public function __construct($name){
   $this->name = $name;
  }
  


}


$cat = new Cat("Wild Cat");
$dog = new Dog("Wild Dog");

echo "<pre>";
print_r($cat);
print_r($dog);
