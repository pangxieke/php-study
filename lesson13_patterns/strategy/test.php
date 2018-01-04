<?php
/**
 * 策略模式
 * 策略依照使用而定
 */

function autoload($classname)
{
    require_once $classname . '.php';
}

spl_autoload_register('autoload');

$one = new StrategyOne();

//strategy one
$substanceOne = new Substance($one);
$substanceOne->doSomething();

//stragegy Two
$two = new StrategyTwo();
$substanceTwo= new Substance($two);
$substanceTwo->doSomething();