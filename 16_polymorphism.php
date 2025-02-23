<!-- Allows a child class to override a method of the parent class. -->

<?php
    class ParentClass {
        public function message() {
            return "Hello from Parent!";
        }
    }
    
    class ChildClass extends ParentClass {
        public function message() {
            return "Hello from Child!";
        }
    }
    
    $obj = new ChildClass();
    echo $obj->message(); // Output: Hello from Child!

?>