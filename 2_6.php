<?php 
    class User {
        protected $name = "Gauresh";
        protected $age;
    }

    class Customer extends User {
        public function pay($amount) {
            return $this->name . " Paid $ " . $amount;
        }
    }

    $Customer1 = new Customer();

    echo $Customer1->pay(100);