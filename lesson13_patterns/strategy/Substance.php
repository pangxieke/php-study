<?php
class Substance
{
    public function __construct(StrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    public function doSomething()
    {
        $this->strategy->doSomething();
    }
}