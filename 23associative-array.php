<?php
// $userDetails=[
//   "name"=>"abhishek",
//   "age"=>24,
//   "city"=>"delhi",
//   "email"=>"abc@test.com",
//   "state"=>"UP"
// ];

// // echo $userDetails["name"];

// foreach($userDetails as $key=>$data){
//   echo $data;
//   echo "<br>";
// } 

?>


<?php
$array=[
  [1,"anil","noida","anil@gmail.com"],
  [2,"abhi","greater noida","abhi@gmail.com"],
  [3,"sangam","delhi","sangam@gmail.com"]
];
for($i=0;$i<count($array);$i++){
  // print_r($array[$i]);
  for($j=0;$j<count($array[$i]);$j++){
    echo $array[$i][$j];
    echo "<br/>";
}
}
?>