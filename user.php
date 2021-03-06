<?php

  require_once './creditCard.php';

  class User {
    use CreditCard;

    private $username;
    private $password;
    private $name;
    private $surname;
    private $date_of_birth;
    private $account_type = 'basic';
    private $products = [];

    public function __construct($username,$password,$name,$surname,$date_of_birth,$card_number,$expiration_date,$cvc) {
      $this->username = $username;
      $this->password = $password;
      $this->name = $name;
      $this->surname = $surname;
      $this->date_of_birth = $date_of_birth;
      $this->setCardNumber($card_number);
      $this->setExpirationDate($expiration_date);
      $this->setCvc($cvc);
    }

    public function setUsername($username) {
      $this->username = $username;
    }

    public function getUsername() {
      return $this->username;
    }

    public function setPassword($password) {
      $this->password = $password;
    }

    public function getPassword() {
      return $this->password;
    }

    public function setName($name) {
      $this->name = $name;
    }

    public function getName() {
      return $this->name;
    }

    public function setSurname($surname) {
      $this->surname = $surname;
    }

    public function getSurname() {
      return $this->surname;
    }

    public function setDateOfBirth($date_of_birth) {
      $this->date_of_birth = $date_of_birth;
    }

    public function getDateOfBirth() {
      return $this->date_of_birth;
    }

    public function setAccountType($account_type) {
      $this->account_type = $account_type;
    }

    public function getAccountType() {
      return $this->account_type;
    }

    public function insertProduct($product)
    {
      $this->products[] = $product;
    }
    public function getFatture()
    {
      return $this->products;
    }
  }

  class PremiumUser extends User {
    private $account_type = 'premium';
    private $discount_access = true;
    private $free_shipping = true;

    public function setDiscountAccess($discount_access) {
      $this->discount_access = $discount_access;
    }

    public function getDiscountAccess() {
      return $this->discount_access;
    }

    public function setFreeShipping($free_shipping) {
      $this->free_shipping = $free_shipping;
    }

    public function getFreeShipping() {
      return $this->free_shipping;
    }
  }

 ?>
