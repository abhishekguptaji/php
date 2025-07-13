<?php
$array=[
  [1,"anil","noida","anil@gmail.com"],
  [2,"abhi","greater noida","abhi@gmail.com"],
  [3,"sangam","delhi","sangam@gmail.com"]
];

echo "<table border='2'>";
echo  "<h1>Employee Details.</h1>";
for($i=0;$i<count($array);$i++){
  echo "<tr>";
  for($j=0;$j<count($array[$i]);$j++){
     echo "<td>";
    echo $array[$i][$j];
     echo "</td>";
}
 echo "</tr>";
}

 echo "</table>";
?>