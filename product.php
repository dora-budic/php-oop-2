<?php

  class Product {
    private $name;
    public $category;
    private $brand;
    private $price;
    private $discount;

    public function __construct($name,$category,$brand,$price,$discount) {
      $this->name = $name;
      $this->category = $category;
      $this->brand = $brand;
      $this->price = $price;
      $this->discount = $discount;
    }

    public function setName($name) {
      $this->name = $name;
    }

    public function getName() {
      return $this->name;
    }

    public function setCategory($category) {
      $this->category = $category;
    }

    public function getCategory() {
      return $this->category;
    }
    
    public function setBrand($brand) {
      $this->brand = $brand;
    }

    public function getBrand() {
      return $this->brand;
    }

    public function setPrice($price) {
      $this->price = $price;
    }

    public function getPrice() {
      return $this->price;
    }

    public function setDiscount($discount) {
      $this->discount = $discount;
    }

    public function getDiscount() {
      return $this->discount;
    }

  }

 ?>
