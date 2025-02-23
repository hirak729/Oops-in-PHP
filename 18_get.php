<?php
class User{
    public $name = "Martin";
    private $age = 20;

    function __get($property)
    {
        echo "$property property is not exist.";
    }

}

$user = new User();
// echo $user->nama;
echo $user->name;
echo "</br>";
echo $user->age;

?>