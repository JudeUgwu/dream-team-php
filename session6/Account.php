<?php

class Account{

  private static $balance;

  public function __construct(){

  }


  public static function setBalance($balance){
    self::$balance = $balance;
    echo "The value of balance now is".self::$balance;
  }

}


Account::setBalance(1000);
echo "<br>";
Account::setBalance(4000);
