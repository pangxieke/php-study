<?php
class Landlord{
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function rentHouse($person)
    {
        echo $this->name . '将房子出租给' . $person;
    }
}