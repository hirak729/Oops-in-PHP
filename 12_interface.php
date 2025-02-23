<?php 
    interface ProductFeatures {
        function images();
        function ownerDetails();
    }

    class Products implements ProductFeatures{
        function images()
        {
         echo "product images";   
        }
        function ownerDetails()
        {
            echo "owner details";
        }
    }

    $product = new Products();
    $product->images();
    echo "<br>";
    $product->ownerDetails();
?>