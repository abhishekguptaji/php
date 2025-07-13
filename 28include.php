<?php
// include("./hello_world.php");


for($i=0;$i<10;$i++){
  include_once("./hello_world.php");
}


require("./hello_world.php");


for($i=0;$i<10;$i++){
  require_once("./hello_world.php");
}

?> 