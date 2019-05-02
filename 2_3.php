<?php
    // Define a class
    class User {
        // properties (attribute)
            public $name = 'Gauresh';

        // Methods (functions)
            public function sayHello() {
                return $this->name . " Says Hello <br>";
            }
    }

    // Instantiate a user object from the user class
    $user = new User();
    // echo $user->name;
    echo $user->sayHello();