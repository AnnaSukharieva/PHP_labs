<?php

class User {
    public $lastName;
    public $firstName;
    public $age;
    public $email;

    public function __construct($lastName, $firstName, $age, $email) {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->age = $age;
        $this->email = $email;
    }
}

?>
