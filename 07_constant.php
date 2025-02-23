<?php
    class ConstantDemo{
        const name = "Alex";
        function getName(){
            //echo $this->name;
            // echo self::name;
            echo ConstantDemo::name;
        }
    }

    echo ConstantDemo::name;
    echo "<br>";
    $name = new ConstantDemo();
    $name->getname(); 
?>