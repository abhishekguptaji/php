<?php
function test(){
  echo "test function called";
}

$test ="test";
// $test();

function main($test){
  // echo "Main fiunction called";
  $test();
}

main($test);

?>