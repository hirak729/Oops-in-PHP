<?php
    class user{
        function __invoke(){
            echo "My name is Bob";
        }
        function getName(){
            echo "My name is Alex";
        }
    }

    $user = new User();
    $user->getName();
    echo "<br>";
    $user();
?>