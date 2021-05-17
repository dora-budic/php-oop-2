<?php

  class Product {
    private $username;
    private $password;
    private $name;
    private $surname;
    private $date_of_birth;
    private $account_type;
    private $products = [];

    public function __construct($username,$password,$name,$surname,$date_of_birth,$account_type) {
      $this->username = $username;
      $this->password = $password;
      $this->name = $name;
      $this->surname = $surname;
      $this->date_of_birth = $date_of_birth;
      $this->account_type = $account_type;
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

  }

 ?>
