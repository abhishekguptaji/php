<?php
class User{
  function __invoke(){
    echo "My Name is Abhishek Gupta";
  }
  function other_method(){
    echo "other";
  }
}
$user = new User();
$user();
echo "<br>";
$user->other_method();
?>