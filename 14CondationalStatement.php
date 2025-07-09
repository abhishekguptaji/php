<!-- if condition
if else condition
else if condition
Switch statement -->
<!-- if statement -->
<?php
$age=20;
if($age<18){
  echo "Display kids contain";
}
echo "Outher the loop portion.";
?>
<!-- if else statemennt -->
<?php
$age=20;
if($age<18){
  echo "Display kids contain";
} else{
echo "Age is less than 18.";
}
?>
<!-- else if statement -->
<?php
$age = 15;
if ($age > 18) {
  echo "Display kids adult";
} else if ($age > 12 && $age < 18) {
  echo "Age is between 13 and 18.";
} else {
  echo "Nothing";
}
?>

<!-- Switch statement -->

<?php
$color="red";
switch ($color){
  case "red":
    echo "red color is my favorite";
    break;
  case "blue":
    echo "blue color is my favorite";
    break;
  case "yellow":
    echo "yellow color is my favorite";
    break;
  case "pink":
    echo "pink color is my favorite";
    break;   
  default:
  echo "this color is not matches.";     
}
?>


