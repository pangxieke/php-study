<?php
class AnimalMaker
{
    public function __construct()
    {
        require_once './Chicken.php';
        require_once './Pig.php';
        $this->pig = new Pig();
        $this->chicken = new Chicken();
    }

    public function produceChicken()
    {
        $this->chicken->produce();
    }

    public function productPig()
    {
        $this->pig->produce();
    }
}