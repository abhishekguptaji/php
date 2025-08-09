<?php
include('./config.php');
class Student{
  public $DBconn;
  function __construct($conn){
    $this->DBconn=$conn;
  }
  function getData(){
    $getStudents=$this->DBconn->prepare("select * from info");
    $getStudents->execute();
    $result  = $getStudents->fetchAll();
    echo "<pre>";
    print_r($result);
    echo "<pre>";
  }

function insertData(){
  $sqlQuery = "insert into info (`id`,`name`,`class`,`college`) values
  (null,'ashu','5','svm')";
  $student=$this->DBconn->prepare($sqlQuery);
  $result = $student->execute();
  if($result){
    echo "data is inserted";
  } else{
    echo "operation failed";
  }
}

public function updateData() {
  $sqlQuery = " UPDATE info SET 
    name = 'Ashutosh',
    class = '23',
    college = 'Gniotq'
    WHERE id = 11";

  $student = $this->DBconn->prepare($sqlQuery);
  $result = $student->execute();

  if ($result) {
    echo "Data has been updated successfully.";
  } else {
    echo "Update operation failed.";
  }
}

public function deleteData() {
  $sqlQuery = "delete from info where id = 13";

  $student = $this->DBconn->prepare($sqlQuery);
  $result = $student->execute();
  if ($result) {
    echo "Data has been delete.";
  } else {
    echo "Update operation failed.";
  }
}

function insertwithData($request){
  // print_r($request);
  $name = $request['name'];
  $class= $request['class'];
  $city = $request['college'];

  $sqlQuery = "insert into info (`id`,`name`,`class`,`college`) values
  (null,'$name',$class,'$city')";
  $student=$this->DBconn->prepare($sqlQuery);
  $result = $student->execute();
  if($result){
    echo "data is inserted";
  } else{
    echo "operation failed";
  }
}





}


$student = new Student($conn);
// $student->getData();
// $student->insertData();
// $student->updateData();
// $student->deleteData();


if(isset($_POST['name'])){
$student->insertwithData($_POST);
}
?>