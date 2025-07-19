<?php
include("./config.php");
echo $_GET['id'];
if(isset($_GET['id'])){
  $id=$_GET['id'];
  $getStudent=$conn->prepare("select * from info where id='$id'");

  $getStudent->execute();
  $student=$getStudent->fetchAll();

  $id=$student[0]['id'];
  $name=$student[0]['name'];
  $class=$student[0]['class'];
  $college=$student[0]['college'];
  // print_r($student);

}
?>


 <form action="" method="post">
    <input type="number" value="<?php echo $id?>" name="id" readonly/>
    <br><br>
    <input type="text" value="<?php echo $name?>" name="name"/>
    <br><br>
    <input type="number" value="<?php echo $class?>" name="class"/>
    <br><br>
    <input type="text" value="<?php echo $college?>" name="college"/>
    <br><br>
    <button value="<?php echo $id?>" name="update" >Update Student Data</button>
  </form>



  <?php
  if(isset($_POST['update'])){
    $id=$_POST['update'];

    $name=$_POST['name'];
    $class=$_POST['class'];
    $college=$_POST['college'];

    $updateStudent=$conn->prepare("update info set 
    name='$name',
    college='$college',
    class='$class'
    where id='$id'
    ");

    if($updateStudent->execute()){
      header('location:delete_edit.php');
    
    }else{
      echo "updation failed";
    } 
   
    }
  
  ?>

  