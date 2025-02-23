<?php
    class Company{
        function getname(){
            echo "This is Honda Motor. ";
            return $this;
        }
        function getEmp(){
            echo "Honda has 3000 Employee. ";
            return $this;
        }
        function getTotalOffice(){
            echo "Honda has 100 office. ";
        }
    }

    $company = new Company();
    $company->getName()->getEmp()->getTotalOffice();
?>