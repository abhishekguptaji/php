<?php
// final class final{

// }

// class gupta extents final{

// }

// $name= new gupta();

class Honda{
 final function companyName(){
    echo "honda";
  }
}

class Cars extends Honda{
  function companyName(){
    echo "honda city";
  }
}

$car = new Cars();
$car->companyName();

?>