<?php
class User{
  public $name ="Abhishek";
  private $age =30;

  function __get($property){
    echo "$property property is not exist";
  }
}
$user = new User();
echo $user->name;

echo "<br>";
echo $user->age;


?>