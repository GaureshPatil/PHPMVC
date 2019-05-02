<?php 
    class User {
        public $name;
        public $age;

        public function __construct()
        {
            echo 'Constructor Ran';
        }

        public function sayHello() {
            return $this->name . " Says Hello";
        }
    }

    $user1 = new User();
    