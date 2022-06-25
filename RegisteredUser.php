<?php
require_once __DIR__ . '/User.php';

class RegisteredUser extends User {
  private $creditCard;
  public $valid = true;

  public function __construct($_name,$_surname,$_creditCard){
    $this->creditCard = $_creditCard;

    $this->setDiscount();

    parent::__construct($_name,$_surname);
  }

  //SETTER
  public function setCreditCard($_creditCard){
    $this->creditCard = $_creditCard;
  }

  public function setDiscount(){
    $this->discount = 20;
  }

  //GETTER
  public function getCreditCard(){
    $this->creditCard;
  }
}

?>