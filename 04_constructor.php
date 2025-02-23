<!-- Constructor (__construct): Automatically called when an object is created.
Destructor (__destruct): Called when an object is destroyed. -->

<?php

    class ConstructorDemo{
        public $name;
        function __construct($name){
            // echo "Constructor called";
            $this->name=$name;
        }

        function displayName(){
            echo $this->name;
        }
    }

    // $cd = new ConstructorDemo(); --->called automatically 
    $cd = new ConstructorDemo("Alan Paul");
    $cd->displayName();
?>