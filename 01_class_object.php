/*
Class: A blueprint for creating objects.
Object: An instance of a class.
*/

<?php
    class MathOperations{
        function sum($a, $b){
            echo $a + $b;
        }

        function multi($a, $b){
            echo $a * $b;
        }
    }

    // Creating object 
    $maths = new MathOperations();
    $maths1 = new MathOperations();
    $maths2 = new MathOperations();

    $maths->sum(30, 20);
    echo "</br>";
    $maths1->sum(10, 30);
    echo "</br>";
    $maths2->sum(10, 10);
    echo "</br>";
    $maths->multi(3, 2);
    echo "</br>";
    $maths1->multi(5, 3);
    echo "</br>";
    $maths2->multi(10, 4);
    


?>