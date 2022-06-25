<?php
require_once __DIR__ . '/Product.php';
class Food extends Product{
  public function __construct($_name, $_brand, $_price){
    parent::__construct($_name, $_brand, $_price);
  }
}
?>