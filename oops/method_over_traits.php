<?php

trait ParentCompany{
  function getEmp(){
    echo 200;
  }
}

trait ParentCompany1{
  function getEmp(){
    echo 100;
  }
}

class Company{
  use ParentCompany;
  use ParentCompany1{
    ParentCompany::getEmp insteadOf ParentCompany1;
     ParentCompany1::getEmp as getEmpCompany1;
  }
  //   function getEmp(){
  //   echo 100;
  // }
}

$c1 = new Company();
$c1->getEmp();
$c1->getEmpCompany1();
?>