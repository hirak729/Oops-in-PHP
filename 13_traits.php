<?php

    trait parentCompany1{
        function getTotalEmp(){
            echo "Total Employee: 500";
        }
        function getTotalProjects(){
            echo "Total project: 5";
        }
    }
    trait parentCompany2{
        function getTotalOffice(){
            echo "Total Office: 10";
        }
    }

    class Company{
        use parentCompany1;
        use parentCompany2;
    }

    $cmp = new Company();
    $cmp->getTotalEmp();
    echo "<br>";
    $cmp->getTotalOffice();
    echo "<br>";
    $cmp->getTotalProjects();

    ?>