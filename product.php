<?php

  class Product {
    private $name;
    public $category;
    private $brand;
    private $price;
    private $discount;
    private $availability;

    public function __construct($name,$category,$brand,$price,$discount,$availability) {
      $this->name = $name;
      $this->category = $category;
      $this->brand = $brand;
      $this->price = $price;
      $this->discount = $discount;
      $this->availability = $availability;
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

    public function setAvailability($availability) {
      $this->availability = $availability;
    }

    public function getAvailability() {
      return $this->availability;
    }
  }

  class Shoes extends Product {
    public $category = 'shoes';
    public $size;
    public $color;

    public function __construct($name,$category,$brand,$price,$discount,$availability,$size,$color) {
      $this->name = $name;
      $this->category = $category;
      $this->brand = $brand;
      $this->price = $price;
      $this->discount = $discount;
      $this->availability = $availability;
      $this->size = $size;
      $this->color = $color;
    }

    public function setSize($size) {
      $this->size = $size;
    }

    public function getSize() {
      return $this->size;
    }

    public function setColor($color) {
      $this->color = $color;
    }

    public function getColor() {
      return $this->color;
    }
  }


 ?>
