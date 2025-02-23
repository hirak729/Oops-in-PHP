<?php
    class User{
        private $name = "Martin";
        function __set($property, $value){
            if(property_exists($this,$property)){
                $this->$property=$value;
            }else{
                echo "yes";
            }
            // echo "$property property can not set with $value as this property does not exist.";
        }
        function getName(){
            echo $this->name;
        }
    }

    $user = new User();
    $user->getName();
    echo "<br>";
    $user->name="Alex";
    echo "<br>";
    $user->getName();
     
?>