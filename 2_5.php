<?php   
    class User {
        private $name;
        private $age;

        public function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }

        public function getName() {
            return $this->name;
        }

        public function setName($name) {
            $this->name = $name;
        }
    }

    $user1 = new User('Gauresh', 22);
    $user1->setName('Pritesh');
    echo $user1->getName();
