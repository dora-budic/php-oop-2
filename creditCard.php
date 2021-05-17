<?php

  trait CreditCard {
    private $card_number;
    private $expiration_date;
    private $cvc;

    public function setCardNumber($card_number)
    {
      $this->card_number = $card_number;
    }

    public function getCardNumber()
    {
      return $this->card_number;
    }

    public function setExpirationDate($expiration_date)
    {
      $this->expiration_date = $expiration_date;
    }

    public function getExpirationDate()
    {
      return $this->expiration_date;
    }

    public function setCvc($cvc)
    {
      $this->cvc = $cvc;
    }

    public function getCvc()
    {
      return $this->cvc;
    }
  }

 ?>
