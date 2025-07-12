<?php
$user_need=5;
for($i=0;$i<=10;$i++){
  echo $i;
  echo "<br>";
  if($i==$user_need){
    break;
  }  
}
echo "<br>";
?>

<?php

$user_need=5;
for($i=0;$i<=10;$i++){
  echo $i;
  echo "<br>";
  if($i==$user_need){
    continue;
  }  

}
?>