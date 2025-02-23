/*
Properties: Variables inside a class.
Methods: Functions inside a class that perform operations.
*/

<?php
    class Properties{
        public $name = "Martin";
        function getName(){
            echo $this->name;
        }
        function updateName($name){
            $this->name=$name;
        }
    }

    $p1 = new Properties();
    // echo $p1->name;

    $p1->updateName("Alex");
    $p1->getName();
?>