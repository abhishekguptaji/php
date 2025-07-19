<?php
class Honda{
  static public $countryNanme="India";
  static function companyName(){
    echo "Honda";
  }
}

// $honda =new Honda();
// $honda->companyName();

Honda::companyName();
echo Honda::$countryNanme;
?>