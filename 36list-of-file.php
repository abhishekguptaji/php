<?php
$path="php_form";
$items=scandir($path);
$items=array_diff($items,array(".",".."));
// print_r($items);
foreach($items as $item){
  echo "<a href='./$item'>$item</a>";
  echo "<br>";
}
?>