<?php
$users=array("Abhishek","Sangam","Aman");

$user_Sec=["Abhis","Sangam","Aman"];

// echo $users[2];

// echo $user_Sec[1];


// for ($user=0;$user<count($users);$user++){
//   echo $users[$user]."<br>";
// }



foreach($users as $x){
  echo $x;
  if($x=="Sangam"){
    break;
  }
}
foreach($users as $x):
  echo $x;
endforeach;



?>