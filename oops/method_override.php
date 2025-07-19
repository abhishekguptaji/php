<?php

class Teacher{
  public $city="Delhi";
  function nextExam(){
    echo "next exam is maths";
  }
  function age(){
    echo "my age is 40";
  }
}
class Student extends Teacher{
   public $city="Noida";
 function age(){
  echo "my age is 20";
 }
}


$s1 = new Teacher();
// $s1->nextExam();

$s2 = new Student();
$s2->nextExam();
$s2->age();
echo $s2->city;
?>