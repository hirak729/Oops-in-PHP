<?php 
    class ContrySale{
        static public $totalSale = 1000;
        function getTotalSale(){
            echo static::$totalSale;
        }
    }

    class citySale extends ContrySale{
        static public $totalSale = 50;

    }

    $city = new citySale();
    $country = new ContrySale();

    $city->getTotalSale();
    echo "<br>";
    $country->getTotalSale();

?>