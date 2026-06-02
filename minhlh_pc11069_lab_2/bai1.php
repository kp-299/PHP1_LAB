<?php
    class Person {
    public $name;
    public $age;
    public $address;

    public function setName($name) {
        $this->name = $name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function getInfo() {
        return  "Name: " . $this->name . "<br>" .
                "Age: " . $this->age . "<br>" .
                "Address: " . $this->address . "<br>" ;
    }

    public function canVote() {
        return $this->age >= 18;
    }

    }
