<?php
class ConstName {
  const COLLEGE_NAME = "GNIOT";

  function getCollegeName() {
    echo self::COLLEGE_NAME;
  }
}


$s1 = new ConstName();
$s1->getCollegeName(); 


echo ConstName::COLLEGE_NAME; 
?>