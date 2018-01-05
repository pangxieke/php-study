<?php
class Person
{

    public function eat(ZoneInterface $visitor)
    {
        $visitor->eat();
    }
}