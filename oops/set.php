<?php
class User{
  private $name ="abhi";
  function __set($property,$value){
    if(property_exists($this,$property)){
      $this->$property=$value;
    } else{
      echo "no";
    }
    
  }
  function getName(){
    echo $this->name;
  }
}
$user = new User();
$user->getName();
echo "<br>";
$user->name="Abhishek";
$user->getName();
?>