<?php
include("./config.php");

$getStudents=$conn->prepare("SELECT * FROM info");
$getStudents->execute();
$students=$getStudents->fetchAll();
// echo "<pre>";
// print_r($students);

echo "<table border='1'>";
foreach($students as $student){
  echo "<tr>
  <td>".$student['name']."</td>
  <td>".$student['class']."</td>
  <td>".$student['college']."</td>
  </tr>";
}
echo "</table>";


?>
