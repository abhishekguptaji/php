<?php
class CountrySale{
  static public $totalSale=1000;
   function getTotalSale(){
   echo static::$totalSale;

  }
}
class CitySale extends CountrySale{
  static public $totalSale=50;
  
}
$city = new CitySale();

$city->getTotalSale();


?>