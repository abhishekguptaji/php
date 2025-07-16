<?php
include("./config.php");
$getStudent=$conn->prepare("select id,name from info");
$getStudent->execute();
$studentData=$getStudent->fetchAll();

echo "<select>";
echo "<option>Select Name</option>";
foreach($studentData as $student){
  echo "<option" .$student['id'].">".$student['name']."</option>";
}
echo "</select>";

?>