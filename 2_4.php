<?php 
    class User {
        public $name;
        public $age;

        // DEFAULT CONSTRUCTOR
        // public function __construct()
        // {
        //     echo 'Constructor Ran';
        // }

        // PARAMETERIZED CONSTRUCTOR
        public function __construct($name, $age) {
            // echo 'Constructor Ran';
            $this->name = $name;
            $this->age = $age;
        }

        public function sayHello() {
            return $this->name . " Says Hello";
        }
    }

    $user1 = new User('Gauresh', 22);
    echo $user1->name . " is " . $user1->age . " Years Old";
    