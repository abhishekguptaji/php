<?php
interface ProductFeatures{
  function images();
  function ownerDetails();
}

class Products implements ProductFeatures{
  function images(){
    echo "Hello World";
    echo "</br>";
  }
  function ownerDetails(){
    echo "Abhishek Gupta";
  }
}
$product = new Products();
$product->images();
$product->ownerDetails();
?>