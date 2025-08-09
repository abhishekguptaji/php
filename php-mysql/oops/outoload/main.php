<?php
// include('Teacher.php');
// $t1 = new Teacher();

function autoloader($class){
  echo "<br/>";
  echo $class.'.php';
  echo "<br/>";
  include($class.'.php');
  echo "<br/>";
}


spl_autoload_register('autoLoader');
$t1 = new Teacher();
$m1 = new Management();
$s1 = new Student();



?>