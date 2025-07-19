<?php
class Properties{
  public $name="Abhishek";
  function getName(){
    echo $this->name;
  }
  function updateName($name){
    $this->name=$name;
  }
}

$p1 = new Properties();

// echo $p1->name;
$p1->updateName("sam");
$p1->getName();

?>