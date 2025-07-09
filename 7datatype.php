<?php
echo "This show the string type:<br/>";
$name="Greater Noida is good city.";
echo var_dump($name);

echo "<br/>This show the integer type:<br/>";
$num=10;
echo var_dump($num);

echo "<br/>This show the float type:<br/>";
$float_num=1000.0012;
echo var_dump($float_num);


echo "<br/>This show the boolean type:<br/>";
$boolean=true;
echo var_dump($boolean);

echo "<br/>This show the array type:<br/>";
$arr=["abhishek","sangam","aman"];
echo var_dump($arr);

echo "<br/>This show the null type:<br/>";
$ewmpty=null;
echo var_dump($ewmpty);


$connection =ftp_connect("127.0.0.1") or die("local host not found");

echo var_dump($connection);

?>