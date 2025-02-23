<?php
    class Teacher{
        public $city = "Delhi";
        function nextExam(){
            echo "next exam is math";
        }

        function age(){
            echo "my age is 40";
        }
    }

    class Student extends Teacher{
        public $city = "Noida";
        function age(){
            echo "my age is 20";
        }
    }

    $t1 = new Teacher();
    $t1->nextExam();
    echo "<br>";
    $t1->age();
    echo "<br>";
    echo $t1->city;
    echo "<br>";
    $s1 = new Student();
    $s1->nextExam();
    echo "<br>";
    $s1->age();
    echo "<br>";
    echo $s1->city;

?>