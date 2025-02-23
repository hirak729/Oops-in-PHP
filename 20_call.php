<?php
    class User{
        private function getName($name){
            echo "user name is $name";
        }
        function __call($method, $args){
            // echo "$method method not found.";
            // echo "<br>";
            // print_r($args);
            if(method_exists($this, $method)){
                // echo "$method is a private method";
                call_user_func_array([$this, $method], $args);
            }
            else{
                echo "$method method not found";
            }
        }
    }

    $user = new User();
    $user->getName("Alex");
?>