<form  action="" method="post">
    <input type="text" placeholder="enter name" name="name"></br></br>
    <input type="number" placeholder="enter class" name="class"></br></br>
    <input type="text" placeholder="enter college" name="college"></br></br>

    <button>Add New Student</button>
  </form>

<?php
if(isset($_POST['name'])){
  $name=$_POST['name'];
  $class=$_POST['class'];
  $college=$_POST['college'];
 
 include("./config.php");
$student = $conn->prepare("
INSERT INTO `info` (`id`,`name`,`class`,
`college`)
VALUES (NULL,?,?,?)
");

$result = $student->execute([$name,$class,$college]);
if($result) {
  echo " Data inserted successfully!";
} else {
  echo " Failed to insert data.";
  print_r($student->errorInfo());
}
}

?>


