<?php
    class Car{
        static public $carModel = "Honda city";
        static function companyName(){
            echo "Honda";
        }
    }

    // $car = new Car();
    // $car->companyName();
    Car::companyName();
    echo "<br>";
    echo Car::$carModel;
?>