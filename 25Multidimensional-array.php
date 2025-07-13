<?php
$array=[
  ["id"=>"1","name"=>"anil","city"=>"noida","EmailNo"=>"anil@gmail.com"],
  ["id"=>"2","name"=>"abhi","city"=>"greater noida","EmailNo"=>"abhi@gmail.com"],
  ["id"=>"3","name"=>"sangam","city"=>"delhi","EmailNo"=>"sangam@gmail.com"]
];


// print_r($array);


foreach($array as $key=> $arr){
  foreach($arr as $a){
    echo $a;
    echo "<br>";
}

}
?>