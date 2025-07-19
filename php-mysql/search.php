<form action="" method="post">
  <input type="text" name="search" placeholder="Enter name for search" >
  <br>
  <br>
  <button>Search</button>
 </form>
</body>


<?php
include('./config.php');
if(isset($_POST['search'])){
  $search = $_POST['search'];
  $student=$conn->prepare("select * from info where name='$search'");
  $student=$conn->prepare("select * from info where name like '%$search%'");
  $student->execute();
  $result=$student->fetchAll();
  // print_r($result);
  echo "<table border='1'>";
  foreach($result as $student){
  echo "<tr>
  <td>".$student['name']."</td>
  <td>".$student['class']."</td>
  <td>".$student['college']."</td>
  </tr>";
}
echo "</table>";
}
?>