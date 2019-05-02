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

        // __get()  MAGIC METHOD
        public function __get($property) {
            if (property_exists($this, $property)) {
                return $this->$property;
            }
        }
    }

    $user1 = new User('Gauresh', 22);
    // $user1->setName('Pritesh');
    // echo $user1->getName();

    echo $user1->__get('age');