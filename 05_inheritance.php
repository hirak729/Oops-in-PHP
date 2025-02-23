<!-- Inheritance Allows a class to inherit properties and methods from another class using extends. -->

<?php
    class UserAuth{
        public $name;
        function login($userType, $userName){
            echo "$userType logged in";
            $this->name=$userName;
        }
    }

    class Student extends UserAuth{
        function getName(){
            echo $this->name;
        }
    }

    class Teacher extends UserAuth{
        function getName(){
            echo $this->name;
        }
    }
    
    $t1 = new Teacher();
    $t1->login("teacher","Martin");
    echo "<br>";
    $t1->getName();

    $s1 = new Student();
    echo "<br>";
    $s1->login("student","Bob");
    echo "<br>";
    $s1->getName();
?>
