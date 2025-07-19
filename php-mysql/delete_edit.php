<?php
include('./config.php');
$students=$conn->prepare("select * from  info");

$students->execute();
$result=$students->fetchAll();

// print_r($result);

echo "<table border='3'>";
echo  "<tr>
        <th>ID</th>
        <th>Name</th>
        <th>Class</th>
        <th>College</th>
        <th>Button</th>
        </tr>";
foreach($result as $student){
  echo  "<tr>
  <td>".$student['id']."</td>
  <td>".$student['name']."</td>
  <td>".$student['class']."</td>
  <td>".$student['college']."</td>
  <td><form method='post'><button name='delete' value='".$student['id']."'>delete</button></form></td>
  <td><a href='update.php?id=".$student['id']."'>edit</a></td>
  </tr>";
}
echo "</table>";
?>