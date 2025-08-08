<?php
// function fruits(array | string $data){
//   echo $data;
// }
// fruits("apple");



class Fruits{
  function getName(string $name){
    echo $name;
  }
}
$q =new Fruits;
$q->getName(["apple"]);
?>