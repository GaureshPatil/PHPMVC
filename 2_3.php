<?php
    // Define a class
    class User {
        // properties (attribute)
            public $name;

        // Methods (functions)
            public function sayHello() {
                return $this->name . " Says Hello <br>";
            }
    }

    // Instantiate a user object from the user class
    $user = new User();
    $user->name = "gauresh";
    echo $user->name;
    echo "<br>";
    echo $user->sayHello();
    echo "<br>";

    $user2 = new User();
    $user2->name = "Pritesh";
    echo $user2->name;
    echo "<br>";
    echo $user2->sayHello();