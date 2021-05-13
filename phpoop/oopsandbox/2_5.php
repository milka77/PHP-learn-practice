<?php
// Access Modifiers, Getters & Setters

class User {
  // Access modifiers
  // public -> can access from anywhere
  // private -> can access only inside the class
  // protected -> can access only inside the class and in other exteded classes
  private $name;
  private $age;

  public function __construct($name, $age){
    $this->name = $name;
    $this->age = $age;
  }

  // Getter
  public function getName(){
    return $this->name;
  }

  // Setter
  public function setName($name){
    $this->name = $name;
  }

  // __get MAGIC METHOD
  public function __get($property){
    if(property_exists($this, $property)){
      return $this->$property;
    }
  }

  // __set MAGIC METHOD
  public function __set($property, $value){
    if(property_exists($this, $property)){
      $this->$property = $value;
    }
    return $this;
  }
}

$user1 = new User('John', 40);

//echo $user1->name;
//$user1->setName('Jeff');
//echo $user1->getName();
$user1->__set('age', 41);
echo $user1->__get('age');