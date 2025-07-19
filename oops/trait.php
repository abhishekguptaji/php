<?php

trait parentCompany {
  function getTotalEmp() {
    echo 500;
  }
}

trait parentCompany2 {
  function getTotalOffice() {
    echo 100;
  }
}

class Company {
  use parentCompany;
  use parentCompany2;
}

$cmp = new Company();
$cmp->getTotalEmp();      
$cmp->getTotalOffice();   
?>