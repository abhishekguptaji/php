<?php
class MathOperation{
  function sum($a,$b){
  return $a+$b;
 }
  function mul($a,$b){
  return $a*$b;
  }
  function divide($a,$b){
  return $a/$b;
  }
  function sub($a,$b){
  return $a-$b;
  }
}

$maths= new MathOperation(); 
echo $maths->sum(20,30);
echo "<br>";
echo $maths->mul(20,30);
echo "<br>";
echo $maths->divide(20,30);
echo "<br>";
echo $maths->sub(30,24);
echo "<br>";


?>