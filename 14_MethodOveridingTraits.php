<?php
    trait parentCompany1{
        function getEmp(){
            echo "Total Employee: 200";
        }
    }
    trait parentCompany2{
        function getEmp(){
            echo "Total Employee: 100";
        }
    }

    class Company{
        use parentCompany1;
        use parentCompany2{
            parentCompany1::getEmp insteadOf parentCompany2;
            parentCompany2::getEmp as getEmpCompany2;
        }

        // function getEmp(){
        //     echo "Total Employee: 300";
        // }
    }

    $company = new Company();
    $company->getEmp();
    echo "<br>";
    $company->getEmpCompany2();
?>