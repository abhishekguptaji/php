<?php

$users=["anil","sam","bhasker","praveen"];
print_r($users);
array_push($users,"abhishek");
echo "</br>";

print_r($users);
echo "</br>";

// array_pop($users);
// print_r($users);

array_splice($users,-4);

print_r($users);

?>

