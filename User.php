<?php
class User {
  private $name;
  private $surname;
  private $discount = 0;

  public function __construct($_name,$_surname,$_discount){
    $this->$name =$_name;
    $this->$surname =$_surname;
    $this->$discount =$_discount;
  }

  // SETTER
  public function setName($_name){
    $this->name = $_name;
  }
  public function setSurname($_surname){
    $this->surname = $_surname;
  }
  public function setDiscount($_discount){
    $this->discount = $_discount;
  }

  // GETTER
  public function getName(){
    return $this->name;
  }
  public function getSurname(){
    return $this->surname;
  }
  public function getDiscount(){
    return $this->discount;
  }
}
?>