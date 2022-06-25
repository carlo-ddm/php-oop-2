<?php

class Product {

  private $name;
  private $brand;
  private $price;

  public function __construct($_name, $_brand, $_price) {
    $this->name = $_name;
    $this->brand = $_brand;
    $this->price = $_price;
  }
  // SETTER
  public function setName($_name){
    $this->name = $_name;
  }
  public function setBrand($_brand){
    $this->name = $_brand;
  }
  public function setPrice($_price){
    $this->name = $_price;
  }

  // GETTER
  public function getName(){
    return $this->name;
  }
  public function getBrand(){
    return $this->brand;
  }
  public function getPrice(){
    return $this->price;
  }
}



?>