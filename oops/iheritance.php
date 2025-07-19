<?php

class UserAuth{
  function login($usertype){
    echo "$usertype logged in";
  }
}


class Student extends UserAuth{
 

}

class Teacher extends UserAuth{


}

$s1=new Student();
$s1->login("student");

echo "<br>";
$s2=new Teacher();
$s2->login("teaccter");




?>