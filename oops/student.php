<?php
include("../php-mysql/config.php");
class Student{
  public $DBconn;
  function __construct($conn){
    $this->DBconn=$conn;
  }
  function getData(){
    $getStudents=$this->DBconn->prepare("Select * from info");
    $getStudents->execute();
    $result=$getStudents->fetchAll();
    echo "<pre>";
    print_r($result);
    echo "<pre>";
  }
  function insertData(){
    $sqlQuery="insert into info (`id`,`name`,`class`,`college`) values
    (null,'ashraf',45,'pakistan')";
    $student=$this->DBconn->prepare($sqlQuery);
    $result=$student->execute();
    if($result){
      echo "data inserted";
    }else{
      echo "operatipn failed";
    }
  }
 function updateData(){
    $sqlQuery = "UPDATE info SET
        name = 'ashraf ali',
        class = 23,
        college = 'gniot'
        WHERE id = 5";

    $student = $this->DBconn->prepare($sqlQuery);
    $result = $student->execute();

    if ($result) {
        echo "Data updated";
    } else {
        echo "Operation failed";
    }
}
}
$student =new Student($conn);
// $student->getData();
// $student->insertData();
$student->updateData();
?>