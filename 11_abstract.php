<?php
    abstract class ProductFeatures{
        abstract function productDetails();
        abstract function productImages();
        abstract function productOwnerDetails();
        function common(){
            echo "common details in products";
        }
    }

    class Uploadproduct extends ProductFeatures{
        function productDetails(){
            echo "product detail";
        }
        function productImages(){
            echo "product image";
        }
        function productOwnerDetails(){
            echo "product owner detail";
        }
        function other(){
            echo "other details in product";
        }
        
    }

    $upload = new Uploadproduct();
    $upload->productDetails();
    echo "<br>";
    $upload->productImages();
    echo "<br>";
    $upload->productOwnerDetails();
    echo "<br>";
    $upload->common();
    echo "<br>";
    $upload->other();
    echo "<br>";
?>