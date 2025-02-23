<?php
    // final class Honda{

    // }

    // class Cars extends Honda{

    // }

    // $car = new Cars();

    class Honda {
        final function companyName(){
            echo "Honda";
        }
    }

    class Cars extends Honda{
        // function companyName(){
        //     echo "HondaCity";
        // }
    }

    $car = new Cars();
    $car->companyName();


?>