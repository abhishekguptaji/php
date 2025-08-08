<?php
class Company{
  function getName(){
    echo "This is a company name";
    return $this;
  }
  function getEmp(){
    echo ":Tata ";
    return $this;
  }
  function totalOffice(){
    echo "office :500";
  }
}
$company = new Company();
$company->getName()->getEmp()->totalOffice();

?>