<?php
class ConstructorDemo{
  public $name;
  function __construct(){
    echo "__contructor called";
    $this->name="abhi";
  }
   function displayName(){
    echo $this->name;
   }
}
$cd= new ConstructorDemo();
// $cd->setName();
echo "<br>";
$cd->displayName();
?>