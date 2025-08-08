<?php
class User {
    private function getName($name) {
        echo $name;
    }

    function __call($method, $args) {
        if (method_exists($this, $method)) {
          // echo "$method is a private method";
          call_user_func_array([$this,$method],$args);
        } else {
            echo "$method method not found";
        }
    }
}

$user = new User();
$user->getName("Abhishek");
?>